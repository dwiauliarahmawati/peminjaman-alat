<?php

namespace App\Http\Controllers;

use App\Models\Pengembalian;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    public function index()
    {
        $pengembalian = Pengembalian::with('peminjaman.siswa','peminjaman.alat')->get();
        return view('pengembalian.index', compact('pengembalian'));
    }

    public function create()
    {
        $peminjaman = Peminjaman::all();
        return view('pengembalian.create', compact('peminjaman'));
    }

    public function store(Request $request)
    {
        Pengembalian::create([
            'peminjaman_id' => $request->peminjaman_id,
            'tanggal_kembali' => $request->tanggal_kembali,
            'jumlah_kembali' => $request->jumlah_kembali,
            'kondisi_kembali' => $request->kondisi_kembali,
        ]);

        return redirect()->route('pengembalian.index');
    }

    public function edit(Pengembalian $pengembalian)
    {
        $peminjaman = Peminjaman::all();
        return view('pengembalian.edit', compact('pengembalian','peminjaman'));
    }

    public function update(Request $request, Pengembalian $pengembalian)
    {
        $pengembalian->update([
            'peminjaman_id' => $request->peminjaman_id,
            'tanggal_kembali' => $request->tanggal_kembali,
            'jumlah_kembali' => $request->jumlah_kembali,
            'kondisi_kembali' => $request->kondisi_kembali,
        ]);

        return redirect()->route('pengembalian.index');
    }

    public function destroy(Pengembalian $pengembalian)
    {
        $pengembalian->delete();

        return redirect()->route('pengembalian.index');
    }
}