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
                            ->columnSpanFull(),
                        Toggle::make('is_active')
                            ->label('Activo')
                            ->default(true)
                            ->required(),
                    ])->columns(2),

                Section::make('Hero (Cabecera)')
                    ->schema([
                        TextInput::make('hero_title')
                            ->label('Título Principal'),
                        FileUpload::make('hero_image')
                            ->label('Imagen de Fondo')
                            ->image()
                            ->directory('services/hero'),
                    ])->columns(2),

                Section::make('Contenido Dinámico')
                    ->schema([
                        Repeater::make('body_content')
                            ->label('Bloques de Contenido')
                            ->schema([
                                RichEditor::make('content')
                                    ->label('Párrafo / Contenido')
                                    ->required(),
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
                            ->directory('services/seo'),
                    ])->columns(2),
            ]);
    }
}
