<?php

namespace Tests\Feature;

use App\Models\Staff;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class StaffTest extends TestCase
{
    /** @test */
    public function create_staff_test()
    {
        $faker = \Faker\Factory::create();

        $file = UploadedFile::fake()->image('random-foto.jpg');
        $response = $this->post('/staff', [
            'name' => $faker->name(),
            'foto' => $file
        ]);

        Storage::disk('public')->assertExists('Face/'.$file->hashName());
    }
    
    /** @test */
    public function query_staff_api_test() {
        $response = $this->get('/api/v1/staff');
        $response->assertStatus(200);
    }
}
