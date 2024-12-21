<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangs = Barang::all();  
        return view('admin.barang', compact('barangs'));   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tambahbarang');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'nama_barang' => 'required|string|max:255',
        'deskripsi' => 'required|string|max:1000',
        'harga' => 'required|numeric|min:0',
        'stok' => 'required|integer|min:0',
        'kategori' => 'required|string|max:100',
        'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
    ]);

    if ($request->hasFile('gambar')) {
        $gambarPath = $request->file('gambar')->store('images/barang', 'public');
    }

    // Menyimpan data barang ke database
    Barang::create([
        'nama_barang' => $request->nama_barang,
        'deskripsi' => $request->deskripsi,
        'harga' => $request->harga,
        'stok' => $request->stok,
        'kategori' => $request->kategori,
        'gambar' => $gambarPath,
    ]);

    // Redirect setelah sukses
    return redirect()->route('barang.create')->with('success', 'Barang berhasil ditambahkan.');
}


    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        //
    }
}
