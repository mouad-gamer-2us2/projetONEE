<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class demande_rendez_vous extends Model
{
    use HasFactory;

    protected $table = 'demande_rendez_vouses';
    protected $primaryKey ='ID_RENDEZ_VOUS';
    protected $fillable = [
    'INFORMATION_RENDEZ_VOUS',
    'ID_A_CENTRE',
    'ID_SER',
    'ID_CLI',];

    public function agent_centre()
    {
        return $this->belongsTo(agent_centre::class, 'ID_A_CENTRE', 'ID_ACENTRE');
    }

    public function service()
    {
        return $this->belongsTo(services::class, 'ID_SER', 'ID_SERVICE');
    }

    public function client()
    {
        return $this->belongsTo(clients::class, 'ID_CLI', 'NUM_CONTRAT');
    }

}

