<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LessonResource\Pages;
use App\Filament\Resources\LessonResource\RelationManagers;
use App\Models\Lesson;
use Faker\Provider\Text;
use Filament\Actions\DeleteAction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Filament\Forms\Components\FileUpload;

class LessonResource extends Resource
{
    protected static ?string $model = Lesson::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

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
                            ->prefix('https://beyondofseen.com/dersler/'),
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
                        RichEditor::make('content')
                            ->fileAttachmentsDisk('s3')
                            ->fileAttachmentsDirectory('images')
                            ->columnSpan(2)
                            ->required(),
                        FileUpload::make('content_audio')
                            ->disk('s3')
                            ->directory('form-audio-files')
                            ->preserveFilenames(),
                        FileUpload::make('text_file')
                            ->disk('s3')
                            ->directory('text-files')
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
                TextColumn::make('lesson_id'),
                TextColumn::make('created_at'),
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
            'index' => Pages\ListLessons::route('/'),
            'create' => Pages\CreateLesson::route('/create'),
            'edit' => Pages\EditLesson::route('/{record}/edit'),
        ];
    }
}
