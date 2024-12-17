<?php

namespace App\Http\Controllers;
use App\Models\Artikel;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\File;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $d = artikel::all();
        $data = [
            'images' =>  File::allFiles(storage_path('app/public/images/depan'))
        ];
        return view('pengguna.index', compact('data','d'));
    }

    public function about() : View {
        $data = [
            'images' =>  File::allFiles(storage_path('app/public/images/about'))
        ];
        return view('about', compact('data'));
    }
    public function profil() : View 
    {
        return view('profil');
    }
    public function dashboard() : View 
    {
        return view('dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
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
    public function show(Pengguna $pengguna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengguna $pengguna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengguna $pengguna)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengguna $pengguna)
    {
        //
    }
}
