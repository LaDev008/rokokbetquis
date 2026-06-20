<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeoPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'meta_description',
        'meta_keywords',
        'meta_canonical',
        'meta_site_name',
        'author',
        'article',
        'navigation_id',
    ];

    public function navigation()
    {
        return $this->belongsTo(Navigation::class);
    }
}
