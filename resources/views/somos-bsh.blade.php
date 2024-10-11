@extends('layouts.app')
@section('title', 'Quienes Somos. BSH S.A. de C.V. Distribuidor Master.')
@section('description', 'Descubra nuestras propuestas de valor y porque nuestros clientes nos eligen 
como su proveedor clave para soluciones en hidraúlica, control y manejo de fluidos')

@section('structured-data')

<!-- Datos estructurados de la organización -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Bombas Sellos y Hules Industriales S.A. de C.V.",
  "url": "https://bombasellos.com.mx",
  "logo": "https://bombasellos.com.mx/img/logo.png",
  "description": "Comercializadora líder en México de equipos hidráulicos y refacciones industriales, proporcionando soluciones integrales para la Industria, Metal-mecánico, Minería, Oil&Gas.",
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
  "name": "¿Quiénes Somos - Bombas, Sellos y Hules Industriales S.A. de C.V.",
  "description": "Descubra nuestras propuestas de valor y por qué nuestros clientes nos eligen como su proveedor clave para soluciones en hidráulica, control y manejo de fluidos.",
  "url": "https://bombasellos.com.mx/quienes-somos",
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
        "name": "¿Quiénes Somos?",
        "item": "https://bombasellos.com.mx/quienes-somos"
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
      "name": "¿Por qué las empresas nos eligen?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Las empresas nos eligen por nuestra capacidad para ofrecer soluciones integrales que incluyen equipo, refacciones y servicio post-venta, con técnicos calificados y más de 30 años de experiencia en ingeniería hidráulica."
      }
    },
    {
      "@type": "Question",
      "name": "¿Qué servicios ofrecemos?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ofrecemos asesoría gratuita in-situ, mantenimiento preventivo y correctivo para equipos hidráulicos, y un servicio post-venta completo, garantizando el óptimo funcionamiento de sus sistemas."
      }
    },
    {
      "@type": "Question",
      "name": "¿Qué beneficios aporta nuestra capacitación técnica?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Nuestra capacitación técnica garantiza la optimización de los procesos industriales, mejora la eficiencia operativa y extiende la vida útil de los equipos."
      }
    }
  ]
}
</script>

<!-- Datos estructurados de producto relacionado -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Equipos hidráulicos y refacciones industriales",
  "description": "Ofrecemos equipos hidráulicos, refacciones industriales y servicios post-venta de marcas premium como Calpeda, Trelleborg y Wilden.",
  "brand": {
    "@type": "Brand",
    "name": "Calpeda, Trelleborg, Wilden"
  },
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "MXN",
    "availability": "https://schema.org/InStock",
    "url": "https://bombasellos.com.mx/productos"
  },
  "image": "https://bombasellos.com.mx/img/equipos-hidraulicos.jpg"
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
                                           <!-- Ordered list -->
                                                <ol itemscope itemtype="https://schema.org/BreadcrumbList"
                                                class="block list-none m-0 p-0 float-left font-roboto text-[16px] rounded-[4px] bg-[#edf1f0]">
                                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"
                                                    class="inline-block p-[15px_0_15px_16px] mr-[3px] rounded-l-[4px] text-[16px] leading-normal">
                                                    <span itemprop="name">
                                                        <!-- Home Link -->
                                                        <a itemprop="item" href="{{ url('/') }}"
                                                            class="text-[#337ab7] no-underline transition-none">
                                                            <i aria-hidden="true" class="fas fa-home inline-block mr-[5px]"></i>Home
                                                        </a>
                                                    </span>
                                                    <meta itemprop="position" content="1" />
                                                </li>
                                                <li class="inline-block p-[15px_2px] text-[16px] leading-normal text-[#cccccc]">/</li>
                                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"
                                                    class="inline-block p-[15px_15px_15px_2px] rounded-r-[4px] text-[16px] leading-normal text-[#27272a]">
                                                    <span itemprop="name" title="Quienes somos – Bombas, sellos y hules industriales">Quienes somos – Bombas, sellos y hules industriales</span>
                                                    <meta itemprop="position" content="2" />
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







