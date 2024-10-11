@extends('layouts.app')
@section('title', 'Conoce nuestra sección de Preguntas frecuentes FAQ´S  - BSH')
@section('description', '	
Solicita una asesoría gratuita con uno de nuestros especialistas: Llena el formulario de contacto, 
conversa en nuestro chat o a través de nuestros números')
@section('structured-data')

<!-- Datos estructurados de la organización -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Bombas Sellos y Hules Industriales S.A. de C.V.",
  "url": "https://bombasellos.com.mx",
  "logo": "https://bombasellos.com.mx/img/logo.png",
  "description": "Fabricación de piezas de Hule por Maquinado, Moldeo y Extruido, ofreciendo soluciones integrales en los sectores Metal-mecánico, Minería, Oil&Gas e Industria.",
  "foundingDate": "2010",
  "contactPoint": {
    "@type": "ContactPoint",
    "contactType": "Sales",
    "telephone": "+52-55-5752-1715",
    "email": "bsh@bombasellos.com.mx",
    "areaServed": "MX",
    "availableLanguage": ["Español", "English"]
  },
  "sameAs": [
    "https://www.facebook.com/bombaselloshules",
    "https://www.linkedin.com/company/bombaselloshules"
  ],
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Otavalo número 91, Colonia Lindavista, CDMX",
    "addressLocality": "Gustavo A. Madero",
    "postalCode": "07300",
    "addressCountry": "MX"
  }
}
</script>

<!-- Datos estructurados de la página web -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Conoce nuestra sección de Preguntas frecuentes FAQ´S - BSH",
  "description": "Solicita una asesoría gratuita con uno de nuestros especialistas: Llena el formulario de contacto, conversa en nuestro chat o a través de nuestros números.",
  "url": "https://bombasellos.com.mx/preguntas-frecuentes",
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Home",
        "item": "https://bombasellos.com.mx/"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Preguntas frecuentes",
        "item": "https://bombasellos.com.mx/preguntas-frecuentes"
      }
    ]
  },
  "mainEntityOfPage": {
    "@type": "WebSite",
    "@id": "https://bombasellos.com.mx",
    "potentialAction": {
      "@type": "SearchAction",
      "target": "https://bombasellos.com.mx/?s={search_term_string}",
      "query-input": "required name=search_term_string"
    }
  }
}
</script>

