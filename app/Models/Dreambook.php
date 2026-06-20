<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dreambook extends Model
{
    use HasFactory;

    protected $fillable = ['dreambook', 'dream_2d', 'nature_code', 'image'];
    
}
