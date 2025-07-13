@extends('layouts.app')

@section('title', 'Edit Materi')

@section('content')
<div class="max-w-xl mx-auto p-8">
    <h2 class="text-2xl font-bold mb-6">✏️ Edit Materi</h2>

    <form action="{{ route('admin.materis.update', $materi->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block font-semibold mb-1">Nama Materi</label>
            <input type="text" name="nama_materi" class="w-full border rounded p-2" value="{{ $materi->nama_materi }}" required>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Nama Pemateri</label>
            <input type="text" name="nama_pemateri" class="w-full border rounded p-2" value="{{ $materi->nama_pemateri }}" required>
        </div>

        <div class="mb-6">
            <label class="block font-semibold mb-1">Jenis Materi</label>
            <select name="jenis_materi" class="w-full border rounded p-2" required>
                <option value="video" {{ $materi->jenis_materi == 'video' ? 'selected' : '' }}>Video</option>
                <option value="pdf" {{ $materi->jenis_materi == 'pdf' ? 'selected' : '' }}>PDF</option>
            </select>
        </div>

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Update</button>
        <a href="{{ route('admin.materis.index') }}" class="ml-4 text-gray-600 hover:underline">Batal</a>
    </form>
</div>
@endsection
