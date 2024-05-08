<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CAT_REC extends Seeder
{
    
    public function run(): void
    {
       DB::table('categorie_reclamations')->insert([
        'NOM_CATEGORIE'=>'test',
       ]);
    }
}
