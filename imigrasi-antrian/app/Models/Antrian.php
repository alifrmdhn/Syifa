<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    protected $fillable = [
        'kode',
        'layanan',
        'loket',
        'nomor',
        'status'
    ];
}