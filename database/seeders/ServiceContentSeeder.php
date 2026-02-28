<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceContentSeeder extends Seeder
{
    public function run(): void
    {
        $categories = Category::pluck('id', 'slug');

        $services = [
            // ═══════════════════════════════════════════════════
            // DISEÑO
            // ═══════════════════════════════════════════════════
            [
                'slug' => 'diseno-logo',
                'category_slug' => 'diseno',
                'name' => 'Diseño de Logo',
                'short_description' => 'Diseño',
                'hero_title' => 'Diseño de logo',
                'seo_title' => 'Diseño de Logo - Xencar',
                'seo_description' => 'Creamos la identidad visual perfecta para tu marca.',
                'body_content' => [
                    ['content' => '<p>La identificación de una marca depende de potentes gráficos, y solo dispones de unos segundos para captar la atención de las personas y causar impacto. Se invierte tiempo y esfuerzo, para establecer todo lo relacionado con la imagen de marca, ya que a partir de aquí es donde empieza el perfil profesional de la empresa.</p>'],
                ],
                'process_title' => 'Proceso creativo',
                'process_subtitle' => 'Diseño',
                'process_steps' => [
                    ['title' => 'Boceto', 'description' => 'Este paso es muy importante, se debe tener en claro el objetivo principal, el boceto debe tener conceptos muy abstractos para plasmar las primeras ideas.', 'image' => 'services/process/logo-boceto.png'],
                    ['title' => 'Vectorizado', 'description' => 'Si el boceto esta listo, este debe pasarse a vectorizarse para separar los elementos gráficos y ver su funcionalidad como marca individual.', 'image' => 'services/process/logo-vectorizado.png'],
                    ['title' => 'Color', 'description' => 'Al igual que el proceso de diseño de personaje, los colores son fundamentales para complementar la imagen dentro de un contexto corporativo.', 'image' => 'services/process/logo-color.png'],
                    ['title' => 'Versiones', 'description' => 'En algunos casos se requiere de presentar versiones horizontales y verticales para su uso correcto dependiendo de la superficie o material a utilizar.', 'image' => 'services/process/logo-versiones.png'],
                    ['title' => 'Entrega', 'description' => 'Para la entrega final se presenta formalmente en un documento en PDF y se agrega un pequeño manual de uso de imagen como recomendación, con todos sus archivos e imagenes en alta resolución.', 'image' => 'services/process/logo-entrega.jpg'],
                ],
            ],
            [
                'slug' => 'paginas-web',
                'category_slug' => 'diseno',
                'name' => 'Diseño Web',
                'short_description' => 'Diseño',
                'hero_title' => 'Diseño web',
                'seo_title' => 'Diseño de Páginas Web - Xencar',
                'seo_description' => 'Diseño web profesional y responsivo para tu empresa.',
                'body_content' => [
                    ['content' => '<p>Un sitio web no sólo le dará credibilidad, sino que también ayudará a dar la impresión de que su empresa es más grande y más exitosa que puede ser en realidad. Los usuarios pueden conocer tus productos, tu marca, lo cual te sirve para incrementar la reputación de tu empresa.</p>'],
                ],
                'process_title' => 'Proceso creativo',
                'process_subtitle' => 'Diseño',
                'process_steps' => [
                    ['title' => 'Objetivo', 'description' => 'Antes que nada se debe conocer a detalle el cliente y tomar en cuenta varias preguntas sencillas: ¿Qué se quiere lograr?, ¿Qué se quiere lograr? y ¿A quién va dirigido?, para esto se necesita una junta con el corporativo calificado para este proyecto.', 'image' => 'services/process/web-objetivo.png'],
                    ['title' => 'Boceto', 'description' => 'Ya que esta listo el objetivo, se plasman las mejores ideas para lograrlo, se revisa el flujo de trabajo y se hacen correcciones.', 'image' => 'services/process/web-boceto.png'],
                    ['title' => 'Wireframes', 'description' => 'Para mejorar el concepto, se pasa a digitalizar el boceto, también pasa por un proceso de revisión, se agrega tamaños tipográficos, estilo de menú, estructura de desarrollo y estilo corporativo.', 'image' => 'services/process/web-wireframe.png'],
                    ['title' => 'Mockup', 'description' => 'Antes de pasarlo al departamento de programación se envía una propuesta visual final al cliente, para su última revisión y se discute en el equipo si se ha logrado el objetivo.', 'image' => 'services/process/web-mockup.png'],
                    ['title' => 'Optimización de imágenes', 'description' => 'Es muy importante hoy en día que un sitio web no tarde mucho en cargar, para esto se hace una optimización en el peso de las imágenes y se acomoda de acuerdo al dispositivo adecuado.', 'image' => 'services/process/web-imagenes.png'],
                ],
            ],
            [
                'slug' => 'diseno-marca',
                'category_slug' => 'diseno',
                'name' => 'Diseño de Marca',
                'short_description' => 'Diseño',
                'hero_title' => 'Diseño de marca',
                'seo_title' => 'Diseño de Marca - Xencar',
                'seo_description' => 'Construimos marcas sólidas y memorables.',
                'body_content' => [
                    ['content' => '<p>Uno de los retos más difíciles y trascendentales que debe superar cualquier empresa es cómo comunicarse con sus consumidores.</p>'],
                ],
                'process_title' => 'Proceso creativo',
                'process_subtitle' => 'Diseño',
                'process_steps' => [
                    ['title' => 'Objetivo', 'description' => 'De esta comunicación depende gran parte de la experiencia que tendrán los usuarios al consumir el producto o servicio que ofrecen. Las marcas representan, ante todo, un valor simbólico que ayuda a resolver este problema comunicativo.', 'image' => 'services/process/marca-objetivo.jpg'],
                    ['title' => 'Boceto', 'description' => 'Es muy importante conocer al cliente para poder desarrollar el perfil adecuado para él, establecer normas y reglamentos que cuiden la imagen corporativa, por lo que se hace uso de un manual de imagen como guía.', 'image' => 'services/process/marca-boceto.jpg'],
                    ['title' => 'Grid', 'description' => 'En este caso, se toman elementos o conceptos que identifiquen a la empresa, para después digitalizar y plasmarlo de manera icónica.', 'image' => 'services/process/marca-grid.jpg'],
                    ['title' => 'Color', 'description' => 'Estos parámetros de construcción de la marca permiten reproducir de manera proporcional y correcta el tamaño que debe tener. La mayor parte de las aplicaciones de la marca se resuelven mediante el uso del material de reproducción contenido en el manual.', 'image' => 'services/process/marca-color.jpg'],
                    ['title' => 'Uso correcto de color', 'description' => 'Uno de los aspectos más importantes en el diseño de la identidad de tu empresa es la elección de los colores corporativos para el branding. Y es que el color representa un 80% el reconocimiento de tu marca.', 'image' => 'services/process/marca-uso-color.jpg'],
                    ['title' => 'Tintas y sombras', 'description' => 'Es importante no confundir la firma, el isotipo o la tipografía y perder visibilidad. Es muy importante para mantener una apariencia coherente sobre los canales en línea y fuera de línea.', 'image' => 'services/process/marca-tintas.jpg'],
                    ['title' => 'Margen y espacio', 'description' => 'Los tintes son la mezcla de los colores de la marca con el blanco, lo que aumenta la luminosidad. Las tonalidades son la mezcla de los colores de la marca con el negro, lo que reduce la luminosidad.', 'image' => 'services/process/marca-margen.jpg'],
                    ['title' => 'Versiones', 'description' => 'Para asegurar la óptima aplicación y percepción de la marca en todos los soportes y formatos, se ha determinado un área de seguridad que establece una distancia mínima respecto a los textos y elementos gráficos.', 'image' => 'services/process/marca-versiones.jpg'],
                    ['title' => 'Uso correcto de marca', 'description' => 'En algunos casos se requiere de presentar versiones horizontales y verticales para su uso correcto dependiendo de la superficie o material a utilizar.', 'image' => 'services/process/marca-uso-marca.jpg'],
                    ['title' => 'Tipografía', 'description' => 'La solidez y constancia del entorno visual y la fortaleza de la identidad de la empresa dependen de que todas las personas involucradas en su implementación hagan un uso correcto de identidad.', 'image' => 'services/process/marca-tipografia.jpg'],
                    ['title' => 'Entrega', 'description' => 'La tipografía lo que busca es que las letras, el mensaje se adapte hacia el público al que va dirigido. La tipografía lo que busca principalmente es ser funcional, comunicar, transmitir.', 'image' => 'services/process/marca-entrega.jpg'],
                ],
            ],

            // ═══════════════════════════════════════════════════
            // SOFTWARE
            // ═══════════════════════════════════════════════════
            [
                'slug' => 'software',
                'category_slug' => 'software',
                'name' => 'Software',
                'short_description' => 'Software',
                'hero_title' => 'Proceso de desarrollo',
                'seo_title' => 'Desarrollo de Software - Xencar',
                'seo_description' => 'Soluciones de software a medida para potenciar tu negocio.',
                'body_content' => [
                    ['content' => '<h2>¡Si puede imaginarlo, podemos hacerlo digital!</h2><p>Todos los desarrolladores de software del Xencar Team tienen el talento para desarrollar software en cualquier plataforma y con cualquier tecnología.</p>'],
                ],
                'process_title' => 'Proceso creativo',
                'process_subtitle' => 'Software',
                'process_steps' => [
                    ['title' => 'Objetivo', 'description' => 'Nuestros diseñadores primero deben comprender sus productos y sus objetivos. A partir de ahí, nos centramos en la experiencia del usuario, las consideraciones de marketing y las iniciativas específicas que prioriza.', 'image' => 'services/process/sw-objetivo.jpg'],
                    ['title' => 'Diseño', 'description' => 'En sintonía con su negocio y sus objetivos, recurrimos a soluciones de diseño. Estos pueden ser visuales frontend o logísticos backend. El resultado de las fases de diseño proporciona instrucciones claras para nuestros desarrolladores.', 'image' => 'services/process/sw-diseno.jpg'],
                    ['title' => 'Desarrollo', 'description' => 'Con la claridad lograda a través de los planes de diseño, nuestros desarrolladores serán asignados y los gerentes de proyecto impulsarán el proyecto hasta su finalización. Recibirá actualizaciones de estado periódicas a lo largo del camino.', 'image' => 'services/process/sw-desarrollo.jpg'],
                    ['title' => 'Lanzamiento y entrega', 'description' => 'En Xencar Marketing Digital nos centramos en la satisfacción del cliente al 100%; por lo tanto, el lanzamiento es la parte principal de nuestro proceso. Estamos ahí con nuestros clientes hasta que obtengan el resultado que buscaban.', 'image' => 'services/process/sw-lanzamiento.jpg'],
                    ['title' => 'Soporte', 'description' => 'Siempre estamos listos para brindar soporte, ya sea a través de SEO, soporte de marketing digital o mejoras de desarrollo continuo para mejorar las conversiones en su software.', 'image' => 'services/process/sw-soporte.jpg'],
                ],
            ],
            [
                'slug' => 'comercio-electronico',
                'category_slug' => 'software',
                'name' => 'Comercio Electrónico',
                'short_description' => 'Software',
                'hero_title' => 'Comercio Electrónico',
                'seo_title' => 'Comercio Electrónico - Xencar',
                'seo_description' => 'Tiendas en línea y soluciones de e-commerce efectivas.',
                'body_content' => [
                    ['content' => '<p>Ya sea que su empresa recién esté comenzando o haya estado operando durante años, nuestros sistemas de software e-commerce proporcionarán a su empresa las características y el rendimiento que necesita para prosperar.</p><p>A medida que su empresa crece, su sistema puede modificarse y expandirse para satisfacer las crecientes demandas de su negocio.</p>'],
                    ['content' => '<h2>Empresas operativas</h2><p>Nuestros desarrolladores se especializan en la migración de empresas operativas desde sistemas heredados. Entendemos las dificultades y los requisitos especiales de la aplicación de nuevos sistemas mientras opera su negocio.</p>'],
                    ['content' => '<h2>Empresas previas al lanzamiento</h2><p>Para las empresas de nueva creación, ofrecemos soluciones completas que incluyen software, sitios web replicados integrados y back office de Ventas. Nos aseguramos de que comience a generar ingresos rápidamente.</p>'],
                ],
                'process_title' => null,
                'process_subtitle' => null,
                'process_steps' => null,
            ],
            [
                'slug' => 'aplicaciones-moviles',
                'category_slug' => 'software',
                'name' => 'Aplicaciones Móviles',
                'short_description' => 'Software',
                'hero_title' => 'Aplicaciones',
                'seo_title' => 'Aplicaciones Móviles - Xencar',
                'seo_description' => 'Desarrollo de apps nativas y multiplataforma.',
                'body_content' => [
                    ['content' => '<h2>Creemos un software único para crear o mejorar su negocio</h2><p>¡Si puede imaginarlo, podemos hacerlo digital!</p>'],
                ],
                'process_title' => 'Proceso creativo',
                'process_subtitle' => 'Software',
                'process_steps' => [
                    ['title' => 'Objetivo', 'description' => 'Todos los desarrolladores de software de Xencar Marketing Digital tienen el talento para desarrollar software en cualquier plataforma y con cualquier tecnología. Cuéntenos acerca de su proyecto.', 'image' => 'services/process/app-objetivo.jpg'],
                    ['title' => 'Diseño', 'description' => 'Nuestros diseñadores primero deben comprender sus productos y sus objetivos. A partir de ahí, nos centramos en la experiencia del usuario, las consideraciones de marketing y las iniciativas específicas que prioriza.', 'image' => 'services/process/app-diseno.jpg'],
                    ['title' => 'Desarrollo', 'description' => 'En sintonía con su negocio y sus objetivos, recurrimos a soluciones de diseño. Estos pueden ser visuales frontend o logísticos backend. El resultado de las fases de diseño proporciona instrucciones claras para nuestros desarrolladores.', 'image' => 'services/process/app-desarrollo.jpg'],
                    ['title' => 'Pruebas / QA', 'description' => 'Con la claridad lograda a través de los planes de diseño, nuestros desarrolladores serán asignados y los gerentes de proyecto impulsarán el proyecto hasta su finalización. Recibirá actualizaciones de estado periódicas a lo largo del camino.', 'image' => 'services/process/app-pruebas.jpg'],
                    ['title' => 'Envío a Google Play y Apple Store', 'description' => '¡Todos los conjuntos! En Xencar nos centramos en la satisfacción del cliente al 100%; por lo tanto, el lanzamiento es la parte principal de nuestro proceso. Nuestras prácticas técnicas garantizarán una implementación fluida sin tiempo de inactividad.', 'image' => 'services/process/app-envio.jpg'],
                    ['title' => 'Soporte', 'description' => 'Siempre estamos listos para brindar soporte, ya sea a través de SEO, soporte de marketing digital o mejoras de desarrollo continuo para mejorar las conversiones en su software.', 'image' => 'services/process/app-soporte.jpg'],
                ],
            ],
            [
                'slug' => 'software-personalizado',
                'category_slug' => 'software',
                'name' => 'Software Personalizado',
                'short_description' => 'Software',
                'hero_title' => 'Software personalizado',
                'seo_title' => 'Software Personalizado - Xencar',
                'seo_description' => 'Software a medida para necesidades específicas.',
                'body_content' => [
                    ['content' => '<h2>El software personalizado es nuestra especialidad</h2><p>Puede sentirse en paz sabiendo que sabemos lo que hacemos y que nuestro principal objetivo es la innovación.</p>'],
                    ['content' => '<p>Siempre sugerimos contratar a nuestra firma consultora antes de comenzar cualquier proyecto, de esa manera podríamos ahorrarle decenas de miles de dólares en desarrollo.</p><p>Si necesita algún desarrollo personalizado, complete este formulario y nos comunicaremos con usted lo antes posible.</p>'],
                ],
                'process_title' => null,
                'process_subtitle' => null,
                'process_steps' => null,
            ],

            // ═══════════════════════════════════════════════════
            // MULTIMEDIA
            // ═══════════════════════════════════════════════════
            [
                'slug' => 'multimedia',
                'category_slug' => 'multimedia',
                'name' => 'Multimedia',
                'short_description' => 'Xencar Marketing Digital',
                'hero_title' => 'Multimedia',
                'seo_title' => 'Multimedia y Video Marketing - Xencar',
                'seo_description' => 'Producción audiovisual y estrategias de video marketing.',
                'body_content' => [
                    ['content' => '<p>En el mercado actual, las nuevas empresas tienen momentos muy desafiantes a la hora de competir, la diferenciación de ser exitoso y promedio se da al mostrar la mejor cara de su empresa al mundo a través de un gran marketing multimedia.</p>'],
                ],
                'process_title' => 'Proceso Creativo',
                'process_subtitle' => 'Multimedia',
                'process_steps' => [
                    ['title' => 'Objetivo', 'description' => 'Es muy importante entender el mercado en el que nuestros clientes quieren entrar. Qué les diferencia de sus competidores y qué quieren conseguir.', 'image' => 'services/process/mm-objetivo.jpg'],
                    ['title' => 'Puntos de Referencia', 'description' => 'En este paso, solicitamos a nuestros clientes las principales cosas que les gustaría comunicar a su público y las escribimos en viñetas sencillas de entender.', 'image' => 'services/process/mm-referencia.jpg'],
                    ['title' => 'Guión', 'description' => 'Basándose en los comentarios iniciales del cliente, nuestro equipo de profesionales comienza a crear el guión perfecto que comunicará lo que nuestros clientes intentan comunicar en un formato muy breve y directo.', 'image' => 'services/process/mm-guion.jpg'],
                    ['title' => 'Voz', 'description' => 'Una vez aprobado el guión, empezamos a grabar la voz de forma que pueda utilizarse para futuras ediciones.', 'image' => 'services/process/mm-voz.jpg'],
                    ['title' => 'Colaterales', 'description' => 'Nuestro equipo de profesionales buscará en una biblioteca de pago de material de archivo y de vídeo libre de derechos para conseguir los vídeos que mejor se adapten a las necesidades del cliente.', 'image' => 'services/process/mm-colaterales.jpg'],
                    ['title' => 'Animaciones', 'description' => 'Entendemos que algunas partes de los vídeos no pueden tener material de archivo; por lo tanto, empezamos a crear animaciones personalizadas para poner énfasis en ciertas partes de dicho vídeo.', 'image' => 'services/process/mm-animaciones.jpg'],
                    ['title' => 'Edición Final', 'description' => 'Una vez que tenemos todas las partes en su lugar, lo ponemos todo junto para mostrar al cliente lo que somos capaces de crear.', 'image' => 'services/process/mm-edicion.jpg'],
                    ['title' => 'Feedback', 'description' => 'Una vez que el cliente haya visto la versión final, tendrá la oportunidad de enviar las revisiones finales.', 'image' => 'services/process/mm-feedback.jpg'],
                    ['title' => 'Entrega', 'description' => 'La entrega final se envía al cliente en formato Ultra HD con derechos libres de por vida sobre su trabajo.', 'image' => 'services/process/mm-entrega.jpg'],
                ],
            ],

            // ═══════════════════════════════════════════════════
            // CONSULTORÍA
            // ═══════════════════════════════════════════════════
            [
                'slug' => 'consultoria',
                'category_slug' => 'consultoria',
                'name' => 'Consultoría',
                'short_description' => 'Xencar Marketing Digital',
                'hero_title' => 'Consultoría',
                'seo_title' => 'Consultoría Digital - Xencar',
                'seo_description' => 'Asesoría experta para la transformación digital de tu negocio.',
                'body_content' => [
                    ['content' => '<h2 class="h2 t-center tc-black-soft">Tenemos un historial asombroso de ayudar a las empresas a convertirse en empresas en primer lugar de Google.</h2><p class="t-center">Más de una docena de empresas comenzaron a vender a través de la plataforma de Google después de obtener nuestros servicios de consultoría. Siempre vale la pena contratar a uno de nuestros consultores y pagar una pequeña tarifa antes de comenzar su negocio y gastar decenas de miles de pesos.</p>'],
                    ['content' => '<h3 class="h3 t-center tc-black-soft">Nuestras áreas de especialización:</h3><div class="grid g-50 col-4 med-col-2 small-col-1 teaser"><div class="teaser--wrap"><img class="teaser--img w-100 aspect-square lozad" style="margin:auto" data-src="/assets/images/icons/body/icon_tech.svg" /><p class="tc-black-soft">Proyectos de programación</p><div class="menu-list item"><ul class="menu-list--ul"><li class="menu-list--item">Análisis técnicos</li><li class="menu-list--item">Arquitectura técnica</li><li class="menu-list--item">Herramientas de Investigación del mercado</li><li class="menu-list--item">Programación</li></ul></div></div><div class="teaser--wrap"><img class="teaser--img w-100 aspect-square lozad" style="margin:auto" data-src="/assets/images/icons/body/icon_franchises.svg" /><p class="tc-black-soft">Consultoría en Google Ads</p><div class="menu-list item"><ul class="menu-list--ul"><li class="menu-list--item">Creación de Campaña</li><li class="menu-list--item">Investigación</li><li class="menu-list--item">Presupuesto</li><li class="menu-list--item">Desarrollo</li><li class="menu-list--item">Retorno de Inversión</li><li class="menu-list--item">Optimización</li></ul></div></div><div class="teaser--wrap"><img class="teaser--img w-100 aspect-square lozad" style="margin:auto" data-src="/assets/images/icons/body/icon_tech.svg" /><p class="tc-black-soft">Consultoría en Venta en Linea</p><div class="menu-list item"><ul class="menu-list--ul"><li class="menu-list--item">Modelo de negocio</li><li class="menu-list--item">Desarrollo de la Applicacion Web</li><li class="menu-list--item">Navegación</li><li class="menu-list--item">Pago en Linea</li><li class="menu-list--item">Base de datos</li><li class="menu-list--item">Implementación</li></ul></div></div><div class="teaser--wrap"><img class="teaser--img w-100 aspect-square lozad" style="margin:auto" data-src="/assets/images/icons/body/icon_franchises.svg" /><p class="tc-black-soft">Consultoría Video Marketing</p><div class="menu-list item"><ul class="menu-list--ul"><li class="menu-list--item">Desarrollo de Idea</li><li class="menu-list--item">Guión</li><li class="menu-list--item">Voz</li><li class="menu-list--item">Edición</li><li class="menu-list--item">Animación y Efectos Especiales</li><li class="menu-list--item">Publicación</li></ul></div></div></div>'],
                    ['content' => '<p class="h4">Nuestros servicios de consultoría son provistos por personal especializado con experiencia trabajando con compañías Fortune 500.</p><p class="h5">A continuación te presentamos algunos clientes quienes hemos ayudado en todo aspecto de su compañía. Desde la creación de nombre, marca, sistema, hasta la colaboración con su equipo de ventas.</p>'],
                ],
                'process_title' => null,
                'process_subtitle' => null,
                'process_steps' => null,
            ],

            // ═══════════════════════════════════════════════════
            // PUBLICIDAD
            // ═══════════════════════════════════════════════════
            [
                'slug' => 'publicidad',
                'category_slug' => 'publicidad',
                'name' => 'Publicidad',
                'short_description' => 'Google Ads y Anuncios Publicitarios',
                'hero_title' => 'Publicidad',
                'seo_title' => 'Publicidad y Google Ads - Xencar',
                'seo_description' => 'Campañas de publicidad digital y gestión de Google Ads.',
                'body_content' => [
                    ['content' => '<p class="h4">Cuidamos la eficiencia de nuestra planificación, producción, creación de campañas y dar resultados inmediatos en cada uno de nuestros proyectos. Así nos distinguimos desde el primer instante. El éxito no es una casualidad, y las ganancias de nuestros clientes así lo respalda.</p><p>Aprovechamos al máximo el diferenciador de los productos y servicios de nuestros clientes para potenciar su marca y convertirlos en un punto de referencia en su industria.</p>'],
                    ['content' => '<h2 class="h2 t-center tc-black-soft">Nos especializamos en cumplir con:</h2><div class="grid g-50 col-3 small-col-1 teaser"><div class="teaser--wrap"><img class="teaser--img w-100 aspect-square lozad" data-src="/assets/images/icons/body/compliance.svg" /><h3 class="h4 tc-black-soft">Efectividad</h3><p>Luego de un estudio de las características del producto o el servicio, desarrollamos una estrategia que cumpla con los objetivos de nuestro cliente.</p></div><div class="teaser--wrap"><img class="teaser--img w-100 aspect-square lozad" data-src="/assets/images/icons/body/efficiency.svg" /><h3 class="h4 tc-black-soft">Eficiencia</h3><p>Utilizamos cada uno de nuestros recursos y herramientas, de la forma más adecuada para brindar la mejor experiencia posible a los canales o nichos de nuestros clientes.</p></div><div class="teaser--wrap"><img class="teaser--img w-100 aspect-square lozad" data-src="/assets/images/icons/body/innovation.svg" /><h3 class="h4 tc-black-soft">Innovación</h3><p>Para garantizar una mejora constante, verificamos cada uno de nuestros procesos de planeación, investigación y desarrollo de forma constante.</p></div></div>'],
                    ['content' => '<h2 class="h2">Descubre nuestro Laboratorio Integral</h2><p class="h4">En este laboratorio te brindamos todo lo necesario, para ayudarte a hacer realidad esa idea que tienes en mente. Material, cuidado, colores, lujo, textura, iluminación, neón y todo lo que puedas imaginarte.</p>'],
                    ['content' => '<h2 class="h2">¿Por qué confiar en Xencar Marketing Digital Laboratorio Integral?</h2><p class="h4">En Xencar Marketing Digital Laboratorio Integral cada proceso de planeación, creación y desarrollo es cuidado hasta el más mínimo detalle. Lo que garantiza la calidad del producto final, desde el primer instante.</p>'],
                    ['content' => '<div class="grid g-50 col-3 small-col-1 teaser"><div class="teaser--wrap"><img class="teaser--img w-100 aspect-square lozad" data-src="/assets/images/icons/body/development.svg" /><h3 class="h4 tc-black-soft">Desarrollo y formulación</h3><p>Nuestros expertos te ayudarán a identificar y encontrar materiales que sean efectivos, de la más alta calidad y funcionen para el propósito de tu anuncio publicitario.</p></div><div class="teaser--wrap"><img class="teaser--img w-100 aspect-square lozad" data-src="/assets/images/icons/body/time.svg" /><h3 class="h4 tc-black-soft">Tiempo de fabricación</h3><p>Integrado con nuestra metodología de fabricación, nuestros procesos y equipos de trabajo ofrecen uno de los tiempos de elaboración más rápidos en el área de maquila.</p></div><div class="teaser--wrap"><img class="teaser--img w-100 aspect-square lozad" data-src="/assets/images/icons/body/asic.svg" /><h3 class="h4 tc-black-soft">Alto valor de elaboración e implementación.</h3><p>Desarrollamos anuncios Publicitarios con materiales de calidad Premium, una presentación excelente y al hacerlo, te ayudamos a obtener mejores ganancias gracias al valor percibido de nuestros anuncios publicitarios.</p></div></div>'],
                    ['content' => '<p class="h2">Anímate a trabajar con nosotros y convierte tu producto, en una marca de calidad con la mejor publicidad. Imprime tu sello. Hazlo distinto.<span class="d-block tc-purple">Hazlo Disruptivo.</span></p>'],
                ],
                'process_title' => null,
                'process_subtitle' => null,
                'process_steps' => null,
            ],
        ];

        foreach ($services as $data) {
            $categoryId = $categories[$data['category_slug']] ?? null;

            if (! $categoryId) {
                $this->command->warn("Categoría '{$data['category_slug']}' no encontrada, saltando servicio '{$data['slug']}'");

                continue;
            }

            Service::updateOrCreate(
                ['slug' => $data['slug']],
                [
                    'name' => $data['name'],
                    'short_description' => $data['short_description'] ?? null,
                    'category_id' => $categoryId,
                    'hero_title' => $data['hero_title'],
                    'seo_title' => $data['seo_title'],
                    'seo_description' => $data['seo_description'],
                    'body_content' => $data['body_content'],
                    'process_title' => $data['process_title'],
                    'process_subtitle' => $data['process_subtitle'],
                    'process_steps' => $data['process_steps'],
                    'is_active' => true,
                ]
            );

            $this->command->info("✅ Servicio '{$data['name']}' actualizado.");
        }
    }
}
