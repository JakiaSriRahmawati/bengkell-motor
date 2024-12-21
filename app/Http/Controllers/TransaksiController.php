<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Booking;
use App\Models\Bukti;
use App\Models\detailTransaksi;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function detailTransaksi(Request $request)
    {
        // Validasi data transaksi
        $request->validate([
            'transaksi_id' => 'required|exists:barangs,id',
            'pesan_id' => 'required|exists:barangs,id',
            'barang_id' => 'required|exists:barangs,id',
            'jumlah' => 'required|integer|min:1',
        ]);

        // Buat transaksi baru
        $transaksi = new detailTransaksi();
        $transaksi->transaksi_id = $request->transaksi_id;
        $transaksi->pesan_id = $request->pesan_id;
        $transaksi->barang_id = $request->barang_id;
        $transaksi->jumlah = $request->jumlah;
        $transaksi->save();

        // Kurangi stok barang
        $barang = Barang::findOrFail($request->barang_id);
        $barang->kurangiStok($request->jumlah);

        return redirect()->route('homeMekanik')->with('success', 'Transaksi berhasil ditambahkan dan stok barang dikurangi.');
    }


    public function bukti($id)
    {
          // Mengambil pesan berdasarkan ID
    $pesan = Booking::findOrFail($id);
    
    // Mengambil detail transaksi yang terkait dengan pesan
    $detail = detailTransaksi::with(['barang'])->where('pesan_id', $id)->get();
        // Menghitung total harga
    
        return view('Kasir.bukti', compact('pesan', 'detail'));
    }

    public function bayar(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $pesan = Booking::where('id', $request->pesan_id)->first();

        $bukti = Bukti::create([
            'pesan_id' => $request->pesan_id,
            'foto' => $request->file('foto')->store('img'),
            'user_id' => Auth::id()
        ]);

        $pesan->update(['status_pembayaran' => 'Sedang dikonfirmasi']);

        $user = Auth::user();
        return redirect()->route('profil', $user->id)->with('notifikasi', 'Berhasil Mengupload Bukti, Menunggu dikonfirmasi Kasir');
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
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }
}
