<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlatformValueCreationYaxisResource\Pages;
use App\Models\PlatformValueCreationYaxis;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PlatformValueCreationYaxisResource extends Resource
{
    protected static ?string $model = PlatformValueCreationYaxis::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Value Creation Management';

    protected static ?string $navigationLabel = 'Value Creation Yaxis Program';

    protected static ?string $modelLabel = 'Value Creation Yaxis Program';

    protected static ?string $pluralModelLabel = 'Value Creation Yaxis Program';

    protected static ?int $navigationSort = 44;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make()
                    ->schema([
                        Forms\Components\Group::make()
                            ->schema([
                                Forms\Components\Tabs::make('content_translations')
                                    ->tabs([
                                        Forms\Components\Tabs\Tab::make('English')
                                            ->schema([
                                                Forms\Components\RichEditor::make('hero_text.en')
                                                    ->label('Content Frontpage (English)')
                                                    ->required()
                                                    ->maxLength(65535)
                                                    ->columnSpanFull(),
                                                Forms\Components\RichEditor::make('headline.en')
                                                    ->label('Headline (English)')
                                                    ->maxLength(65535)
                                                    ->columnSpanFull(),
                                            ]),
                                        Forms\Components\Tabs\Tab::make('Indonesian')
                                            ->schema([
                                                Forms\Components\RichEditor::make('hero_text.id')
                                                    ->label('Content Frontpage (Indonesian)')
                                                    ->required()
                                                    ->maxLength(65535)
                                                    ->columnSpanFull(),
                                                Forms\Components\RichEditor::make('headline.id')
                                                    ->label('Headline (Indonesian)')
                                                    ->maxLength(65535)
                                                    ->columnSpanFull(),
                                            ]),
                                    ])->columnSpanFull(),

                                    Forms\Components\Section::make('Footer')
                                    ->schema([
                                    Forms\Components\Tabs::make('footer_translations')
                                    ->tabs([
                                        Forms\Components\Tabs\Tab::make('English')
                                            ->schema([
                                                Forms\Components\TextInput::make('footer_text.en')
                                                    ->label('Footer Text (English)')
                                                    ->maxLength(255)
                                                    ->columnSpanFull(),
                                            ]),
                                        Forms\Components\Tabs\Tab::make('Indonesian')
                                            ->schema([
                                                Forms\Components\TextInput::make('footer_text.id')
                                                    ->label('Footer Text (Indonesian)')
                                                    ->maxLength(255)
                                                    ->columnSpanFull(),
                                            ]),
                                    ])->columnSpanFull(),
                                    ])->columns(2),

                            ])
                            ->columnSpan(2),

                        Forms\Components\Section::make('Image')
                            ->schema([
                                Forms\Components\FileUpload::make('hero_image')
                                    ->required()
                                    ->label('Hero Image')
                                    ->image()
                                    ->disk('public')
                                    ->directory('platforms')
                                    ->visibility('public')
                                    ->columnSpanFull(),
                                Forms\Components\FileUpload::make('image_path1')
                                    ->label('Mid Section Image 1')
                                    ->image()
                                    ->disk('public')
                                    ->directory('platforms')
                                    ->visibility('public')
                                    ->columnSpanFull(),
                                Forms\Components\FileUpload::make('image_path2')
                                    ->label('Mid Section Image 2')
                                    ->image()
                                    ->disk('public')
                                    ->directory('platforms')
                                    ->visibility('public')
                                    ->columnSpanFull(),
                                Forms\Components\FileUpload::make('image_path3')
                                    ->label('Mid Section Image 3')
                                    ->image()
                                    ->disk('public')
                                    ->directory('platforms')
                                    ->visibility('public')
                                    ->columnSpanFull(),
                                Forms\Components\FileUpload::make('image_path4')
                                    ->label('Mid Section Image 4')
                                    ->image()
                                    ->disk('public')
                                    ->directory('platforms')
                                    ->visibility('public')
                                    ->columnSpanFull(),
                                Forms\Components\FileUpload::make('image_path5')
                                    ->label('Mid Section Image 5')
                                    ->image()
                                    ->disk('public')
                                    ->directory('platforms')
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
                Tables\Columns\ImageColumn::make('logo')
                    ->disk('public')
                    ->height(50),

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
            'index' => Pages\ListPlatformValueCreationYaxis::route('/'),
            'create' => Pages\CreatePlatformValueCreationYaxis::route('/create'),
            'edit' => Pages\EditPlatformValueCreationYaxis::route('/{record}/edit'),
        ];
    }
}
