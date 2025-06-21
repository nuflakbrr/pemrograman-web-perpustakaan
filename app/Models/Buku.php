<?php

namespace App\Models;

use App\Models\KategoriBuku;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';

    protected $fillable = [
        'judul_buku',
        'penulis',
        'penerbit',
        'tahun_penerbitan',
        'isbn',
        'cover',
        'jumlah_tersedia',
        'kategori_id',
    ];

    public function kategori()
    {
        return $this->belongsTo(KategoriBuku::class);
    }
}
