<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HeroMasterResource\Pages;
use App\Models\HeroMaster;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class HeroMasterResource extends Resource
{
    protected static ?string $model = HeroMaster::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationGroup = 'Master Data Management';

    protected static ?string $navigationLabel = 'Master Data';

    protected static ?int $navigationSort = 4;

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

                                        Forms\Components\TextInput::make('instagram')
                                            ->columnSpanFull(),

                                        Forms\Components\TextInput::make('linkedin')
                                            ->columnSpanFull(),

                                        Forms\Components\TextInput::make('twitter')
                                            ->columnSpanFull(),

                                    ])
                                    ->columns(2),
                            ])
                            ->columnSpan(2),

                        Forms\Components\Group::make()
                            ->schema([
                                Forms\Components\Section::make('Footer Translations')
                                    ->schema([
                                        Forms\Components\Tabs::make('Translations')
                                            ->tabs([
                                                Forms\Components\Tabs\Tab::make('English')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('footer.en')
                                                            ->label('Footer (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                    ]),
                                                Forms\Components\Tabs\Tab::make('Indonesian')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('footer.id')
                                                            ->label('Footer (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                    ]),
                                            ]),
                                    ]),
                            ])
                            ->columnSpan(2),
                    ])
                    ->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('footer')
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
            'index' => Pages\ListHeroMaster::route('/'),
            'create' => Pages\CreateHeroMaster::route('/create'),
            'edit' => Pages\EditHeroMaster::route('/{record}/edit'),
        ];
    }
}
