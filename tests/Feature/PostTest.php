<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
//use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    //public function test_example()
    
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    //pour tester l'enregistrement d'un vol
    /*public function testSaveVol()
    {
        $vol = new Vol();
        $vol->title = "y a aucun titre pour le tester";
        $vol->title = Str::slug($vol->title, '-');
        $vol->content = " nouveau contenu";
        $vol->active = false;
    
}*/
}
