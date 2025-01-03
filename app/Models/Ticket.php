<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'flateowner_id', 'ticket_no', 'title', 'description', 'status', 'images','email', 'phone'
    ];
}
