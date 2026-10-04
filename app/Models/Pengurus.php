<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    use HasFactory;

    // Kolom yang diizinkan untuk diisi dari form website
    protected $fillable = [
        'nama_lengkap', 
        'jabatan', 
        'bidang', 
        'foto'
    ];
}