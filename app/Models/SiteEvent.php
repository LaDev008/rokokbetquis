<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\map;

class SiteEvent extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'terms',
        'date',
        'share_link',
        'image',
        'need_upload',
        'site_id',
        'status_id',
        'picture_folder',
    ];

    public function site()
    {
        return $this->belongsTo(Site::class, 'site_id', 'id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }

    public function eventComments()
    {
        return $this->hasMany(EventComment::class, 'site_event_id', 'id');
    }
}
