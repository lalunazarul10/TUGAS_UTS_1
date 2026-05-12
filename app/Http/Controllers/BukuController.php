<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bukus = Buku::all();
        return view('buku.index', compact('bukus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required|digits:4|integer|min:1945'
        ],[
            'judul.required' => 'Judul wajib diisi',
            'penulis.required' => 'Penulis wajib diisi',
            'penerbit.required' => 'Penerbit wajib diisi',
            'tahun_terbit.required' => 'Tahun terbit wajib diisi',
            'tahun_terbit.digits' => 'Tahun harus 4 digit',
            'tahun_terbit.min' => 'Minimal tahun 1945'
        ]);

        Buku::create($request->all());

        return redirect('/buku')->with('success', 'Data buku berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $buku = Buku::findOrFail($id);
        return view('buku.show', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $buku = Buku::findOrFail($id);
        return view('buku.edit', compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required|digits:4|integer|min:1945'
        ]);

        $buku = Buku::findOrFail($id);
        $buku->update($request->all());

        return redirect('/buku')->with('success', 'Data buku berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();

        return redirect('/buku')->with('success', 'Data buku berhasil dihapus');
    }
}