@extends('layouts.app')

@section('title', 'Bombas autoaspirantes jet - NGX Bombas centrífugas CALPEDA')
@section('description', 'Bombas autoaspirantes jet - NGX Bombas centrífugas monobloc CALPEDA. Entrega Inmediata. 
Marca Premium. Distribuidor Mayorista Mx. Refacciones y Mantenimiento.')
<style>
    .swiper-container {
      width: 350px; /* Define the width of the carousel */
      height: 350px; /* Define la altura del carousel */
    }
</style>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

@section('structured-data')
<!-- Schema JSON-LD -->
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Product",
      "name": "Bombas autoaspirantes jet - NGX Bombas centrífugas CALPEDA",
      "brand": {
        "@type": "Brand",
        "name": "Calpeda"
      },
      "description": "Bombas autoaspirantes jet NGX de Calpeda, diseñadas para aplicaciones domésticas y civiles con alta eficiencia. Materiales de alta calidad, incluyendo acero inoxidable y latón. Disponibilidad inmediata.",
      "sku": "CALP-NGX-001",
      "mpn": "NGX-001",
      "category": "Industrial Pumps",
      "image": [
        "/img/Bombas-autoaspirantes-jet-NGX-1.png.webp",
        "/img/Bombas-autoaspirantes-jet-NGX-2.png.webp",
        "/img/Bombas-autoaspirantes-jet-NGX-3.png.webp"
      ],
      "offers": {
        "@type": "Offer",
        "url": "https://bombasellos.com.mx",
        "priceCurrency": "MXN",
        "price": "12000.00",
        "itemCondition": "https://schema.org/NewCondition",
        "availability": "https://schema.org/InStock",
        "seller": {
          "@type": "Organization",
          "name": "BSH (Bombas Sellos y Hules Industriales S.A. de C.V.)"
        }
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.8",
        "reviewCount": "52"
      },
      "review": [
        {
          "@type": "Review",
          "reviewRating": {
            "@type": "Rating",
            "ratingValue": "5"
          },
          "author": {
            "@type": "Person",
            "name": "Pedro Sánchez"
          },
          "reviewBody": "Excelente rendimiento y durabilidad. Recomiendo estas bombas para aplicaciones domésticas."
        },
        {
          "@type": "Review",
          "reviewRating": {
            "@type": "Rating",
            "ratingValue": "4"
          },
          "author": {
            "@type": "Person",
            "name": "María Rodríguez"
          },
          "reviewBody": "Buena bomba, aunque el manual podría ser más detallado."
        }
      ],
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://bombasellos.com.mx/bombas-autoaspirantes-ngx-calpeda"
      }
    }
    </script>
    
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
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
          "name": "Bombas",
          "item": "https://bombasellos.com.mx/bombas/"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Bombas Calpeda",
          "item": "https://bombasellos.com.mx/bombas/bombas-calpeda/"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "Bombas autoaspirantes jet NGX",
          "item": "https://bombasellos.com.mx/bombas-autoaspirantes-ngx-calpeda"
        }
      ]
    }
    </script>
    
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "¿Qué aplicaciones tienen las bombas autoaspirantes jet NGX?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Las bombas autoaspirantes jet NGX son ideales para el suministro de agua en aplicaciones domésticas y civiles, incluyendo riego, aumento de presión y lavado a presión."
          }
        },
        {
          "@type": "Question",
          "name": "¿Cuáles son las especificaciones técnicas de las bombas NGX?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Las bombas NGX están construidas con materiales de alta calidad, como acero inoxidable y latón, y son capaces de manejar agua con aire o gases. Consulta el catálogo para más detalles."
          }
        },
        {
          "@type": "Question",
          "name": "¿Dónde puedo comprar las bombas NGX de Calpeda?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Puedes adquirir las bombas NGX a través de nuestro sitio web o en nuestras sucursales. También ofrecemos soporte técnico especializado."
          }
        }
      ]
    }
    </script>
    
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "serviceType": "Venta y distribución de bombas industriales",
      "provider": {
        "@type": "Organization",
        "name": "BSH (Bombas Sellos y Hules Industriales S.A. de C.V.)"
      },
      "description": "Especialistas en la venta y distribución de bombas industriales, con un enfoque en calidad, rendimiento y servicio postventa."
    }
    </script>
