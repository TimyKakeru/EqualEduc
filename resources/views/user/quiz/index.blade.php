@extends('layouts.app')

@section('title', 'Daftar Quiz')

@section('content')
<div class="max-w-4xl mx-auto p-6 bg-white rounded shadow">
    <div class="flex justify-between items-center mb-4">
        <h3 class="text-2xl font-semibold">📄 Daftar Quiz</h3>

        @auth
            @if(Auth::user()->role === 'admin')
                <a href="{{ route('quiz.create') }}"
                   class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded transition">
                    + Tambah Quiz
                </a>
            @endif
        @endauth
    </div>

    @if($quizzes->isEmpty())
        <p class="text-gray-600">Belum ada quiz yang tersedia.</p>
    @else
        <ul class="space-y-3">
            @foreach($quizzes as $quiz)
                <li class="p-4 bg-gray-100 rounded shadow-sm hover:bg-gray-200 transition">
                    <h4 class="font-bold text-lg">{{ $quiz->judul }}</h4>
                    <p class="text-gray-600">{{ $quiz->deskripsi }}</p>
                </li>
            @endforeach
        </ul>
    @endif
</div>
@endsection
