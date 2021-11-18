<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class destinasi extends Model
{
   //
   use HasFactory;
    protected $fillable = ['nama_provinsi','nama_kota','kategori','wisata_id', 'alamat','harga', 'cover'];
    protected $visible = ['nama_provinsi','nama_kota','kategori','wisata_id', 'alamat', 'harga','cover'];
    public $timestamps = true;

    //membuat relasi one to many dengan model "wisata"
    public function wisata()
    {
        //data Model 'destinasi' bisa dimiliki oleh Model 'Author'
        //melalui fk "wisata-id"
        return $this->belongsTo('App\Models\wisata', 'wisata_id');
    }
    public function image()
    {
        if ($this->cover && file_exists(public_path('images/destinasis/' .$this->cover))){
            return asset('images/destinasis/' .$this->cover);
        } else {
            return asset('images/no_image.png');
        }
    }

    public function deleteImage()
    {
        if ($this->cover && file_exists(public_path('images/destinasis/' . $this->cover))) {
            return unlink(public_path('images/destinasis/' . $this->cover));
        }
    }
}
