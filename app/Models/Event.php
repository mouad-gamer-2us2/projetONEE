<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
     protected $fillable = [
        'id_agent',
        'id_rendezvous',
        'date_et_heure',
        
    ];
     protected $table = 'events';
     public function agent()
    {
        return $this->belongsTo(User::class, 'id_agent');
    }

    // Relation avec le rendez-vous
    public function rendezvous()
    {
        return $this->belongsTo(demande_rendez_vous::class, 'id_rendezvous');
    }
}
