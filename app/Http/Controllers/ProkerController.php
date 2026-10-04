<?php

namespace App\Http\Controllers;

use App\Models\Proker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProkerController extends Controller
{
    // Menampilkan halaman manajemen proker di Admin
    public function index()
    {
        $prokers = Proker::latest()->get();
        return view('proker.index', compact('prokers'));
    }

    // Menyimpan data dan foto proker baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_proker' => 'required',
            'deskripsi' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('foto')) {
            $gambar = $request->file('foto');
            $namaGambar = time() . '_' . $gambar->getClientOriginalName();
            $gambar->move(public_path('foto_proker'), $namaGambar);
            $data['foto'] = $namaGambar;
        }

        Proker::create($data);
        return back()->with('success', 'Program Kerja berhasil ditambahkan!');
    }

    // Menghapus proker beserta fotonya
    public function destroy($id)
    {
        $proker = Proker::findOrFail($id);
        
        // Hapus file foto dari folder jika ada
        if ($proker->foto && File::exists(public_path('foto_proker/' . $proker->foto))) {
            File::delete(public_path('foto_proker/' . $proker->foto));
        }
        
        $proker->delete();
        return back()->with('success', 'Program Kerja berhasil dihapus!');
    }
}