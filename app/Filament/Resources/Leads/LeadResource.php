<?php

namespace App\Filament\Resources\Leads;

use App\Filament\Resources\Leads\Pages\CreateLead;
use App\Filament\Resources\Leads\Pages\EditLead;
use App\Filament\Resources\Leads\Pages\ListLeads;
use App\Filament\Resources\Leads\Pages\ViewLead;
use App\Filament\Resources\Leads\Schemas\LeadInfolist;
use App\Models\Lead;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class LeadResource extends Resource
{
    protected static ?string $model = Lead::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Leads';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                \Filament\Schemas\Components\Section::make('Información del Contacto')

                    ->schema([
                        \Filament\Forms\Components\TextInput::make('first_name')
                            ->label('Nombre')
                            ->required()
                            ->maxLength(100),
                        \Filament\Forms\Components\TextInput::make('last_name')
                            ->label('Apellido')
                            ->maxLength(100),
                        \Filament\Forms\Components\TextInput::make('email')
                            ->email()
                            ->required()
                            ->maxLength(255),
                        \Filament\Forms\Components\TextInput::make('phone')
                            ->label('Teléfono')
                            ->tel()
                            ->maxLength(20),
                        \Filament\Forms\Components\Select::make('contact_preference')
                            ->label('Preferencia de Contacto')
                            ->options([
                                'Email' => 'Email',
                                'Whatsapp' => 'Whatsapp',
                                'Phone' => 'Teléfono',
                            ]),
                        \Filament\Forms\Components\TextInput::make('time_preference')
                            ->label('Horario Preferido')
                            ->maxLength(100)
                            ->placeholder('Ej: Mañana, Tarde, Noche'),
                        \Filament\Forms\Components\TextInput::make('timezone')
                            ->label('Zona Horaria')
                            ->maxLength(100)
                            ->placeholder('Ej: America/Mexico_City'),
                    ])->columns(2),
                \Filament\Schemas\Components\Section::make('Intereses y Presupuesto')
                    ->schema([
                        \Filament\Forms\Components\TextInput::make('budget')
                            ->label('Presupuesto')
                            ->maxLength(100)
                            ->placeholder('Ej: $5,000 - $10,000'),
                        \Filament\Forms\Components\TagsInput::make('project_type')
                            ->label('Servicios de Interés')
                            ->placeholder('Agregar interés')
                            ->columnSpanFull(),
                    ])->columns(2),

                \Filament\Schemas\Components\Section::make('Detalles del Lead')
                    ->schema([
                        \Filament\Forms\Components\Select::make('service_id')
                            ->relationship('service', 'name')
                            ->label('Servicio de Interés')
                            ->searchable()
                            ->preload(),
                        \Filament\Forms\Components\Select::make('status')
                            ->options([
                                'new' => 'Nuevo',
                                'contacted' => 'Contactado',
                                'proposal_sent' => 'Propuesta Enviada',
                                'closed' => 'Cerrado',
                            ])
                            ->default('new')
                            ->required(),
                        \Filament\Forms\Components\Textarea::make('message')
                            ->label('Mensaje Inicial')
                            ->rows(4)
                            ->maxLength(2000)
                            ->columnSpanFull(),
                        \Filament\Forms\Components\Textarea::make('notes')
                            ->label('Notas Internas')
                            ->rows(3)
                            ->maxLength(1000)
                            ->helperText('Solo visible para el equipo interno.')
                            ->columnSpanFull(),
                    ])->columns(2),
            ]);
    }

    public static function infolist(Schema $schema): Schema
    {
        return LeadInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                \Filament\Tables\Columns\TextColumn::make('first_name')
                    ->label('Nombre')
                    ->searchable()
                    ->sortable()
                    ->description(fn ($record) => $record->last_name),
                \Filament\Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->copyable()
                    ->icon('heroicon-o-envelope'),
                \Filament\Tables\Columns\TextColumn::make('phone')
                    ->label('Teléfono')
                    ->icon('heroicon-o-phone')
                    ->toggleable(isToggledHiddenByDefault: false),
                \Filament\Tables\Columns\TextColumn::make('status')
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
                \Filament\Tables\Columns\TextColumn::make('budget')
                    ->label('Presupuesto')
                    ->sortable()
                    ->badge()
                    ->color('warning'),
                \Filament\Tables\Columns\TextColumn::make('project_type')
                    ->label('Intereses')
                    ->badge()
                    ->separator(',')
                    ->color('gray')
                    ->toggleable(isToggledHiddenByDefault: false),
                \Filament\Tables\Columns\TextColumn::make('contact_preference')
                    ->label('Pref. Contacto')
                    ->icon(fn (?string $state): string => match ($state) {
                        'Email' => 'heroicon-o-envelope',
                        'Whatsapp' => 'heroicon-o-chat-bubble-left',
                        'Phone' => 'heroicon-o-phone',
                        default => 'heroicon-o-question-mark-circle',
                    })
                    ->toggleable(isToggledHiddenByDefault: false),
                \Filament\Tables\Columns\TextColumn::make('service.name')
                    ->label('Servicio')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                \Filament\Tables\Columns\TextColumn::make('time_preference')
                    ->label('Horario')
                    ->toggleable(isToggledHiddenByDefault: true),
                \Filament\Tables\Columns\TextColumn::make('timezone')
                    ->label('Zona Horaria')
                    ->toggleable(isToggledHiddenByDefault: true),
                \Filament\Tables\Columns\TextColumn::make('source_page')
                    ->label('Origen')
                    ->toggleable(isToggledHiddenByDefault: true),
                \Filament\Tables\Columns\TextColumn::make('created_at')
                    ->label('Recibido')
                    ->since()
                    ->sortable()
                    ->tooltip(fn ($record) => $record->created_at?->format('d/m/Y H:i')),
            ])
            ->filters([
                \Filament\Tables\Filters\SelectFilter::make('status')
                    ->label('Estado')
                    ->options([
                        'new' => 'Nuevo',
                        'contacted' => 'Contactado',
                        'proposal_sent' => 'Propuesta Enviada',
                        'closed' => 'Cerrado',
                    ]),
                \Filament\Tables\Filters\SelectFilter::make('contact_preference')
                    ->label('Pref. Contacto')
                    ->options([
                        'Email' => 'Email',
                        'Whatsapp' => 'WhatsApp',
                        'Phone' => 'Teléfono',
                    ]),
                \Filament\Tables\Filters\SelectFilter::make('service_id')
                    ->relationship('service', 'name')
                    ->label('Servicio')
                    ->searchable()
                    ->preload(),
            ])
            ->actions([
                \Filament\Actions\ViewAction::make(),
                \Filament\Actions\EditAction::make(),
            ])
            ->bulkActions([
                \Filament\Actions\BulkActionGroup::make([
                    \Filament\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListLeads::route('/'),
            'create' => CreateLead::route('/create'),
            'view' => ViewLead::route('/{record}'),
            'edit' => EditLead::route('/{record}/edit'),
        ];
    }
}
