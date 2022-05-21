<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Recipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Recipe::factory(20)->create()->each(function(Recipe $recipe) {
            Image::factory(2)->create([
                'imageable_id' => $recipe->id,
                'imageable_type' => Recipe::class
            ]);
        });
    }
}
