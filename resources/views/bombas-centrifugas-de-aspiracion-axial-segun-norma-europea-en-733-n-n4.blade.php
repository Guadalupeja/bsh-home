@extends('layouts.app')

@section('title', 'Bombas centrífugas N, N4 de aspiración axial | CALPEDA')
@section('description', 'ombas centrífugas N, N4 aspiración axial según norma europea EN 733 Calpeda. Entrega Inmediata. 
Marca Premium. Distribuidor Mayorista, Refacciones y Mtto.')
<style>
  .swiper-container {
    width: 350px; /* Define the width of the carousel */
    height: 350px; /* Define the height of the carousel */
  }
</style>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
@section('structured-data')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Bombas centrífugas de aspiración axial N, N4 | CALPEDA",
  "description": "Bombas centrífugas de aspiración axial N, N4 con soporte y eje libre. Cumple con la norma europea EN 733, disponible en materiales como hierro, bronce y acero inoxidable, ideales para aplicaciones industriales y civiles.",
  "brand": {
    "@type": "Brand",
    "name": "Calpeda"
  },
  "sku": "N-N4-001",
  "mpn": "N-N4-001",
  "category": "Industrial Pumps",
  "image": [
    "/img/Bombas-centrifugas-de-aspiracion-axial-segun-norma-europea-EN-733-N-N4-1.png.webp",
    "/img/Bombas-centrifugas-de-aspiracion-axial-segun-norma-europea-EN-733-N-N4-2.png.webp",
    "/img/Bombas-centrifugas-de-aspiracion-axial-segun-norma-europea-EN-733-N-N4-3.png.webp"
  ],
  "offers": {
    "@type": "Offer",
    "url": "https://bombasellos.com.mx/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-recirculacion-y-climatizacion/",
    "priceCurrency": "MXN",
    "price": "25000",
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
    "reviewCount": "40"
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
        "name": "Juan Martínez"
      },
      "reviewBody": "Excelente bomba para uso industrial, su rendimiento y durabilidad son inigualables."
    },
    {
      "@type": "Review",
      "reviewRating": {
        "@type": "Rating",
        "ratingValue": "4"
      },
      "author": {
        "@type": "Person",
        "name": "María López"
      },
      "reviewBody": "Muy buena calidad, aunque necesita mantenimiento regular."
    }
  ],
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://bombasellos.com.mx/bombas-centrifugas-n-n4-calpeda"
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
      "name": "Centrífugas Calpeda",
      "item": "https://bombasellos.com.mx/bombas/bombas-centrifugas-calpeda/"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Bombas para obra civil y urbanística",
      "item": "https://bombasellos.com.mx/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/"
    },
    {
      "@type": "ListItem",
      "position": 5,
      "name": "Bombas centrífugas N, N4",
      "item": "https://bombasellos.com.mx/bombas-centrifugas-n-n4-calpeda"
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
      "name": "¿Qué materiales están disponibles para las bombas N, N4 de Calpeda?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Las bombas N, N4 de Calpeda están disponibles en materiales como hierro fundido, bronce y acero inoxidable, según la solicitud del cliente."
      }
    },
    {
      "@type": "Question",
      "name": "¿Cuáles son las aplicaciones típicas de las bombas N, N4?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Estas bombas centrífugas son ideales para el manejo de líquidos limpios sin partículas sólidas, y se utilizan en aplicaciones industriales, civiles y agrícolas."
      }
    },
    {
      "@type": "Question",
      "name": "¿Cómo puedo obtener más información sobre las bombas N, N4?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Puedes contactar a nuestro equipo de ventas para obtener más información a través de nuestro sitio web o llamando al +52-55-5752-1715."
      }
    }
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "Venta y distribución de bombas centrífugas industriales",
  "provider": {
    "@type": "Organization",
    "name": "BSH (Bombas Sellos y Hules Industriales S.A. de C.V.)",
    "contactPoint": {
      "@type": "ContactPoint",
      "contactType": "Ventas",
      "telephone": "+52-55-5752-1715",
      "email": "bsh@bombasellos.com.mx",
      "areaServed": "MX"
    }
  },
  "description": "Distribuimos bombas centrífugas industriales de alta calidad, ideales para aplicaciones en sectores industriales, agrícolas y civiles."
}
</script>
@endsection


@section('contenido')

