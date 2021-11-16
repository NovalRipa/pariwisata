<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    //memberikan akses field apa saja yang boleh di isi
    protected $fillable = ['name'];

    //memberikan akses field apa saja yang boleh di lihat
    //atau di keluarkan
    protected $visible = ['name'];

    //mencatat waktu pembuatan & update data secara otomatis
    public $timestamps = true;

    //membuat relasi one to many dengan model "Book"
    public function books()
    {
        //Model 'Author' bisa memiliki banyak data dari
        //model 'Book' melalui fk 'author_id'
        return $this->hasMany('App\Models\Book', 'author_id');
    }
}
