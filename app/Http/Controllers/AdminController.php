<?php

namespace App\Http\Controllers;

use App\Services\ServiceBulananChart;
use App\Models\Admin;
use App\Models\Booking;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $d = User::where('role', 'Pengguna')->get();

        return view('admin.homeAdmin', compact('d'));    
    }

    public function kelolaBooking()
    {
        $p = Booking::all();
        $p = Booking::with('User')->get();

        return view('admin.kelolaBooking', compact('p'));
    }


    public function postLogin(Request $request, User $user)
    {
        $data = $request->validate([
            "email" => "required",
            "password" => "required",
        ]);

        // dd(Auth::attempt($data));
        if (Auth::attempt($data)) {
            // pengguna yang sedang login
            $user = Auth::user();
            // $role = $user->role;


            if ($user->role == 'Admin') {
                return redirect()->route('homeAdmin')->with('notifikasi', 'Selamat Datang, ' . $user->name);
            } elseif ($user->role == 'Pengguna') {
                return redirect()->route('homePengguna')->with('notifikasi', 'Selamat Datang, ' . $user->name);
            } elseif ($user->role == 'Owner') {
                return redirect()->route('homeOwner')->with('notifikasi', 'Selamat Datang, ' . $user->name);
            } 
            // elseif ($user->role == 'Mekanik') {
            //     // Log::info('Redirecting to homeMekanik');
            //     return redirect()->route('homeMekanik', ['id' => $user->id])->with('notifikasi', 'Selamat Datang, ' . $user->name);
            // } elseif ($user->role == 'kasir') {
            //     return redirect()->route('homeKasir', ['id' => $user->id])->with('notifikasi', 'Selamat Datang, ' . $user->name);
            // } 
            else {
                return redirect()->route('login')->with('notifikasi', 'Email atau Password Salah!');
            }

            // Session(['email' => $user->email]);
        }
    }


    public function laporan(ServiceBulananChart $chart, Request $request)
    {
        // untuk transaksi
        $transaksi = Transaksi::with('User')->get();
        $transaksi = Transaksi::all();
        $totalPemasukan = Transaksi::totalPemasukan();
        $totalPengeluaran = Transaksi::totalPengeluaran();


        //untuk grafik
        $servisPerBulan = Booking::select(DB::raw('MONTH(tgl_service) as bulan'), DB::raw('count(*) as jumlah_servis'))
            ->groupBy('bulan')
            ->orderBy('bulan')
            ->get();

        $labels = $servisPerBulan->pluck('bulan')->map(function ($bulan) {
            return date('F', mktime(0, 0, 0, $bulan, 10));
        });

        $jumlahServis = $servisPerBulan->pluck('jumlah_servis');


        return view('admin.laporan', compact('transaksi', 'totalPemasukan', 'totalPengeluaran', 'labels', 'jumlahServis'));
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
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
