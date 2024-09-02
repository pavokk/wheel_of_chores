<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Chore;
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
        //

        Chore::create([
            "name" => "Vask skapdører på kjøkken",
            "color" => "blue",
        ]);

        Chore::create([
            "name" => "Rydd boden",
            "color" => "brown",
        ]);

        Chore::create([
            "name" => "Gis bort!",
            "color" => "lightblue",
        ]);

        Chore::create([
            "name" => "Tøm kattedoen",
            "color" => "green",
        ]);

        Chore::create([
            "name" => "Gå ut med søpla",
            "color" => "orange",
        ]);
    }
}
