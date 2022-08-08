<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Direccion;
use Illuminate\Support\Facades\DB;

class DireccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	Direccion::create([
            'url' => 'https://www.google.com.mx/maps/',
            'short_url' => 'ldf72z',
            'estado' => '1'
        ]);

        Direccion::create([
            'url' => 'https:https://www.youtube.com/',
            'short_url' => 'JQE2kj',
            'estado' => '1'
        ]);

        Direccion::create([
            'url' => 'https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox',
            'short_url' => '8uiQnx',
            'estado' => '1'
        ]);

        Direccion::create([
            'url' => 'https://www.google.com.mx/',
            'short_url' => 'jkahA2',
            'estado' => '1'
        ]);

        Direccion::create([
            'url' => 'https://github.com/',
            'short_url' => 'fq3Ñ8',
            'estado' => '1'
        ]);
        
        Direccion::factory()->times(10)->create();
    
    }
}
