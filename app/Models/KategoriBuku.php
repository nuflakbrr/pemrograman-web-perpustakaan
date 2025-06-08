<?php

namespace App\Models;

use App\Models\Buku;
use Illuminate\Database\Eloquent\Model;

class KategoriBuku extends Model
{
    protected $guard = [
        'id'
    ];

    public function buku()
    {
        return $this->hasMany(Buku::class);
    }
}