@endsection

@section('contenido')

<section class="relative w-full bg-cover bg-center" style="background-image:url('/img/bombas-industriales.jpg');">
    <div class="max-w-[1190px] mx-auto flex flex-col md:flex-row">
        <div class="w-[34.825%] flex">
            <div class="w-full p-[10px] flex flex-wrap content-start">
                <div class="w-full text-center">
                    <picture>
                        <source type="image/webp" srcset="/img/bombas-centrifugas-calpeda.png.webp 525w, /img/bombas-centrifugas-calpeda-300x287.png.webp 300w" sizes="(max-width: 525px) 100vw, 525px" />
                        <img fetchpriority="high" decoding="async" width="525" height="503" src="/img/bombas-centrifugas-calpeda.png" alt="Bombas Calpeda" sizes="(max-width: 525px) 100vw, 525px" class="w-full h-auto align-middle border-0 rounded-none shadow-none" />
                    </picture>
                </div>
            </div>
        </div>
        <div class="w-[65.175%] flex">
            <div class="w-full p-[10px] flex flex-wrap content-center">
                <div class="w-full mb-5">
                    <div class="lg:h-[149px] h-[15px]"></div>
                </div>
                <div class="w-full mb-5">
                    <h2 class="text-[22px] md:text-[42px] text-white leading-[42px] font-semibold font-roboto m-auto">BOMBAS CALPEDA</h2>
                </div>
                <div class="w-full mb-5">
                    <h2 class="text-[20px] text-white leading-[20px] font-semibold font-roboto m-0">Obra civil</h2>
                </div>
                <div class="w-full">
                    <div class="lg:h-[149px] h-[15px]"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contenido e imágenes -->