<!-- Datos estructurados de FAQ -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "¿Cuáles son los métodos de fabricación de piezas de hule?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Fabricamos piezas de hule utilizando métodos de maquinado, moldeo y extruido, adaptándonos a las necesidades de cada proyecto."
      }
    },
    {
      "@type": "Question",
      "name": "¿Qué tipo de piezas pueden fabricar?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Podemos fabricar piezas de hule de diferentes formas y tamaños, desde juntas y empaques hasta perfiles de hule personalizados."
      }
    },
    {
      "@type": "Question",
      "name": "¿Ofrecen asesoría técnica para proyectos de fabricación de hule?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Sí, ofrecemos asesoría técnica para garantizar que sus piezas de hule cumplan con los estándares de calidad y eficiencia requeridos."
      }
    },
    {
      "@type": "Question",
      "name": "¿Cuáles son los tiempos de entrega para la fabricación de piezas de hule?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Nuestros tiempos de entrega varían según la complejidad del proyecto, pero ofrecemos fabricación express para piezas urgentes."
      }
    },
    {
      "@type": "Question",
      "name": "¿Qué tipos de equipos hidráulicos y refacciones industriales ofrecen?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ofrecemos una amplia gama de equipos hidráulicos, incluyendo bombas, válvulas, cilindros lineales y rotativos, así como refacciones para garantizar el óptimo funcionamiento de sus sistemas. Todas nuestras piezas están diseñadas para proporcionar durabilidad y eficiencia en diversos sectores industriales."
      }
    },
    {
      "@type": "Question",
      "name": "¿Cómo puedo solicitar una asesoría gratuita in-situ?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Puede solicitar una asesoría gratuita contactándonos a través de nuestro formulario de contacto en el sitio web, llamando a nuestros números telefónicos o conversando directamente en nuestro chat en línea. Uno de nuestros especialistas programará una visita a sus instalaciones para evaluar sus necesidades específicas."
      }
    },
    {
      "@type": "Question",
      "name": "¿Qué marcas premium distribuyen y cuáles son sus garantías?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Somos distribuidores autorizados de marcas premium reconocidas en la industria hidráulica, como Trelleborg. Todas nuestras marcas cuentan con garantías directas del fabricante, asegurando la calidad y confiabilidad de nuestros productos."
      }
    },
    {
      "@type": "Question",
      "name": "¿Cuáles son los tiempos de entrega para pedidos de refacciones y equipos?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Nuestros tiempos de entrega varían según la disponibilidad del producto y la ubicación del cliente. Sin embargo, nos esforzamos por ofrecer entregas inmediatas para productos en stock y gestionar pedidos especiales con la mayor rapidez posible para satisfacer las necesidades de nuestros clientes."
      }
    },
    {
      "@type": "Question",
      "name": "¿Ofrecen servicios de mantenimiento y reparación para equipos hidráulicos?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Sí, brindamos servicios completos de mantenimiento y reparación para equipos hidráulicos lineales y rotativos. Nuestro equipo de técnicos calificados realiza análisis de fallas, diagnósticos precisos y mantenimiento preventivo para asegurar el funcionamiento continuo y eficiente de sus sistemas."
      }
    },
    {
      "@type": "Question",
      "name": "¿Cómo puedo acceder a la capacitación técnica para mi personal?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ofrecemos programas de capacitación técnica impartidos por nuestro equipo de especialistas con más de 30 años de experiencia. Puede coordinar sesiones de capacitación contactándonos directamente, y adaptaremos los contenidos según las necesidades específicas de su personal y procesos industriales."
      }
    },
    {
      "@type": "Question",
      "name": "¿Qué distingue a Bombas Sellos y Hules Industriales de otras empresas del sector?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Nos diferenciamos por nuestro enfoque integral que combina la venta de equipos y refacciones con servicios técnicos especializados. Además, contamos con un equipo de expertos altamente calificados, amplia disponibilidad de productos, y un fuerte compromiso con la satisfacción del cliente a través de asesorías personalizadas y servicios post-venta de alta calidad."
      }
    },
    {
      "@type": "Question",
      "name": "¿Cómo realizan el análisis de fallas y diagnósticos de equipos hidráulicos?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Utilizamos herramientas avanzadas y técnicas de ingeniería hidráulica para identificar y diagnosticar problemas en sus equipos. Nuestro proceso incluye una inspección detallada, análisis de componentes y pruebas de funcionamiento para determinar la causa raíz de las fallas y proponer soluciones efectivas."
      }
    },
    {
      "@type": "Question",
      "name": "¿Cómo puedo saber qué tipo de sellado mejorará mi proceso productivo?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Solicita una asesoría gratuita con uno de nuestros especialistas: llena el formulario de contacto, conversa en nuestro chat o a través de nuestros números telefónicos, te atenderemos con mucho gusto."
      }
    },
    {
      "@type": "Question",
      "name": "¿Cuál es su política de devoluciones y garantías?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Todos nuestros productos cuentan con garantías directas del fabricante que cubren defectos de fabricación y materiales. En caso de necesitar realizar una devolución, por favor contáctenos para coordinar el proceso conforme a nuestras políticas, garantizando una experiencia sin contratiempos para nuestros clientes."
      }
    }
  ]
}
</script>

@endsection


@section('contenido')


