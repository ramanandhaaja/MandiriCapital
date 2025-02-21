<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeEmailInvestorResource\Pages;
use App\Models\HomeEmailInvestor;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class HomeEmailInvestorResource extends Resource
{
    protected static ?string $model = HomeEmailInvestor::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationGroup = 'Home Management';

    protected static ?string $navigationLabel = 'Email Form Investor';

    protected static ?int $navigationSort = 16;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make()
                    ->schema([
                        Forms\Components\Group::make()
                            ->schema([
                                Forms\Components\Section::make('Footer Translations')
                                    ->schema([
                                        Forms\Components\Tabs::make('Translations')
                                            ->tabs([
                                                Forms\Components\Tabs\Tab::make('English')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('title.en')
                                                            ->label('Title (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\RichEditor::make('subtitle.en')
                                                            ->label('Subtitle (English)')
                                                            ->required()
                                                            ->maxLength(65535),
                                                        Forms\Components\TextInput::make('fullname.en')
                                                            ->label('Fullname (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('subject.en')
                                                            ->label('Subject (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('email.en')
                                                            ->label('Email (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('phone.en')
                                                            ->label('Phone (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('company.en')
                                                            ->label('Company (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('message.en')
                                                            ->label('Message (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('cancel.en')
                                                            ->label('Cancel (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('submit.en')
                                                            ->label('Submit (English)')
                                                            ->required()
                                                            ->maxLength(255),
                                                    ]),
                                                Forms\Components\Tabs\Tab::make('Indonesian')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('title.id')
                                                            ->label('Title (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\RichEditor::make('subtitle.id')
                                                            ->label('Subtitle (Indonesian)')
                                                            ->required()
                                                            ->maxLength(65535),
                                                        Forms\Components\TextInput::make('fullname.id')
                                                            ->label('Fullname (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('subject.id')
                                                            ->label('Subject (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('email.id')
                                                            ->label('Email (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('phone.id')
                                                            ->label('Phone (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('company.id')
                                                            ->label('Company (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('message.id')
                                                            ->label('Message (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('cancel.id')
                                                            ->label('Cancel (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                        Forms\Components\TextInput::make('submit.id')
                                                            ->label('Submit (Indonesian)')
                                                            ->required()
                                                            ->maxLength(255),
                                                    ]),
                                            ]),
                                    ]),
                            ])
                            ->columnSpan(2),
                        Forms\Components\Group::make()
                            ->schema([

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
            'index' => Pages\ListHomeEmailInvestor::route('/'),
            'create' => Pages\CreateHomeEmailInvestor::route('/create'),
            'edit' => Pages\EditHomeEmailInvestor::route('/{record}/edit'),
        ];
    }
}
