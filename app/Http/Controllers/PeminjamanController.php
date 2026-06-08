<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Siswa;
use App\Models\Alat;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjaman = Peminjaman::with(['siswa','alat'])->get();
        return view('peminjaman.index', compact('peminjaman'));
    }

    public function create()
    {
        $siswa = Siswa::all();
        $alat = Alat::all();
        return view('peminjaman.create', compact('siswa','alat'));
    }

    public function store(Request $request)
    {
        Peminjaman::create([
            'user_id' => 1,
            'siswa_id' => $request->siswa_id,
            'alat_id' => $request->alat_id,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'jumlah_pinjam' => $request->jumlah_pinjam,
            'status' => $request->status,
        ]);

        return redirect()->route('peminjaman.index');
    }

    public function edit(Peminjaman $peminjaman)
    {
        $siswa = Siswa::all();
        $alat = Alat::all();

        return view('peminjaman.edit', compact('peminjaman','siswa','alat'));
    }

    public function update(Request $request, Peminjaman $peminjaman)
    {
        $peminjaman->update([
            'user_id' => 1,
            'siswa_id' => $request->siswa_id,
            'alat_id' => $request->alat_id,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'jumlah_pinjam' => $request->jumlah_pinjam,
            'status' => $request->status,
        ]);

        return redirect()->route('peminjaman.index');
    }

    public function destroy(Peminjaman $peminjaman)
    {
        $peminjaman->delete();

        return redirect()->route('peminjaman.index');
    }
}