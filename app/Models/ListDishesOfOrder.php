<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListDishesOfOrder extends Model
{
    protected $fillable = [
        'order_dish_id',
        'dish_id',
    ];
    use HasFactory;
}
