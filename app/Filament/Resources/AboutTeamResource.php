<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutTeamResource\Pages;
use App\Models\AboutTeam;
use App\Models\AboutTeamCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class AboutTeamResource extends Resource
{
    protected static ?string $model = AboutTeam::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationGroup = 'Our Identity Management';

    protected static ?string $navigationLabel = 'Team Member';

    protected static ?string $modelLabel = 'Team Member';

    protected static ?string $pluralModelLabel = 'Team Member';

    protected static ?int $navigationSort = 18;

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
                                        Forms\Components\TextInput::make('name')
                                            ->required()
                                            ->maxLength(255)
                                            ->columnSpanFull(),

                                        Forms\Components\Tabs::make('Translations')
                                            ->tabs([
                                                Forms\Components\Tabs\Tab::make('English')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('title.en')
                                                            ->label('Title (English)')
                                                            ->required()
                                                            ->maxLength(255)
                                                            ->columnSpanFull(),
                                                    ]),
                                                Forms\Components\Tabs\Tab::make('Indonesian')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('title.id')
                                                            ->label('Title (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255)
                                                            ->columnSpanFull(),
                                                    ]),
                                            ])
                                            ->columnSpanFull(),
                                    ])
                                    ->columns(2),


                            ])
                            ->columnSpan(2),
                            Forms\Components\Group::make()
                                ->schema([

                                    Forms\Components\Section::make('Category')
                                        ->schema([
                                            Forms\Components\Select::make('about_team_category_id')
                                                ->label('Category')
                                                ->relationship('category', 'name')
                                                ->required()
                                                ->preload()
                                                ->searchable(),

                                        ]),
                                    Forms\Components\Section::make('Team Photo')
                                        ->schema([
                                            Forms\Components\FileUpload::make('image_path')
                                                ->acceptedFileTypes(['image/*', 'video/*'])
                                                ->maxSize(50 * 1024) // 50MB max file size
                                                ->disk('public')
                                                ->directory('our-identity')
                                                ->visibility('public')
                                                ->columnSpanFull(),
                                        ]),
                                ])
                                ->columnSpan(1),
                    ])
                    ->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image_path')
                    ->disk('public')
                    ->height(50),

                Tables\Columns\TextColumn::make('name')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('title')
                    ->sortable()
                    ->searchable(),

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
            'index' => Pages\ListAboutTeam::route('/'),
            'create' => Pages\CreateAboutTeam::route('/create'),
            'edit' => Pages\EditAboutTeam::route('/{record}/edit'),
        ];
    }
}
