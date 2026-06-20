<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'link',
        'image',
        'minimal_bet',
        'minimal_deposit',
        'minimal_withdraw',
        'bbfs',
        'top_promo',
        'service',
        'markets',
        'bet_type',
        'deposit_bank',
        'deposit_ewallet',
    ];

    public function events()
    {
        return $this->hasMany(SiteEvent::class, 'site_id', 'id');
    }

    public function eventComment()
    {
        return $this->hasMany(eventComment::class, 'site_id', 'id');
    }
}
