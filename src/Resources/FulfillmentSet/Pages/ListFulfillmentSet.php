<?php

namespace JeffersonGoncalves\FilamentCommerce\Fulfillment\Resources\FulfillmentSet\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use JeffersonGoncalves\FilamentCommerce\Fulfillment\Resources\FulfillmentSet\FulfillmentSetResource;

class ListFulfillmentSet extends ListRecords
{
    protected static string $resource = FulfillmentSetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
