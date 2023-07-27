<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Wave extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
    ];

    public function spot(): BelongsTo
    {
        return $this->belongsTo(SurfSpot::class, 'surf_spot_id', 'id');
    }
}
