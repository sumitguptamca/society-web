<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElectricityBill extends Model
{
    use HasFactory;
    protected $table = 'electricity_bills';

    protected $fillable = [
        'customer_name',
        'address',
        'meter_number',
        'units_consumed',
        'rate_per_unit',
        'total_amount',
    ];
}
