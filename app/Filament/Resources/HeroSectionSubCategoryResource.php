<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HeroSectionSubCategoryResource\Pages;
use App\Models\HeroSectionSubCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class HeroSectionSubCategoryResource extends Resource
{
    protected static ?string $model = HeroSectionSubCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationGroup = 'Master Data Management';

    protected static ?string $navigationLabel = 'Sub-Menu Category';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make(3)
                    ->schema([
                        Forms\Components\Group::make()
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
                                                            ->afterStateUpdated(fn (string $state, callable $set) =>
                                                                $set('slug', Str::slug($state))
                                                            ),
                                                        Forms\Components\RichEditor::make('headline_text.en')
                                                            ->label('Headline Text (English)')
                                                            ->maxLength(65535),
                                                    ]),
                                                Forms\Components\Tabs\Tab::make('Indonesian')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('name.id')
                                                            ->label('Name (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\RichEditor::make('headline_text.id')
                                                            ->label('Headline Text (Indonesian)')
                                                            ->maxLength(65535),
                                                    ]),
                                            ]),

                                        Forms\Components\Checkbox::make('active')
                                            ->label('Active')
                                            ->default(true),
                                        Forms\Components\TextInput::make('slug')
                                            ->required()
                                            ->maxLength(255)
                                            ->unique(HeroSectionSubCategory::class, 'slug', ignoreRecord: true)
                                            ->disabled(),

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
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('name')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('category.name')
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
            'index' => Pages\ListHeroSectionSubCategory::route('/'),
            'create' => Pages\CreateHeroSectionSubCategory::route('/create'),
            'edit' => Pages\EditHeroSectionSubCategory::route('/{record}/edit'),
        ];
    }
}
