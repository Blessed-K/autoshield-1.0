<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone', 'vehicle_info', 'parts_cost', 'service_cost', 'total_amount',
    ];
}
