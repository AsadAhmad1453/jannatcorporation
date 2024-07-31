<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table = 'cars';
    protected $guarded = [];

    public function images(){
        return $this->hasMany(CarImage::class,'car_id','id');
    }
    public function company(){
        return $this->belongsTo(Company::class);
    }
}
