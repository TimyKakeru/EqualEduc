@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
<section class="p-8 text-center">
    <h2 class="text-3xl font-bold mb-4">DASHBOARD ADMIN</h2>
    <p>Selamat datang, {{ Auth::user()->name }} (Admin)</p>

    <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="bg-white shadow p-4 rounded">📊 Statistik Pengguna</div>
        <div class="bg-white shadow p-4 rounded">👥 Manajemen User</div>
    </div>
</section>
@endsection
