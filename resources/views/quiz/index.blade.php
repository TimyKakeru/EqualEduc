@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Daftar Quiz</h3>
    <a href="{{ route('quiz.create') }}" class="btn btn-primary mb-3">Tambah Quiz</a>

    @if($quizzes->isEmpty())
        <p>Belum ada quiz.</p>
    @else
        <ul class="list-group">
            @foreach($quizzes as $quiz)
                <li class="list-group-item">
                    <strong>{{ $quiz->judul }}</strong><br>
                    <small>{{ $quiz->deskripsi }}</small>
                </li>
            @endforeach
        </ul>
    @endif
</div>
@endsection
