<?php

namespace App\Providers;

use App\Filament\Resources\ActivityResource;
use App\Http\Controllers\ToolsController;
use App\Models\Activity;
use App\Models\Games;
use App\Models\Guide;
use App\Models\Tools;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use App\Models\Lesson;
use App\Models\User;
use App\Models\QuizQuestions;
use App\Filament\Resources\CultureResource;
use League\Uri\Uri;

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
        if (config('app.url') == 'https://beyondofseen.com')
            URL::forceScheme('https');
        Guide::unguard();
        Lesson::unguard();
        User::unguard();
        QuizQuestions::unguard();
        Activity::unguard();
        Tools::unguard();
        Games::unguard();
    }
}
