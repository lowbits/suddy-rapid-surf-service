<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\SurfSpot */
class AddressResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'address_line' => $this->address_line,
            'street_number' => $this->street_number,
            'city' => $this->city,
            'postal_code' => $this->postal_code,
            'country' => $this->country,
        ];
    }
}
