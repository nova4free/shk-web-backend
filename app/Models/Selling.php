<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Selling extends Model
{
    use HasFactory;

    /**
     * @var array 
     */
    protected $dates = [
        'date' => 'date',
    ];

    /**
     * Belongs To
     * @return BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
