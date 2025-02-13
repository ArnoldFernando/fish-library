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

                $vegetable = vegetables::all();
                $fruit = fruits::all();
                $equipment = Equipment::where('type', 'agricultural')->get();
                $fish = Fisheries::all();
                $aquapments = Equipment::where('type', 'aquatic')->get();

                $view->with([
                    'vegetable' => $vegetable,
                    'fruit' => $fruit,
                    'equipment' => $equipment,
                    'aquapments' => $aquapments,

                    'fish' => $fish,

                ]);
            });


    }
}
