<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sydney extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'day',
        'first_result',
        'second_result',
        'third_result',
    ];
}
