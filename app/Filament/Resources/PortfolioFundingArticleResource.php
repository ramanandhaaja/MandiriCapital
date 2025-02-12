<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortfolioFundingArticleResource\Pages;
use App\Models\PortfolioFundingArticle;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PortfolioFundingArticleResource extends Resource
{
    protected static ?string $navigationGroup = 'Investment Management';
    protected static bool $shouldRegisterNavigation = true;
    protected static ?bool $isNavigationGroupCollapsed = true;

    protected static ?string $model = PortfolioFundingArticle::class;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?int $navigationSort = 35;

    protected static ?string $navigationLabel = 'Funding Category';

    protected static ?string $modelLabel = 'Funding Category';

    protected static ?string $pluralModelLabel = 'Funding Category';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make()
                            ->schema([
                                Forms\Components\Tabs::make('Content Translations')
                                    ->tabs([
                                        Forms\Components\Tabs\Tab::make('English')
                                            ->schema([
                                                Forms\Components\TextInput::make('title.en')
                                                    ->label('Title (English)')
                                                    ->required()
                                                    ->maxLength(255)
                                                    ->live(onBlur: true)
                                                    ->columnSpanFull(),

                                                Forms\Components\RichEditor::make('content.en')
                                                    ->label('Content (English)')
                                                    ->required()
                                                    ->maxLength(65535)
                                                    ->columnSpanFull(),
                                            ]),

                                        Forms\Components\Tabs\Tab::make('Indonesian')
                                            ->schema([
                                                Forms\Components\TextInput::make('title.id')
                                                    ->label('Title (Indonesian)')
                                                    ->required()
                                                    ->maxLength(255)
                                                    ->live(onBlur: true)
                                                    ->columnSpanFull(),

                                                Forms\Components\RichEditor::make('content.id')
                                                    ->label('Content (Indonesian)')
                                                    ->required()
                                                    ->maxLength(65535)
                                                    ->columnSpanFull(),
                                            ]),
                                    ])
                                    ->columnSpanFull(),
                            ])
                            ->columns(2),
                    ])
                    ->columnSpan(['lg' => 2]),





                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make('Article Sub Items')
                            ->schema([
                                Forms\Components\HasManyRepeater::make('subArticles')
                                    ->relationship('subArticles')
                                    ->schema([
                                        Forms\Components\Tabs::make('Sub Content Translations')
                                            ->tabs([
                                                Forms\Components\Tabs\Tab::make('English')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('title.en')
                                                            ->label('Title (English)')
                                                            ->required()
                                                            ->maxLength(255)
                                                            ->columnSpanFull(),

                                                        Forms\Components\RichEditor::make('content.en')
                                                            ->label('Content (English)')
                                                            ->required()
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),
                                                    ]),

                                                Forms\Components\Tabs\Tab::make('Indonesian')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('title.id')
                                                            ->label('Title (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255)
                                                            ->columnSpanFull(),

                                                        Forms\Components\RichEditor::make('content.id')
                                                            ->label('Content (Indonesian)')
                                                            ->required()
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),
                                                    ]),
                                            ])
                                            ->columnSpanFull(),

                                        Forms\Components\Grid::make(3)
                                            ->schema([
                                                Forms\Components\FileUpload::make('image_path')
                                                    ->image()
                                                    ->disk('public')
                                                    ->directory('portfolios'),

                                                Forms\Components\TextInput::make('order')
                                                    ->numeric()
                                                    ->default(0),
                                            ]),
                                        Forms\Components\Toggle::make('is_large')
                                            ->default(true)
                                            ->inline(false),

                                        Forms\Components\Toggle::make('is_active')
                                            ->default(true)
                                            ->inline(false),
                                    ])
                                    ->orderColumn('order')
                                    ->defaultItems(0)
                                    ->reorderable()
                                    ->columnSpanFull()
                            ])
                    ])
                    ->columnSpan(['lg' => 2]),
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
                    ->limit(50)
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
            'index' => Pages\ListPortfolioFundingArticle::route('/'),
            'create' => Pages\CreatePortfolioFundingArticle::route('/create'),
            'edit' => Pages\EditPortfolioFundingArticle::route('/{record}/edit'),
        ];
    }
}
