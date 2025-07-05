<?php

namespace App\Models;

use App\Models\KategoriBuku;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';

    protected $guarded = ['id'];

    public function kategori()
    {
        return $this->belongsTo(KategoriBuku::class);
    }

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }
}
