<?php

namespace App\Libraries\Hash;

use Illuminate\Support\ServiceProvider;

class JudgifyHashServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->bind('judgifyhash',function(){
            return new JudgifyHash();
        });
    }
}
