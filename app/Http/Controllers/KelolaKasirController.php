<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Bukti;
use App\Models\kelolaKasir;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Expr\Cast\Bool_;

class KelolaKasirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $kasirs = User::where('role', 'kasir')->get();
        return view('admin.kelolaKasir', compact('kasirs'));
    }


    public function confirm($id)
    {
        $p = Booking::with('User')->get();
        $pesan = Booking::find($id);
        // $o = pesan::where('user_id', $id)->first();
        return view('Kasir.confirm', compact('pesan', 'p'));
    }
    public function editconfirm(Booking $Booking, Request $request)
    {
        $data = $request->validate([
            'status_pembayaran' => 'required|string'
        ]);
        $Booking->update($data);
        dump($data);
        return redirect()->route('kelolaKasir', ['id' => $Booking->user_id])->with('notifikasi', 'berhasil dikonifrmasi');
    }

    public function postTambahKasir(Request $request)
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

        return redirect()->route('kelolaPengguna')->with('success', 'Pengguna berhasil ditambahkan.');
    }
    

    function bayar(Request $request){
        $request->validate([
            'foto' =>  'required | image | mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $pesan = Booking::findOrFail( $request->pesan_id );
        
        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $path = $file->store('public/images');
            $foto = basename($path);
        } else {
            return redirect()->route('image')->withErrors('Gagal Mengunggah Foto');
        }
        $data = Bukti::create([
            'booking_id' => $request->booking_id,
            'foto' => $request->foto,
            'user_id' => Auth::id()
        ]);

        $pesan->update(['status_pembayaran' => 'Sedang dikonrifmasi']);
        return redirect()->route('image')->with('notifikasi', 'Berhasil Mengupload Bukti, Menunggu dikonfirmasi Kasir');
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
        $kasir = User::find($id);
        return view('admin.editPengguna', compact('kasir'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $id,
        'no_handphone' => 'required|string|max:15',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Pastikan validasi gambar
    ]);

    $kelolaKasir = KelolaKasir::findOrFail($id);
    
    // Jika ada gambar baru, proses upload gambar dan hapus gambar lama
    if ($request->hasFile('image')) {
        // Hapus gambar lama
        if ($kelolaKasir->image && Storage::exists('public/' . $kelolaKasir->image)) {
            Storage::delete('public/' . $kelolaKasir->image);
        }

        // Simpan gambar baru
        $imagePath = $request->file('image')->store('images/kelolaKasir', 'public');
        $kelolaKasir->image = $imagePath;
    }

    // Update data lainnya
    $kelolaKasir->nama = $request->nama;
    $kelolaKasir->email = $request->email;
    $kelolaKasir->no_handphone = $request->no_handphone;
    
    $kelolaKasir->save();

    return redirect()->route('kelolaKasir.index')->with('success', 'Data kasir berhasil diperbarui.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kasir = User::find($id);
        $kasir->delete();
        return redirect()->route('admin.kelolaKasir')->with('success', 'Kasir deleted successfully');
    }
}
