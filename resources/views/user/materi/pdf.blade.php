@extends('layouts.app')

@section('title', 'Materi Pembelajaran (PDF)')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-6">
    <h2 class="text-2xl font-bold mb-6">📚 Materi Pembelajaran</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($materis as $materi)
            <div class="bg-white rounded-lg shadow hover:shadow-md transition overflow-hidden">
                <img src="{{ asset('images/kesetaraan_gender.jpg') }}" alt="{{ $materi->nama_materi }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <p class="text-sm text-gray-500">{{ \Carbon\Carbon::parse($materi->created_at)->format('d F Y') }}</p>
                    <h3 class="text-lg font-semibold mt-1">{{ $materi->nama_materi }}</h3>
                    <p class="text-sm text-gray-700 mt-1">👤 {{ $materi->nama_pemateri }}</p>
                    <p class="text-sm text-gray-600 mt-1 capitalize">📄 {{ $materi->jenis_materi }}</p>
                    <a href="#" class="inline-block mt-3 text-blue-600 hover:underline">Baca selengkapnya</a>
                </div>
            </div>
        @empty
            <p class="col-span-3 text-center text-gray-500">Belum ada materi tersedia.</p>
        @endforelse
    </div>
</div>
@endsection
