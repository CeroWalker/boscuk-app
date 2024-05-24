<?php

namespace App\Filament\Widgets;

use App\Models\Lesson;
use App\Models\Lessons;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\DB;

class getStats extends BaseWidget
{
    protected static ?int $sort = 1;
    protected static ?string $pollingInterval = '30s';
    protected function getStats(): array
    {
        return [
            Stat::make('Total Lessons', DB::table('lessons')->count()),
            Stat::make('Total Guides', DB::table('guides')->count()),
            Stat::make('Total General Cultures', DB::table('cultures')->count()),
        ];
    }
}
