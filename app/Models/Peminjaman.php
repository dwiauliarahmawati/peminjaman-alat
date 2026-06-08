<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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

    // relasi ke siswa
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }

    // relasi ke alat
    public function alat()
    {
        return $this->belongsTo(Alat::class, 'alat_id');
    }

    // relasi ke pengembalian
    public function pengembalian()
    {
        return $this->hasOne(Pengembalian::class);
    }
}