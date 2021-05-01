<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'car_model',
        'name_client',
        'email_client',
        'phone_client',
        'state_id',
        'city_id'
    ];
    
}
