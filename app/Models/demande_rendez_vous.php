<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class demande_rendez_vous extends Model
{
    use HasFactory;

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

    public function services()
    {
        return $this->belongsTo(services::class, 'ID_SER', 'ID_SERVICE');
    }

    public function user()
    {
        return $this->belongsTo(clients::class, 'ID_CLI', 'NUM_CONTRAT');
    }
}

