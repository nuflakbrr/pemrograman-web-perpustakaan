<?php

namespace App\Models;

use App\Models\Buku;
use Illuminate\Database\Eloquent\Model;

class KategoriBuku extends Model
{
    protected $table = 'kategori_buku';

    protected $fillable = [
        'nama_kategori',
        'deskripsi',
    ];

    public function buku()
    {
        return $this->hasMany(Buku::class);
    }
}