<div class="box-border p-2.5 flex flex-col relative w-[90%] flex-wrap content-start mx-auto lg:ml-[120.5px]">
    <div class="box-border mb-5 relative w-full flex-row flex-nowrap justify-start items-start content-start">
        <div class="transition-all duration-300">
            <div class="box-border h-[76px]"></div>
        </div>
    </div>
    <div class="box-border mb-5 text-left relative w-full flex-row flex-nowrap justify-start items-start content-start">
        <div class="transition-all duration-300 relative">
            <!-- Display when you choose background per Post -->
            <div class="absolute top-0 left-0 w-full h-[29px] z-10 bg-no-repeat bg-center bg-cover box-border">
                <div class="absolute top-0 left-0 w-full h-[29px] box-border bg-transparent"></div>
            </div>
            <div class="relative z-20 box-border">
                <div class="bg-transparent mb-0 box-border">
                    <div class="box-border">
                        <ul class="bg-transparent m-0 p-0 inline-flex mb-0 list-none flex-wrap rounded-lg mt-0 box-border">
                            <li class="block text-[#043e81] text-[16px] font-normal hyphens-auto text-left box-border font-roboto"><a href="https://bombasellos.com.mx/" class="text-[#043e81] hyphens-auto no-underline bg-transparent box-shadow-none">Home</a></li>
                            <li class="block text-[#043e81] text-[16px] font-normal hyphens-auto text-left box-border font-roboto"><span class="text-[#043e81] px-1">/</span></li>
                            <li><a href="https://bombasellos.com.mx/bombas/" class="text-[#043e81] hyphens-auto no-underline bg-transparent box-shadow-none">Bombas</a></li>
                            <li class="block text-[#043e81] text-[16px] font-normal hyphens-auto text-left box-border font-roboto"><span class="text-[#043e81] px-1">/</span></li>
                            <li><a href="https://bombasellos.com.mx/bombas/bombas-centrifugas-calpeda/" class="text-[#043e81] hyphens-auto no-underline bg-transparent box-shadow-none">Centrífugas Calpeda</a></li>
                            <li class="block text-[#043e81] text-[16px] font-normal hyphens-auto text-left box-border font-roboto"><span class="text-[#043e81] px-1">/</span></li>
                            <li><a href="https://bombasellos.com.mx/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/" class="text-[#043e81] hyphens-auto no-underline bg-transparent box-shadow-none">Bombas para obra civil y urbanística </a></li>
                            <li class="block text-[#043e81] text-[16px] font-normal hyphens-auto text-left box-border font-roboto"><span class="text-[#043e81] px-1">/</span></li>
                            <li><a href="https://bombasellos.com.mx/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-recirculacion-y-climatizacion/" class="text-[#043e81] hyphens-auto no-underline bg-transparent box-shadow-none">
                                Bombas Calpeda – Recirculación y climatización
                                </a></li>
                            <li class="block text-[#043e81] text-[16px] font-normal hyphens-auto text-left box-border font-roboto"><span class="text-[#043e81] px-1">/</span></li>
                            <li class="block text-[#043e81] text-[16px] font-normal hyphens-auto text-left box-border font-roboto">Bombas centrífugas de aspiración axial según norma europea EN 733 – N-N4</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="box-border mb-5 text-left relative w-full flex-row flex-nowrap justify-start items-start content-start">
        <div class="transition-all duration-300">
            <div class="box-border text-[#7a7a7a] font-roboto font-semibold w-full absolute select-none"></div>

        </div>
    </div>
</div>

