<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reclamation_affectee extends Model
{
    use HasFactory;

    protected $fillable = ['ID_REC_AFF','ID_AONEE_AFF', 'ID_CLI_AFF', 'ID_ACENTRE_AFF'];
    
    protected $primaryKey = 'ID_REC_AFF';

    public function reclamation()
    {
        return $this->belongsTo(reclamations::class, 'ID_REC_AFF');
    }

    public function agentOnee()
    {
        return $this->belongsTo(Agent_Onee::class, 'ID_AONEE_AFF');
    }

    public function client()
    {
        return $this->belongsTo(reclamations::class, 'ID_CLI_AFF');
    }
}
