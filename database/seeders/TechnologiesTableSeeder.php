<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 1; $i <= 5; $i++) {
            $tech = new Technology();
            $tech->name = $faker->word();
            $tech->color = $faker->hexColor();
            $tech->created_at = now();
            $tech->updated_at = now();

            $tech->save();
        }
    }
}
