<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PublicationCategoryResource\Pages;
use App\Models\PublicationCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PublicationCategoryResource extends Resource
{
    protected static ?string $model = PublicationCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Publication Management';

    protected static ?int $navigationSort = 64;

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

                                    Forms\Components\TextInput::make('slug')
                                    ->required()
                                    ->disabled()
                                    ->unique(PublicationCategory::class, 'slug', ignoreRecord: true),

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

                Tables\Columns\TextColumn::make('slug')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
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
            'index' => Pages\ListPublicationCategories::route('/'),
            'create' => Pages\CreatePublicationCategory::route('/create'),
            'edit' => Pages\EditPublicationCategory::route('/{record}/edit'),
        ];
    }
}
