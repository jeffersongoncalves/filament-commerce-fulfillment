<?php

namespace JeffersonGoncalves\FilamentCommerce\Fulfillment\Concerns;

use JeffersonGoncalves\FilamentCommerce\Core\Concerns\HasCommercePluginConfig;

trait HasCommerceFulfillmentPluginConfig
{
    use HasCommercePluginConfig;

    protected function getConfigKey(): string
    {
        return 'filament-commerce-fulfillment';
    }

    protected function getDefaultNavigationGroup(): string
    {
        return 'Commerce — Sales';
    }
}
