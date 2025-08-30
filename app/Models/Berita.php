<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'judul',
        'slug',
        'isi',
        'kategori_id',
        'user_id',
        'gambar'
    ];

     public function kategori() {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}
