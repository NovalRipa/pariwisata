<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $fillable = ['kategori', 'cover'];
    protected $visible = ['kategori','cover'];
    public $timestamps = true;

    //membuat relasi one to many dengan model "wisata"
    public function image()
    {
        if ($this->cover && file_exists(public_path('images/kategoris/' .$this->cover))){
            return asset('images/kategoris/' .$this->cover);
        } else {
            return asset('images/no_image.png');
        }
    }

    public function deleteImage()
    {
        if ($this->cover && file_exists(public_path('images/kategoris/' . $this->cover))) {
            return unlink(public_path('images/kategoris/' . $this->cover));
        }
    }
}
