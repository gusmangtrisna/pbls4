<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Session;
use Illuminate\Auth\Events\Login;

class RedirectAfterFilamentLogin
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(Login $event): void
    {
        $user = $event->user;

        if ($user->role === 'admin') {
            Session::put('url.intended', route('filament.admin.pages.dashboard'));
        } else {
            Session::put('url.intended', '/user-home'); // Ganti dengan halaman user
        }
    }
}