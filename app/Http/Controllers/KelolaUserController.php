<?php

namespace App\Http\Controllers;

use App\Models\kelolaUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KelolaUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
        {
            $users = User::where('role', 'pengguna')->get(); // Hanya mengambil user dengan role 'user'

            // Kirim data $users ke view
            return view('admin.kelolaUser', compact('users'));
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tambahPengguna');   
    }    
    function postTambahUser(Request $request){
        $d = $request->validate([
            'image' =>'required',
            'full_name' =>'required',
            'email'=>'required',
            'password'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'role'=>'required',
        ]);

        // dd($data);
        $user = User::create([
            'image' =>$request->image->store('image'),
            'full_name' =>$request->full_name,
            'email'=>$request->email,
            'password'=>bcrypt($request),
            'phone'=>$request->phone,
            'address'=>$request->address,
            'role'=>$request->role,
        ]);
        Auth::login($user);
        return redirect()->route('kelolaUser')->with('notifikasi','Data Berhasil Ditambahkan');
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
    public function editUser($id)
    {
        $user = User::find($id);
        return view('admin.editUser', compact('user')); 
    }

    function postEditUser(User $user, Request $request)
    {
        $d = $request->validate([
            'image' => 'required',
            'full_name' => 'required',
            'email' => 'required',
            // 'password' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'role' => 'required',
          
        ]);
        $data['image']=$request->image->store('images');
        $user->update($data);
        return redirect()->route('kelolaUser')->with('notifikasi','Data Berhasil Diedit');

         // $d['image'] = $request->image->store('images');
        // $user->password = bcrypt('default_password');
        // $user->update($d);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);
    
        // Validasi data input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'no_hp' => 'required|string|max:15',
        ]);
    
        // Update user
        $user->update($validated);
    
        return redirect()->route('kelolaUser')->with('success', 'User updated successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroyUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('kelolaUser')->with('success', 'User deleted successfully');
    }
}
