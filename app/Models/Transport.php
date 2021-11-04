<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent;

class Transport extends Eloquent\Model
{
    use HasFactory;

    protected $fillable = ['car_number', 'total_seats', 'model_id'];

    public function model(){
        return $this->belongsTo(Model::class,'model_id','id');
    }
}
