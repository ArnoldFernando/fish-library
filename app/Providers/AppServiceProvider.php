<?php

namespace App\Providers;

use App\Models\Equipment;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

use App\Models\vegetables;
use App\Models\fruits;
use App\Models\farmers;
use App\Models\Fisheries;

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
        View::composer('*', function ($view) {
            $fish = Fisheries::all();
            $view->with([
                'fish' => $fish,
            ]);
        });
    }
}
