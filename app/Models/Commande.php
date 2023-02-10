<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_complet',
        'email',
        'ville',
        'commune',
        'tel1',
        'tel2',
        'description',
        'status',
    ];
}
