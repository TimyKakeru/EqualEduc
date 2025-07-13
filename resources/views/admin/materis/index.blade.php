@extends('layouts.app')

@section('title', 'Manajemen Materi')

@section('content')
<div class="p-8">
    <h2 class="text-2xl font-bold mb-6">📚 Daftar Materi</h2>

    @if (session('success'))
        <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('admin.materis.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        ➕ Tambah Materi
    </a>

    <table class="w-full mt-6 table-auto border border-gray-200">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-3 border">#</th>
                <th class="p-3 border">Nama Materi</th>
                <th class="p-3 border">Pemateri</th>
                <th class="p-3 border">Jenis</th>
                <th class="p-3 border">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($materis as $index => $materi)
                <tr class="text-center">
                    <td class="p-3 border">{{ $materis->firstItem() + $index }}</td>
                    <td class="p-3 border">{{ $materi->nama_materi }}</td>
                    <td class="p-3 border">{{ $materi->nama_pemateri }}</td>
                    <td class="p-3 border capitalize">{{ $materi->jenis_materi }}</td>
                    <td class="p-3 border">
                        <a href="{{ route('admin.materis.edit', $materi->id) }}" class="text-blue-600 hover:underline">Edit</a> |
                        <form action="{{ route('admin.materis.destroy', $materi->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus materi ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="p-4 text-center text-gray-500">Belum ada materi</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-4">
        {{ $materis->links() }}
    </div>
</div>
@endsection
