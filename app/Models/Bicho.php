<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bicho extends Model
{
    use HasFactory;

    protected $fillable = ["nome","idade","cor" ,"tipo_bicho_id"];
}
