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
                            ->required(),
                        \Filament\Forms\Components\TextInput::make('last_name')
                            ->label('Apellido'),
                        \Filament\Forms\Components\TextInput::make('email')
                            ->email()
                            ->required(),
                        \Filament\Forms\Components\TextInput::make('phone')
                            ->label('Teléfono')
                            ->tel(),
                        \Filament\Forms\Components\Select::make('contact_preference')
                            ->label('Preferencia de Contacto')
                            ->options([
                                'Email' => 'Email',
                                'Whatsapp' => 'Whatsapp',
                                'Phone' => 'Teléfono',
                            ]),
                        \Filament\Forms\Components\TextInput::make('time_preference')
                            ->label('Horario Preferido'),
                        \Filament\Forms\Components\TextInput::make('timezone')
                            ->label('Zona Horaria'),
                    ])->columns(2),
                \Filament\Schemas\Components\Section::make('Intereses y Presupuesto')
                    ->schema([
                        \Filament\Forms\Components\TextInput::make('budget')
                            ->label('Presupuesto'),
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
                            ->columnSpanFull(),
                        \Filament\Forms\Components\Textarea::make('notes')
                            ->label('Notas Internas')
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
            ->columns([
                \Filament\Tables\Columns\TextColumn::make('first_name')
                    ->label('Nombre')
                    ->searchable()
                    ->sortable(),
                \Filament\Tables\Columns\TextColumn::make('last_name')
                    ->label('Apellido')
                    ->searchable(),
                \Filament\Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                \Filament\Tables\Columns\TextColumn::make('service.name')
                    ->label('Servicio')
                    ->sortable(),
                \Filament\Tables\Columns\TextColumn::make('status')
                    ->label('Estado')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'new' => 'info',
                        'contacted' => 'warning',
                        'proposal_sent' => 'primary',
                        'closed' => 'success',
                        default => 'gray',
                    }),
                \Filament\Tables\Columns\TextColumn::make('budget')
                    ->label('Presupuesto')
                    ->sortable(),
                \Filament\Tables\Columns\TextColumn::make('project_type')
                    ->label('Intereses')
                    ->badge()
                    ->separator(',')
                    ->color('gray'),
                \Filament\Tables\Columns\TextColumn::make('contact_preference')
                    ->label('Pref. Contacto')
                    ->sortable(),
                \Filament\Tables\Columns\TextColumn::make('time_preference')
                    ->label('Horario')
                    ->toggleable(isToggledHiddenByDefault: true),
                \Filament\Tables\Columns\TextColumn::make('created_at')
                    ->label('Recibido')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                \Filament\Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'new' => 'Nuevo',
                        'contacted' => 'Contactado',
                        'proposal_sent' => 'Propuesta Enviada',
                        'closed' => 'Cerrado',
                    ]),
                \Filament\Tables\Filters\SelectFilter::make('service_id')
                    ->relationship('service', 'name')
                    ->label('Servicio'),
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
