<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PenggunaController extends Controller
{
    /**
     * Menampilkan semua pengguna.
     */
    public function index()
    {
        $users = User::all();
        return view('pengguna.index', compact('users')); 
    }

    public function about()
    {
        return view('about');  
    }
    
    /**
     * Menyimpan pengguna baru.
     */
    // public function store(Request $request)
    // {
    //     $validated = $request->validate([
    //         'full_name' => 'required|string|max:255',
    //         'address' => 'required|string|max:500',
    //         'email' => 'required|email|unique:users,email',
    //         'password' => 'required|string|min:8|confirmed', // Validasi konfirmasi password
    //         'phone' => 'required|string|max:15',
    //         'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    //     ]);

    //     // Simpan file gambar jika ada
    //     $imagePath = null;
    //     if ($request->hasFile('image')) {
    //         $imagePath = $request->file('image')->store('images', 'public');
    //     }

    //     // Buat user baru
    //     $user = User::create([
    //         'full_name' => $validated['full_name'],
    //         'address' => $validated['address'],
    //         'email' => $validated['email'],
    //         'password' => Hash::make($validated['password']), // Enkripsi password
    //         'phone' => $validated['phone'],
    //         'image' => $imagePath,
    //     ]);

    //     return response()->json([
    //         'message' => 'User created successfully',
    //         'user' => $user,
    //     ], 201);
    // }

    /**
     * Menampilkan detail pengguna berdasarkan ID.
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    /**
     * Memperbarui data pengguna.
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

         // Validasi input dari request
    $validated = $request->validate([
        'full_name' => 'sometimes|string|max:255',
        'address' => 'sometimes|string|max:500',
        'email' => 'sometimes|email|unique:users,email,' . $user->id,
        'password' => 'nullable|string|min:8|confirmed',
        'phone' => 'sometimes|string|max:15',
        'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    // Periksa jika ada file gambar yang diupload
    if ($request->hasFile('image')) {
        // Menghapus gambar lama jika ada
        if ($user->image && \Storage::exists('public/' . $user->image)) {
            \Storage::delete('public/' . $user->image);
        }

        // Menyimpan gambar baru
        $imagePath = $request->file('image')->store('images', 'public');
        $user->image = $imagePath; // Menyimpan path gambar ke database
    }

    // Update data user
    $user->update([
        'full_name' => $validated['full_name'] ?? $user->full_name,
        'address' => $validated['address'] ?? $user->address,
        'email' => $validated['email'] ?? $user->email,
        'password' => isset($validated['password']) ? Hash::make($validated['password']) : $user->password,
        'phone' => $validated['phone'] ?? $user->phone,
    ]);

    // Mengembalikan respon
    return response()->json([
        'message' => 'User updated successfully',
        'user' => $user,
    ]);
    }

    /**
     * Menghapus pengguna.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('kelolaMekanik')->with('notifikasi', 'Hapus Berhasil');
    }


    public function create(Request $request)
    {
        //
    }

    
    
    
}
