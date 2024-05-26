<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CultureResource\Pages;
use App\Filament\Resources\CultureResource\RelationManagers;
use App\Models\Culture;
use Faker\Provider\Text;
use Filament\Actions\DeleteAction;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Set;
use Illuminate\Support\Str;

class CultureResource extends Resource
{
    protected static ?string $model = Culture::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'General Culture';
    protected static ?string $label = 'General Culture';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        TextInput::make('title')->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (Set $set, ?string $state) => $set('title_id', Str::slug($state))),
                        TextInput::make('title_id')
                            ->prefix('https://beyondofseen.com/kultur/'),
                        RichEditor::make('content')
                            ->fileAttachmentsDisk('s3')
                            ->fileAttachmentsDirectory('images')
                            ->columnSpan(2)
                            ->required(),
                        FileUpload::make('content_image')
                            ->required()
                            ->disk('s3')
                            ->directory('content-image')
                            ->preserveFilenames(),
                        FileUpload::make('content_audio')
                            ->disk('s3')
                            ->directory('content_audio')
                            ->preserveFilenames(),
                    ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('title_id'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCultures::route('/'),
            'create' => Pages\CreateCulture::route('/create'),
            'edit' => Pages\EditCulture::route('/{record}/edit'),
        ];
    }
}
