<?php

namespace App\Http\Controllers;

use App\Models\wisata;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $wisata = Wisata::all();
        return view('admin.wisata.index', compact('wisata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.wisata.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_wisata' => 'required',
            'nama_wisata' => 'required',
            'harga' => 'required',
        ]);

        $wisata = new Wisata;
        $wisata->nama_wisata = $request->nama_wisata;
        $wisata->harga = $request->harga;
        $wisata->alamat = $request->alamat;
        $wisata->save();
        return redirect()->route('wisata.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $wisata = Wisata::findOrFail($id);
        return view('admin.wisata.show', compact('wisata'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $wisata = Wisata::findOrFail($id);
        return view('admin.wisata.edit', compact('wisata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validated = $request->validate([
            'nama_wisata' => 'required',
            'harga' => 'required',
            'alamat' => 'required',
        ]);

        $wisata = Wisata::findOrFail($id);
        $wisata->nama_wisata = $request->nama_wisata;
        $wisata->harga = $request->harga;
        $wisata->alamat = $request->alamat;
        $wisata->save();
        return redirect()->route('wisata.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $wisata = Wisata::findOrFail($id);
        $wisata->delete();
        return redirect()->route('wisata.index');
    }
}
