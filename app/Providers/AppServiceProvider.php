<?php

namespace App\Providers;

use App\Models\User;
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
        view()->composer('backend.layout.layout', function ($view) {
            $users = User::all();
            // dd($users);
            $view->with([
                'user' => $users,
            ]);    
        });
        
    }
}
