<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     return view('Pengguna.profilPengguna');
    // }

    public function detail()
    {
        $pengguna = Auth::user();
        return view('Pengguna.profilPengguna', compact('pengguna'));
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
