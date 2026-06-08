<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use Illuminate\Http\Request;

class AlatController extends Controller
{
    public function index()
    {
        $alat = Alat::all();
        return view('alat.index', compact('alat'));
    }

    public function create()
    {
        return view('alat.create');
    }

    public function store(Request $request)
    {
        Alat::create([
            'nama_alat' => $request->nama_alat,
            'kategori' => $request->kategori,
            'jumlah' => $request->jumlah,
            'kondisi' => $request->kondisi,
        ]);

        return redirect()->route('alat.index');
    }

    public function edit(Alat $alat)
    {
        return view('alat.edit', compact('alat'));
    }

    public function update(Request $request, Alat $alat)
    {
        $alat->update([
            'nama_alat' => $request->nama_alat,
            'kategori' => $request->kategori,
            'jumlah' => $request->jumlah,
            'kondisi' => $request->kondisi,
        ]);

        return redirect()->route('alat.index');
    }

    public function destroy(Alat $alat)
    {
        $alat->delete();

        return redirect()->route('alat.index');
    }
}