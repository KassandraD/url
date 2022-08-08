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
        
        Direccion::factory()->times(10)->create();
    
    }
}
