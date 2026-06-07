<?php

namespace App\Http\Controllers;

use App\Models\Pengembalian;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    public function index()
    {
        $pengembalian = Pengembalian::all();
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

    public function show(Pengembalian $pengembalian)
    {
        //
    }

    public function edit(Pengembalian $pengembalian)
    {
        //
    }

    public function update(Request $request, Pengembalian $pengembalian)
    {
        //
    }

    public function destroy(Pengembalian $pengembalian)
    {
        //
    }
}