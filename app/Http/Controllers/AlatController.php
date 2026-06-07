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

    public function show(Alat $alat)
    {
        //
    }

    public function edit(Alat $alat)
    {
        //
    }

    public function update(Request $request, Alat $alat)
    {
        //
    }

    public function destroy(Alat $alat)
    {
        //
    }
}