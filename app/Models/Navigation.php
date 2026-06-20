<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navigation extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'link', 'route_name'];

    public function seoPages()
    {
        return $this->hasMany(SeoPage::class);
    }
}