<!-- Contenido e imagenes -->
<div class="box-border p-2.5 flex flex-col relative w-full flex-wrap content-start mx-auto lg:w-[90%] lg:flex-row lg:ml-[120.5px]">
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
                                Aplicaciones
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
        <div class="box-border text-[#043E81] font-roboto font-normal gap-[79px] leading-[30px] mb-5 relative w-full flex flex-col gap-x-[79px] flex-grow-0 flex-shrink-1 order-0 self-auto">
            <div class="box-border transition duration-300 ease-in-out transform">
                <p class="text-gray-600 leading-[27px] mb-[32px] mt-0 box-border">
                    <span class="text-[#043E81] box-border font-bold">Obra civil.</span>
                </p>
                <ul class="list-disc pl-4">
                    <li class="box-border text-left">
                        <span class="text-[#043E81] box-border">
                            <a class="text-[#043E81] no-underline box-border shadow-none" href="https://bombasellos.com.mx/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/">Bombas sumergibles para drenaje y tratamiento de aguas.</a>
                        </span>
                    </li>
                    <li class="box-border text-left">
                        <span class="text-[#043E81] box-border">
                            <a class="text-[#043E81] no-underline box-border shadow-none" href="https://bombasellos.com.mx/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-presurizacion/">Bombas para presurización de líquidos limpios.</a>
                        </span>
                    </li>
                    <li class="box-border text-left">
                        <span class="text-[#043E81] box-border">
                            <a class="text-[#043E81] no-underline box-border shadow-none" href="https://bombasellos.com.mx/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-de-recirculacion-y-alimentacion-de-circuitos-hvac/">Bombas de recirculación y alimentación de circuitos HVAC.</a>
                        </span>
                    </li>
                </ul>
                <div class="box-border">&nbsp;</div>
                <p class="text-gray-600 leading-[27px] mb-[32px] mt-0 box-border">
                    <span class="text-[#043E81] box-border font-bold">Industria.</span>
                </p>
                <ul class="list-disc pl-4">
                    <li class="box-border text-left">
                        <span class="text-[#043E81] box-border">
                            <a class="text-[#043E81] no-underline box-border shadow-none" href="https://bombasellos.com.mx/bombas/bombas-centrifugas-calpeda/bombas-para-industria-bombas-centrifugas-monobloc-bombas-multicelulares-horizontales/tratamiento-de-aguas-residuales/">Bombas de tratamientos de aguas residuales.</a>
                        </span>
                    </li>
                    <li class="box-border text-left">
                        <span class="text-[#043E81] box-border">
                            <a class="text-[#043E81] no-underline box-border shadow-none" href="https://bombasellos.com.mx/bombas/bombas-centrifugas-calpeda/bombas-para-industria-bombas-centrifugas-monobloc-bombas-multicelulares-horizontales/bombas-calpeda-maquinaria-y-equipos-oem/">Maquinaria y equipos (OEM)</a>
                        </span>
                    </li>
                    <li class="box-border text-left">
                        <span class="text-[#043E81] box-border">
                            <a class="text-[#043E81] no-underline box-border shadow-none" href="https://bombasellos.com.mx/bombas/bombas-centrifugas-calpeda/bombas-para-industria-bombas-centrifugas-monobloc-bombas-multicelulares-horizontales/bombas-calpeda-circuitos-de-transferencia-de-calor-y-refrigeracion/">Bombas de alimentación a circuitos HVAC en la industria.</a>
                        </span>
                    </li>
                </ul>
                <div class="box-border">&nbsp;</div>
                <p class="text-gray-600 leading-[27px] mb-[32px] mt-0 box-border">
                    <span class="text-[#043E81] box-border font-bold">Riego-Agricola.</span>
                </p>
                <ul class="list-disc pl-4">
                    <li class="box-border text-left">
                        <span class="text-[#043E81] box-border">
                            <a class="text-[#043E81] no-underline box-border shadow-none" href="https://bombasellos.com.mx/bombas/bombas-centrifugas-calpeda/bombas-calpeda-agricultura-y-riego/">Bombas para alimentación de sistemas de riego.</a>
                        </span>
                    </li>
                    <li class="box-border text-left">
                        <span class="text-[#043E81] box-border">
                            <a class="text-[#043E81] no-underline box-border shadow-none" href="https://bombasellos.com.mx/bombas/bombas-centrifugas-calpeda/bombas-calpeda-agricultura-y-riego/bombas-calpeda-bombas-sumergibles-de-pozo-profundo/">Bombas sumergibles de pozo profundo.</a>
                        </span>
                    </li>
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

    <div class="w-full lg:w-3/4 flex flex-wrap px-1 py-0 mx-auto">
        <div class="box-border p-2.5 flex w-full flex-wrap content-start">
            <section class="block box-border w-full">
                <div class="max-w-[1190px] mx-auto flex flex-col lg:flex-row">
                    <div class="w-full lg:w-1/2 box-border p-2.5 flex flex-wrap content-start">
                        <div class="w-full">
                            <div class="w-full">
                                <div class="transition-all duration-300">
                                    <div dir="ltr" class="pb-7.5 mx-auto relative overflow-hidden z-1">
                                       
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper">
                                                <!-- Slide 1 -->
                                                <div class="swiper-slide">
                                                    <img src="/img/Bombas-centrifugas-de-aspiracion-axial-segun-norma-europea-EN-733-N-N4-1.png.webp" alt="Slide 1" class="w-full h-auto object-cover">
                                                </div>
                                                <!-- Slide 2 -->
                                                <div class="swiper-slide">
                                                    <img src="/img/Bombas-centrifugas-de-aspiracion-axial-segun-norma-europea-EN-733-N-N4-2.png.webp" alt="Slide 2" class="w-full h-auto object-cover">
                                                </div>
                                                <!-- Slide 3 -->
                                                <div class="swiper-slide">
                                                    <img src="/img/Bombas-centrifugas-de-aspiracion-axial-segun-norma-europea-EN-733-N-N4-3.png.webp" alt="Slide 3" class="w-full h-auto object-cover">
                                                </div>
                                            </div>
                                            <!-- Add Pagination -->
                                            <div class="swiper-pagination"></div>
                                        </div>


                                        <div class="box-border p-2.5 flex flex-wrap w-full align-start text-justify mt-[55px]">
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
                                                    <p class="leading-[23px] mb-8 mt-0 text-gray-600 box-border">
                                                        <span class="font-normal box-border">Bomba de aspiración axial de un solo impulsor con soporte y eje libres. Sistema “Back Pull-Out” para desmontaje y montaje rápido.</span>
                                                    </p>
                                                    <p class="leading-[23px] mb-8 mt-0 text-gray-600 box-border">
                                                        <span class="font-normal box-border">Para líquidos limpios sin contenidos sólidos.</span>
                                                    </p>
                                                    <p class="leading-[23px] mb-8 mt-0 text-gray-600 box-border">
                                                        <span class="font-normal box-border">Robusta, fiable y con el rango operativo mas amplio del mercado.</span>
                                                    </p>
                                                    <ul class="list-disc pl-4 mb-0 space-y-2">
                                                        <li class="text-left">
                                                            <span class="font-normal box-border">Cuerpo y Bomba en Hierro EN 1561 o Bronce EN 1982.</span>
                                                        </li>
                                                        <li class="text-left">
                                                            <span class="font-normal box-border">Impulsor a petición en Hierro, Bronce o Latón.</span>
                                                        </li>
                                                        <li class="text-left">
                                                            <span class="font-normal box-border">Eje en acero al Cromo, Acero al carbón o Acero Cr-Ni-Mo AISI 316, a petición.</span>
                                                        </li>
                                                        <li class="text-left">
                                                            <span class="font-normal box-border">Disponible con sello mecánico o prensa estopa.</span>
                                                        </li>
                                                        <li class="text-left">
                                                            <span class="font-normal box-border">Qmax. 480 m3/h.</span>
                                                        </li>
                                                        <li class="text-left">
                                                            <span class="font-normal box-border">Hmax. 95 m.</span>
                                                        </li>
                                                    </ul>
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
                                    <h1 class="lg:text-[35px] text-blue-700 leading-6 mt-0 mb-0 font-semibold font-open-sans text-left">
                                        <div class="inline-block relative">
                                            <div class="font-roboto font-semibold text-blue-800 border-cyan-400 inline-flex text-lg">Bomba N, N4
                                            </div>
                                        </div>
                                    </h1>
                                </div>
                            </div>
                            <div class="mb-5 w-full flex flex-col">
                                <div class="transition-all duration-300 ease-in-out">
                                    <div class="text-gray-500">
                                        <div class="font-roboto font-semibold w-full absolute select-none"></div>
                                    </div>
                                    <h2 class="text-4xl leading-10 mt-0 mb-0 font-semibold font-open-sans text-gray-600 text-left">
                                        <div class="inline-block relative">
                                            <div class="font-roboto font-semibold text-blue-800 border-cyan-400 inline-flex text-lg">Bombas centrífugas de aspiración axial según norma europea EN 733</div>
                                        </div>
                                    </h2>
    <!-- Description -->
    <div data-id="48570ec" class="box-border mb-5 mt-5 text-justify text-gray-600 font-roboto font-normal w-full relative">
        <div class="transition-all box-border">
            <p class="leading-[23px] mb-8 mt-0">
                Bombas centrífugas con un solo rodete de aspiración axial, PN 10, con soporte y eje libre. Prestaciones nominales y dimensiones principales según EN 733.
            </p>
        </div>
    </div>


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
                            <div class="box-border transition-all duration-300 bg-transparent border-none border-radius-none shadow-none lg:mt-[180px] my-[30px] mx-0 p-2.5 flex relative w-full flex-wrap content-start">
                                <div data-id="84ca12f" data-element_type="widget" data-widget_type="heading.default" class="box-border my-5 mx-0 text-center relative w-full flex-wrap-none justify-normal items-normal content-normal">
                                    <div class="box-border transition-all duration-300 ease-in-out transform">
                                        <div class="box-border text-[#043e81] font-roboto font-semibold text-xs leading-3 p-0 m-0">
                                            CAMPO DE APLICACIONES
                                        </div>
                                    </div>
                                </div>
                                   <!-- Section Content -->
    <section data-id="e2302cd" class="w-full relative block box-border">
        <div class="max-w-[1190px] mx-auto flex relative">
            <div data-id="5e55c22" class="w-full relative flex flex-wrap content-start">
                <div class="p-2.5 flex relative w-full flex-wrap content-start">
                    <!-- Image Widget -->
                    <div data-id="7ce4ff1" class="w-full text-center relative flex-row flex-nowrap">
                        <div class="transition-all duration-300 ease-in-out">
                            <a href="/img/N_N4_curve-1024x629.webp" data-elementor-open-lightbox="yes" data-elementor-lightbox-title="N_N4_curve" class="text-[#007BFF] no-underline bg-transparent inline-block shadow-none">
                                <img src="/img/N_N4_curve-1024x629.webp" alt="N N4 curve" class="max-w-full h-auto align-middle border-none inline-block">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<!--Puntuar página-->
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