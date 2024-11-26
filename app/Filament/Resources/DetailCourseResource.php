<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DetailCourseResource\Pages;
use App\Filament\Resources\DetailCourseResource\RelationManagers;
use App\Models\DetailCourse;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class DetailCourseResource extends Resource
{
    protected static ?string $model = DetailCourse::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Select::make('courses_id')
                ->label('Course')
                ->relationship('course', 'title')
                ->required(),
            TextInput::make('chapter_title')
                ->label('Chapter Title')
                ->required()
                ->maxLength(255),
            TextInput::make('video_url')
                ->label('Video URL')
                ->required()
                ->maxLength(200),
            TextInput::make('text_content')
                ->label('Text Content')
                ->required()
                ->maxLength(200),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('course.title')
                    ->label('Course Title')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('chapter_title'),
                TextColumn::make('video_url'),
                TextColumn::make('text_content'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListDetailCourses::route('/'),
            'create' => Pages\CreateDetailCourse::route('/create'),
            'edit' => Pages\EditDetailCourse::route('/{record}/edit'),
        ];
    }
}
