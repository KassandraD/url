<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Direccion;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;


class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_inicio()
    {
        Direccion::factory()->create([
            'url' => 'https://github.com/',
            'short_url' => 'fq3Ñ8',
            'estado' => '1'
        ]);
        
        $response = $this->get('/');

        $response->assertStatus(200)
            ->assertSee('Ingresa url:')
            ->assertSee('https://github.com/')
        ;

    }

    public function test_inicio_sin_datos()
    {
        $response = $this->get('/');

        $response->assertStatus(200)
            ->assertSee("No se han generado urls");

    }


    public function test_url_no_existe()
    {
        $this->get('/12345678')
        ->assertStatus(404)
        ->assertSee('Sitio no encontrado');
    }

    public function test_url_redirecciona()
    {
         Direccion::factory()->create([
            'url' => 'https://www.google.com.mx/maps/',
            'short_url' => 'ldf72z',
            'estado' => '1'
        ]);
        $this->get('/ldf72z')
        ->assertStatus(200)
        ->assertSee('Redireccionando');
    }




    // validar que el url es requerido
}
