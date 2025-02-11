<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            //UsersSeeder::class,
            //FuelsSeeder::class,
            //ColorsSeeder::class,
            BodySeeder::class,
            //TransmissionsSeeder::class,
            MakerSeeder::class,
            //MakersLogoSeeder::class,
            //ModelsSeeder::class,
            //TrimsSeeder::class,
        ]);
    }
}
