<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class info extends Model
{
    use HasFactory;

    protected $primaryKey ='ID_INFO';
    protected $fillable = ['ID_USER', 'ROLE', 'PWD'];

    public function user()
    {
        return $this->belongsTo(User::class, 'ID_USER', 'id');
    }
}
