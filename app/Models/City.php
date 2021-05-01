<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    // One to Many Relation Inverse

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
