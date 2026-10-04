<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspirasi extends Model
{
    use HasFactory;

    // Kolom yang diizinkan untuk diisi dari website
    protected $fillable = ['nama', 'pesan'];
}