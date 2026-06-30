<?php

use JeffersonGoncalves\Commerce\Fulfillment\Models\FulfillmentSet;
use JeffersonGoncalves\FilamentCommerce\Fulfillment\Resources\FulfillmentSet\Pages\CreateFulfillmentSet;
use JeffersonGoncalves\FilamentCommerce\Fulfillment\Resources\FulfillmentSet\Pages\ListFulfillmentSet;
use Livewire\Livewire;

it('renders the fulfillment list page', function () {
    FulfillmentSet::factory()->count(2)->create();

    Livewire::test(ListFulfillmentSet::class)->assertOk();
});

it('creates a fulfillment record through the panel', function () {
    Livewire::test(CreateFulfillmentSet::class)
        ->fillForm([
            'name' => 'Default',
            'type' => 'shipping',
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    expect(FulfillmentSet::query()->count())->toBe(1);
});
