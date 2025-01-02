<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Passport\HasApiTokens;

class FlateOwner extends Authenticatable
{
    use HasApiTokens, HasFactory;
    protected $fillable = [
        'name', 'email', 'mobile', 'flat_no', 'city', 'country', 'username', 'password','profile_image'
    ];
}
