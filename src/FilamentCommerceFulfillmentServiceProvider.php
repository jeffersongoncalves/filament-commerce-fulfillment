<?php

namespace JeffersonGoncalves\FilamentCommerce\Fulfillment;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentCommerceFulfillmentServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-commerce-fulfillment';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasConfigFile();
    }
}
