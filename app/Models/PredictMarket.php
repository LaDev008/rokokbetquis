<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PredictMarket extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'alias',
        'image',
        'emblem',
        'bbfs',
        'angka_main',
        'colok_bebas',
        'colok_macau',
        'shio',
        'twin',
        'open',
        'close',
        'dua_d1',
        'dua_d2',
        'dua_d3',
        'dua_d4',
        'dua_d5',
        'dua_d6',
        'dua_d7',
        'dua_d8',
        'dua_d9',
        'dua_d10',
        'article',
        'livedraw',
    ];
}
