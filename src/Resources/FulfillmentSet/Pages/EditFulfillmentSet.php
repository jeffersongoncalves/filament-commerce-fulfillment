<?php

namespace JeffersonGoncalves\FilamentCommerce\Fulfillment\Resources\FulfillmentSet\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use JeffersonGoncalves\FilamentCommerce\Fulfillment\Resources\FulfillmentSet\FulfillmentSetResource;

class EditFulfillmentSet extends EditRecord
{
    protected static string $resource = FulfillmentSetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
