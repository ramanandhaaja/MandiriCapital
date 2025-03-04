<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutMandiriEcosystemResource\Pages;
use App\Models\AboutMandiriEcosystem;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class AboutMandiriEcosystemResource extends Resource
{
    protected static ?string $model = AboutMandiriEcosystem::class;

    protected static ?string $navigationIcon = 'heroicon-o-calculator';

    protected static ?string $navigationGroup = 'Our Identity Management';

    protected static ?string $navigationLabel = 'Mandiri Ecosystem';

    protected static ?string $modelLabel = 'Mandiri Ecosystem';

    protected static ?string $pluralModelLabel = 'Mandiri Ecosystems';

    protected static ?int $navigationSort = 16;

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
                                        Forms\Components\Grid::make(2)
                                            ->schema([
                                                Forms\Components\Tabs::make('Translations')
                                                    ->tabs([
                                                        Forms\Components\Tabs\Tab::make('English')
                                                            ->schema([
                                                                Forms\Components\TextInput::make('name')
                                                                    ->label('Name')
                                                                    ->required()
                                                                    ->maxLength(255)
                                                                    ->live(onBlur: true)
                                                                    ->afterStateUpdated(
                                                                        fn(string $state, callable $set) =>
                                                                        $set('slug', Str::slug($state))
                                                                    ),
                                                                Forms\Components\TextInput::make('title.en')
                                                                    ->label('Title (English)')
                                                                    ->required()
                                                                    ->maxLength(255)
                                                                    ->live(onBlur: true),
                                                                Forms\Components\RichEditor::make('content.en')
                                                                    ->label('Content (English)')
                                                                    ->required()
                                                                    ->maxLength(65535),
                                                            ]),
                                                        Forms\Components\Tabs\Tab::make('Indonesian')
                                                            ->schema([
                                                                Forms\Components\TextInput::make('name')
                                                                    ->label('Name')
                                                                    ->required()
                                                                    ->maxLength(255)
                                                                    ->live(onBlur: true)
                                                                    ->afterStateUpdated(
                                                                        fn(string $state, callable $set) =>
                                                                        $set('slug', Str::slug($state))
                                                                    ),
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
                                            ]),

                                        Forms\Components\Grid::make(2)
                                            ->schema([
                                                Forms\Components\TextInput::make('slug')
                                                    ->required()
                                                    ->maxLength(255)
                                                    ->disabled()
                                                    ->unique(AboutMandiriEcosystem::class, 'slug', ignoreRecord: true),


                                            ]),

                                    ])
                                    ->columns(2),

                                Forms\Components\Section::make('Mouse-Hover')
                                    ->schema([
                                        Forms\Components\Tabs::make('Hover Translations')
                                            ->tabs([
                                                Forms\Components\Tabs\Tab::make('English')
                                                    ->schema([
                                                        Forms\Components\RichEditor::make('hover_focus_area.en')
                                                            ->label('Hover Focus Area (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),
                                                        Forms\Components\RichEditor::make('hover_content.en')
                                                            ->label('Hover Content (English)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),
                                                    ]),
                                                Forms\Components\Tabs\Tab::make('Indonesian')
                                                    ->schema([
                                                        Forms\Components\RichEditor::make('hover_focus_area.id')
                                                            ->label('Hover Focus Area (Indonesian)')
                                                            ->maxLength(65535)
                                                            ->columnSpanFull(),
                                                        Forms\Components\RichEditor::make('hover_content.id')
                                                            ->label('Hover Content (Indonesian)')
                                                            ->maxLength(65535)
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
                                    Forms\Components\Select::make('about_ecosystem_category_id')
                                        ->label('Category')
                                        ->relationship('category', 'name')
                                        ->required()
                                        ->preload()
                                        ->searchable(),

                                ]),
                                Forms\Components\Section::make('Headline')
                                    ->schema([
                                        Forms\Components\Checkbox::make('is_headline')
                                            ->label('Headline')
                                            ->default(true)
                                            ->columnSpanFull(),
                                    ]),
                                Forms\Components\Section::make('Tag')
                                    ->schema([
                                        Forms\Components\Grid::make()
                                            ->schema([
                                                Forms\Components\Checkbox::make('is_domestic')
                                                    ->label('Domestic')
                                                    ->default(true),
                                                Forms\Components\Checkbox::make('is_international')
                                                    ->label('International')
                                                    ->default(false),
                                            ])
                                            ->columns(2),
                                    ]),
                                Forms\Components\Section::make('Image')
                                    ->schema([
                                        Forms\Components\FileUpload::make('image_path')
                                            ->image()
                                            ->disk('public')
                                            ->directory('our-identity')
                                            ->visibility('public')
                                            ->columnSpanFull(),
                                    ]),
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
            'index' => Pages\ListAboutMandiriEcosystem::route('/'),
            'edit' => Pages\EditAboutMandiriEcosystem::route('/{record}/edit'),
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
