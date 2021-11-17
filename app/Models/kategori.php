<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;
    protected $fillable = ['nama_id'];
    protected $visible = ['nama_id'];
    public $timestamps = true;

    //membuat relasi one to many dengan model "Author"
    public function wisata()
    {
        //data Model 'Book' bisa dimiliki oleh Model 'Author'
        //melalui fk "author-id"
        return $this->belongsTo('App\Models\wisata', 'nama_id');
    }
}
