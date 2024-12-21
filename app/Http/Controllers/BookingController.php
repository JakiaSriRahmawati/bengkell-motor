<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\detailTransaksi;
use App\Models\Transaksi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // Mengambil semua data booking dari tabel 'bookings'
    $bookings = Booking::all();

    // Mengecek apakah data booking kosong atau tidak
    if ($bookings->isEmpty()) {
        // Jika kosong, beri pesan atau lakukan penanganan lain
        session()->flash('error', 'Tidak ada data booking.');
    }

    // Mengirim data $bookings ke view 'admin.kelolaBooking'
    return view('admin.kelolaBooking', compact('bookings'));
    }

    public function create()
    {
        // Menampilkan form untuk booking (bisa ditambahkan jika diperlukan)
        return view('booking');
    }

    function postBooking(Request $request)
    {
        $data = $request->validate([
            'merek_motor' => 'required',
            'mesin_motor' => 'required',
            'seri_motor' => 'required',
            'no_plat' => 'required',
            'jenis_service' => 'required',
            'tgl_service' => 'required|date',
            'deskripsi' => 'required',
            'status_service' => 'required',
            'status_pembayaran' => 'required',
            'status_orderan' => 'required',
        ]);
    
        $pesan = new Booking();
        $pesan->user_id = Auth::user()->id;
        $pesan->merek_motor = $request->merek_motor;
        $pesan->mesin_motor = $request->mesin_motor;
        $pesan->seri_motor = $request->seri_motor;
        $pesan->no_plat = $request->no_plat;
        $pesan->tgl_service = $request->tgl_service;
        $pesan->deskripsi = $request->deskripsi;
        $pesan->status_service = $request->status_service;
        $pesan->status_pembayaran = $request->status_pembayaran;
        $pesan->status_orderan = $request->status_orderan;
        $pesan->save();
        
        return redirect()->route('homePengguna')->with('success', 'Data has been saved successfully!');
    }

    function postVerify($id){
        $pesan = Booking::find($id);

        $transaksi = new Transaksi();
        $transaksi->user_id = Auth::id();
        $transaksi->booking_id = $pesan->id;
        $transaksi->tgl_transaksi = Carbon::now();
        $transaksi->save();
    }

public function store(Request $request)
{
        dd($request);
        // Validasi input form
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'nomor_telepon' => 'required|string|max:15',
            'jenis_layanan' => 'required|string|max:255',
            'tanggal_service' => 'required|date',
            'catatan_tambahan' => 'nullable|string',
        ]);

        // if ($validatedData->fails()) {
        //     return redirect()->route('booking');
        // }

        // Simpan data booking ke tabel bookings
        $booking = Booking::create($validatedData);
        dd($booking);
        // Redirect ke halaman profil dengan ID booking yang baru
        // return redirect()->route('profil', ['id' => $booking->id]);
}
    /**
     * Display the specified resource.
     */
public function show($id)
{
        // Mengambil data booking berdasarkan ID
        $booking = Booking::findOrFail($id);

        // Mengirim data booking ke view
        return view('booking.show', compact('booking'));
}

    


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }
    public function detailBooking(){
        $dp = detailTransaksi::all();
        $dp = detailTransaksi::with('User')->get();
        $dp = detailTransaksi::with('barang')->get();

        return view('admin.detailTransaksi',compact('dp'));
    }
}
