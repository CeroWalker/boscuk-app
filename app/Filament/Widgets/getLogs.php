<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\ActivityResource;
use Filament\Forms\Components\TextInput;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Support\Facades\DB;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;

class getLogs extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';
    protected static ?int $sort = 2;

    protected static ?string $heading = 'Current Activities';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                ActivityResource::getEloquentQuery(),
            )
            ->defaultPaginationPageOption('10')
            ->defaultSort('created_at', 'desc')
            ->columns([
                TextColumn::make('creator')->label('UserID')->sortable()->searchable()->getStateUsing(fn ($record) => $record->user),
                TextColumn::make('activity'),
                TextColumn::make('description'),
                TextColumn::make('created_at')->label('Created At'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('user')
                    ->default(auth()->user()->getAuthIdentifier())
                    ->label('Kullanıcı'),
            ]);
    }
}
