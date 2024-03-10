<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//models
use App\Models\Project;

//Helpers
use Illuminate\Support\Str;
class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::truncate();
        for ($i=0; $i < 10; $i++) {
            
            $title = fake()->sentence();
            $slug = Str::slug($title);
            
            $project = Project::create([
                'title' => $title,
                'slug' => $slug,
                'content' => fake()->paragraph(),
                'status' => fake()->boolean(),
                ]);
        }
    }
}
