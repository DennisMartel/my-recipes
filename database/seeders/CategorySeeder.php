<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Recetas de Arroz',
                'slug' => Str::slug('Recetas de Arroz'),
                'icon' => ''
            ],
            [
                'name' => 'Recetas de Bebidas',
                'slug' => Str::slug('Recetas de Bebidas'),
                'icon' => ''
            ],
            [
                'name' => 'Recetas de Carnes',
                'slug' => Str::slug('Recetas de Carnes'),
                'icon' => ''
            ],
            [
                'name' => 'Recetas de Dulces',
                'slug' => Str::slug('Recetas de Dulces'),
                'icon' => ''
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
