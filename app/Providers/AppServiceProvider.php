<?php

namespace App\Providers;

use App\Models\Guide;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use App\Models\Lesson;
use App\Models\User;
use App\Filament\Resources\CultureResource;

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
        Guide::unguard();
        Lesson::unguard();
        User::unguard();
    }
}
