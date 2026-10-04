<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PengurusController extends Controller
{
   // --- FUNGSI PUBLIK ---
    public function publik(Request $request)
    {
        $bidangAktif = $request->query('bidang');
        
        if ($bidangAktif) {
            // Kalau pengunjung klik kartu, tampilkan anggota bidang tersebut
            $pengurus = Pengurus::where('bidang', $bidangAktif)->get();
        } else {
            // Kalau baru buka halaman, kosongkan karena kita mau nampilin kartu dulu
            $pengurus = collect();
        }
        
        return view('pengurus.publik', compact('pengurus', 'bidangAktif'));
    }
    // --- TAMPILAN ADMIN (Dasbor CRUD) ---
    public function index(Request $request)
    {
        // Jika kartu bidang di dasbor diklik, filter datanya
        if ($request->has('filter')) {
            $pengurus = Pengurus::where('bidang', $request->filter)->get();
        } else {
            // Jika tidak, tampilkan semua
            $pengurus = Pengurus::all();
        }
        
        return view('pengurus.index', compact('pengurus'));
    }

    public function create()
    {
        return view('pengurus.create');
    }

    public function store(Request $request)
    {
        $namaFoto = null;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $namaFoto = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('foto_pengurus'), $namaFoto);
        }

        Pengurus::create([
            'nama_lengkap' => $request->nama_lengkap,
            'jabatan' => $request->jabatan,
            'bidang' => $request->bidang,
            'foto' => $namaFoto,
        ]);

        return redirect()->route('pengurus.index')->with('success', 'Data pengurus berhasil ditambahkan!');
    }

    public function edit(Pengurus $penguru) 
    {
        return view('pengurus.edit', compact('penguru'));
    }

    public function update(Request $request, Pengurus $penguru)
    {
        $namaFoto = $penguru->foto;
        if ($request->hasFile('foto')) {
            if ($namaFoto && File::exists(public_path('foto_pengurus/' . $namaFoto))) {
                File::delete(public_path('foto_pengurus/' . $namaFoto));
            }
            $file = $request->file('foto');
            $namaFoto = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('foto_pengurus'), $namaFoto);
        }

        $penguru->update([
            'nama_lengkap' => $request->nama_lengkap,
            'jabatan' => $request->jabatan,
            'bidang' => $request->bidang,
            'foto' => $namaFoto,
        ]);

        return redirect()->route('pengurus.index')->with('success', 'Data berhasil diupdate!');
    }

    public function destroy(Pengurus $penguru)
    {
        if ($penguru->foto && File::exists(public_path('foto_pengurus/' . $penguru->foto))) {
            File::delete(public_path('foto_pengurus/' . $penguru->foto));
        }
        $penguru->delete();
        return redirect()->route('pengurus.index')->with('success', 'Data berhasil dihapus!');
    }
}