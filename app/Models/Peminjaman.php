<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa;
use App\Models\Alat;

class Peminjaman extends Model
{
    protected $table = 'peminjaman';

    protected $fillable = [
        'user_id',
        'siswa_id',
        'alat_id',
        'tanggal_pinjam',
        'jumlah_pinjam',
        'status'
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function alat()
    {
        return $this->belongsTo(Alat::class);
    }
}