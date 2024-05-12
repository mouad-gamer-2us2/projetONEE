<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agent_onee extends Model
{
    use HasFactory;

    
    protected $primaryKey ='ID_AONEE';
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




}
