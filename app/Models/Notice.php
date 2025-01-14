<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'notice_date',
        'title',
        'description',
        'created_by',
    ];

    public function getNoticeDateAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }
}
