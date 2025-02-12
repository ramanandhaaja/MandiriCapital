<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutMCIIntroResource\Pages;
use App\Models\AboutMCIIntro;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class AboutMCIIntroResource extends Resource
{
    protected static ?string $model = AboutMCIIntro::class;

    protected static ?string $navigationIcon = 'heroicon-o-calculator';

    protected static ?string $navigationGroup = 'Our Identity Management';

    protected static ?string $navigationLabel = 'About MCI Intro';

    protected static ?string $modelLabel = 'About MCI Intro';

    protected static ?string $pluralModelLabel = 'About MCI Intro';

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
                                        Forms\Components\Tabs::make('IntroTranslations')
                                            ->tabs([
                                                Forms\Components\Tabs\Tab::make('English')
                                                    ->schema([
                                                        Forms\Components\RichEditor::make('intro.en')
                                                            ->label('Intro (English)')
                                                            ->required()
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\RichEditor::make('headline.en')
                                                            ->label('Headline (English)')
                                                            ->required()
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),
                                                    ]),
                                                Forms\Components\Tabs\Tab::make('Indonesian')
                                                    ->schema([
                                                        Forms\Components\RichEditor::make('intro.id')
                                                            ->label('Intro (Indonesian)')
                                                            ->required()
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\RichEditor::make('headline.id')
                                                            ->label('Headline (Indonesian)')
                                                            ->required()
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),
                                                    ]),
                                            ]),
                                    ])
                            ])
                            ->columnSpan(2),

                        Forms\Components\Group::make()
                            ->schema([
                                Forms\Components\Section::make()
                                    ->schema([
                                        Forms\Components\Tabs::make('Article1Translations')
                                            ->tabs([
                                                Forms\Components\Tabs\Tab::make('English')
                                                    ->schema([
                                                        Forms\Components\RichEditor::make('articletitle1.en')
                                                            ->label('Article 1 Title (English)')
                                                            ->required()
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\RichEditor::make('article1.en')
                                                            ->label('Article 1 Content (English)')
                                                            ->required()
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),
                                                    ]),
                                                Forms\Components\Tabs\Tab::make('Indonesian')
                                                    ->schema([
                                                        Forms\Components\RichEditor::make('articletitle1.id')
                                                            ->label('Article 1 Title (Indonesian)')
                                                            ->required()
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\RichEditor::make('article1.id')
                                                            ->label('Article 1 Content (Indonesian)')
                                                            ->required()
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),
                                                    ]),
                                            ]),
                                    ])
                            ])
                            ->columnSpan(2),

                        Forms\Components\Section::make('Icon')
                            ->schema([
                                Forms\Components\FileUpload::make('icon_article1')
                                    ->required()
                                    ->acceptedFileTypes(['image/*'])
                                    ->maxSize(50 * 1024)
                                    ->disk('public')
                                    ->directory('hero-sections')
                                    ->visibility('public')
                                    ->columnSpanFull(),
                            ])
                            ->columnSpan(1),

                        Forms\Components\Group::make()
                            ->schema([
                                Forms\Components\Section::make()
                                    ->schema([
                                        Forms\Components\Tabs::make('Article2Translations')
                                            ->tabs([
                                                Forms\Components\Tabs\Tab::make('English')
                                                    ->schema([
                                                        Forms\Components\RichEditor::make('articletitle2.en')
                                                            ->label('Article 2 Title (English)')
                                                            ->required()
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\RichEditor::make('article2.en')
                                                            ->label('Article 2 Content (English)')
                                                            ->required()
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),
                                                    ]),
                                                Forms\Components\Tabs\Tab::make('Indonesian')
                                                    ->schema([
                                                        Forms\Components\RichEditor::make('articletitle2.id')
                                                            ->label('Article 2 Title (Indonesian)')
                                                            ->required()
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\RichEditor::make('article2.id')
                                                            ->label('Article 2 Content (Indonesian)')
                                                            ->required()
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),
                                                    ]),
                                            ]),
                                    ])
                            ])
                            ->columnSpan(2),

                        Forms\Components\Section::make('Icon')
                            ->schema([
                                Forms\Components\FileUpload::make('icon_article2')
                                    ->required()
                                    ->acceptedFileTypes(['image/*'])
                                    ->maxSize(50 * 1024)
                                    ->disk('public')
                                    ->directory('hero-sections')
                                    ->visibility('public')
                                    ->columnSpanFull(),
                            ])
                            ->columnSpan(1),

                        Forms\Components\Group::make()
                            ->schema([
                                Forms\Components\Section::make()
                                    ->schema([
                                        Forms\Components\Tabs::make('Article3Translations')
                                            ->tabs([
                                                Forms\Components\Tabs\Tab::make('English')
                                                    ->schema([
                                                        Forms\Components\RichEditor::make('articletitle3.en')
                                                            ->label('Article 3 Title (English)')
                                                            ->required()
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\RichEditor::make('article3.en')
                                                            ->label('Article 3 Content (English)')
                                                            ->required()
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),
                                                    ]),
                                                Forms\Components\Tabs\Tab::make('Indonesian')
                                                    ->schema([
                                                        Forms\Components\RichEditor::make('articletitle3.id')
                                                            ->label('Article 3 Title (Indonesian)')
                                                            ->required()
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),

                                                        Forms\Components\RichEditor::make('article3.id')
                                                            ->label('Article 3 Content (Indonesian)')
                                                            ->required()
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),
                                                    ]),
                                            ]),
                                    ])
                            ])
                            ->columnSpan(2),

                        Forms\Components\Section::make('Icon')
                            ->schema([
                                Forms\Components\FileUpload::make('icon_article3')
                                    ->required()
                                    ->acceptedFileTypes(['image/*'])
                                    ->maxSize(50 * 1024)
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

                Tables\Columns\TextColumn::make('intro')
                    ->sortable()
                    ->searchable()
                    ->limit(50),

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
            'index' => Pages\ListAboutMCIIntro::route('/'),
            'edit' => Pages\EditAboutMCIIntro::route('/{record}/edit'),
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
