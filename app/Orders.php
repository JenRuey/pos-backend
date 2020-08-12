<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = [
        "reference_no",
        "tax",
        "service_charge",
        "total_amount_cents",
        "is_walkin",
        "status"
    ];

    public function transactions()
    {
        return $this->hasOne('App\Transactions');
    }

    public function orderItems()
    {
        return $this->hasMany('App\OrderItems');
    }
}
