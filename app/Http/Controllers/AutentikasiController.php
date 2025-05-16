<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Pengguna;
use Illuminate\Http\RedirectResponse;

class AutentikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function register()
    {
        return view('Autentikasi.register');
    }

    public function submitRegistrasi(Request $request)
    {
        $pengguna = new Pengguna();
        $pengguna->nama = $request->nama;
        $pengguna->email = $request->email;
        $pengguna->password = bcrypt($request->password);
        $pengguna->no_telepon = $request->no_telepon;
        $pengguna->alamat = $request->alamat;
        $pengguna->save();
        // dd($pengguna);
        return redirect()->route('login');
    }

    public function login(Request $request)
    {
        $data = $request->only('email', 'password');

        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect('dashboard');
        }else {
            // dd('lawak');
            return redirect()->back()->with('Error', 'Login gagal');
        }
    }

    public function index()
    {
        return view('Autentikasi.login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect()->route('login')->with('Error', 'Berhasil Logout');

        // return view('Autentikasi.login');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
