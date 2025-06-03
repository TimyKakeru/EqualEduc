@extends('layouts.app') {{-- sesuaikan dengan layout kamu --}}

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Daftar Materi</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-hover shadow-sm">
            <thead class="table-dark text-center">
                <tr>
                    <th>ID</th>
                    <th>Nama Materi</th>
                    <th>Nama Pemateri</th>
                    <th>Jenis Materi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($materis as $materi)
                    <tr>
                        <td class="text-center">{{ $materi->id }}</td>
                        <td>{{ $materi->nama_materi }}</td>
                        <td>{{ $materi->nama_pemateri }}</td>
                        <td class="text-capitalize text-center">{{ $materi->jenis_materi }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">Belum ada data materi.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
