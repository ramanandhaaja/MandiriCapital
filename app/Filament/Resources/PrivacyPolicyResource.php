<?php

namespace App\Filament\Resources;

use App\Filament\Resources\privacyPolicyResource\Pages;
use App\Models\PrivacyPolicy;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PrivacyPolicyResource extends Resource
{
    protected static ?string $model = PrivacyPolicy::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Privacy Policy Management';
    protected static ?string $navigationLabel = 'Privacy Policy';
    protected static ?string $modelLabel = 'Privacy Policy';
    protected static ?string $pluralModelLabel = 'Privacy Policies';
    protected static ?int $navigationSort = 85;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make()
                    ->schema([
                        Forms\Components\Section::make()
                            ->schema([
                                Forms\Components\Tabs::make('Translations')
                                    ->tabs([
                                        Forms\Components\Tabs\Tab::make('English')
                                            ->schema([
                                                Forms\Components\TextInput::make('description.en')
                                                    ->label('Description (English)')
                                                    ->required()
                                                    ->maxLength(255)
                                                    ->live(onBlur: true),
                                            ]),
                                        Forms\Components\Tabs\Tab::make('Indonesian')
                                            ->schema([
                                                Forms\Components\TextInput::make('description.id')
                                                    ->label('Description (Indonesian)')
                                                    ->required()
                                                    ->maxLength(255),
                                            ]),
                                    ]),

                                Forms\Components\TextInput::make('year')
                                    ->required()
                                    ->maxLength(255),
                            ])
                            ->columnSpan(2),
                            Forms\Components\Section::make('File')
                                    ->schema([
                                        Forms\Components\FileUpload::make('file_url')
                                            ->acceptedFileTypes(['application/pdf'])
                                            ->maxSize(50 * 1024) // 50MB max file size
                                            ->disk('public')
                                            ->directory('privacy-policies')
                                            ->visibility('public')
                                            ->columnSpanFull(),
                                    ])->columnSpan(1),
                    ])
                    ->columns(3)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('description')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('year')
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
        'index' => Pages\ListPrivacyPolicies::route('/'),
        'create' => Pages\CreatePrivacyPolicy::route('/create'),
        'edit' => Pages\EditPrivacyPolicy::route('/{record}/edit'),
    ];
}
}
