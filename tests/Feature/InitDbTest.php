<?php

namespace Tests\Feature;

use App\Models\Staff;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class InitDbTest extends TestCase
{
    /** @test */
    public function migrate_fresh_test()
    {
        Artisan::call('migrate:fresh', ['--seed' => true]);
        $totalDataStaffEnough = Staff::count() >= 500;
        $this->assertTrue($totalDataStaffEnough);
    }
}
