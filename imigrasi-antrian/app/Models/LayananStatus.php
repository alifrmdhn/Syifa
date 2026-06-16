<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LayananStatus extends Model
{
    protected $fillable = [
        'kode',
        'nama',
        'is_open'
    ];
}