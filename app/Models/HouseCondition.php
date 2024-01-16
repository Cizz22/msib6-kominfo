<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HouseCondition extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function houseHold()
    {
        return $this->belongsTo(HouseHold::class);
    }
}