<div class="lg:mt-[100px] box-border p-2.5 flex flex-col relative w-full content-start mx-auto lg:w-[90%] lg:flex-row lg:ml-[120.5px]">
    <!-- Columna de contenido e imágenes -->
    <div class="w-full lg:w-1/4">
        <!-- APLICACIONES -->
        <div class="box-border mb-5 relative w-full flex flex-col gap-0 flex-grow-0 flex-shrink-1 order-0 self-auto">
            <div class="box-border transition duration-300 ease-in-out transform">
                <div class="box-border">
                    <div class="box-border text-gray-500">
                        <div class="box-border font-roboto font-semibold w-full absolute select-none"></div>
                    </div>
                    <h2 class="text-[20px] text-[#2953B1] leading-[25px] mt-0 mb-0 clear-both font-semibold font-open-sans box-border text-left m-0">
                        <div class="box-border inline-block relative z-10">
                            <div class="box-border font-roboto font-semibold text-[#043E81] border-[#6EC1E4] inline-flex text-[43px] border-none">
                                Categorías
                            </div>
                        </div>
                    </h2>
                </div>
            </div>
        </div>

        <!-- BOMBAS CALPEDA -->
        <div class="box-border mb-5 relative w-full flex flex-col gap-0 flex-grow-0 flex-shrink-1 order-0 self-auto">
            <div class="box-border transition duration-300 ease-in-out transform">
                <div class="box-border">
                    <div class="box-border text-gray-500">
                        <div class="box-border font-roboto font-semibold w-full absolute select-none"></div>
                    </div>
                    <h2 class="text-[20px] text-[#2953B1] leading-[25px] mt-0 mb-0 clear-both font-semibold font-open-sans box-border text-left m-0">
                        <div class="box-border inline-block relative z-10">
                            <div class="box-border font-roboto font-semibold text-[#043E81] border-[#6EC1E4] inline-flex border-none">
                                Bombas Calpeda®
                            </div>
                        </div>
                    </h2>
                </div>
            </div>
        </div>

        <!-- OBRA CIVIL -->
        <div class="box-border text-gray-600 font-roboto font-normal gap-[79px] leading-[30px] mb-5 relative w-full flex flex-col gap-x-[79px] flex-grow-0 flex-shrink-1 order-0 self-auto">
            <div class="box-border transition duration-300 ease-in-out transform">
                <p class="leading-[23px] mb-[32px] mt-0 font-bold">Obra civil</p>
                <ul class="list-disc pl-4">
                    <li class="text-left">Drenaje y tratamiento de aguas.</li>
                    <li class="text-left">Presurización</li>
                    <li class="text-left">Recirculación y climatización.</li>
                    <li class="text-left">Sistemas contra incendio.</li>
                </ul>
                <div class="box-border">&nbsp;</div>
                <p class="text-gray-600 leading-[27px] mb-[32px] mt-0 box-border">
                    <span class="box-border font-bold">Industria.</span>
                </p>
                <ul class="list-disc m-0 pl-[15px]">
                    <li class="text-left">Maquinaria y equipos (OEM)</li>
                    <li class="text-left">Circuitos de transferencia de calor y refrigeración</li>
                    <li class="text-left">Tratamiento de aguas residuales industriales</li>
                </ul>

                <div class="box-border">&nbsp;</div>
                <p class="text-gray-600 leading-[27px] mb-[32px] mt-0 box-border">
                    <span class="box-border font-bold">Riego-Agricola.</span>
                </p>

                <ul class="list-disc m-0 pl-[15px]">
                    <li class="text-left">Uso doméstico y residencial</li>
                    <li class="text-left">Sistemas de riego</li>
                </ul>

            </div>
        </div>

        <div class="box-border">
            <a href="https://bombasellos.com.mx/bombas/sellos-mecanicos-calpeda/" class="text-white no-underline bg-[#610001] box-border font-roboto font-medium inline-block leading-[15px] text-[15px] py-3 px-6 rounded-[3px] text-center transition-all duration-300 ease-in-out shadow-none">
                <span class="box-border no-underline flex justify-center">
                    <span class="box-border no-underline flex-grow order-10 block">Sellos mécanicos CALPEDA®</span>
                </span>
            </a>
        </div>
    </div>

    <div class="w-full lg:w-3/4 flex flex-col lg:flex-row px-1 py-0 mx-auto">
        <div class="box-border p-2.5 flex w-full flex-wrap content-start">
            <section class="block box-border w-full">
                <div class="max-w-[1190px] mx-auto flex flex-col lg:flex-row">
                    <div class="w-full lg:w-1/2 box-border p-2.5 flex flex-wrap content-start">
                        <div class="w-full">
                            <div class="w-full">

                                <h2 class="text-[20px] text-gray-600 leading-[25px] mt-0 mb-0 clear-both font-semibold font-open-sans box-border text-left m-0">
                                    <div class="box-border inline-block relative z-10">
                                        <div class="box-border font-roboto font-semibold border-[#6EC1E4] inline-flex border-none">
                                            Bombas - Obra Civil
                                        </div>
                                    </div>
                                </h2>

                                <div class="transition-all duration-300">
                                    <div dir="ltr" class="pb-7.5 mx-auto relative overflow-hidden z-1">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper">
                                                <!-- Slide 1 -->
                                                <div class="swiper-slide">
                                                    <img src="/img/Bombas-autoaspirantes-jet-NGX-1.png.webp" alt="Slide 1" class="w-full h-auto object-cover">
                                                </div>
                                                <!-- Slide 2 -->
                                                <div class="swiper-slide">
                                                    <img src="/img/Bombas-autoaspirantes-jet-NGX-1.png.webp" alt="Slide 2" class="w-full h-auto object-cover">
                                                </div>
                                                
                                            </div>
                                            <!-- Add Pagination -->
                                            <div class="swiper-pagination"></div>
                                        </div>

                                        <div class="box-border p-2.5 flex flex-wrap w-full align-start text-justify mt-[80px]">
                                            <div class="w-full mb-5 flex">
                                                <div class="w-full flex flex-col">
                                                    <div class="transition-all duration-300 ease-in-out mb-5">
                                                        <h2 class="text-[31px] text-[#043e81] leading-none font-semibold font-roboto border-none">
                                                            Detalles técnicos
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w-full">

                                                <div class="transition-all duration-300 ease-in-out text-[#7a7a7a] font-roboto font-normal">
                                                    <p class="text-[#666] leading-[27px] mb-[32px] mt-0 box-border font-bold">
                                                        Ejecución
                                                    </p>
                                                    <p class="text-[#666] leading-[27px] mb-[32px] mt-0 box-border">
                                                        Bomba centrífuga autoaspirante monobloc con inyector incorporado. Una bomba para el abastecimiento de agua para uso doméstico de alta calidad y ecológica, con un cuerpo de acero inoxidable, con rotor de latón y con una mínima utilización de materiales plásticos.
                                                    </p>
                                                    <p class="text-[#666] leading-[27px] mb-[32px] mt-0 box-border font-bold">
                                                        Aplicaciones
                                                    </p>
                                                    <p class="text-[#666] leading-[27px] mb-[32px] mt-0 box-border">
                                                        – Para suministro de agua con aspiración de pozo.<br>
                                                        – Para bombear agua que contiene aire u otras sustancias gaseosas.<br>
                                                        – Para aumentar la presión del agua que llega directamente a la bomba.<br>
                                                        – Para aumentar la presión disponible de una red de distribución (observar las disposiciones locales).<br>
                                                        – Para el jardín.<br>
                                                        – Para lavar con chorro de agua a presión.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 box-border p-2.5 flex flex-wrap content-start">
                        <div class="relative w-full">
                            <div class="mb-5 w-full flex flex-col">
                                <div class="transition-all duration-300 ease-in-out">
                                    <div class="text-gray-500">
                                        <div class="font-roboto font-semibold w-full absolute select-none"></div>
                                    </div>
                                    <h2 class="text-2xl text-blue-700 leading-6 mt-0 mb-0 font-semibold font-open-sans text-left">
                                        <div class="inline-block relative">
                                            <div class="font-roboto font-semibold text-blue-800 border-cyan-400 inline-flex text-lg">NGX</div>
                                        </div>
                                    </h2>
                                </div>
                            </div>
                            <div class="mb-5 w-full flex flex-col">
                                <div class="transition-all duration-300 ease-in-out">
                                    <div class="text-gray-500">
                                        <div class="font-roboto font-semibold w-full absolute select-none"></div>
                                    </div>
                                    <h1 class="text-4xl leading-10 mt-0 mb-0 font-semibold font-open-sans text-gray-600 text-left">
                                        <div class="inline-block relative">
                                            <div class="font-roboto font-semibold text-blue-800 border-cyan-400 inline-flex text-lg">Bombas autoaspirantes jet</div>
                                        </div>
                                    </h1>
                                </div>
                            </div>
                            <div class="relative w-full flex flex-col">
                                <div class="transition-all duration-300">
                                    <a href="#contacto" class="text-white no-underline bg-[#610001] font-roboto font-black text-lg p-5 rounded-md inline-block text-center transition-all">
                                        <span class="flex justify-center">
                                            <span class="flex-grow">SOLICITAR MÁS INFORMACIÓN</span>
                                        </span>
                                    </a>
                                </div>
                            </div>



                            <div class="box-border transition-all duration-300 bg-transparent border-none border-radius-none shadow-none lg:mt-[30px] mx-0 p-2.5 flex w-full flex-wrap content-start">
                                <div data-id="84ca12f" data-element_type="widget" data-widget_type="heading.default" class="box-border my-5 mx-0 text-center relative w-full flex-wrap-none justify-normal items-normal content-normal">
                                    <div class="box-border transition-all duration-300 ease-in-out transform">
                                        <div class="box-border text-[#043e81] font-roboto font-semibold text-xs leading-3 p-0 m-0">
                                            CAMPO DE APLICACIONES
                                        </div>
                                    </div>
                                </div>

                                <div class="box-border p-2.5 flex relative w-full flex-wrap content-start">
                                    <div data-id="7ce4ff1" data-element_type="widget" data-widget_type="image.default" class="box-border text-center w-full flex-row flex-nowrap relative">
                                        <div class="transition-all duration-300">
                                            <a href="/img/curve_NGX-1-1024x513.png" data-elementor-open-lightbox="yes" data-elementor-lightbox-title="curve_GQS-GQV" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjAyMywidXJsIjoiaHR0cHM6XC9cL2JvbWJhc2VsbG9zLmNvbS5teFwvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyMFwvMDRcL2N1cnZlX0dRUy1HUVYuanBnIn0%3D" class="text-[#007bff] no-underline bg-transparent inline-block shadow-none">
                                                <picture fetchpriority="high" decoding="async" title="Bombas autoaspirantes jet" class="box-border">
                                                    <source type="image/webp" sizes="(max-width: 929px) 100vw, 929px" srcset="/img/curve_NGX-1-1024x513.png 929w, /img/curve_NGX-1-1024x513.png 300w, /img/curve_NGX-1-1024x513.png 768w" />
                                                    <img fetchpriority="high" width="929" height="549" alt="curve MXS" sizes="(max-width: 929px) 100vw, 929px" srcset="/img/curve_NGX-1-1024x513.png 929w, /img/curve_NGX-1-1024x513.png 300w, /img/curve_NGX-1-1024x513.png 768w" class="max-w-full h-auto align-middle border-none inline-block" />
                                                </picture>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>





                            <div class="box-border transition-all duration-300 bg-transparent border-none border-radius-none shadow-none my-[80px]  lg:my-[20px] mx-0 p-2.5 flex relative w-full flex-wrap content-start">
                                <section data-id="c612325" class="block box-border w-full relative">
                                    <div class="max-w-[1190px] mx-auto flex relative">
                                        <div data-id="2e737bb" class="w-1/2 box-border relative flex">
                                            <div class="box-border p-2.5 flex relative w-full flex-wrap content-start">
                                                <div data-id="c298225" class="box-border text-center relative w-full flex flex-row flex-nowrap justify-end">
                                                    <div class="box-border transition duration-300 ease-in-out transform">
                                                        <a href="https://hubs.ly/H0pT2J20" target="_blank" rel="noopener" class="text-[#007bff] no-underline bg-transparent inline-block box-shadow-none">
                                                            <picture decoding="async" title="Bombas centrífugas autocebantes con rodete abierto - A 28">
                                                                <source type="image/webp" srcset="/img/download-2.png.webp" />
                                                                <img width="32" height="32" alt="download 2" src="/img/download-2.png" class="max-w-full h-auto align-middle border-none inline-block" />
                                                            </picture>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-id="4040735" class="w-1/2 box-border relative flex">
                                            <div class="box-border p-2.5 flex relative w-full flex-wrap content-start">
                                                <div data-id="24ffc14" class="box-border text-[#7a7a7a] font-roboto font-normal relative w-full flex flex-row flex-nowrap">
                                                    <div class="box-border transition duration-300 ease-in-out transform">
                                                        <p class="leading-[23px] mb-[32px] mt-0 text-[#666]">
                                                            <a href="https://www.calpeda.com/wp-content/uploads/calpeda_prodotti/CATALOGHI_PDF/ES%20-%20Espa%C3%B1ol/DIVISI/NGX_ES.pdf" target="_blank" rel="noopener" data-type="pdf" class="text-[#007bff] no-underline box-shadow-none">Descargar<br />Catálogo 50 Hz</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section data-id="e3384a1" class="block box-border w-full relative">
                                    <div class="max-w-[1190px] mx-auto flex relative">
                                        <div data-id="2037f02" class="w-1/2 box-border relative flex">
                                            <div class="box-border p-2.5 flex relative w-full flex-wrap content-start">
                                                <div data-id="2ead57d" class="box-border text-center relative w-full flex flex-row flex-nowrap justify-end">
                                                    <div class="box-border transition duration-300 ease-in-out transform">
                                                        <a href="https://hubs.ly/H0pT2J_0" target="_blank" rel="noopener" class="text-[#007bff] no-underline bg-transparent inline-block box-shadow-none">
                                                            <picture decoding="async" title="Bombas centrífugas autocebantes con rodete abierto - A 28">
                                                                <source type="image/webp" srcset="/img/download-2.png.webp" />
                                                                <img width="32" height="32" alt="download 2" src="/img/download-2.png" class="max-w-full h-auto align-middle border-none inline-block" />
                                                            </picture>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-id="87b0451" class="w-1/2 box-border relative flex">
                                            <div class="box-border p-2.5 flex relative w-full flex-wrap content-start">
                                                <div data-id="e59afe9" class="box-border text-[#7a7a7a] font-roboto font-normal relative w-full flex flex-row flex-nowrap">
                                                    <div class="box-border transition duration-300 ease-in-out transform">
                                                        <p class="leading-[23px] mb-[32px] mt-0 text-[#666]">
                                                            <a href="https://www.calpeda.com/wp-content/uploads/calpeda_prodotti/CATALOGHI_PDF/60Hz%20-%20English_Espa%C3%B1ol/singoli_60Hz/NGX_60Hz2023.pdf" target="_blank" rel="noopener" data-type="pdf" class="text-[#007bff] no-underline box-shadow-none">Descargar
                                                                Catálogo<br/>60 Hz</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="max-w-[1190px] mx-auto flex relative">
                                        <div data-id="2037f02" class="w-1/2 box-border relative flex">
                                            <div class="box-border p-2.5 flex relative w-full flex-wrap content-start">
                                                <div data-id="2ead57d" class="box-border text-center relative w-full flex flex-row flex-nowrap justify-end">
                                                    <div class="box-border transition duration-300 ease-in-out transform">
                                                        <a href="https://hubs.ly/H0pT2J_0" target="_blank" rel="noopener" class="text-[#007bff] no-underline bg-transparent inline-block box-shadow-none">
                                                            <picture decoding="async" title="Bombas centrífugas autocebantes con rodete abierto - A 28">
                                                                <source type="image/webp" srcset="/img/download-2.png.webp" />
                                                                <img width="32" height="32" alt="download 2" src="/img/download-2.png" class="max-w-full h-auto align-middle border-none inline-block" />
                                                            </picture>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-id="87b0451" class="w-1/2 box-border relative flex">
                                            <div class="box-border p-2.5 flex relative w-full flex-wrap content-start">
                                                <div data-id="e59afe9" class="box-border text-[#7a7a7a] font-roboto font-normal relative w-full flex flex-row flex-nowrap">
                                                    <div class="box-border transition duration-300 ease-in-out transform">
                                                        <p class="leading-[23px] mb-[32px] mt-0 text-[#666]">
                                                            <a href="https://www.calpeda.com/wp-content/uploads/calpeda_prodotti/ISTRUZIONI/IST%20NG_NGX_NGL%20REV7%2005_2021.pdf" target="_blank" rel="noopener" data-type="pdf" class="text-[#007bff] no-underline box-shadow-none">Descargar
                                                                Instrucciones</a>
                                                        </p>
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
            </section>
        </div>
    </div>
</div>

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

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
var swiper = new Swiper('.swiper-container', {
  slidesPerView: 1,
  spaceBetween: 10,
  loop: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
});
</script>

@endsection