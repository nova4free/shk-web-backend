<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GasStation extends Model
{
    use HasFactory;

    /**
     * Gas station has Many Products
     * @return HasMany
     */
    public function product(): HasMany
    {
        return $this->hasMany(Product::class, 'station_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
