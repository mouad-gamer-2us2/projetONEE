<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    use HasFactory;

    protected $primaryKey = 'ID_SERVICE';

    protected $fillable = [
        'NOM_SERVICE',
        'CATEGORIE_SERVICE',
        'DESCRIPTION',
        'APPARTENANCE',
    ];

    public function demande()
    {
        return $this->hasMany(demande_rendez_vous::class, 'ID_SER');
    }

    public function reclamations()
    {
        return $this->hasMany(reclamations::class, 'ID_SERV', 'ID_SERVICE');
    }

}
