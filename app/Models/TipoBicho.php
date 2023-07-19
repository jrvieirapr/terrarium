<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoBicho extends Model
{
    use HasFactory;

    protected $fillable = ["descricao"];

    public function bichos()
    {
        return $this->hasMany(Bicho::class);
    }
}

