<?php

namespace JeffersonGoncalves\FilamentCommerce\Fulfillment\Resources\FulfillmentSet\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class FulfillmentSetForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(null)
            ->components([
                Section::make('Details')
                    ->schema([
                        TextInput::make('name'),
                        TextInput::make('type'),
                    ])->columns(2),
            ]);
    }
}
