<?php

namespace App\Http\Controllers;

use App\Models\detailTransaksi;
use Illuminate\Http\Request;

class DetailTransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dp = detailTransaksi::all();
        $dp = detailTransaksi::with(['User', 'barang'])->get();
        // $dp = transaksi::with(['pesan'])->get();

        return view('admin.detailTransaksi', compact('dp'));
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
    public function show(detailTransaksi $detailTransaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(detailTransaksi $detailTransaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, detailTransaksi $detailTransaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(detailTransaksi $detailTransaksi)
    {
        //
    }
}
