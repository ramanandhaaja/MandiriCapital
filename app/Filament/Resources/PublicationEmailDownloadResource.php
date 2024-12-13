<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PublicationEmailDownloadResource\Pages;
use App\Models\PublicationEmailDownload;
use Filament\Actions;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;

class PublicationEmailDownloadResource extends Resource
{
    protected static ?string $model = PublicationEmailDownload::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';
    protected static ?string $navigationGroup = 'Publication Management';
    protected static ?string $navigationLabel = 'Email Downloads';
    protected static ?int $navigationSort = 62;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('company_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('company_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([

            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\BulkAction::make('download_selected')
                        ->label('Download Selected')
                        ->icon('heroicon-o-envelope')
                        ->color('success')
                        ->requiresConfirmation()
                        ->action(function (Collection $records) {
                            $headers = [
                                'Content-Type' => 'text/csv',
                                'Content-Disposition' => 'attachment; filename="selected_email_downloads.csv"',
                            ];

                            $callback = function() use ($records) {
                                $handle = fopen('php://output', 'w');

                                // Add headers
                                fputcsv($handle, ['Name', 'Company Name', 'Email', 'Created At']);

                                // Add data rows
                                foreach ($records as $record) {
                                    fputcsv($handle, [
                                        $record->name,
                                        $record->company_name,
                                        $record->email,
                                        $record->created_at
                                    ]);
                                }

                                fclose($handle);
                            };

                            return response()->stream($callback, 200, $headers);
                        }),
                ]),
            ])
            ->headerActions([
                Tables\Actions\Action::make('download_all')
                    ->label('Download All')
                    ->action(function () {
                        $downloads = PublicationEmailDownload::all();

                        $headers = [
                            'Content-Type' => 'text/csv',
                            'Content-Disposition' => 'attachment; filename="publication_email_downloads.csv"',
                        ];

                        $callback = function() use ($downloads) {
                            $handle = fopen('php://output', 'w');

                            // Add headers
                            fputcsv($handle, ['Name', 'Company Name', 'Email', 'Created At']);

                            // Add data rows
                            foreach ($downloads as $download) {
                                fputcsv($handle, [
                                    $download->name,
                                    $download->company_name,
                                    $download->email,
                                    $download->created_at
                                ]);
                            }

                            fclose($handle);
                        };

                        return response()->stream($callback, 200, $headers);
                    })
                    ->color('success')
                    ->icon('heroicon-o-envelope')
                    ->requiresConfirmation(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPublicationEmailDownloads::route('/'),
            'create' => Pages\CreatePublicationEmailDownload::route('/create'),
            'edit' => Pages\EditPublicationEmailDownload::route('/{record}/edit'),
            'download' => Pages\DownloadPublicationEmailDownloads::route('/download'),
        ];
    }
}
