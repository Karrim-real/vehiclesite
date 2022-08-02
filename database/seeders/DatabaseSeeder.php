<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\MakesSeeder;
use Database\Seeders\ModelsSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            MakesSeeder::class,
            ModelsSeeder::class,
            UserSeeder::class,
            BodySeeder::class,
            DriveSeeder::class,
            TransmissionSeeder::class,
       ]);
    }
}
