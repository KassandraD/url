<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_inicio()
    {
        $response = $this->get('/');

        $response->assertStatus(200)
            ->assertSee('Ingresa url:')
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
        $this->get('/ldf72z')
        ->assertStatus(200)
        ->assertSee('Redireccionando');
    }




    // validar que el url es requerido
}
