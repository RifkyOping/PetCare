<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;
use App\Models\Hewan;

class Dashboard extends Controller
{
    public function dash()
    {
        return view('dashboard');
    }

    public function dokterSpesialis()
    {
        $data = Dokter::all();
        return view('Dokter.dokterSpesialis', compact('data'));
    }

    public function dokterUmum()
    {
        $data = Dokter::all();
        return view('Dokter.dokterUmum', compact('data'));
    }

    public function anjing()
    {
        $hewan = Hewan::all();
        return view('Dokter.dokterUmum', compact('hewan'));
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
