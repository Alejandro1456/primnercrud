<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cajero extends Model
{
    use HasFactory;
    protected $fillable = [
        'apellidos', 'nombres', 'celtel', 
        'direccion'
    ];
}

