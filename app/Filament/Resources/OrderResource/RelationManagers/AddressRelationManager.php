<?php

namespace App\Filament\Resources\OrderResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AddressRelationManager extends RelationManager
{
    protected static string $relationship = 'address';

    public function form(Form $form): Form
    {
        return $form
            ->schema([

                TextInput::make('first_name')
                    ->required()
                    ->maxLength(255),

                TextInput::make('last_name')
                    ->required()
                    ->maxLength(255),

                TextInput::make('phone')
                    ->required()
                    ->tel()
                    ->maxLength(255),

                Select::make('city')
                    ->options([
                        'baringo' => 'Baringo',
                        'bomet' => 'Bomet',
                        'bungoma' => 'Bungoma',
                        'busia' => 'Busia',
                        'elgeyo marakwet' => 'Elgeyo Marakwet',
                        'embu' => 'Embu',
                        'garissa' => 'Garissa',
                        'homa bay' => 'Homa Bay',
                        'isiolo' => 'Isiolo',
                        'kajiado' => 'Kajiado',
                        'kakamega' => 'Kakamega',
                        'kericho' => 'Kericho',
                        'kiambu' => 'Kiambu',
                        'kilifi' => 'Kilifi',
                        'kirinyaga' => 'Kirinyaga',
                        'kisii' => 'Kisii',
                        'kisumu' => 'Kisumu',
                        'kitui' => 'Kitui',
                        'kwale' => 'Kwale',
                        'laikipia' => 'Laikipia',
                        'lamu' => 'Lamu',
                        'machakos' => 'Machakos',
                        'makueni' => 'Makueni',
                        'mandera' => 'Mandera',
                        'meru' => 'Meru',
                        'migori' => 'Migori',
                        'marsabit' => 'Marsabit',
                        'mombasa' => 'Mombasa',
                        'muranga' => 'Murang\'a',
                        'nairobi' => 'Nairobi',
                        'nakuru' => 'Nakuru',
                        'nandi' => 'Nandi',
                        'narok' => 'Narok',
                        'nyamira' => 'Nyamira',
                        'nyandarua' => 'Nyandarua',
                        'nyeri' => 'Nyeri',
                        'samburu' => 'Samburu',
                        'siaya' => 'Siaya',
                        'taita taveta' => 'Taita Taveta',
                        'tana river' => 'Tana River',
                        'tharaka nithi' => 'Tharaka Nithi',
                        'trans nzoia' => 'Trans Nzoia',
                        'turkana' => 'Turkana',
                        'uasin gishu' => 'Uasin Gishu',
                        'vihiga' => 'Vihiga',
                        'wajir' => 'Wajir',
                        'pokot' => 'West Pokot',
                    ])
                    ->label('County')
                    ->searchable()
                    ->required(),

                TextInput::make('state')
                    ->required()
                    ->disabled()
                    ->dehydrated()
                    ->default('Kenya'),

                TextInput::make('zip_code')
                    ->required()
                    ->numeric()
                    ->maxLength('255'),

                TextArea::make('street_address')
                    ->required()
                    ->columnSpanFull()
                    ->placeholder('e.g Nairobi CBD, Nyamakima street'),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('street_address')
            ->columns([
                Tables\Columns\TextColumn::make('fullname')
                ->label('Full Names'),

                Tables\Columns\TextColumn::make('phone'),
                Tables\Columns\TextColumn::make('city'),
                Tables\Columns\TextColumn::make('state'),
                Tables\Columns\TextColumn::make('zip_code'),
                Tables\Columns\TextColumn::make('street_address'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
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
}
