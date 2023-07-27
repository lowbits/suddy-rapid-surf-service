<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class SurfSpot extends Model
{
    use HasFactory;

    protected $with = ['wave', 'address'];

    public function wave(): HasOne
    {
        return $this->hasOne(Wave::class, 'surf_spot_id', 'id');
    }

    public function address(): HasOne
    {
        return $this->hasOne(Address::class, 'surf_spot_id', 'id');
    }
}
