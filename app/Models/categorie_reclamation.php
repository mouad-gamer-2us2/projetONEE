<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorie_reclamation extends Model
{
    use HasFactory;

    protected $fillable = [
        'NOM_CATEGORIE',
    ];
}
