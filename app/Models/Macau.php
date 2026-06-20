<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Macau extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'day',
        'date',
        'result1',
        'result2',
        'result3',
        'result4',
        'result5',
        'result6',
        'last_updated_by',
    ];
}
