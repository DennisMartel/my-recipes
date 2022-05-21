<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [
            // Recetas de Arroz
            [
                'name' => 'Recetas de Paella',
                'slug' => Str::slug('Recetas de Paella'),   
                'category_id' => 1
            ],
            [
                'name' => 'Recetas de Arroz con Pollo',
                'slug' => Str::slug('Recetas de Arroz con Pollo'),   
                'category_id' => 1
            ],

            // Recetas de Bebidas
            [
                'name' => 'Recetas de Bebidas Con Alcohol',
                'slug' => Str::slug('Recetas de Bebidas Con Alcohol'),   
                'category_id' => 2
            ],
            [
                'name' => 'Recetas de Bebidas Sin Alcohol',
                'slug' => Str::slug('Recetas de Bebidas Sin Alcohol'),   
                'category_id' => 2
            ],
            [
                'name' => 'Recetas de Batidos',
                'slug' => Str::slug('Recetas de Batidos'),   
                'category_id' => 2
            ],
            [
                'name' => 'Recetas de Café',
                'slug' => Str::slug('Recetas de Café'),   
                'category_id' => 2
            ],
            [
                'name' => 'Recetas de Cócteles',
                'slug' => Str::slug('Recetas de Cócteles'),   
                'category_id' => 2
            ],
            
            // Recetas de carne
            [
                'name' => 'Recetas de Carne de Caza',
                'slug' => Str::slug('Recetas de Carne de Caza'),   
                'category_id' => 3
            ],
            [
                'name' => 'Recetas con Cerdo',
                'slug' => Str::slug('Recetas con Cerdo'),   
                'category_id' => 3
            ],
            [
                'name' => 'Recetas de Cordero',
                'slug' => Str::slug('Recetas de Cordero'),   
                'category_id' => 3
            ],
            [
                'name' => 'Recetas de Pavo',
                'slug' => Str::slug('Recetas de Pavo'),   
                'category_id' => 3
            ],
            [
                'name' => 'Recetas de Pollo',
                'slug' => Str::slug('Recetas de Pollo'),   
                'category_id' => 3
            ],
            
            // recetas de dulces
            [
                'name' => 'Recetas de Frutas',
                'slug' => Str::slug('Recetas de Frutas'),   
                'category_id' => 4
            ],
            [
                'name' => 'Recetas de Pasteles',
                'slug' => Str::slug('Recetas de Pasteles'),   
                'category_id' => 4
            ],
            [
                'name' => 'Recetas de Helados',
                'slug' => Str::slug('Recetas de Helados'),   
                'category_id' => 4
            ],
            [
                'name' => 'Recetas de Flanes',
                'slug' => Str::slug('Recetas de Flanes'),   
                'category_id' => 4
            ],
            [
                'name' => 'Recetas de Galletas',
                'slug' => Str::slug('Recetas de Galletas'),   
                'category_id' => 4
            ],
            [
                'name' => 'Recetas de Mousses',
                'slug' => Str::slug('Recetas de Mousses'),   
                'category_id' => 4
            ],
            [
                'name' => 'Recetas de Bizcochos',
                'slug' => Str::slug('Recetas de Bizcochos'),   
                'category_id' => 4
            ],
            [
                'name' => 'Recetas de Magdalenas',
                'slug' => Str::slug('Recetas de Magdalenas'),   
                'category_id' => 4
            ],
            [
                'name' => 'Recetas de Postres con Gelatina',
                'slug' => Str::slug('Recetas de Postres con Gelatina'),   
                'category_id' => 4
            ],
        ];

        foreach ($subcategories as $subcategory) {
            Subcategory::create($subcategory);
        }
    }
}