<section class="relative block">
    <div class="max-w-[1190px] flex mx-auto relative">
        <div class="w-full flex">
            <div class="relative flex w-full min-h-[1px]">
                <div class="relative flex w-full">
                    <div class="relative flex flex-wrap content-start p-[10px] w-full">
                        <div class="relative w-full">
                            <div class="transition-all duration-300">
                                <div>
                                    <!-- Flexy Breadcrumb -->
                                    <div>
                                        <!-- Breadcrumb wrapper -->
                                        <div class="m-0 p-0">
                                         
                                                                    <!-- Ordered list-->
                                                <!-- Ordered list-->
                                                <ol itemscope itemtype="https://schema.org/BreadcrumbList" class="block list-none p-0 m-0 font-roboto text-[16px] float-left bg-[#edf1f0] rounded-lg">
                                                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="inline-block px-4 py-3 mr-0.75 rounded-l-lg text-[16px]">
                                                        <span itemprop="name">
                                                            <!-- Home Link -->
                                                            <a itemprop="item" href="{{ url('/') }}" class="text-[#337ab7] hover:text-[#2a5884]">
                                                                <i class="fa fa-home mr-1"></i>Home 
                                                            </a>
                                                        </span>
                                                        <meta itemprop="position" content="1" />
                                                    </li>
                                                    <li class="inline-block px-0.5 py-3 text-[#cccccc]">/</li>
                                                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="inline-block px-3 py-3 rounded-r-lg text-[16px]">
                                                        <span itemprop="name" title="Preguntas frecuentes" class="text-[#27272a]">Preguntas frecuentes</span>
                                                        <meta itemprop="position" content="3" />
                                                    </li>
                                                </ol>
                                            <div class="m-0 p-0"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<section class="relative block w-full lg:w-[1423px] bg-cover transition-all duration-300" style="background-image: url('/img/bombas-industriales.jpg'); left: 0;">
    <div class="max-w-[1190px] flex mx-auto relative">
        <div class="w-full flex">
            <div class="relative flex w-full min-h-[1px]">
                <div class="relative flex w-full">
                    <div class="relative flex flex-wrap content-start p-2.5 w-full">
                        <!-- Espaciador superior -->
                        <div class="relative w-full mb-5">
                            <div class="transition-all duration-300">
                                <div>
                                    <div class="h-[50px] md:h-[70px]"></div>
                                </div>
                            </div>
                        </div>

                    <!-- Título -->
                    <div class="relative w-full mb-5">
                        <div class="transition-all duration-300">
                            <div class="text-[#7a7a7a]">
                                <div class="absolute w-full font-roboto font-semibold user-select-none"></div>
                            </div>
                            <h1 class="text-[16px] md:text-[20px] text-[#2953b1] leading-[20px] md:leading-[25px] lg:leading-[30px] mt-0 mb-0 font-semibold font-open-sans text-center break-all">
                                <div class="inline-block relative z-1">
                                    <div class="inline-flex text-white font-roboto font-semibold border-none text-[34px] md:text-[48px] lg:text-[58px] lg:leading-[65px] border-[#6ec1e4]">
                                        Preguntas Frecuentes
                                    </div>
                                    <div class="mt-0 relative flex justify-center">
                                        <div class="after:content-[''] after:block after:bg-[#610001] after:w-[50px] md:after:w-[100px] after:h-[2px] after:mt-2 mx-auto"></div>
                                    </div>
                                </div>
                            </h1>
                        </div>
                    </div>


                        <!-- Espaciador inferior -->
                        <div class="relative w-full">
                            <div class="transition-all duration-300">
                                <div>
                                    <div class="h-[50px] md:h-[70px]"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>









