<?php

namespace App\Filament\Resources\Leads\Schemas;

use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class LeadInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Información de Contacto')
                    ->icon('heroicon-o-user')
                    ->schema([
                        TextEntry::make('first_name')
                            ->label('Nombre'),
                        TextEntry::make('last_name')
                            ->label('Apellido'),
                        TextEntry::make('email')
                            ->label('Email')
                            ->icon('heroicon-o-envelope')
                            ->copyable(),
                        TextEntry::make('phone')
                            ->label('Teléfono')
                            ->icon('heroicon-o-phone')
                            ->default('No proporcionado'),
                        TextEntry::make('contact_preference')
                            ->label('Preferencia de Contacto')
                            ->badge()
                            ->color('primary')
                            ->default('No especificada'),
                        TextEntry::make('time_preference')
                            ->label('Horario Preferido')
                            ->default('No especificado'),
                        TextEntry::make('timezone')
                            ->label('Zona Horaria')
                            ->default('No especificada'),
                    ])->columns(3),

                Section::make('Intereses y Proyecto')
                    ->icon('heroicon-o-briefcase')
                    ->schema([
                        TextEntry::make('budget')
                            ->label('Presupuesto')
                            ->badge()
                            ->color('warning')
                            ->default('No especificado'),
                        TextEntry::make('project_type')
                            ->label('Servicios de Interés')
                            ->badge()
                            ->separator(',')
                            ->color('info')
                            ->default('No especificado'),
                        TextEntry::make('service.name')
                            ->label('Servicio Vinculado')
                            ->default('Ninguno'),
                    ])->columns(3),

                Section::make('Mensaje')
                    ->icon('heroicon-o-chat-bubble-bottom-center-text')
                    ->schema([
                        TextEntry::make('message')
                            ->label('')
                            ->markdown()
                            ->columnSpanFull(),
                    ]),

                Section::make('Estado y Seguimiento')
                    ->icon('heroicon-o-clipboard-document-check')
                    ->schema([
                        TextEntry::make('status')
                            ->label('Estado')
                            ->badge()
                            ->formatStateUsing(fn (string $state): string => match ($state) {
                                'new' => 'Nuevo',
                                'contacted' => 'Contactado',
                                'proposal_sent' => 'Propuesta Enviada',
                                'closed' => 'Cerrado',
                                default => ucfirst($state),
                            })
                            ->color(fn (string $state): string => match ($state) {
                                'new' => 'info',
                                'contacted' => 'warning',
                                'proposal_sent' => 'primary',
                                'closed' => 'success',
                                default => 'gray',
                            }),
                        TextEntry::make('source_page')
                            ->label('Página de Origen')
                            ->default('Desconocida'),
                        TextEntry::make('form_type')
                            ->label('Tipo de Formulario')
                            ->default('General'),
                        TextEntry::make('notes')
                            ->label('Notas Internas')
                            ->default('Sin notas')
                            ->columnSpanFull(),
                        TextEntry::make('created_at')
                            ->label('Recibido')
                            ->dateTime('d/m/Y H:i'),
                        TextEntry::make('updated_at')
                            ->label('Última Actualización')
                            ->since(),
                    ])->columns(3),
            ]);
    }
}
