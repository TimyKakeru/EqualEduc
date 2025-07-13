@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
<section class="p-8">
    <h2 class="text-3xl font-bold mb-4 text-center">📋 DASHBOARD ADMIN</h2>
    <p class="text-center mb-6">Selamat datang, <strong>{{ Auth::user()->name }}</strong> (Admin)</p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">

        <a href="{}" class="bg-white shadow-md p-6 rounded-lg hover:bg-gray-100 transition">
            <div class="text-4xl mb-2">👥</div>
            <div class="text-lg font-semibold">Manajemen User</div>
        </a>

        <a href="{{ route('admin.materis.index') }}" class="bg-white shadow-md p-6 rounded-lg hover:bg-gray-100 transition">
            <div class="text-4xl mb-2">📚</div>
            <div class="text-lg font-semibold">Manajemen Materi</div>
        </a>

        <div class="bg-white shadow-md p-6 rounded-lg">
            <div class="text-4xl mb-2">📊</div>
            <div class="text-lg font-semibold">Statistik Pengguna</div>
            <p class="text-sm text-gray-500 mt-2">Data ringkas pengguna terdaftar.</p>
        </div>

    </div>
</section>
@endsection
