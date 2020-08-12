<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    protected $fillable = ['orders_id', "payment_method", "status", "paid_amount_cents"];

    public function orders()
    {
        return $this->belongsTo('App\Orders');
    }
}
