<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Forms\Get;
use Illuminate\Support\Str;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Información General')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nombre del Servicio')
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (string $operation, $state, $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),
                        TextInput::make('slug')
                            ->required()
                            ->unique(ignoreRecord: true),
                        Textarea::make('short_description')
                            ->label('Descripción Corta (Home)')
                            ->live(debounce: 150)
                            ->maxLength(255)
                            ->hint(fn ($state, $component) => $component->getMaxLength() - strlen($state) . ' caracteres restantes')
                            ->columnSpanFull(),
                        \Filament\Forms\Components\Select::make('category_id')
                            ->relationship('category', 'name')
                            ->label('Categoría')
                            ->searchable()
                            ->preload()
                            ->default(fn () => request()->routeIs('filament.admin.resources.blogs.*') ? \App\Models\Category::where('slug', 'blog')->value('id') : null)
                            ->disabled(fn () => request()->routeIs('filament.admin.resources.blogs.*'))
                            ->dehydrated() // Ensure value is saved even if disabled
                            ->createOptionForm([
                                \Filament\Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn ($state, $set) => $set('slug', \Illuminate\Support\Str::slug($state))),
                                \Filament\Forms\Components\TextInput::make('slug')->required(),
                            ]),
                        Toggle::make('is_active')
                            ->label('Activo')
                            ->default(true)
                            ->required(),
                        \Filament\Forms\Components\DateTimePicker::make('published_at')
                            ->label('Fecha de Publicación'),
                    ])->columns(2),

                Section::make('Hero (Cabecera)')
                    ->schema([
                        TextInput::make('hero_title')
                            ->label('Título Principal'),
                        FileUpload::make('hero_image')
                            ->label('Imagen de Fondo')
                            ->image()
                            ->disk('public')
                            ->directory('services/hero'),
                    ])->columns(2),

                Section::make('Contenido Dinámico')
                    ->schema([
                        Repeater::make('body_content')
                            ->label('Bloques de Contenido')
                            ->schema([
                                RichEditor::make('content')
                                    ->label('Párrafo / Contenido')
                                    ->required()
                                    ->fileAttachmentsDisk('public')
                                    ->fileAttachmentsDirectory('services/content'),
                            ])
                            ->columnSpanFull()
                            ->defaultItems(1),
                    ]),

                Section::make('SEO (Buscadores)')
                    ->schema([
                        TextInput::make('seo_title')
                            ->label('Título SEO')
                            ->placeholder('Ej: Desarrollo de Software - Xencar'),
                        Textarea::make('seo_description')
                            ->label('Descripción SEO')
                            ->rows(3),
                        FileUpload::make('seo_image')
                            ->label('Imagen OpenGraph (Redes Sociales)')
                            ->image()
                            ->disk('public')
                            ->directory('services/seo'),
                    ])->columns(2),
            ]);
    }
}
