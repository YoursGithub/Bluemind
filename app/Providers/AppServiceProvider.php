<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //

        // User::create([
        //     'name' => 'admin',
        //     'email'=> 'admin@gmail.com',
        //     'phone'=> '123',
        //     'password'=> Hash::make('1234'),
        //     'email_verified_at' => now() ,
        //     'is_admin' =>true
        // ]) ;
    }
}
