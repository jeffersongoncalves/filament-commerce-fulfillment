<?php

namespace JeffersonGoncalves\FilamentCommerce\Fulfillment\Resources\FulfillmentSet;

use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use JeffersonGoncalves\Commerce\Fulfillment\Models\FulfillmentSet;
use JeffersonGoncalves\FilamentCommerce\Fulfillment\CommerceFulfillmentPlugin;
use JeffersonGoncalves\FilamentCommerce\Fulfillment\Resources\FulfillmentSet\Pages\CreateFulfillmentSet;
use JeffersonGoncalves\FilamentCommerce\Fulfillment\Resources\FulfillmentSet\Pages\EditFulfillmentSet;
use JeffersonGoncalves\FilamentCommerce\Fulfillment\Resources\FulfillmentSet\Pages\ListFulfillmentSet;
use JeffersonGoncalves\FilamentCommerce\Fulfillment\Resources\FulfillmentSet\Schemas\FulfillmentSetForm;
use JeffersonGoncalves\FilamentCommerce\Fulfillment\Resources\FulfillmentSet\Tables\FulfillmentSetTable;

class FulfillmentSetResource extends Resource
{
    protected static ?string $model = FulfillmentSet::class;

    public static function getNavigationGroup(): ?string
    {
        try {
            return CommerceFulfillmentPlugin::get()->getNavigationGroup();
        } catch (\Throwable) {
            return config('filament-commerce-fulfillment.navigation_group', 'Commerce — Sales');
        }
    }

    public static function form(Form $form): Form
    {
        return FulfillmentSetForm::configure($form);
    }

    public static function table(Table $table): Table
    {
        return FulfillmentSetTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListFulfillmentSet::route('/'),
            'create' => CreateFulfillmentSet::route('/create'),
            'edit' => EditFulfillmentSet::route('/{record}/edit'),
        ];
    }
}
