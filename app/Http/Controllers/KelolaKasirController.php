<?php

namespace App\Http\Controllers;

use App\Models\kelolaKasir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KelolaKasirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.kelolaKasir');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(kelolaKasir $kelolaKasir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $kelolaKasir = KelolaKasir::findOrFail($id); 
    return view('admin.kelolaKasir.edit', compact('kelolaKasir'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kelolaKasir $kelolaKasir)
    {
        // Validasi input dari form
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:kelola_kasirs,email,' . $kelolaKasir->id,
            'no_handphone' => 'required|numeric|min:10',
        ]);

        if ($request->hasFile('image')) {
            if ($kelolaKasir->image) {
                Storage::delete('public/' . $kelolaKasir->image);
            }

            $imagePath = $request->file('image')->store('kasir_images', 'public');
        } else {
            $imagePath = $kelolaKasir->image;
        }

        $kelolaKasir->update([
            'image' => $imagePath,
            'nama' => $request->nama,
            'email' => $request->email,
            'no_handphone' => $request->no_handphone,
        ]);

        // Redirect atau kembali ke halaman sebelumnya
        return redirect()->route('kelolaKasir.index')->with('success', 'Data kasir berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kelolaKasir $kelolaKasir)
    {
        //
    }
}
