<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent;

class Model extends Eloquent\Model
{
    use HasFactory;

    protected $fillable = ['model_name'];
}
