<?php

namespace App\Http\Controllers;

use App\Models\wisata;
use App\Models\destinasi;
use Illuminate\Http\Request;

class destinasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil data 'destinasi' dan juga 'author'
        // yang berelasi melalui method 'author'
        // yang berasal dari model 'destinasi'
        $destinasi = Destinasi::with('wisata')->get();
        return view('admin.destinasi.index', compact('destinasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //memngambil author
        $wisata = Wisata::all();
        return view('admin.destinasi.create', compact('wisata'));
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
        $request->validate([
            'nama_provinsi' => 'required',
            'nama_kota' => 'required',
            'kategori'=>'required',
            'alamat' => 'required',
            'harga'=>'required',
            'wisata_id' => 'required',
            'cover' => 'required|image|max:2048',
        ]);
        $destinasi = new Destinasi;
        $destinasi->nama_provinsi = $request->nama_provinsi;
        $destinasi->nama_kota = $request->nama_kota;
        $destinasi->kategori = $request->kategori;
        $destinasi->harga = $request->harga;
        $destinasi->wisata_id = $request->wisata_id;
        // upload image / foto
        if ($request->hasFile('cover')) {
            $image = $request->file('cover');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/destinasis/', $name);
            $destinasi->cover = $name;
        }
        $destinasi->alamat = $request->alamat;
        $destinasi->save();
        return redirect()->route('destinasi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\destinasi  $destinasi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
    public function edit($id)
    {
        //
        $destinasi = Destinasi::findOrFail($id);
        $wisata = Wisata::all();
        return view('admin.destinasi.edit', compact('destinasi', 'wisata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\destinasi  $destinasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'nama_provinsi' => 'required',
            'nama_kota'=> 'required',
            'kategori'=>'required',
            'alamat' => 'required',
            'harga'=>'required',
            'wisata_id' => 'required',
        ]);
        $destinasi = Destinasi::findOrFail($id);
        $destinasi->nama_provinsi = $request->nama_provinsi;
        $destinasi->nama_kota = $request->nama_kota;
        $destinasi->wisata_id = $request->wisata_id;
        // upload image / foto
        if ($request->hasFile('cover')) {
            $destinasi->deleteImage();
            $image = $request->file('cover');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/destinasis/', $name);
            $destinasi->cover = $name;
        }
        $destinasi->alamat = $request->alamat;
        $destinasi->save();
        return redirect()->route('destinasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\destinasi  $destinasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $destinasi = destinasi::findOrFail($id);
        $destinasi->deleteImage();
        $destinasi->delete();
        return redirect()->route('destinasi.index');
    }
}
