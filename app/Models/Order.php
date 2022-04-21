<?php

namespace App\Models;

use App\Enums\OrderStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['items', 'status'];

    protected $casts = [
        'status' => OrderStatus::class, 
        'items' => 'json'
    ];
}
