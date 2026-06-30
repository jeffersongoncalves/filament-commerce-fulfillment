<?php

namespace JeffersonGoncalves\FilamentCommerce\Fulfillment\Tests\Fixtures;

use Filament\Panel;
use Filament\PanelProvider;
use JeffersonGoncalves\FilamentCommerce\Fulfillment\CommerceFulfillmentPlugin;

class TestPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->plugins([
                CommerceFulfillmentPlugin::make(),
            ]);
    }
}
