<?php

namespace JeffersonGoncalves\FilamentCommerce\Fulfillment;

use Filament\Contracts\Plugin;
use Filament\Panel;
use JeffersonGoncalves\FilamentCommerce\Fulfillment\Concerns\HasCommerceFulfillmentPluginConfig;
use JeffersonGoncalves\FilamentCommerce\Fulfillment\Resources\FulfillmentSet\FulfillmentSetResource;

class CommerceFulfillmentPlugin implements Plugin
{
    use HasCommerceFulfillmentPluginConfig;

    public function getId(): string
    {
        return 'filament-commerce-fulfillment';
    }

    public function register(Panel $panel): void
    {
        $panel->resources($this->resolveResources([
            'fulfillment' => FulfillmentSetResource::class,
        ]));

        $panel->widgets($this->resolveWidgets());
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
