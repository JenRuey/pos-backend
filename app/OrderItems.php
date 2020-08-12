<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    protected $fillable = ["orders_id", "cost_per_item", "product_name", "quantity"];

    public function orders()
    {
        return $this->belongsTo('App\Orders');
    }
}
