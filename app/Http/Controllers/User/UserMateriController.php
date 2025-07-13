<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Materi;
use App\Models\Quiz;
use Illuminate\Http\Request;


class UserMateriController extends Controller
{
    public function video()
    {
        $materis = Materi::where('jenis_materi', 'video')->latest()->get();
        return view('user.materi.video', compact('materis'));
    }

    public function pdf()
    {
        $materis = Materi::where('jenis_materi', 'pdf')->latest()->get();
        return view('user.materi.pdf', compact('materis'));
    }

    public function quiz()
    {
        $quizzes = Quiz::latest()->get();
        return view('user.quiz.index', compact('quizzes'));
    }
}
