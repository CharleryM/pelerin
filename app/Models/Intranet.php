<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intranet extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_debut',
        'date_fin',
    ];

    protected $dates = [
        'date_debut',
        'date_fin',
    ];
}

