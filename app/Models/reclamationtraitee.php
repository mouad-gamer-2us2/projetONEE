<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reclamationtraitee extends Model
{
    use HasFactory;
 protected $fillable = ['ID_RECLAMATION','ID_REC_AFF', 'ID_A_ONEE','Procedure' ];
    
      protected $table = 'reclamation_traitee';
    public function reclamation()
    {
        return $this->belongsTo(reclamations::class, 'ID_REC_AFF', 'ID_RECLAMATION');
    }

    
    public function agentOnee()
    {
        return $this->belongsTo(agentonee::class, 'ID_A_ONEE', 'ID_AONEE');
    }

    public function client()
    {
        return $this->belongsTo(reclamations::class, 'ID_CLI_AFF');
    }

    
}
