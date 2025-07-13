<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function index()
    {
        $materis = Materi::latest()->paginate(10);
        return view('admin.materis.index', compact('materis'));
    }

    public function create()
    {
        return view('admin.materis.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_materi' => 'required|string|max:255',
            'nama_pemateri' => 'required|string|max:255',
            'jenis_materi' => 'required|in:video,pdf',
        ]);

        Materi::create($request->only('nama_materi', 'nama_pemateri', 'jenis_materi'));

        return redirect()->route('admin.materis.index')->with('success', 'Materi berhasil ditambahkan');
    }

    public function edit(Materi $materi)
    {
        return view('admin.materis.edit', compact('materi'));
    }

    public function update(Request $request, Materi $materi)
    {
        $request->validate([
            'nama_materi' => 'required|string|max:255',
            'nama_pemateri' => 'required|string|max:255',
            'jenis_materi' => 'required|in:video,pdf',
        ]);

        $materi->update($request->only('nama_materi', 'nama_pemateri', 'jenis_materi'));

        return redirect()->route('admin.materis.index')->with('success', 'Materi berhasil diperbarui');
    }

    public function destroy(Materi $materi)
    {
        $materi->delete();
        return redirect()->route('admin.materis.index')->with('success', 'Materi berhasil dihapus');
    }
}
