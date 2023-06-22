<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateFoto extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:foto';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate dummy foto for testing purpose';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        for ($i = 1; $i <= 3; $i++) {
            $this->info("Generate foto {$i}");
            $faker = \Faker\Factory::create();
            $faker->addProvider(new \Mmo\Faker\LoremFacesProvider($faker));
            $url = $faker->loremFacesUrl($i);
            dd($url);
            // $path = $faker->loremFaces();
            // dd($path);
        }
        return Command::SUCCESS;
    }
}
