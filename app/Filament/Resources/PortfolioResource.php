<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortfolioResource\Pages;
use App\Models\Portfolio;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PortfolioResource extends Resource
{
    protected static ?string $model = Portfolio::class;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Investment Management';
    protected static ?int $navigationSort = 33;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make()
                            ->schema([
                                Forms\Components\Grid::make(2)
                                    ->schema([
                                        Forms\Components\TextInput::make('name')
                                            ->required()
                                            ->maxLength(255)
                                            ->live(onBlur: true)
                                            ->afterStateUpdated(
                                                fn(string $state, callable $set) =>
                                                $set('slug', Str::slug($state))
                                            ),

                                        Forms\Components\TextInput::make('slug')
                                            ->required()
                                            ->maxLength(255)
                                            ->disabled()
                                            ->unique(Portfolio::class, 'slug', ignoreRecord: true),
                                    ]),

                                Forms\Components\Tabs::make('Content Translations')
                                    ->tabs([
                                        Forms\Components\Tabs\Tab::make('English')
                                            ->schema([
                                                Forms\Components\RichEditor::make('description.en')
                                                    ->label('Description (English)')
                                                    ->required()
                                                    ->maxLength(65535)
                                                    ->columnSpanFull(),

                                                Forms\Components\Grid::make(2)
                                                    ->schema([
                                                        Forms\Components\TextInput::make('stage.en')
                                                            ->label('Stage (English)')
                                                            ->required()
                                                            ->maxLength(255),

                                                        Forms\Components\TextInput::make('head_office.en')
                                                            ->label('Head Office (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                    ]),

                                                Forms\Components\TextInput::make('sector.en')
                                                    ->label('Sector (English)')
                                                    ->required()
                                                    ->maxLength(255)
                                                    ->columnSpanFull(),
                                            ]),

                                        Forms\Components\Tabs\Tab::make('Indonesian')
                                            ->schema([
                                                Forms\Components\RichEditor::make('description.id')
                                                    ->label('Description (Indonesian)')
                                                    ->required()
                                                    ->maxLength(65535)
                                                    ->columnSpanFull(),

                                                Forms\Components\Grid::make(2)
                                                    ->schema([
                                                        Forms\Components\TextInput::make('stage.id')
                                                            ->label('Stage (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),

                                                        Forms\Components\TextInput::make('head_office.id')
                                                            ->label('Head Office (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                    ]),

                                                Forms\Components\TextInput::make('sector.id')
                                                    ->label('Sector (Indonesian)')
                                                    ->required()
                                                    ->maxLength(255)
                                                    ->columnSpanFull(),
                                            ]),
                                    ])
                                    ->columnSpanFull(),

                                Forms\Components\Grid::make(2)
                                    ->schema([
                                        Forms\Components\TextInput::make('ceo_name')
                                            ->required()
                                            ->maxLength(255),

                                        Forms\Components\TextInput::make('year_invested')
                                            ->required()
                                            ->maxLength(255),
                                    ]),

                                Forms\Components\Grid::make(2)
                                    ->schema([
                                        Forms\Components\TextInput::make('instagram_url')
                                            ->required()
                                            ->url()
                                            ->maxLength(255),

                                        Forms\Components\TextInput::make('linkedin_url')
                                            ->required()
                                            ->maxLength(255),
                                    ]),
                                Forms\Components\Grid::make(2)
                                    ->schema([
                                        Forms\Components\TextInput::make('website_url')
                                            ->required()
                                            ->url()
                                            ->maxLength(255),

                                    ]),
                            ])
                            ->columns(2),

                        Forms\Components\Section::make('Image')
                            ->schema([
                                Forms\Components\FileUpload::make('image_path')
                                    ->required()
                                    ->image()
                                    ->disk('public')
                                    ->directory('portfolios')
                                    ->visibility('public')
                                    ->columnSpanFull(),
                                Forms\Components\FileUpload::make('icon')
                                    ->required()
                                    ->image()
                                    ->disk('public')
                                    ->directory('portfolios')
                                    ->visibility('public')
                                    ->columnSpanFull(),
                                Forms\Components\FileUpload::make('highlight_image')
                                    ->image()
                                    ->disk('public')
                                    ->directory('portfolios')
                                    ->visibility('public')
                                    ->columnSpanFull(),
                            ]),
                    ])
                    ->columnSpan(['lg' => 2]),

                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make('Category')
                            ->schema([
                                Forms\Components\Select::make('portfolio_category_id')
                                    ->relationship('category', 'name')
                                    ->required()
                                    ->createOptionForm([
                                        Forms\Components\TextInput::make('name')
                                            ->required()
                                            ->maxLength(255)
                                            ->live(onBlur: true)
                                            ->afterStateUpdated(
                                                fn(string $state, callable $set) =>
                                                $set('slug', Str::slug($state))
                                            ),
                                        Forms\Components\TextInput::make('slug')
                                            ->required()
                                            ->maxLength(255)
                                            ->unique('portfolio_categories', 'slug'),
                                    ])
                                    ->preload(),
                                Forms\Components\TextInput::make('order')
                                    ->maxLength(255)
                            ]),
                    ])
                    ->columnSpan(['lg' => 1]),
            ])
            ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('order')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image_path')
                    ->disk('public')
                    ->height(50),


                Tables\Columns\TextColumn::make('name')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('category.name')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('stage')
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
            'index' => Pages\ListPortfolios::route('/'),
            'create' => Pages\CreatePortfolio::route('/create'),
            'edit' => Pages\EditPortfolio::route('/{record}/edit'),
        ];
    }
}
