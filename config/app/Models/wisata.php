<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wisata extends Model
{
    use HasFactory;

    //memberikan akses field apa saja yang boleh di isi
    protected $fillable = ['nama_wisata'];

    //memberikan akses field apa saja yang boleh di lihat
    //atau di keluarkan
    protected $visible = ['nama_wisata'];

    //mencatat waktu pembuatan & update data secara otomatis
    public $timestamps = true;

    //membuat relasi one to many dengan model "destinasi"
    public function destinasi()
    {
        //Model 'wisatahor' bisa memiliki banyak data dari
        //model 'destinasi' melalui fk 'wisata_id'
        return $this->hasMany('App\Models\destenasi', 'wisata_id');
    }
}
