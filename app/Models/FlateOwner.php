<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FlateOwner extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'email', 'mobile', 'flat_no', 'city', 'country', 'username', 'password',
    ];
}
