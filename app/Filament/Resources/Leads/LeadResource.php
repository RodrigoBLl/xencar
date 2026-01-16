<?php

namespace App\Filament\Resources\Leads;

use App\Filament\Resources\Leads\Pages\CreateLead;
use App\Filament\Resources\Leads\Pages\EditLead;
use App\Filament\Resources\Leads\Pages\ListLeads;
use App\Filament\Resources\Leads\Pages\ViewLead;
use App\Filament\Resources\Leads\Schemas\LeadForm;
use App\Filament\Resources\Leads\Schemas\LeadInfolist;
use App\Filament\Resources\Leads\Tables\LeadsTable;
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
                \Filament\Forms\Components\Section::make('Información del Contacto')
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
                    ])->columns(2),

                \Filament\Forms\Components\Section::make('Detalles del Lead')
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
                    }),
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
                \Filament\Tables\Actions\ViewAction::make(),
                \Filament\Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                \Filament\Tables\Actions\BulkActionGroup::make([
                    \Filament\Tables\Actions\DeleteBulkAction::make(),
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
