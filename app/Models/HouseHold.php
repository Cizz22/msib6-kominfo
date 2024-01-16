<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HouseHold extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function individuals()
    {
        return $this->belongsTo(Individual::class);
    }

    public function houseCondition()
    {
        return $this->hasOne(HouseCondition::class);
    }
}