<section data-id="3d745a9" data-element_type="section" class="block relative lg:mt-[50px]">
    <div class="max-w-[1190px] lg:flex mx-auto relative">
        <div class="w-full lg:flex">
            <!-- Columna 1 -->
            <div data-id="4396747" data-element_type="column" class="lg:w-1/2 relative flex min-h-[1px]">
                <div class="w-full relative flex">
                    <div class="flex w-full flex-wrap content-start p-[10px]">
                        <!-- Widget Heading -->
                        <div data-id="388b6aa" data-element_type="widget" data-widget_type="mdp-headinger-elementor.default" class="w-full relative mb-5">
                            <div class="transition-all duration-300">
                                <div>
                                    <div class="text-[#7a7a7a]">
                                        <div class="font-roboto font-semibold absolute w-full user-select-none"></div>
                                    </div>
                                    <h1 class="text-[35px] leading-[44.5455px] font-semibold font-sans text-[#343434] m-0 text-left">
                                        <div class="inline-block relative z-1">
                                            <div class="font-roboto font-black text-[#043e81] border-none text-[36px]">
                                                Bombas Sellos y Hules Industriales S.A. de C.V.
                                            </div>
                                        </div>
                                    </h1>
                                </div>
                            </div>
                        </div>

                        <!-- Widget Text Editor -->
                        <div data-id="18d4a41" data-element_type="widget" data-widget_type="text-editor.default" class="w-full relative text-[#7a7a7a] font-roboto font-normal">
                            <div class="transition-all duration-300 lg:text-[16px] text-[13px]">
                                <div>
                                    <p class="leading-[23px] mb-8 text-justify text-[#666666]">
                                        Comercializadora que se constituye en el año 2010, con el fin de proveer equipos y refacciones para el manejo de fluidos y servicios técnicos especializados en los sectores Metal-mecánico, Minería, Oil&Gas e Industria en general.<br />
                                        Ofrecemos un servicio integral de gran valor agregado:
                                    </p>
                                    <ul class="list-square pl-[15px] mb-0">
                                        <li class="list-item">Asesoría en la selección de producto para cada aplicación;</li>
                                        <li class="list-item">Soporte y asistencia técnica para instalación, arranque, operación;</li>
                                        <li class="list-item">Suministro de refacciones; análisis de falla, diagnóstico y mantenimiento de equipos hidráulicos lineales y rotativos;</li>
                                        <li class="list-item">Capacitación técnica por parte de nuestro equipo de especialistas con más de 30 años de experiencia en el ramo.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Columna 2 -->
            <div data-id="2d1c22a" data-element_type="column" class="lg:w-1/2 relative flex min-h-[1px]">
                <div class="w-full relative flex">
                    <div class="flex w-full flex-wrap content-start p-[10px]">
                        <!-- Widget Image -->
                        <div data-id="bfc8596" data-element_type="widget" data-widget_type="image.default" class="w-full relative text-center">
                            <div class="transition-all duration-300">
                                <div>
                                    <picture loading="lazy" title="Quienes somos - Bombas, sellos y hules industriales 1">
                                        <source type="image/webp" sizes="(max-width: 600px) 100vw, 600px" srcset="/img/Bombas-Sellos-y-Hules-Industriales.png.webp 600w" />
                                        <img width="600" height="470" alt="Bombas Sellos y Hules Industriales" sizes="(max-width: 600px) 100vw, 600px" srcset="/img/Bombas-Sellos-y-Hules-Industriales.png.webp 600w" class="max-w-full h-auto align-middle border-none inline-block" />
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>











