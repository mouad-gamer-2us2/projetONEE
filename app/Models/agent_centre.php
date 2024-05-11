<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agent_centre extends Model
{
    use HasFactory;

    protected $primaryKey ='ID_ACENTRE';
    protected $fillable = ['ID_ACENTRE'];

    public function user()
    {
        return $this->belongsTo(User::class, 'ID_ACENTRE', 'id');
    }
    
}
