<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    protected $table = 'pengembalian';

    protected $fillable = [
        'peminjaman_id',
        'tanggal_kembali',
        'jumlah_kembali',
        'kondisi_kembali'
    ];

    // 🔥 TAMBAHAN PENTING INI
    public function peminjaman()
    {
        return $this->belongsTo(\App\Models\Peminjaman::class, 'peminjaman_id');
    }
}