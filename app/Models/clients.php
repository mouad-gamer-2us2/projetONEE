<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clients extends Model
{
    use HasFactory;

    protected $primaryKey ='NUM_CONTRAT';
    protected $fillable = [
        'NUM_CONTRAT',
        'NOM_CLIENT',
        'CIN',
        'ADRESSE',
        'TEL',
        'EMAIL',
    ];

    

    
}

