<?php

use App\Models\SurfSpot;
use function Pest\Laravel\get;

it('returns a list of surfspots', function () {
    SurfSpot::factory()->count(20)->create();

    get('api/v1/spots')->assertOk()->assertJsonCount(20, 'data');
});

it('returns a list of surfspots with address and wave', function () {
    $spot = SurfSpot::factory()->withWave()->withAddress()->create();

    get('api/v1/spots')->assertOk()->assertJsonStructure([
        'data' => [
            '*' => [
                'name',
                'description',
                'wave',
                'address',
            ],
        ],
    ]);
});
