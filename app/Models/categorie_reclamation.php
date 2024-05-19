<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorie_reclamation extends Model
{
    use HasFactory;

    protected $primaryKey = 'ID_CATEGORIE';

    protected $fillable = [
        'NOM_CATEGORIE',
    ];

    public function reclamations()
    {
        return $this->hasMany(reclamations::class, 'ID_CAT', 'ID_CATEGORIE');
    }

}
