<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FlateOwner extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'name', 'email', 'mobile', 'flat_no', 'city', 'country', 'username', 'password',
    ];
}
