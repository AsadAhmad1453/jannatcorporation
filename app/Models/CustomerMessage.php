<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerMessage extends Model
{
    use HasFactory;
    protected $table = 'customer_messages';
    protected $guarded = [];


    public function car()
    {
        return $this->belongsTo(Car::class,'car_id','id');
    }
}
