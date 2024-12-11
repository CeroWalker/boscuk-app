<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QuizQuestionsResource\Pages;
use App\Filament\Resources\QuizQuestionsResource\RelationManagers;
use App\Models\QuizQuestions;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Filament\Tables\Columns\TextColumn;

class QuizQuestionsResource extends Resource
{
    protected static ?string $model = QuizQuestions::class;

    protected static ?string $navigationIcon = 'heroicon-o-wallet';

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
                            ->prefix('https://beyondofseen.com/test/'),
                        Select::make('lesson_id')->required()
                            ->options([
                                '9' => '9.Sınıf',
                                '10' => '10.Sınıf',
                                '11' => '11.Sınıf',
                                '12' => '12.Sınıf',
                                'ekpss' => 'Kpss/Ekpss',
                            ]),
                        Select::make('lesson_group')->required()
                            ->options([
                                'matematik' => 'Matematik',
                                'edebiyat' => 'Türk Dili ve Edebiyatı',
                                'fizik' => 'Fizik',
                                'kimya' => 'Kimya',
                                'biyoloji' => 'Biyoloji',
                                'tarih' => 'Tarih',
                                'cografya' => 'Coğrafya',
                                'din' => 'Din Kültürü Ve Ahlak Bilgisi',
                                'ingilizce' => 'İngilizce',
                                'almanca' => 'Almanca',
                            ]),
                        MarkdownEditor::make('html')
                            ->columnSpan(2)
                            ->required(),
                    ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('title_id')->label("Url")
                    ->copyable()
                    ->copyableState(fn (string $state): string => "https://beyondofseen.com/test/{$state}"),
                TextColumn::make('edited_at')->label('Edited At'),
                TextColumn::make('created_at')->label('Created At'),
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
            'index' => Pages\ListQuizQuestions::route('/'),
            'create' => Pages\CreateQuizQuestions::route('/create'),
            'edit' => Pages\EditQuizQuestions::route('/{record}/edit'),
        ];
    }
}
