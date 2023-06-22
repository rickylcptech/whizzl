<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminTest extends TestCase
{
    /** @test */
    function registrasi_admin_test() {
        $response = $this->post('/api/v1/register', [
            'name' => 'admin_test',
            'email' => 'admin_test@email.com',
            'password' => '123456',
            'password_confirmation' => '123456'
        ]);
        
        $response->assertStatus(200);
        $this->assertDatabaseHas('users', [
            'name' => 'admin_test',
            'email' => 'admin_test@email.com',
        ]);
    }

    /** @test */
    function login_admin_test() {
        $response = $this->post('/api/v1/login', [
            'email' => 'admin_test@email.com',
            'password' => '123456'
        ]);
        $response->assertStatus(200);
        $response->assertJsonIsObject();
    }
}
