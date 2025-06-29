<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome'); // halaman awal (public)
});

// AUTH
Auth::routes(['register' => false]); // Menonaktifkan register

Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard')->middleware(['auth', 'is_admin']);

Route::get('/user/dashboard', [UserController::class, 'index'])->name('user.dashboard')->middleware(['auth']);

Route::get('/redirect-role', function () {
    if (auth()->user()->role === 'admin') {
        return redirect()->route('admin.dashboard');
    }
    return redirect()->route('user.dashboard');
});
Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/', [LandingController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth']);

Route::middleware(['auth'])->group(function () {
    Route::resource('quiz', QuizController::class)->only(['index', 'create', 'store']);
});


require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/materi', [MateriController::class, 'index'])->name('materi.index');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');