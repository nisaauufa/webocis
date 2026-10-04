<?php

use App\Http\Controllers\ProkerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\AspirasiController;
use Illuminate\Support\Facades\Route;
use App\Models\Proker;

// --- JALUR PUBLIK (Bisa diakses semua siswa) ---
Route::get('/', function () {
    // Ambil 3 proker terbaru dari database
    $prokers = Proker::latest()->take(3)->get();
    return view('welcome', compact('prokers'));
});
Route::get('/pengurus-kabinet', [PengurusController::class, 'publik'])->name('pengurus.publik');
Route::post('/aspirasi', [AspirasiController::class, 'store'])->name('aspirasi.store');


// --- JALUR ADMIN (Wajib Login) ---
Route::middleware(['auth', 'verified'])->group(function () {
    // Dasbor Admin
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // CRUD Pengurus (Semua jalur tambah/edit/hapus otomatis terbuat!)
    Route::resource('pengurus', PengurusController::class);
    
    // Lihat & Hapus Aspirasi
    Route::get('/admin/aspirasi', [AspirasiController::class, 'index'])->name('aspirasi.index');
    Route::delete('/admin/aspirasi/{id}', [AspirasiController::class, 'destroy'])->name('aspirasi.destroy');

    // Profil Admin Bawaan Breeze
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Manajemen Program Kerja
    Route::get('/admin-proker', [ProkerController::class, 'index'])->name('proker.index');
    Route::post('/admin-proker', [ProkerController::class, 'store'])->name('proker.store');
    Route::delete('/admin-proker/{id}', [ProkerController::class, 'destroy'])->name('proker.destroy');
    
    });

require __DIR__.'/auth.php';