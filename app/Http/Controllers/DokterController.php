<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function spesialis()
    {
        $data = Dokter::all();
        return view('Dokter.dokterSpesialis', compact('data'));
    }

    public function umum()
    {
        $data = Dokter::all();
        return view('Dokter.dokterUmum', compact('data'));
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
    public function show($id)
    {
        $data = Dokter::with('jadwalPraktik')->findOrFail($id);
        return view('Dokter.detailDokter', compact('data'));
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
