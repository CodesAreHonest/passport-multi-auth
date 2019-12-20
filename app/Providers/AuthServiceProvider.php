<?php

namespace App\Providers;

use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Nomadnt\LumenPassport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Boot the authentication services for the application.
     *
     * @return void
     */
    public function boot()
    {
        // register passport routes
        Passport::routes();

        // change the default token expiration
        Passport::tokensExpireIn(Carbon::now()->addMinutes(15));


        // change the default refresh token expiration
        Passport::refreshTokensExpireIn(Carbon::now()->addMinutes(30));
    }
}
