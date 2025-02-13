<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutPrioritySectorResource\Pages;
use App\Models\AboutPrioritySector;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class AboutPrioritySectorResource extends Resource
{
    protected static ?string $model = AboutPrioritySector::class;

    protected static ?string $navigationIcon = 'heroicon-o-calculator';

    protected static ?string $navigationGroup = 'Our Identity Management';

    protected static ?string $navigationLabel = 'Priority Sector';

    protected static ?string $modelLabel = 'Priority Sector';

    protected static ?string $pluralModelLabel = 'Priority Sector';

    protected static ?int $navigationSort = 15;

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
                                                        Forms\Components\TextInput::make('main_title.en')
                                                            ->label('Title (English)')
                                                            ->required()
                                                            ->maxLength(255)
                                                            ->live(onBlur: true)
                                                            ->columnSpanFull()
                                                            ->afterStateUpdated(fn (string $state, callable $set) =>
                                                                $set('slug', Str::slug($state))
                                                            ),
                                                        Forms\Components\TextInput::make('title.en')
                                                            ->label('Subtitle (English)')
                                                            ->required()
                                                            ->maxLength(255)
                                                            ->live(onBlur: true)
                                                            ->columnSpanFull()
                                                            ->afterStateUpdated(fn (string $state, callable $set) =>
                                                                $set('slug', Str::slug($state))
                                                            ),
                                                    ]),
                                                Forms\Components\Tabs\Tab::make('Indonesian')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('main_title.id')
                                                            ->label('Title (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255)
                                                            ->live(onBlur: true)
                                                            ->columnSpanFull()
                                                            ->afterStateUpdated(fn (string $state, callable $set) =>
                                                                $set('slug', Str::slug($state))
                                                            ),
                                                        Forms\Components\TextInput::make('title.id')
                                                            ->label('Subtitle (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255)
                                                            ->columnSpanFull(),
                                                    ]),
                                            ]),

                                        Forms\Components\Grid::make(2)
                                            ->schema([
                                                Forms\Components\TextInput::make('slug')
                                                    ->required()
                                                    ->disabled()
                                                    ->maxLength(255)
                                                    ->columnSpanFull()
                                                    ->unique(AboutPrioritySector::class, 'slug', ignoreRecord: true),
                                            ]),
                                    ])

                            ])
                            ->columnSpan(2),

                            Forms\Components\Section::make('Image/Video')
                                    ->schema([
                                        Forms\Components\FileUpload::make('image_path')
                                            ->required()
                                            ->acceptedFileTypes(['image/*', 'video/*'])
                                            ->maxSize(50 * 1024) // 50MB max file size
                                            ->disk('public')
                                            ->directory('hero-sections')
                                            ->visibility('public')
                                            ->columnSpanFull(),
                                    ])
                            ->columnSpan(1),
                    ])
                    ->columns(3),
            ])
            ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image_path')
                    ->disk('public')
                    ->height(50),

                Tables\Columns\TextColumn::make('title')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('published_date')
                    ->date()
                    ->sortable(),

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
            'index' => Pages\ListAboutPrioritySector::route('/'),
            'edit' => Pages\EditAboutPrioritySector::route('/{record}/edit'),
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
