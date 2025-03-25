<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;


class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i = 1; $i <= 15; $i++) {
            $project = new Project();
            $project->title = $faker->sentence(3);
            $project->description = $faker->paragraph();
            $project->image = $faker->imageUrl(640, 480, 'technics');
            $project->url = $faker->url();
            $project->github = 'https://github.com/' . $faker->userName();
            $project->type_id = $faker->numberBetween(1, 7);
            $project->created_at = now();
            $project->updated_at = now();

            $project->save();
        }
    }
}
