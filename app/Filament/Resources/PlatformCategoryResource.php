<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlatformCategoryResource\Pages;
use App\Models\PlatformCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PlatformCategoryResource extends Resource
{
    protected static ?string $model = PlatformCategory::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Value Creation Management';
    protected static ?string $navigationLabel = 'Business Focus Category';
    protected static ?string $modelLabel = 'Business Focus Category';
    protected static ?string $pluralModelLabel = 'Business Focus Categories';
    protected static ?int $navigationSort = 43;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make()
                    ->schema([
                        Forms\Components\Section::make()
                            ->schema([
                                Forms\Components\Tabs::make('Translations')
                                    ->tabs([
                                        Forms\Components\Tabs\Tab::make('English')
                                            ->schema([
                                                Forms\Components\TextInput::make('name.en')
                                                    ->label('Name (English)')
                                                    ->required()
                                                    ->maxLength(255)
                                                    ->live(onBlur: true)
                                                    ->afterStateUpdated(function (string $operation, $state, Forms\Set $set) {
                                                        if ($operation === 'create') {
                                                            $set('slug', Str::slug($state));
                                                        }
                                                    }),
                                            ]),
                                        Forms\Components\Tabs\Tab::make('Indonesian')
                                            ->schema([
                                                Forms\Components\TextInput::make('name.id')
                                                    ->label('Name (Indonesian)')
                                                    ->required()
                                                    ->maxLength(255),
                                            ]),
                                    ]),

                                Forms\Components\TextInput::make('order')
                                    ->required()
                                    ->maxLength(255)
                                    ->unique(ignoreRecord: true)
                                    ->disabled(),
                            ])
                            ->columnSpan(2),
                    ])
                    ->columns(3)
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
        'index' => Pages\ListPlatformCategories::route('/'),
        'create' => Pages\CreatePlatformCategory::route('/create'),
        'edit' => Pages\EditPlatformCategory::route('/{record}/edit'),
    ];
}
}
