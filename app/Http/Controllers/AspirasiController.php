<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use Illuminate\Http\Request;

class AspirasiController extends Controller
{
    // --- FUNGSI PUBLIK ---
    // Menyimpan aspirasi yang dikirim siswa dari halaman utama
    public function store(Request $request)
    {
        Aspirasi::create([
            'nama' => $request->nama,
            'pesan' => $request->pesan,
        ]);
        
        return back()->with('success', 'Aspirasi berhasil dikirim! Terima kasih.');
    }

    // --- FUNGSI ADMIN ---
    // Menampilkan daftar aspirasi di Dasbor Admin
    public function index()
    {
        // Mengambil semua data aspirasi, diurutkan dari yang paling baru
        $aspirasi = Aspirasi::latest()->get();
        return view('aspirasi.index', compact('aspirasi'));
    }

    // Menghapus aspirasi oleh Admin
    public function destroy($id)
    {
        Aspirasi::findOrFail($id)->delete();
        return back()->with('success', 'Aspirasi berhasil dihapus!');
    }
}