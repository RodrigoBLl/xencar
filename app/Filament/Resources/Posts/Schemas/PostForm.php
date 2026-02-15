<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Schemas\Components\Section::make('Detalles Principales')
                    ->schema([
                        TextInput::make('title')
                            ->label('Título')
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (string $operation, $state, $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),

                        TextInput::make('slug')
                            ->required()
                            ->unique(ignoreRecord: true),

                        \Filament\Forms\Components\Select::make('category_id')
                            ->relationship('category', 'name')
                            ->label('Categoría')
                            ->searchable()
                            ->preload()
                            ->createOptionForm([
                                TextInput::make('name')
                                    ->required()
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn ($state, $set) => $set('slug', Str::slug($state))),
                                TextInput::make('slug')->required(),
                            ]),

                        Toggle::make('is_published')
                            ->label('Publicado')
                            ->default(false),

                        DateTimePicker::make('published_at')
                            ->label('Fecha de Publicación'),
                    ])->columns(2),

                \Filament\Schemas\Components\Section::make('Contenido')
                    ->schema([
                        \Filament\Forms\Components\FileUpload::make('image')
                            ->label('Imagen Destacada')
                            ->image()
                            ->disk('public')
                            ->directory('posts')
                            ->columnSpanFull(),

                        \Filament\Forms\Components\Textarea::make('excerpt')
                            ->label('Extracto')
                            ->placeholder('Breve descripción para listas y tarjetas')
                            ->rows(3)
                            ->columnSpanFull(),

                        RichEditor::make('content')
                            ->label('Contenido Completo')
                            ->columnSpanFull(),
                    ]),

                \Filament\Schemas\Components\Section::make('SEO')
                    ->schema([
                        TextInput::make('seo_title')
                            ->label('Título SEO')
                            ->placeholder('Si se deja vacío, usa el título principal'),
                        \Filament\Forms\Components\Textarea::make('seo_description')
                            ->label('Descripción SEO'),
                        \Filament\Forms\Components\FileUpload::make('seo_image')
                            ->label('Imagen Redes Sociales')
                            ->image()
                            ->disk('public')
                            ->directory('seo'),
                    ])->collapsed(),
            ]);
    }
}
