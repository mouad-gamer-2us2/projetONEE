<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reclamationtraitee extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'ID_RECLAMATION',
        'CLIENT',
        'AGENT_CENTRE',
        'CATEGORIE_RECLAMATION',
        'SERVICE_RESPONSABLE',
        'DESCRIPTION',
        'PROCEDURE',
                     ];
    
      protected $table = 'reclamation_traitee';
    
           

    
}
