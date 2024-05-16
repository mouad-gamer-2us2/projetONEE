<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reclamation_traitee extends Model
{
    use HasFactory;

    protected $primaryKey = 'ID_REC_TRAITEE';

    protected $fillable = [
        'ID_REC_TRAITEE',
        'PROCEDURE',
    ];

    public function reclamationAFF()
    {
        return $this->belongsTo(reclamation_affectee::class, 'ID_REC_TRAITEE');
    }

    
}
