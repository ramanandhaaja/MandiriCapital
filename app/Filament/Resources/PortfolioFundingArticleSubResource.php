<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortfolioFundingArticleSubResource\Pages;
use App\Models\PortfolioFundingArticleSub;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PortfolioFundingArticleSubResource extends Resource
{
    protected static ?string $navigationGroup = 'Investment Management';
    protected static bool $shouldRegisterNavigation = true;
    protected static ?bool $isNavigationGroupCollapsed = true;

    protected static ?string $model = PortfolioFundingArticleSub::class;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?int $navigationSort = 36;

    protected static ?string $navigationLabel = 'Funding List';

    protected static ?string $modelLabel = 'Funding List';

    protected static ?string $pluralModelLabel = 'Funding List';

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

                                                        Forms\Components\RichEditor::make('about_content_front.en')
                                                            ->label('Front Content (English)')
                                                            ->required()
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\TextInput::make('about_title.en')
                                                            ->label('About Title (English)')
                                                            ->maxLength(255)
                                                            ->live(onBlur: true)
                                                            ->columnSpanFull(),

                                                        Forms\Components\RichEditor::make('about_content.en')
                                                            ->label('About Content (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\TextInput::make('investment_thesis_title.en')
                                                            ->label('Investment Thesis Title (English)')
                                                            ->maxLength(255)
                                                            ->live(onBlur: true)
                                                            ->columnSpanFull(),

                                                        Forms\Components\RichEditor::make('investment_thesis_content.en')
                                                            ->label('Investment Thesis Content (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\TextInput::make('investor_title.en')
                                                            ->label('Investor Title (English)')
                                                            ->maxLength(255)
                                                            ->live(onBlur: true)
                                                            ->columnSpanFull(),

                                                        Forms\Components\TextInput::make('investment_criteria_title.en')
                                                            ->label('Investment Criteria Title (English)')
                                                            ->maxLength(255)
                                                            ->live(onBlur: true)
                                                            ->columnSpanFull(),

                                                            Forms\Components\TextInput::make('stage.en')
                                                            ->label('Stage (English)')
                                                            ->maxLength(255)
                                                            ->live(onBlur: true)
                                                            ->columnSpanFull(),

                                                            Forms\Components\TextInput::make('geography.en')
                                                            ->label('Geography (English)')
                                                            ->maxLength(255)
                                                            ->live(onBlur: true)
                                                            ->columnSpanFull(),

                                                            Forms\Components\TextInput::make('ticketsize.en')
                                                            ->label('Ticket Size (English)')
                                                            ->maxLength(255)
                                                            ->live(onBlur: true)
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

                                                        Forms\Components\RichEditor::make('about_content_front.id')
                                                            ->label('Front Content (Indonesian)')
                                                            ->required()
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                            Forms\Components\TextInput::make('about_title.id')
                                                            ->label('About Title (Indonesian)')
                                                            ->maxLength(255)
                                                            ->live(onBlur: true)
                                                            ->columnSpanFull(),

                                                        Forms\Components\RichEditor::make('about_content.id')
                                                            ->label('About Content (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\TextInput::make('investment_thesis_title.id')
                                                            ->label('Investment Thesis Title (Indonesian)')
                                                            ->maxLength(255)
                                                            ->live(onBlur: true)
                                                            ->columnSpanFull(),

                                                        Forms\Components\RichEditor::make('investment_thesis_content.id')
                                                            ->label('Investment Thesis Content (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\TextInput::make('investor_title.id')
                                                            ->label('Investor Title (Indonesian)')
                                                            ->maxLength(255)
                                                            ->live(onBlur: true)
                                                            ->columnSpanFull(),

                                                        Forms\Components\TextInput::make('investment_criteria_title.id')
                                                            ->label('Investment Criteria Title (Indonesian)')
                                                            ->maxLength(255)
                                                            ->live(onBlur: true)
                                                            ->columnSpanFull(),

                                                            Forms\Components\TextInput::make('stage.id')
                                                            ->label('Stage (Indonesian)')
                                                            ->maxLength(255)
                                                            ->live(onBlur: true)
                                                            ->columnSpanFull(),

                                                            Forms\Components\TextInput::make('geography.id')
                                                            ->label('Geography (Indonesian)')
                                                            ->maxLength(255)
                                                            ->live(onBlur: true)
                                                            ->columnSpanFull(),

                                                            Forms\Components\TextInput::make('ticketsize.id')
                                                            ->label('Ticket Size (Indonesian)')
                                                            ->maxLength(255)
                                                            ->live(onBlur: true)
                                                            ->columnSpanFull(),
                                                    ]),
                                            ])
                                            ->columnSpanFull(),
                                    ]),

                            ])
                            ->columns(2),
                    ])
                    ->columnSpan(['lg' => 2]),

                Forms\Components\Group::make()

                    ->schema([
                        Forms\Components\Section::make('Category')
                        ->schema([
                            Forms\Components\Select::make('article_id')
                        ->label('Category')
                        ->relationship('article', 'title')
                        ->required()
                        ->preload()
                        ->searchable(),

                        ]),

                        Forms\Components\Section::make('Image List')
                        ->schema([
                            Forms\Components\FileUpload::make('image_path')
                                ->image()
                                ->label('Logo')
                                ->disk('public')
                                ->directory('portfolios')
                                ->visibility('public')
                                ->columnSpanFull(),
                            Forms\Components\FileUpload::make('headline_url')
                                ->image()
                                ->label('Headline Image')
                                ->disk('public')
                                ->directory('portfolios')
                                ->visibility('public')
                                ->columnSpanFull(),
                            Forms\Components\FileUpload::make('investor1_url')
                                ->image()
                                ->label('Investor 1 Image')
                                ->disk('public')
                                ->directory('portfolios')
                                ->visibility('public')
                                ->columnSpanFull(),
                                Forms\Components\FileUpload::make('investor2_url')
                                ->image()
                                ->label('Investor 2 Image')
                                ->disk('public')
                                ->directory('portfolios')
                                ->visibility('public')
                                ->columnSpanFull(),
                                Forms\Components\FileUpload::make('investor3_url')
                                ->image()
                                ->label('Investor 3 Image')
                                ->disk('public')
                                ->directory('portfolios')
                                ->visibility('public')
                                ->columnSpanFull(),
                                Forms\Components\FileUpload::make('investor4_url')
                                ->image()
                                ->label('Investor 4 Image')
                                ->disk('public')
                                ->directory('portfolios')
                                ->visibility('public')
                                ->columnSpanFull(),
                                Forms\Components\FileUpload::make('investor5_url')
                                ->image()
                                ->label('Investor 5 Image')
                                ->disk('public')
                                ->directory('portfolios')
                                ->visibility('public')
                                ->columnSpanFull(),
                                Forms\Components\FileUpload::make('investor6_url')
                                ->image()
                                ->label('Investor 6 Image')
                                ->disk('public')
                                ->directory('portfolios')
                                ->visibility('public')
                                ->columnSpanFull(),


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
                Tables\Columns\ImageColumn::make('image_path')
                    ->disk('public'),

                Tables\Columns\TextColumn::make('title')
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
            'index' => Pages\ListPortfolioFundingArticleSub::route('/'),
            'create' => Pages\CreatePortfolioFundingArticleSub::route('/create'),
            'edit' => Pages\EditPortfolioFundingArticleSub::route('/{record}/edit'),
        ];
    }
}
