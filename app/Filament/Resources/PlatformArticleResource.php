<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlatformArticleResource\Pages;
use App\Models\PlatformArticle;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PlatformArticleResource extends Resource
{
    protected static ?string $model = PlatformArticle::class;

    protected static ?string $navigationIcon = 'heroicon-o-calculator';

    protected static ?string $navigationGroup = 'Value Creation Management';

    protected static ?string $navigationLabel = 'Articles';

    protected static ?string $modelLabel = 'Articles';

    protected static ?string $pluralModelLabel = 'Articles';

    protected static ?int $navigationSort = 10;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make()
                    ->schema([
                        Forms\Components\Group::make()
                            ->schema([
                                Forms\Components\Section::make()
                                    ->schema([
                                        Forms\Components\Grid::make(2)
                                            ->schema([
                                                Forms\Components\TextInput::make('title')
                                                    ->required()
                                                    ->maxLength(255)
                                                    ->live(onBlur: true)
                                                    ->afterStateUpdated(fn (string $state, callable $set) =>
                                                        $set('slug', Str::slug($state))
                                                    ),

                                                Forms\Components\TextInput::make('subtitle')
                                                    ->maxLength(255),
                                                ]),

                                                Forms\Components\RichEditor::make('content')
                                                ->maxLength(65535)
                                                ->columnSpanFull(),

                                    ])

                            ])
                            ->columnSpan(2),


                    ])
                    ->columns(3),
            ])
            ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('title')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('content')
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
            ])
            ->bulkActions([
                //
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPlatformArticle::route('/'),
            'edit' => Pages\EditPlatformArticle::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function canDelete(?Model $record = null): bool
    {
        return false;
    }
}
