<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = ["cost_per_item", "product_name", "quantity", "type"];
}
