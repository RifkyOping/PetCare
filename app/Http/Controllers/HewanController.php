<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hewan;

class HewanController extends Controller
{

    public function show()
    {
        // $dataHewan = Hewan::all();
        // return view('layout.sidebar');
    }

    public function detail($id)
    {
        $detailHewan = Hewan::findOrFail($id);
        return view('Hewan.detailHewan', compact('detailHewan'));
    }
    // public function sidebar()
    // {
    //     $hewan = Hewan::all();
    //     return view('layout.sidebar', compact('hewan'));
    // }

    public function filterByJenis($jenis)
    {
        // $dataHewan = Hewan::all();
        $hewan = Hewan::where('jenis', $jenis)->get();
        return view('Hewan.hewan', compact('hewan', 'jenis'));
    }

    // public function jenisSidebar()
    // {
    //     $dataHewan = Hewan::select('jenis')->distinct()->get();
    //     return view('layout.sidebar', compact('dataHewan'));
    // }



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
