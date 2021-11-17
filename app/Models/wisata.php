<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wisata extends Model
{
    use HasFactory;

    //memberikan akses field apa saja yang boleh di isi
    protected $fillable = ['image','nama_wisata','harga','alamat'];

    //memberikan akses field apa saja yang boleh di lihat
    //atau di keluarkan
    protected $visible = ['image','nama_wisata','harga','alamat'];

    //mencatat waktu pembuatan & update data secara otomatis
    public $timestamps = true;

    //membuat relasi one to many dengan model "Book"
    public function image()
    {
        if ($this->image && file_exists(public_path('images/wisata/' .$this->image))){
            return asset('images/wisata/' .$this->image);
        } else {
            return asset('images/no_image.png');
        }
    }

    public function deleteImage()
    {
        if ($this->image && file_exists(public_path('images/wisata/' . $this->image))) {
            return unlink(public_path('images/wisata/' . $this->image));
        }
    }
}
