<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QuizQuestionsResource\Pages;
use App\Filament\Resources\QuizQuestionsResource\RelationManagers;
use App\Models\QuizQuestions;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
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
                            ->prefix('https://beyondofseen.com/ders/'),
                        RichEditor::make('question')
                            ->columnSpan(2)
                            ->required(),
                        RichEditor::make('answers')
                            ->columnSpan(2)
                            ->required(),
                        FileUpload::make('question_audio')
                            ->disk('s3')
                            ->directory('questions-audio-files')
                            ->preserveFilenames(),
                        FileUpload::make('answer-audio')
                            ->disk('s3')
                            ->directory('questions-audio-files')
                            ->preserveFilenames(),
                    ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make()
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
