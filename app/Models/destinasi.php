<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class destinasi extends Model
{
   //
   use HasFactory;

    //memberikan akses field apa saja yang boleh di isi
    protected $fillable = ['nama_provinsi', 'nama_kota'];

    //memberikan akses field apa saja yang boleh di lihat
    //atau di keluarkan
    protected $visible = ['nama_provinsi', 'nama_kota'];

    //mencatat waktu pembuatan & update data secara otomatis
    public $timestamps = true;
}
