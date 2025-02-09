<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutTeamCategoryResource\Pages;
use App\Models\AboutTeamCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class AboutTeamCategoryResource extends Resource
{
    protected static ?string $model = AboutTeamCategory::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Our Identity Management';
    protected static ?string $navigationLabel = 'Team Category';
    protected static ?string $modelLabel = 'Team Category';
    protected static ?string $pluralModelLabel = 'Team Categories';
    protected static ?int $navigationSort = 18;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (string $state, callable $set) => $set('slug', Str::slug($state))),
                Forms\Components\TextInput::make('order')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('order')
                    ->sortable(),
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

    public static function getPages(): array
{
    return [
        'index' => Pages\ListAboutTeamCategories::route('/'),
        'create' => Pages\CreateAboutTeamCategory::route('/create'),
        'edit' => Pages\EditAboutTeamCategory::route('/{record}/edit'),
    ];
}
}
