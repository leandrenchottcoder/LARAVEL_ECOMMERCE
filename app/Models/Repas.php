<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repas extends Model
{
    use HasFactory;


    protected $table = 'repas';
    protected $fillable = [
        'categorie',
        'name',
        'description',
        'Prix',
        'rating',
        'profile_image',
    ];
}
