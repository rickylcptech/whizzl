<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Staff;
use Illuminate\Support\Facades\DB;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 500; $i++) {
            DB::table('staffs')->insert([
                'name' => 'Staff  ' . $i,
                'community_id' => rand(1, 50),
                     'site_id' => rand(1, 50),
                'photo' => '/Face/'.$i.'.jpg',
            ]);
        }
    }
}
