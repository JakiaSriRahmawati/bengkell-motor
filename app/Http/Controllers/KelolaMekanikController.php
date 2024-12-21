<?php

namespace App\Http\Controllers;

use App\Models\kelolaMekanik;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class KelolaMekanikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $mekaniks = User::where('role', 'mekanik')->get();
        return view('admin.kelolaMekanik', compact('mekaniks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function postTambahMekanik(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
            'no_handphone' => 'required',
            'image' => 'required',
            'alamat' => 'required'
        ]);

        $user = new User();
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt('default_password');
        $user->alamat = $request->alamat;
        $user->no_handphone = $request->no_handphone;
        $user->image = $request->image->store('images');
        $user->role = 'Mekanik';
        $user->save();


        return redirect()->route('kelolaMekanik')->with('success', 'Mekanik berhasil ditambahkan');
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
    public function show(kelolaMekanik $kelolaMekanik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $mekanik = User::find($id);
        return view('admin.editPengguna', compact('mekanik'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kelolaMekanik $kelolaMekanik)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:kelola_kasirs,email,' . $kelolaMekanik->id,
            'no_handphone' => 'required|numeric|min:10',
        ]);

        if ($request->hasFile('image')) {
            if ($kelolaMekanik->image) {
                Storage::delete('public/' . $kelolaMekanik->image);
            }

            $imagePath = $request->file('image')->store('kasir_images', 'public');
        } else {
            $imagePath = $kelolaMekanik->image;
        }

        $kelolaMekanik->update([
            'image' => $imagePath,
            'nama' => $request->nama,
            'email' => $request->email,
            'no_handphone' => $request->no_handphone,
        ]);

        return redirect()->route('kelolaMekanik.index')->with('success', 'Data kasir berhasil diperbarui');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $mekanik = User::find($id);
        $mekanik->delete();
        return redirect()->route('admin.kelolaMekanik')->with('success', 'Mekanik deleted successfully');
    }
}
