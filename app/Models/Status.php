<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'color',
    ];

    public function event()
    {
        return $this->hasMany(SiteEvent::class, 'status_id', 'id');
    }

    public function eventComments()
    {
        return $this->hasMany(eventComments::class);
    }
}