<section data-id="cd64300" data-element_type="section" class="block box-border relative">
    <div class="max-w-[1190px] flex mx-auto relative">
        <div class="w-full lg:flex">
            <!-- Columna 1 -->
            <div data-id="11ca8c8" data-element_type="column" class="lg:w-1/2 box-border relative flex min-h-[1px]">
                <div class="w-full relative flex">
                    <div class="box-border flex relative w-full flex-wrap align-content-center p-2.5">
                        <div data-id="499ece7" data-element_type="widget" data-widget_type="image.default" class="box-border text-center relative w-full">
                            <div class="box-border transition-all duration-300">
                                <div class="box-border">
                                    <picture loading="lazy" title="Preguntas frecuentes 1" class="box-border">
                                        <source type="image/webp" srcset="/img/Consultoria-Tecnica.png.webp 536w" sizes="(max-width: 536px) 100vw, 536px" />
                                        <img width="536" height="333" src="/img/Consultoria-Tecnica.png.webp" alt="Consultoría y capacitación técnica en Bombas y sistemas hidráulicos." loading="lazy" srcset="/img/Consultoria-Tecnica.png.webp 536w" sizes="(max-width: 536px) 100vw, 536px" class="max-w-full h-auto align-middle border-0 inline-block" />
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Columna 2 -->
            <div data-id="df69187" data-element_type="column" class="lg:w-1/2 box-border relative flex min-h-[1px]">
                <div class="w-full relative flex">
                    <div class="box-border flex relative w-full flex-wrap align-content-start p-2.5">
                        <div data-id="172c6ae" data-element_type="widget" data-widget_type="accordion.default" class="box-border relative w-full">
                            <div class="box-border transition-all duration-300">
                                <div role="tablist" class="box-border text-left">
                                    <!-- Primer Acordeón -->
                                    <div class="box-border border border-[#d4d4d4]">
                                        <div data-tab="1" role="tab" aria-controls="elementor-tab-content-2421" aria-expanded="true" tabindex="0" aria-selected="true" class="box-border m-0 py-[15px] px-5 font-bold leading-[15px] cursor-pointer outline-none">
                                            <span aria-hidden="true" class="text-[#043e81] box-border float-left text-left block w-6">
                                                <i class="fas fa-chevron-up"></i>
                                            </span>
                                            <a href="#" class="font-roboto font-semibold text-[#043e81] no-underline bg-transparent box-border shadow-none">¿Cómo puedo saber qué tipo de sellado mejorará mi proceso productivo?</a>
                                        </div>
                                        <div id="elementor-tab-content-2421" role="tabpanel" aria-labelledby="elementor-tab-title-2421" class="hidden text-gray-500 font-roboto font-normal box-border py-[15px] px-5 border-t border-[#d4d4d4]">
                                            <p class="text-gray-600 leading-[27px] mb-8 mt-0 box-border">
                                                Solicita una asesoría gratuita con uno de nuestros especialistas: llena el formulario de contacto, conversa en nuestro chat o a través de nuestros números telefónicos, te atenderemos con mucho gusto.
                                            </p>
                                        </div>
                                    </div>                                    
                                    <!-- Segundo Acordeón -->
                                    <div class="box-border border border-[#d4d4d4]">
                                        <div data-tab="2" role="tab" aria-controls="elementor-tab-content-2422" aria-expanded="true" tabindex="0" aria-selected="true" class="box-border m-0 py-[15px] px-5 font-bold leading-[15px] cursor-pointer outline-none">
                                            <span aria-hidden="true" class="text-[#043e81] box-border float-left text-left block w-6">
                                                <i class="fas fa-chevron-up"></i>
                                            </span>
                                            <a href="#" class="font-roboto font-semibold text-[#043e81] no-underline bg-transparent box-border shadow-none">¿Cuentan con precios a mayoristas?</a>
                                        </div>
                                        <div id="elementor-tab-content-2422" role="tabpanel" aria-labelledby="elementor-tab-title-2422" class="hidden text-gray-500 font-roboto font-normal box-border py-[15px] px-5 border-t border-[#d4d4d4]">
                                            <p class="text-gray-600 leading-[27px] mb-8 mt-0 box-border">
                                                Contamos con precios de mayoreo y con amplio stock, somos distribuidores autorizados de la marca Trelleborg.
                                            </p>
                                        </div>
                                    </div>  

                                    
                                    <!-- Primer Acordeón -->
                            <div class="border border-[#d4d4d4] mb-4 rounded-lg">
                                <div data-tab="1" role="tab" aria-controls="accordion-content-1" aria-expanded="false" tabindex="0" aria-selected="false" class="flex items-center justify-between p-5 font-bold leading-[15px] cursor-pointer outline-none">
                                    <div class="flex items-center">
                                        <span aria-hidden="true" class="text-[#043e81] mr-2">
                                            <i class="fas fa-chevron-down"></i>
                                        </span>
                                        <span class="font-roboto font-semibold text-[#043e81]">¿Qué tipos de equipos hidráulicos y refacciones industriales ofrecen?</span>
                                    </div>
                                </div>
                                <div id="accordion-content-1" role="tabpanel" aria-labelledby="accordion-tab-1" class="hidden text-gray-500 font-roboto font-normal p-5 border-t border-[#d4d4d4]">
                                    <p class="text-gray-600 leading-7 mb-8">
                                        Ofrecemos una amplia gama de equipos hidráulicos, incluyendo bombas, válvulas, cilindros lineales y rotativos, así como refacciones para garantizar el óptimo funcionamiento de sus sistemas. Todas nuestras piezas están diseñadas para proporcionar durabilidad y eficiencia en diversos sectores industriales.
                                    </p>
                                </div>
                            </div>

                            <!-- Segundo Acordeón -->
                            <div class="border border-[#d4d4d4] mb-4 rounded-lg">
                                <div data-tab="2" role="tab" aria-controls="accordion-content-2" aria-expanded="false" tabindex="0" aria-selected="false" class="flex items-center justify-between p-5 font-bold leading-[15px] cursor-pointer outline-none">
                                    <div class="flex items-center">
                                        <span aria-hidden="true" class="text-[#043e81] mr-2">
                                            <i class="fas fa-chevron-down"></i>
                                        </span>
                                        <span class="font-roboto font-semibold text-[#043e81]">¿Cómo puedo solicitar una asesoría gratuita in-situ?</span>
                                    </div>
                                </div>
                                <div id="accordion-content-2" role="tabpanel" aria-labelledby="accordion-tab-2" class="hidden text-gray-500 font-roboto font-normal p-5 border-t border-[#d4d4d4]">
                                    <p class="text-gray-600 leading-7 mb-8">
                                        Puede solicitar una asesoría gratuita contactándonos a través de nuestro formulario de contacto en el sitio web, llamando a nuestros números telefónicos o conversando directamente en nuestro chat en línea. Uno de nuestros especialistas programará una visita a sus instalaciones para evaluar sus necesidades específicas.
                                    </p>
                                </div>
                            </div>

                            <!-- Tercer Acordeón -->
                            <div class="border border-[#d4d4d4] mb-4 rounded-lg">
                                <div data-tab="3" role="tab" aria-controls="accordion-content-3" aria-expanded="false" tabindex="0" aria-selected="false" class="flex items-center justify-between p-5 font-bold leading-[15px] cursor-pointer outline-none">
                                    <div class="flex items-center">
                                        <span aria-hidden="true" class="text-[#043e81] mr-2">
                                            <i class="fas fa-chevron-down"></i>
                                        </span>
                                        <span class="font-roboto font-semibold text-[#043e81]">¿Qué marcas premium distribuyen y cuáles son sus garantías?</span>
                                    </div>
                                </div>
                                <div id="accordion-content-3" role="tabpanel" aria-labelledby="accordion-tab-3" class="hidden text-gray-500 font-roboto font-normal p-5 border-t border-[#d4d4d4]">
                                    <p class="text-gray-600 leading-7 mb-8">
                                        Somos distribuidores autorizados de marcas premium reconocidas en la industria hidráulica, como Trelleborg. Todas nuestras marcas cuentan con garantías directas del fabricante, asegurando la calidad y confiabilidad de nuestros productos.
                                    </p>
                                </div>
                            </div>

                            <!-- Cuarto Acordeón -->
                            <div class="border border-[#d4d4d4] mb-4 rounded-lg">
                                <div data-tab="4" role="tab" aria-controls="accordion-content-4" aria-expanded="false" tabindex="0" aria-selected="false" class="flex items-center justify-between p-5 font-bold leading-[15px] cursor-pointer outline-none">
                                    <div class="flex items-center">
                                        <span aria-hidden="true" class="text-[#043e81] mr-2">
                                            <i class="fas fa-chevron-down"></i>
                                        </span>
                                        <span class="font-roboto font-semibold text-[#043e81]">¿Cuáles son los tiempos de entrega para pedidos de refacciones y equipos?</span>
                                    </div>
                                </div>
                                <div id="accordion-content-4" role="tabpanel" aria-labelledby="accordion-tab-4" class="hidden text-gray-500 font-roboto font-normal p-5 border-t border-[#d4d4d4]">
                                    <p class="text-gray-600 leading-7 mb-8">
                                        Nuestros tiempos de entrega varían según la disponibilidad del producto y la ubicación del cliente. Sin embargo, nos esforzamos por ofrecer entregas inmediatas para productos en stock y gestionar pedidos especiales con la mayor rapidez posible para satisfacer las necesidades de nuestros clientes.
                                    </p>
                                </div>
                            </div>

                            <!-- Quinto Acordeón -->
                            <div class="border border-[#d4d4d4] mb-4 rounded-lg">
                                <div data-tab="5" role="tab" aria-controls="accordion-content-5" aria-expanded="false" tabindex="0" aria-selected="false" class="flex items-center justify-between p-5 font-bold leading-[15px] cursor-pointer outline-none">
                                    <div class="flex items-center">
                                        <span aria-hidden="true" class="text-[#043e81] mr-2">
                                            <i class="fas fa-chevron-down"></i>
                                        </span>
                                        <span class="font-roboto font-semibold text-[#043e81]">¿Ofrecen servicios de mantenimiento y reparación para equipos hidráulicos?</span>
                                    </div>
                                </div>
                                <div id="accordion-content-5" role="tabpanel" aria-labelledby="accordion-tab-5" class="hidden text-gray-500 font-roboto font-normal p-5 border-t border-[#d4d4d4]">
                                    <p class="text-gray-600 leading-7 mb-8">
                                        Sí, brindamos servicios completos de mantenimiento y reparación para equipos hidráulicos lineales y rotativos. Nuestro equipo de técnicos calificados realiza análisis de fallas, diagnósticos precisos y mantenimiento preventivo para asegurar el funcionamiento continuo y eficiente de sus sistemas.
                                    </p>
                                </div>
                            </div>

                            <!-- Sexto Acordeón -->
                            <div class="border border-[#d4d4d4] mb-4 rounded-lg">
                                <div data-tab="6" role="tab" aria-controls="accordion-content-6" aria-expanded="false" tabindex="0" aria-selected="false" class="flex items-center justify-between p-5 font-bold leading-[15px] cursor-pointer outline-none">
                                    <div class="flex items-center">
                                        <span aria-hidden="true" class="text-[#043e81] mr-2">
                                            <i class="fas fa-chevron-down"></i>
                                        </span>
                                        <span class="font-roboto font-semibold text-[#043e81]">¿Cómo puedo acceder a la capacitación técnica para mi personal?</span>
                                    </div>
                                </div>
                                <div id="accordion-content-6" role="tabpanel" aria-labelledby="accordion-tab-6" class="hidden text-gray-500 font-roboto font-normal p-5 border-t border-[#d4d4d4]">
                                    <p class="text-gray-600 leading-7 mb-8">
                                        Ofrecemos programas de capacitación técnica impartidos por nuestro equipo de especialistas con más de 30 años de experiencia. Puede coordinar sesiones de capacitación contactándonos directamente, y adaptaremos los contenidos según las necesidades específicas de su personal y procesos industriales.
                                    </p>
                                </div>
                            </div>

                            <!-- Séptimo Acordeón -->
                            <div class="border border-[#d4d4d4] mb-4 rounded-lg">
                                <div data-tab="7" role="tab" aria-controls="accordion-content-7" aria-expanded="false" tabindex="0" aria-selected="false" class="flex items-center justify-between p-5 font-bold leading-[15px] cursor-pointer outline-none">
                                    <div class="flex items-center">
                                        <span aria-hidden="true" class="text-[#043e81] mr-2">
                                            <i class="fas fa-chevron-down"></i>
                                        </span>
                                        <span class="font-roboto font-semibold text-[#043e81]">¿Qué distingue a Bombas Sellos y Hules Industriales de otras empresas del sector?</span>
                                    </div>
                                </div>
                                <div id="accordion-content-7" role="tabpanel" aria-labelledby="accordion-tab-7" class="hidden text-gray-500 font-roboto font-normal p-5 border-t border-[#d4d4d4]">
                                    <p class="text-gray-600 leading-7 mb-8">
                                        Nos diferenciamos por nuestro enfoque integral que combina la venta de equipos y refacciones con servicios técnicos especializados. Además, contamos con un equipo de expertos altamente calificados, amplia disponibilidad de productos, y un fuerte compromiso con la satisfacción del cliente a través de asesorías personalizadas y servicios post-venta de alta calidad.
                                    </p>
                                </div>
                            </div>

                            <!-- Octavo Acordeón -->
                            <div class="border border-[#d4d4d4] mb-4 rounded-lg">
                                <div data-tab="8" role="tab" aria-controls="accordion-content-8" aria-expanded="false" tabindex="0" aria-selected="false" class="flex items-center justify-between p-5 font-bold leading-[15px] cursor-pointer outline-none">
                                    <div class="flex items-center">
                                        <span aria-hidden="true" class="text-[#043e81] mr-2">
                                            <i class="fas fa-chevron-down"></i>
                                        </span>
                                        <span class="font-roboto font-semibold text-[#043e81]">¿Cómo realizan el análisis de fallas y diagnósticos de equipos hidráulicos?</span>
                                    </div>
                                </div>
                                <div id="accordion-content-8" role="tabpanel" aria-labelledby="accordion-tab-8" class="hidden text-gray-500 font-roboto font-normal p-5 border-t border-[#d4d4d4]">
                                    <p class="text-gray-600 leading-7 mb-8">
                                        Utilizamos herramientas avanzadas y técnicas de ingeniería hidráulica para identificar y diagnosticar problemas en sus equipos. Nuestro proceso incluye una inspección detallada, análisis de componentes y pruebas de funcionamiento para determinar la causa raíz de las fallas y proponer soluciones efectivas.
                                    </p>
                                </div>
                            </div>

                            <!-- Noveno Acordeón -->
                            <div class="border border-[#d4d4d4] mb-4 rounded-lg">
                                <div data-tab="9" role="tab" aria-controls="accordion-content-9" aria-expanded="false" tabindex="0" aria-selected="false" class="flex items-center justify-between p-5 font-bold leading-[15px] cursor-pointer outline-none">
                                    <div class="flex items-center">
                                        <span aria-hidden="true" class="text-[#043e81] mr-2">
                                            <i class="fas fa-chevron-down"></i>
                                        </span>
                                        <span class="font-roboto font-semibold text-[#043e81]">¿Cómo puedo saber qué tipo de sellado mejorará mi proceso productivo?</span>
                                    </div>
                                </div>
                                <div id="accordion-content-9" role="tabpanel" aria-labelledby="accordion-tab-9" class="hidden text-gray-500 font-roboto font-normal p-5 border-t border-[#d4d4d4]">
                                    <p class="text-gray-600 leading-7 mb-8">
                                        Solicita una asesoría gratuita con uno de nuestros especialistas: llena el formulario de contacto, conversa en nuestro chat o a través de nuestros números telefónicos, te atenderemos con mucho gusto.
                                    </p>
                                </div>
                            </div>

                            <!-- Décimo Acordeón -->
                            <div class="border border-[#d4d4d4] mb-4 rounded-lg">
                                <div data-tab="10" role="tab" aria-controls="accordion-content-10" aria-expanded="false" tabindex="0" aria-selected="false" class="flex items-center justify-between p-5 font-bold leading-[15px] cursor-pointer outline-none">
                                    <div class="flex items-center">
                                        <span aria-hidden="true" class="text-[#043e81] mr-2">
                                            <i class="fas fa-chevron-down"></i>
                                        </span>
                                        <span class="font-roboto font-semibold text-[#043e81]">¿Cuál es su política de devoluciones y garantías?</span>
                                    </div>
                                </div>
                                <div id="accordion-content-10" role="tabpanel" aria-labelledby="accordion-tab-10" class="hidden text-gray-500 font-roboto font-normal p-5 border-t border-[#d4d4d4]">
                                    <p class="text-gray-600 leading-7 mb-8">
                                        Todos nuestros productos cuentan con garantías directas del fabricante que cubren defectos de fabricación y materiales. En caso de necesitar realizar una devolución, por favor contáctenos para coordinar el proceso conforme a nuestras políticas, garantizando una experiencia sin contratiempos para nuestros clientes.
                                    </p>
                                </div>
                            </div>






                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin de Columnas -->
        </div>
    </div>
