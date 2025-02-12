<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlatformCounterResource\Pages;
use App\Models\PlatformCounter;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PlatformCounterResource extends Resource
{
    protected static ?string $model = PlatformCounter::class;

    protected static ?string $navigationIcon = 'heroicon-o-calculator';

    protected static ?string $navigationGroup = 'Value Creation Management';

    protected static ?string $navigationLabel = 'Counters';

    protected static ?string $modelLabel = 'Counter';

    protected static ?string $pluralModelLabel = 'Counters';

    protected static ?int $navigationSort = 40;

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
                                        Forms\Components\Tabs::make('Translations')
                                            ->tabs([
                                                Forms\Components\Tabs\Tab::make('English')
                                                    ->schema([
                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('title.en')
                                                                    ->label('Title (English)')
                                                                    ->required()
                                                                    ->maxLength(255),

                                                                Forms\Components\TextInput::make('subtitle.en')
                                                                    ->label('Subtitle (English)')
                                                                    ->maxLength(255),
                                                            ]),

                                                        Forms\Components\TextInput::make('content.en')
                                                            ->label('Content (English)')
                                                            ->required()
                                                            ->columnSpanFull(),
                                                    ]),

                                                Forms\Components\Tabs\Tab::make('Indonesian')
                                                    ->schema([
                                                        Forms\Components\Grid::make(2)
                                                            ->schema([
                                                                Forms\Components\TextInput::make('title.id')
                                                                    ->label('Title (Indonesian)')
                                                                    ->required()
                                                                    ->maxLength(255),

                                                                Forms\Components\TextInput::make('subtitle.id')
                                                                    ->label('Subtitle (Indonesian)')
                                                                    ->maxLength(255),
                                                            ]),

                                                        Forms\Components\TextInput::make('content.id')
                                                            ->label('Content (Indonesian)')
                                                            ->required()
                                                            ->columnSpanFull(),
                                                    ]),
                                            ])
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
            'index' => Pages\ListPlatformCounter::route('/'),
            'edit' => Pages\EditPlatformCounter::route('/{record}/edit'),
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
