<?php

namespace App\Models;

use App\Models\KategoriBuku;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $guard = [
        'id'
    ];

    public function kategori()
    {
        return $this->belongsTo(KategoriBuku::class);
    }
}
