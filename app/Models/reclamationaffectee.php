<?php

namespace App\Models;

use App\Models\agentonee;
use App\Models\reclamations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class reclamationaffectee extends Model
{
    use HasFactory;
     protected $fillable = ['ID_RECLAMATION','ID_REC_AFF', 'ID_A_ONEE' ];
    
      protected $table = 'reclamation_affectees';
    public function reclamation()
    {
        return $this->belongsTo(reclamations::class, 'ID_REC_AFF', 'ID_RECLAMATION');
    }

    // Relation avec la table des agents onees
    public function agentOnee()
    {
        return $this->belongsTo(agentonee::class, 'ID_A_ONEE', 'ID_AONEE');
    }

    public function client()
    {
        return $this->belongsTo(reclamations::class, 'ID_CLI_AFF');
    }
}
