<?php

namespace App\Http\Controllers;

use App\Models\kelolaUser;
use Illuminate\Http\Request;

class KelolaUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.kelolaUser');
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
    public function show(kelolaUser $kelolaUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kelolaUser $kelolaUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kelolaUser $kelolaUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kelolaUser $kelolaUser)
    {
        //
    }
}