<section data-id="33d8eec" data-element_type="section" class="block relative">
    <div class="max-w-[1190px] lg:flex mx-auto relative">
        <div class="w-full lg:flex">
            <!-- Columna 1 -->
            <div data-id="1c9890b" data-element_type="column" class="lg:w-[51.918%] relative flex min-h-[1px]">
                <div class="w-full relative flex">
                    <div class="flex w-full flex-wrap content-start p-[10px]">
                        <!-- Widget Heading -->
                        <div data-id="fdb6373" data-element_type="widget" data-widget_type="mdp-headinger-elementor.default" class="w-full relative mb-5">
                            <div class="transition-all duration-300">
                                <div>
                                    <h2 class="text-[#2953b1] leading-[25px] font-semibold">
                                        <div class="inline-block relative z-1">
                                            <div class="font-roboto font-black text-[#043e81] lg:text-[36px] text-[24px] leading-[46.8px]">
                                                ¿Por qué las empresas nos eligen?
                                            </div>
                                        </div>
                                    </h2>
                                </div>
                            </div>
                        </div>

                        <!-- Subsection 1 -->
                        <section data-id="a56a8f4" data-element_type="section" class="block relative w-full">
                            <div class="max-w-[1190px] flex mx-auto relative">
                                <div class="w-full flex">
                                    <div data-id="0fa984f" data-element_type="column" class="w-[20.182%] relative flex min-h-[1px]">
                                        <div class="w-full relative flex">
                                            <div class="flex w-full flex-wrap content-start p-[10px]">
                                                <!-- Image Widget -->
                                                <div data-id="f36e25d" data-element_type="widget" data-widget_type="image.default" class="w-full relative text-center">
                                                    <div class="transition-all duration-300">
                                                        <picture loading="lazy" title="Quienes somos - Bombas, sellos y hules industriales 2">
                                                            <img src="/img/undraw_Destination_6jtj.png.webp" alt="undraw Destination 6jtj" class="max-w-full h-auto align-middle border-none inline-block" />
                                                        </picture>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-id="6ae7078" data-element_type="column" class="w-[79.818%] relative flex min-h-[1px]">
                                        <div class="w-full relative flex">
                                            <div class="flex w-full flex-wrap content-start p-[10px]">
                                                <!-- Text Widget -->
                                                <div data-id="747dc82" data-element_type="widget" data-widget_type="text-editor.default" class="w-full relative text-[#7a7a7a] font-roboto lg:text-[20px] text-[18px] leading-[23px]">
                                                    <p class="text-justify mb-8 text-[#666666]">
                                                        <strong class="font-bold text-black">Servicio integral; Equipo, refacción y servicio&nbsp; &nbsp; pos-venta</strong>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Subsection 2 -->
                        <section data-id="5efb540" data-element_type="section" class="block relative w-full">
                            <div class="max-w-[1190px] flex mx-auto relative">
                                <div class="w-full flex">
                                    <div data-id="141ff17" data-element_type="column" class="w-[20.182%] relative flex min-h-[1px]">
                                        <div class="w-full relative flex">
                                            <div class="flex w-full flex-wrap content-start p-[10px]">
                                                <!-- Image Widget -->
                                                <div data-id="2ec762c" data-element_type="widget" data-widget_type="image.default" class="w-full relative text-center">
                                                    <picture loading="lazy" title="Quienes somos - Bombas, sellos y hules industriales 3">
                                                        <img src="/img/undraw_new_message_2gfk.png.webp" alt="undraw new message 2gfk" class="max-w-full h-auto align-middle border-none inline-block" />
                                                    </picture>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-id="e9221ba" data-element_type="column" class="w-[79.818%] relative flex min-h-[1px]">
                                        <div class="w-full relative flex">
                                            <div class="flex w-full flex-wrap content-start p-[10px]">
                                                <!-- Text Widget -->
                                                <div data-id="1da407b" data-element_type="widget" data-widget_type="text-editor.default" class="w-full relative text-[#7a7a7a] font-roboto text-[18px] leading-[23px]">
                                                    <p class="text-justify mb-8 text-[#666666]">
                                                        <strong class="font-bold text-black">Técnicos calificados con más de 30 años de experiencia, brindando soluciones de ingeniería hidráulica a todo tipo de Industria.</strong>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Subsection 3 -->
                        <section data-id="9cc735e" data-element_type="section" class="block relative w-full">
                            <div class="max-w-[1190px] flex mx-auto relative">
                                <div class="w-full flex">
                                    <div data-id="5200037" data-element_type="column" class="w-[20.182%] relative flex min-h-[1px]">
                                        <div class="w-full relative flex">
                                            <div class="flex w-full flex-wrap content-start p-[10px]">
                                                <!-- Image Widget -->
                                                <div data-id="2241afd" data-element_type="widget" data-widget_type="image.default" class="w-full relative text-center">
                                                    <picture loading="lazy" title="Quienes somos - Bombas, sellos y hules industriales 4">
                                                        <img src="/img/solution.png.webp" alt="solution" class="max-w-full h-auto align-middle border-none inline-block" />
                                                    </picture>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-id="a14b47a" data-element_type="column" class="w-[79.818%] relative flex min-h-[1px]">
                                        <div class="w-full relative flex">
                                            <div class="flex w-full flex-wrap content-start p-[10px]">
                                                <!-- Text Widget -->
                                                <div data-id="5c9bd9b" data-element_type="widget" data-widget_type="text-editor.default" class="w-full relative text-[#7a7a7a] font-roboto text-[18px] leading-[23px]">
                                                    <p class="text-justify mb-8 text-[#666666]">
                                                        <strong class="font-bold text-black">Enfoque en las necesidades de MRO: Producto Premium, entrega inmediata, servicio in- situ.</strong>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>

            <!-- Columna 2 -->
            <div data-id="6bda301" data-element_type="column" class="lg:w-[7.484%] relative flex min-h-[1px]"></div>

            <!-- Columna 3 -->
            <div data-id="5c3dfae" data-element_type="column" class="lg:w-[39.014%] relative flex min-h-[1px]">
                <div class="w-full relative flex">
                    <div class="flex w-full flex-wrap content-start p-[10px]">
                        <!-- Widget Heading -->
                        <div data-id="a2d9c53" data-element_type="widget" data-widget_type="mdp-headinger-elementor.default" class="w-full relative mb-5">
                            <h2 class="text-[20px] text-[#2953b1] leading-[25px] font-semibold">
                                <div class="inline-block relative z-1">
                                    <div class="font-roboto font-black text-[#043e81] text-[36px] leading-[46.8px]">
                                        Nuestra misión
                                    </div>
                                </div>
                            </h2>
                        </div>
                        <!-- Text Widget -->
                        <div data-id="e168610" data-element_type="widget" data-widget_type="text-editor.default" class="w-full relative text-[#7a7a7a] font-roboto mb-5">
                            <p class="text-justify mb-8 text-[#666666] leading-[23px]">
                                Consolidarnos como la comercializadora líder en México de equipos hidráulicos y refacciones industriales, significando para nuestros clientes, no solo proveedores de bienes y servicios, sino de soluciones que aporten al logro de sus objetivos empresariales.
                            </p>
                        </div>
                        <!-- Widget Heading -->
                        <div data-id="91cc8e4" data-element_type="widget" data-widget_type="mdp-headinger-elementor.default" class="w-full relative mb-5">
                            <h2 class="text-[20px] text-[#2953b1] leading-[25px] font-semibold">
                                <div class="inline-block relative z-1">
                                    <div class="font-roboto font-black text-[#043e81] text-[36px] leading-[46.8px]">
                                        Visión
                                    </div>
                                </div>
                            </h2>
                        </div>
                        <!-- Text Widget -->
                        <div data-id="f7a2b48" data-element_type="widget" data-widget_type="text-editor.default" class="w-full relative text-[#7a7a7a] font-roboto mb-5">
                            <p class="text-justify mb-8 text-[#666666] leading-[23px]">
                                Debemos ser para nuestros clientes un proveedor que mejore la cadena de suministro de su organización; entregando un producto de gran diferenciación técnica, que resuelva sus necesidades, en tiempos de entrega mínimos, a precios competitivos y con la atención dedicada de expertos en el ramo.
                            </p>
                        </div>
                        <!-- Widget Heading -->
                        <div data-id="6365774" data-element_type="widget" data-widget_type="mdp-headinger-elementor.default" class="w-full relative mb-5">
                            <h2 class="text-[35px] leading-[44.5455px] font-semibold text-[#343434]">
                                <div class="inline-block relative z-1">
                                    <div class="font-roboto font-black text-[#043e81] text-[36px]">
                                        Propuestas de valor
                                    </div>
                                </div>
                            </h2>
                        </div>

                        <!-- Subsection 4 -->
                        <section data-id="5aea341" data-element_type="section" class="block relative w-full">
                            <div class="max-w-[1190px] flex mx-auto relative">
                                <div class="w-full flex">
                                    <div data-id="b956b10" data-element_type="column" class="w-1/2 relative flex min-h-[1px]">
                                        <div class="w-full relative flex">
                                            <div class="flex w-full flex-wrap content-start p-[10px]">
                                                <!-- Text Widget -->
                                                <div data-id="b10a400" data-element_type="widget" data-widget_type="text-editor.default" class="w-full relative text-[#7a7a7a] font-roboto">
                                                    <ul class="list-disc pl-[15px]">
                                                        <li>Amplias existencias de toda la gama de producto.</li>
                                                        <li>Asesoría gratuita in-situ</li>
                                                        <li>Servicio pos-venta: Refaccionamiento y Mantenimiento.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-id="0d7a19d" data-element_type="column" class="w-1/2 relative flex min-h-[1px]">
                                        <div class="w-full relative flex">
                                            <div class="flex w-full flex-wrap content-start p-[10px]">
                                                <!-- Text Widget -->
                                                <div data-id="d18a836" data-element_type="widget" data-widget_type="text-editor.default" class="w-full relative text-[#7a7a7a] font-roboto">
                                                    <ul class="list-disc pl-[15px]">
                                                        <li>Distribuidor autorizado de Marcas Premium con garantías directas y con fabricante.</li>
                                                        <li>Consultoría técnica y capacitación de personal.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>


                    </div>
                </div>
            </div>
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

@endsection