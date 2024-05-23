<?php

namespace App\Models;

use App\Models\User;
use App\Models\services;
use App\Models\reclamations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class agentonee extends Model
{
    use HasFactory;
      protected $primaryKey = 'ID_AONEE';
     protected $table = 'agent_onees';
    protected $fillable = [
        'ID_AONEE',
        'ID_SER',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'ID_AONEE', 'id');
    }

    public function service()
    {
        return $this->belongsTo(services::class, 'ID_SER', 'ID_SERVICE');
    }

    public function reclamations()
    {
        return $this->hasMany(reclamations::class, 'ID_A_ONEE', 'ID_AONEE');
    }

}
