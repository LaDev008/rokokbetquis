<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        'login',
        'register',
        'logout',
        '/livewire/message/iframe-sdy',
        '/livewire/message/iframe-sgp',
        '/livewire/message/iframe-hk',
        '/livewire/message/iframe-sgp-toto',
        '/livewire/message/iframe-macau',
        '/livewire/message/iframe-pratunam',
        '/livewire/message/iframe-krabi',
        '/livewire/message/iframe-chatucak',
        '/livewire/message/iframe-pattani',
    ];
}
