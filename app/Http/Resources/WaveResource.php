<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\SurfSpot */
class WaveResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'type' => $this->type,
            'width' => $this->width,
            'height' => $this->height,
        ];
    }
}
