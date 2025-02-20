<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogPostResource\Pages;
use App\Models\BlogPost;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class BlogPostResource extends Resource
{
    protected static ?string $model = BlogPost::class;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationLabel = 'Media';
    protected static ?string $navigationGroup = 'Media Management';
    protected static ?int $navigationSort = 50;
    protected static ?string $modelLabel = 'Media';
    protected static ?string $pluralModelLabel = 'Media';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make()
                            ->schema([

                                Forms\Components\Select::make('user_id')
                                    ->relationship('user', 'name')
                                    ->default(Auth::id())
                                    ->disabled()
                                    ->required(),

                                Forms\Components\Grid::make(2)
                                    ->schema([
                                        Forms\Components\TextInput::make('title')
                                            ->required()
                                            ->live(onBlur: true)
                                            ->afterStateUpdated(
                                                fn(string $state, callable $set) =>
                                                $set('slug', Str::slug($state))
                                            ),

                                        Forms\Components\TextInput::make('slug')
                                            ->required()
                                            ->unique(BlogPost::class, 'slug', ignoreRecord: true),

                                    ]),
                                    Forms\Components\Grid::make(2)
                                    ->schema([
                                        Forms\Components\TextInput::make('author_name')
                                            ->live(onBlur: true),

                                        Forms\Components\TextInput::make('author_title')
                                            ->live(onBlur: true),

                                    ]),
                                Forms\Components\RichEditor::make('content_heading')
                                    ->label('Content Heading')
                                    ->placeholder('Enter the main heading for the content')
                                    ->columnSpanFull(),

                                Forms\Components\Checkbox::make('is_content_justified')
                                    ->label('Justify Content')
                                    ->default(false),

                                Forms\Components\RichEditor::make('content')
                                    ->required()
                                    ->columnSpanFull(),

                                Forms\Components\TextInput::make('media_source_url')
                                    ->label('Media Source URL')
                                    ->placeholder('Enter the source URL for the media')
                                    ->url()
                                    ->columnSpanFull(),

                                Forms\Components\TextInput::make('media_url')
                                    ->label('Media URL')
                                    ->placeholder('Enter YouTube or other media URL')
                                    ->url()
                                    ->columnSpanFull(),


                                Forms\Components\DateTimePicker::make('published_at')
                                    ->label('Publish Date')
                                    ->seconds(false)
                                    ->dehydrateStateUsing(fn($state) => $state ?? now()),

                                Forms\Components\Select::make('status')
                                    ->options([
                                        'draft' => 'Draft',
                                        'published' => 'Published',
                                        'archived' => 'Archived',
                                    ])
                                    ->default('draft')
                                    ->required(),
                            ])
                            ->columns(2),


                        /*
                        storage location
                        After implementing these changes, your image uploads should work properly. The images will be stored in storage/app/public/blog-images and will be accessible through /storage/blog-images in your public URL.
                        */
                        Forms\Components\Section::make('Image')
                            ->schema([
                                Forms\Components\FileUpload::make('front_image')
                                    ->image()
                                    ->disk('public')
                                    ->directory('blog-images')
                                    ->visibility('public')
                                    ->columnSpanFull(),

                                    Forms\Components\FileUpload::make('headline_image')
                                    ->image()
                                    ->disk('public')
                                    ->directory('blog-images')
                                    ->visibility('public')
                                    ->columnSpanFull(),

                                    Forms\Components\FileUpload::make('featured_image')
                                    ->image()
                                    ->disk('public')
                                    ->directory('blog-images')
                                    ->visibility('public')
                                    ->columnSpanFull(),

                                    Forms\Components\FileUpload::make('author_image')
                                    ->image()
                                    ->disk('public')
                                    ->directory('blog-images')
                                    ->visibility('public')
                                    ->columnSpanFull(),

                            ]),
                    ])
                    ->columnSpan(['lg' => 2]),

                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make('Categories')
                            ->schema([
                                Forms\Components\Select::make('blog_category_id')
                                    ->label('Category')
                                    ->relationship('categories', 'name')
                                    ->createOptionForm([
                                        Forms\Components\TextInput::make('name')
                                            ->required(),
                                        Forms\Components\TextInput::make('slug')
                                            ->required(),
                                    ])
                                    ->required()
                                    ->preload(),
                            ]),

                        Forms\Components\Section::make('SEO')
                            ->schema([
                                Forms\Components\TextInput::make('meta_title'),
                                Forms\Components\TextInput::make('meta_description'),
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
                Tables\Columns\ImageColumn::make('front_image')
                    ->disk('public')
                    ->height(40)
                    ->width(40),

                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->limit(50, '...'),

                Tables\Columns\TextColumn::make('categories.name')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'published' => 'success',
                        'draft' => 'warning',
                        'archived' => 'danger',
                    }),
                Tables\Columns\TextColumn::make('published_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'draft' => 'Draft',
                        'published' => 'Published',
                        'archived' => 'Archived',
                    ]),
            ])
            ->defaultSort('published_at', 'desc')
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
            'index' => Pages\ListBlogPosts::route('/'),
            'create' => Pages\CreateBlogPost::route('/create'),
            'edit' => Pages\EditBlogPost::route('/{record}/edit'),
        ];
    }
}
