@extends('layouts.app')

@section('title', 'Tambah Materi')

@section('content')
<div class="max-w-xl mx-auto p-8">
    <h2 class="text-2xl font-bold mb-6">➕ Tambah Materi</h2>

    <form action="{{ route('admin.materis.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label class="block font-semibold mb-1">Nama Materi</label>
            <input type="text" name="nama_materi" class="w-full border rounded p-2" required>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Nama Pemateri</label>
            <input type="text" name="nama_pemateri" class="w-full border rounded p-2" required>
        </div>

        <div class="mb-6">
            <label class="block font-semibold mb-1">Jenis Materi</label>
            <select name="jenis_materi" class="w-full border rounded p-2" required>
                <option value="video">Video</option>
                <option value="pdf">PDF</option>
            </select>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
        <a href="{{ route('admin.materis.index') }}" class="ml-4 text-gray-600 hover:underline">Batal</a>
    </form>
</div>
@endsection
