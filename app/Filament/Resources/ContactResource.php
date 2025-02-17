<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Models\Contact;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationGroup = 'Contact Management';

    protected static ?string $navigationLabel = 'Contact';

    protected static ?int $navigationSort = 80;

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

                                        Forms\Components\TextInput::make('email_form')
                                            ->columnSpanFull(),

                                        Forms\Components\TextInput::make('email_contact')
                                            ->columnSpanFull(),

                                        Forms\Components\TextInput::make('email_customer_report')
                                            ->columnSpanFull(),

                                        Forms\Components\TextInput::make('phone')
                                            ->columnSpanFull(),

                                        Forms\Components\TextInput::make('address')
                                            ->columnSpanFull(),


                                    ])
                                    ->columns(2),
                            ])
                            ->columnSpan(2),
                            Forms\Components\Group::make()
                            ->schema([
                                Forms\Components\Section::make('Contact Translations')
                                    ->schema([
                                        Forms\Components\Tabs::make('Translations')
                                            ->tabs([
                                                Forms\Components\Tabs\Tab::make('English')
                                                    ->schema([
                                                        Forms\Components\RichEditor::make('contact_title.en')
                                                            ->label('Contact Title (English)')
                                                            ->required()
                                                            ->maxLength(65535),
                                                        Forms\Components\RichEditor::make('map_title.en')
                                                            ->label('Map Title (English)')
                                                            ->required()
                                                            ->maxLength(65535),
                                                        Forms\Components\RichEditor::make('email_contact_title.en')
                                                            ->label('Email Contact Title (English)')
                                                            ->required()
                                                            ->maxLength(65535),
                                                        Forms\Components\RichEditor::make('email_customer_report_title.en')
                                                            ->label('Email Customer Report Title (English)')
                                                            ->required()
                                                            ->maxLength(65535),
                                                        Forms\Components\RichEditor::make('email_customer_report_tooltip.en')
                                                            ->label('Email Customer Report Tooltip (English)')
                                                            ->required()
                                                            ->maxLength(65535),
                                                        Forms\Components\RichEditor::make('phone_title.en')
                                                            ->label('Phone Title (English)')
                                                            ->required()
                                                            ->maxLength(65535),
                                                        Forms\Components\RichEditor::make('social_media_title.en')
                                                            ->label('Social Media Title (English)')
                                                            ->required()
                                                            ->maxLength(65535),
                                                    ]),
                                                Forms\Components\Tabs\Tab::make('Indonesian')
                                                    ->schema([
                                                        Forms\Components\RichEditor::make('contact_title.id')
                                                            ->label('Contact Title (Indonesian)')
                                                            ->required()
                                                            ->maxLength(65535),
                                                        Forms\Components\RichEditor::make('map_title.id')
                                                            ->label('Map Title (Indonesian)')
                                                            ->required()
                                                            ->maxLength(65535),
                                                            Forms\Components\RichEditor::make('email_contact_title.id')
                                                            ->label('Email Contact Title (Indonesian)')
                                                            ->required()
                                                            ->maxLength(65535),
                                                        Forms\Components\RichEditor::make('email_customer_report_title.id')
                                                            ->label('Email Customer Report Title (Indonesian)')
                                                            ->required()
                                                            ->maxLength(65535),
                                                        Forms\Components\RichEditor::make('email_customer_report_tooltip.id')
                                                            ->label('Email Customer Report Tooltip (Indonesian)')
                                                            ->required()
                                                            ->maxLength(65535),
                                                        Forms\Components\RichEditor::make('phone_title.id')
                                                            ->label('Phone Title (Indonesian)')
                                                            ->required()
                                                            ->maxLength(65535),
                                                        Forms\Components\RichEditor::make('social_media_title.id')
                                                            ->label('Social Media Title (Indonesian)')
                                                            ->required()
                                                            ->maxLength(65535),


                                                    ]),
                                            ]),
                                    ]),
                            ])
                            ->columnSpan(2),
                    ])
                    ->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('email')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('instagram')
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
            'index' => Pages\ListContact::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }
}
