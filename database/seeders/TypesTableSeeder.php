<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use Faker\Generator as Faker;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 1; $i <= 7; $i++) {
            $type = new Type();
            $type->name = $faker->word();
            $type->slug = $faker->slug();
            $type->description = $faker->sentence();
            $type->image = $faker->imageUrl(640, 480, 'technics');
            $type->created_at = now();
            $type->updated_at = now();

            $type->save();
        }
    }
}
