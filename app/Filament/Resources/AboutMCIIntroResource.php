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
                                        Forms\Components\RichEditor::make('intro')
                                            ->maxLength(65535)
                                            ->columnSpanFull(),

                                        Forms\Components\RichEditor::make('headline')
                                            ->maxLength(65535)
                                            ->columnSpanFull(),
                                    ]),

                            ])
                            ->columnSpan(2),

                        Forms\Components\Group::make()
                            ->schema([
                                Forms\Components\Section::make()
                                    ->schema([
                                        Forms\Components\RichEditor::make('articletitle1')
                                            ->maxLength(65535)
                                            ->columnSpanFull()
                                            ->label('Artikel 1'),

                                        Forms\Components\RichEditor::make('article1')
                                            ->maxLength(65535)
                                            ->columnSpanFull()
                                            ->label('Content Artikel 1'),
                                    ]),
                            ])
                            ->columnSpan(2),

                        Forms\Components\Section::make('Icon')
                            ->schema([
                                Forms\Components\FileUpload::make('icon_article1')
                                    ->required()
                                    ->acceptedFileTypes(['image/*'])
                                    ->maxSize(50 * 1024) // 50MB max file size
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
                                        Forms\Components\RichEditor::make('articletitle2')
                                            ->maxLength(65535)
                                            ->columnSpanFull()
                                            ->label('Artikel 2'),

                                        Forms\Components\RichEditor::make('article2')
                                            ->maxLength(65535)
                                            ->columnSpanFull()
                                            ->label('Content Artikel 2'),
                                    ]),
                            ])
                            ->columnSpan(2),

                        Forms\Components\Section::make('Icon')
                            ->schema([
                                Forms\Components\FileUpload::make('icon_article2')
                                    ->required()
                                    ->acceptedFileTypes(['image/*'])
                                    ->maxSize(50 * 1024) // 50MB max file size
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
                                        Forms\Components\RichEditor::make('articletitle3')
                                            ->maxLength(65535)
                                            ->columnSpanFull()
                                            ->label('Artikel 3'),

                                        Forms\Components\RichEditor::make('article3')
                                            ->maxLength(65535)
                                            ->columnSpanFull()
                                            ->label('Content Artikel 3'),
                                    ]),
                            ])
                            ->columnSpan(2),

                        Forms\Components\Section::make('Icon')
                            ->schema([
                                Forms\Components\FileUpload::make('icon_article3')
                                    ->required()
                                    ->acceptedFileTypes(['image/*'])
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
