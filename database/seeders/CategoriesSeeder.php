<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Diseño', 'slug' => 'diseno', 'is_active' => true],
            ['name' => 'Software', 'slug' => 'software', 'is_active' => true],
            ['name' => 'Multimedia', 'slug' => 'multimedia', 'is_active' => true],
            ['name' => 'Consultoría', 'slug' => 'consultoria', 'is_active' => true],
            ['name' => 'Publicidad', 'slug' => 'publicidad', 'is_active' => true],
            ['name' => 'Blog', 'slug' => 'blog', 'is_active' => true],
            ['name' => 'Páginas', 'slug' => 'pages', 'is_active' => true],
        ];

        foreach ($categories as $cat) {
            \App\Models\Category::updateOrCreate(
                ['slug' => $cat['slug']],
                $cat
            );
        }

        // Asignar Servicios a Categorías
        $categoryMap = [
            'diseno' => ['diseno-logo', 'paginas-web', 'diseno-marca'],
            'software' => ['software', 'comercio-electronico', 'aplicaciones-moviles', 'software-personalizado'],
            'multimedia' => ['multimedia'],
            'consultoria' => ['consultoria'],
            'publicidad' => ['publicidad'],
        ];

        foreach ($categoryMap as $catSlug => $serviceSlugs) {
            $category = \App\Models\Category::where('slug', $catSlug)->first();
            if ($category) {
                \App\Models\Service::whereIn('slug', $serviceSlugs)->update(['category_id' => $category->id]);
            }
        }
    }
}
