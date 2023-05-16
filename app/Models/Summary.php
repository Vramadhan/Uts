<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Summary extends Model
{
    protected $table = 'summary';
    protected $fillable = [
        'nama',
        'keterangan',

    ];
}
