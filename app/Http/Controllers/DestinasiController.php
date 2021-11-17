<?php

namespace App\Http\Controllers;

use App\Models\destinasi;
use Illuminate\Http\Request;

class DestinasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $destinasi = Destinasi::all();
        return view('admin.destinasi.index', compact('destinasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.destinasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'nama_provinsi' => 'required',
            'nama_kota' => 'required',
        ]);

        $destinasi = new Destinasi;
        $destinasi->nama_provinsi = $request->nama_provinsi;
        $destinasi->nama_kota = $request->nama_kota;
        $destinasi->save();
        return redirect()->route('destinasi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\destinasi  $destinasi
     * @return \Illuminate\Http\Response
     */
    public function show(destinasi $destinasi)
    {
        //
        $destinasi = Destinasi::findOrFail($id);
        return view('admin.destinasi.show', compact('destinasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\destinasi  $destinasi
     * @return \Illuminate\Http\Response
     */
    public function edit(destinasi $destinasi)
    {
        //
        $destinasi = Destinasi::findOrFail($id);
        return view('admin.destinasi.edit', compact('destinasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\destinasi  $destinasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, destinasi $destinasi)
    {
        //
        $validated = $request->validate([
            'nama_provinsi' => 'required',
            'nama_kota' => 'required',
        ]);

        $destinasi = Destinasi::findOrFail($id);
        $destinasi->nama_provinsi = $request->nama_provinsi;
        $destinasi->nama_kota = $request->nama_kota;
        $destinasi->save();
        return redirect()->route('destinasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\destinasi  $destinasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(destinasi $destinasi)
    {
        //
        $destinasi = Destinasi::findOrFail($id);
        $destinasi->delete();
        return redirect()->route('destinasi.index');
    }
}
