@extends('layouts.app')

@section('title', 'Materi Video')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h2 class="text-2xl font-bold mb-6">Materi Video</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @forelse($materis->where('jenis_materi', 'video') as $materi)
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="w-full h-48 bg-black">
                    <video class="w-full h-full object-cover" controls>
                        <source src="{{ asset('storage/materis/' . $materi->file) }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="p-4 text-center">
                    <p class="text-gray-500 text-sm mb-1">{{ $materi->created_at->format('d F Y') }}</p>
                    <h3 class="font-semibold text-lg mb-2">{{ $materi->nama_materi }}</h3>
                    <p class="text-sm text-gray-600 mb-2">Pemateri: {{ $materi->nama_pemateri }}</p>
                    <a href="{{ asset('storage/materis/' . $materi->file) }}" target="_blank" class="text-blue-600 hover:underline">
                        Tonton Video
                    </a>
                </div>
            </div>
        @empty
            <p class="col-span-3 text-center text-gray-500">Belum ada materi video tersedia.</p>
        @endforelse
    </div>
</div>
@endsection
