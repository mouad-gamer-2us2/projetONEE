<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reclamations extends Model
{
    use HasFactory;

    protected $primaryKey = 'ID_RECLAMATION';

    protected $fillable = [
        'DESCRIPTION',
        'URGENCE',
        'ETAT',
        'ID_CLI',
        'ID_CAT',
        'ID_A_CENTRE',
        'ID_SERV',
    ];

    public function client()
    {
        return $this->belongsTo(clients::class, 'ID_CLI', 'NUM_CONTRAT');}

    public function service()
    {
        return $this->belongsTo(services::class, 'ID_SERV', 'ID_SERVICE');
    }

    public function agent_centre()
    {
        return $this->belongsTo(agent_centre::class, 'ID_A_CENTRE', 'ID_ACENTRE');
    }

    public function categorie_reclamation()
    {
        return $this->belongsTo(categorie_reclamation::class, 'ID_CAT', 'ID_CATEGORIE');
    }

    public function reclamationAffectees()
    {
        return $this->hasMany(Reclamation_Affectee::class, 'ID_REC_AFF');
    }

    


}

