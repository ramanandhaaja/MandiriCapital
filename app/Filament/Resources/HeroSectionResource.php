<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HeroSectionResource\Pages;
use App\Models\HeroSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class HeroSectionResource extends Resource
{
    protected static ?string $model = HeroSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationGroup = 'Master Data Management';

    protected static ?int $navigationSort = 0;

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
                                                        Forms\Components\TextInput::make('title.en')
                                                            ->label('Title (English)')
                                                            ->required()
                                                            ->maxLength(255)
                                                            ->live(onBlur: true)
                                                            ->afterStateUpdated(fn (string $state, callable $set) =>
                                                                $set('slug', Str::slug($state))
                                                            ),
                                                        Forms\Components\RichEditor::make('content.en')
                                                            ->label('Content (English)')
                                                            ->required()
                                                            ->maxLength(65535),
                                                    ]),
                                                Forms\Components\Tabs\Tab::make('Indonesian')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('title.id')
                                                            ->label('Title (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\RichEditor::make('content.id')
                                                            ->label('Content (Indonesian)')
                                                            ->required()
                                                            ->maxLength(65535),
                                                    ]),
                                            ])
                                            ->columnSpanFull(),

                                        Forms\Components\TextInput::make('slug')
                                            ->required()
                                            ->maxLength(255)
                                            ->unique(HeroSection::class, 'slug', ignoreRecord: true)
                                            ->disabled(),

                                    ]),

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
                                    ]),
                            ])
                            ->columnSpan(2),

                        Forms\Components\Section::make('Category')
                            ->schema([
                                Forms\Components\Select::make('hero_section_category_id')
                                    ->relationship('category', 'name')
                                    ->required()
                                    ->createOptionForm([
                                        Forms\Components\TextInput::make('name')
                                            ->required()
                                            ->maxLength(255)
                                            ->live(onBlur: true)
                                            ->afterStateUpdated(fn (string $state, callable $set) =>
                                                $set('slug', Str::slug($state))
                                            ),
                                        Forms\Components\TextInput::make('slug')
                                            ->required()
                                            ->maxLength(255)
                                            ->unique('hero_section_categories', 'slug'),
                                    ])
                                    ->preload(),

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

                Tables\Columns\TextColumn::make('title')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('category.name')
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
            'index' => Pages\ListHeroSection::route('/'),
            'create' => Pages\CreateHeroSection::route('/create'),
            'edit' => Pages\EditHeroSection::route('/{record}/edit'),
        ];
    }
}
