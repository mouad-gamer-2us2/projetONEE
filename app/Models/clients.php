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

    public function demande()
    {
        return $this->hasMany(demande_rendez_vous::class, 'ID_CLI');
    }

    public function reclamations()
    {
        return $this->hasMany(reclamations::class, 'ID_CLI', 'NUM_CONTRAT');}

    
}

