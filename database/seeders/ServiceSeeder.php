<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'name' => 'Diseño de Logo',
                'slug' => 'diseno-logo',
                'hero_title' => 'Diseño de Identidad Visual',
                'seo_title' => 'Diseño de Logo - Xencar',
                'seo_description' => 'Creamos la identidad visual perfecta para tu marca.',
            ],
            [
                'name' => 'Páginas Web',
                'slug' => 'paginas-web',
                'hero_title' => 'Desarrollo Web Profesional',
                'seo_title' => 'Diseño de Páginas Web - Xencar',
                'seo_description' => 'Diseño web profesional y responsivo para tu empresa.',
            ],
            [
                'name' => 'Diseño de Marca',
                'slug' => 'diseno-marca',
                'hero_title' => 'Construcción de Marca',
                'seo_title' => 'Diseño de Marca - Xencar',
                'seo_description' => 'Construimos marcas sólidas y memorables.',
            ],
            [
                // Software was already created via tinker, but we include it to be safe (updateOrCreate)
                'name' => 'Software',
                'slug' => 'software',
                'hero_title' => 'Proceso de desarrollo',
                'seo_title' => 'Desarrollo de Software - Xencar',
                'seo_description' => 'Soluciones de software a medida para potenciar tu negocio.',
            ],
            [
                'name' => 'Comercio Electrónico',
                'slug' => 'comercio-electronico',
                'hero_title' => 'Tiendas en Línea',
                'seo_title' => 'Comercio Electrónico - Xencar',
                'seo_description' => 'Tiendas en línea y soluciones de e-commerce efectivas.',
            ],
            [
                'name' => 'Aplicaciones Móviles',
                'slug' => 'aplicaciones-moviles',
                'hero_title' => 'Desarrollo de Apps',
                'seo_title' => 'Aplicaciones Móviles - Xencar',
                'seo_description' => 'Desarrollo de apps nativas y multiplataforma.',
            ],
            [
                'name' => 'Software Personalizado',
                'slug' => 'software-personalizado',
                'hero_title' => 'Soluciones a Medida',
                'seo_title' => 'Software Personalizado - Xencar',
                'seo_description' => 'Software a medida para necesidades específicas.',
            ],
            [
                'name' => 'Multimedia',
                'slug' => 'multimedia',
                'hero_title' => 'Producción Multimedia',
                'seo_title' => 'Multimedia y Video Marketing - Xencar',
                'seo_description' => 'Producción audiovisual y estrategias de video marketing.',
            ],
            [
                'name' => 'Consultoría',
                'slug' => 'consultoria',
                'hero_title' => 'Consultoría Digital',
                'seo_title' => 'Consultoría Digital - Xencar',
                'seo_description' => 'Asesoría experta para la transformación digital de tu negocio.',
            ],
            [
                'name' => 'Publicidad',
                'slug' => 'publicidad',
                'hero_title' => 'Campañas Publicitarias',
                'seo_title' => 'Publicidad y Google Ads - Xencar',
                'seo_description' => 'Campañas de publicidad digital y gestión de Google Ads.',
            ]
        ];

        foreach ($services as $data) {
            Service::updateOrCreate(
                ['slug' => $data['slug']],
                array_merge($data, ['is_active' => true])
            );
        }
    }
}
