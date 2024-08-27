<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;

    // The table associated with the model (optional if it follows Laravel naming conventions)
    protected $table = 'maintenance';

    // The attributes that are mass assignable
    protected $fillable = [
        'car_name',
        'task',
        'scheduled_date',
        'description',
    ];
}