<?php

namespace App\Models;

use App\Models\reclamations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
