<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'vêtements'],
            ['name' => 'Meubles'],
            ['name' => 'Électronique'],
            ['name' => 'Ustensiles'],
            ['name' => 'Cosmétiques'],
            ['name' => 'Alimentation'],
            ['name' => 'Jeux'],
            ['name' => 'Sport'],
            ['name' => 'Matériel de Bureau'],
            ['name' => 'Transport'],
            ['name' => 'Éducation'],
            ['name' => 'Autre'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