</section>











<!-- Puntuar página -->
<div class="flex flex-col items-center box-border my-8">
    <div class="box-border mb-2 text-lg">¡Haz clic para puntuar esta página!</div>
    <div class="inline-block box-border relative" style="width: 160px; height: 32px; background-size: 32px; cursor: pointer; background-image: url('/img/star_2.svg');">
        <div class="absolute top-0 left-0 h-full" style="width: 0%; background-size: 32px; background-image: url('/img/star_3.svg');"></div>
    </div>
    <div class="inline-block align-bottom ml-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="inline-block fill-current text-gray-600 cursor-pointer">
            <path d="M18 18v-16h-4v16h4zM12 18v-11h-4v11h4zM6 18v-8h-4v8h4z"></path>
        </svg>
        <span class="text-sm">(Votos: <span id="votes-count">0</span> Promedio: <span id="average-rating">0</span>)</span>
    </div>
</div>

<!-- Incluir el script de HubSpot en tu layout -->
<div id="hubspotFormContainer" class="bg-[#000935] p-12 rounded-md text-white">
    <h2 id="contacto" class="text-[41px] text-center font-semibold mb-4">¿Necesitas más información?</h2>
    <p class="text-[32px] mb-6">Por favor llena el siguiente formulario y en breve un experto se comunicará contigo.</p>
    <div id="hubspotForm"></div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    var script = document.createElement("script");
                    script.src = "//js.hsforms.net/forms/embed/v2.js";
                    script.charset = "utf-8";
                    script.type = "text/javascript";
                    script.async = true;
                    script.onload = function() {
                        hbspt.forms.create({
                            region: "na1",
                            portalId: "7547674",
                            formId: "9a3ab0cf-0e30-47a4-b3d9-0b4bfdcc3a27",
                            target: '#hubspotForm'
                        });
                    };
                    document.body.appendChild(script);
                    observer.disconnect();
                }
            });
        });

        observer.observe(document.querySelector("#hubspotFormContainer"));
    });

    document.querySelectorAll('a[href^="#hubspotForm"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>





<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Selecciona todos los encabezados del acordeón
        const accordionHeaders = document.querySelectorAll('[role="tab"]');

        accordionHeaders.forEach(header => {
            header.addEventListener('click', function () {
                // Obtén el contenido relacionado con este encabezado
                const panelId = this.getAttribute('aria-controls');
                const panel = document.querySelector(`#${panelId}`);

                // Alternar la visibilidad del panel
                if (panel.classList.contains('hidden')) {
                    // Ocultar otros paneles abiertos
                    document.querySelectorAll('[role="tabpanel"]').forEach(p => p.classList.add('hidden'));

                    // Mostrar este panel
                    panel.classList.remove('hidden');
                } else {
                    // Ocultar este panel si ya está abierto
                    panel.classList.add('hidden');
                }

                // Alternar el icono de flecha
                const icon = this.querySelector('i');
                icon.classList.toggle('fa-chevron-up');
                icon.classList.toggle('fa-chevron-down');
            });
        });
    });
</script>




@endsection