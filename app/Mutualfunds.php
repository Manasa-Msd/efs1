<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mutualfunds extends Model
{
    protected $fillable=[
        'customer_id',
        'name',
        'purchase_date',
        'purchase_price',
        'current_price',
        'shares',
    ];

    public function customer() {
        return $this->belongsTo('App\Customer');
    }
}
