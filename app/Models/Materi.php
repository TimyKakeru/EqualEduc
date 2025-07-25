<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;

    // Nama tabel (jika tidak sama dengan plural dari nama model)
    protected $table = 'materis';

    // Kolom yang bisa diisi secara mass-assignment
    protected $fillable = [
        'nama_materi',
        'nama_pemateri',
        'jenis_materi',
    ];
}
