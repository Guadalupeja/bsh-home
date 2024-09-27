@extends('layouts.app')

@section('title', 'Bombas de alimentación a Calderas, Chillers HVAC | Calpeda T')
@section('description', 'Cotiza aquí Bombas de alimentación a Calderas, HVAC T, TP Calpeda. 
Entrega inmediata y Precio mayorista. Envíos todo MX. Marca Italiana. Refacciones y Mtto.')
<style>
    .swiper-container {
      width: 350px; /* Define the width of the carousel */
      height: 350px; /* Define la altura del carousel */
    }
</style>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
@section('structured-data')
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Product",
      "name": "Bomba de alimentación a Calderas, Chillers HVAC | Calpeda T, TP",
      "description": "Cotiza bombas de alimentación a Calderas, HVAC T, TP Calpeda. Entrega inmediata y precio mayorista. Refacciones y mantenimiento disponibles en todo México.",
      "brand": {
        "@type": "Brand",
        "name": "Calpeda"
      },
      "sku": "TP-CALP-001",
      "mpn": "TP-CALP-001",
      "category": "Industrial Pumps",
      "image": [
        "/img/Bombas-centrifugas-con-rodete-abierto-c-2.png.webp",
        "/img/curve_T-TP.jpg"
      ],
      "offers": {
        "@type": "Offer",
        "url": "https://bombasellos.com.mx/bombas/bombas-centrifugas-calpeda/bombas-calpeda-recirculacion-y-climatizacion/",
        "priceCurrency": "MXN",
        "price": "25000",
        "itemCondition": "https://schema.org/NewCondition",
        "availability": "https://schema.org/InStock",
        "seller": {
          "@type": "Organization",
          "name": "BSH (Bombas Sellos y Hules Industriales S.A. de C.V.)",
          "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "Ventas",
            "telephone": "+52-55-5752-1715",
            "email": "bsh@bombasellos.com.mx",
            "areaServed": "MX"
          }
        }
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.8",
        "reviewCount": "35"
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
            "name": "Laura Gutiérrez"
          },
          "reviewBody": "Excelente rendimiento para aplicaciones industriales de alta demanda, especialmente en sistemas de calefacción."
        },
        {
          "@type": "Review",
          "reviewRating": {
            "@type": "Rating",
            "ratingValue": "4"
          },
          "author": {
            "@type": "Person",
            "name": "Miguel López"
          },
          "reviewBody": "El producto cumple con lo prometido, pero la instalación requiere más espacio del esperado."
        }
      ],
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://bombasellos.com.mx/bombas-centrifugas-calpeda/bombas-calpeda-recirculacion-y-climatizacion/"
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
          "name": "Bombas Calpeda – Recirculación y climatización",
          "item": "https://bombasellos.com.mx/bombas/bombas-centrifugas-calpeda/bombas-calpeda-recirculacion-y-climatizacion/"
        },
        {
          "@type": "ListItem",
          "position": 5,
          "name": "Bombas de alimentación a Calderas, Chillers HVAC",
          "item": "https://bombasellos.com.mx/bombas-centrifugas-calpeda-bombas-calderas-hvac"
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
          "name": "¿Cuáles son las aplicaciones de las bombas Calpeda T, TP?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Las bombas T, TP de Calpeda son ideales para aplicaciones de alimentación a calderas, HVAC y sistemas industriales con alta demanda de flujo."
          }
        },
        {
          "@type": "Question",
          "name": "¿Qué materiales se utilizan en la bomba T, TP?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "La bomba está fabricada con cuerpo de hierro fundido y bronce, impulsor periférico de latón y eje de acero inoxidable."
          }
        },
        {
          "@type": "Question",
          "name": "¿Qué caudal máximo puede manejar la bomba?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "La bomba puede manejar un caudal máximo de 6 m³/h con una altura de elevación de hasta 165 metros."
          }
        }
      ]
    }
    </script>
    
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "serviceType": "Venta y mantenimiento de bombas industriales",
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
      "description": "Ofrecemos venta y mantenimiento especializado de bombas industriales para alimentación a Calderas y HVAC. Distribuidor mayorista en México."
    }
    </script>
    
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ContactPage",
      "mainEntity": {
        "@type": "ContactPoint",
        "contactType": "Ventas",
        "telephone": "+52-55-5752-1715",
        "email": "bsh@bombasellos.com.mx",
        "areaServed": "MX",
        "contactOption": ["TollFree", "HearingImpairedSupported"],
        "availableLanguage": ["Español", "English"]
      }
    }
    </script>    

@endsection


@section('contenido')

 <!-- Spacer -->
     <div class="w-full mb-[5px] relative">
        <div class="transition-all box-border">
            <div class="box-border lg:h-[76px] h-[16px]"></div>
        </div>
     </div>
                

 <!-- Heading -->
 <div data-id="4bf0343" class="lg:ml-[120.5px] box-border w-full flex-row flex-nowrap">
    <div class="transition-all box-border">
        <h2 class="text-[20px] leading-[25px] mt-0 mb-0 font-semibold text-[#2953B1] clear-both">
            <div class="inline-block relative z-10">
                <div class="font-roboto font-semibold text-[#043E81] border-none inline-flex text-[31px]">
                    Bombas de alimentación a Calderas, Chillers HVAC
                </div>
            </div>
        </h2>
    </div>
</div>

<section class="block box-border relative flex-auto">
    <div class="max-w-[1190px] mx-auto relative flex lg:ml-[120.5px]">
        <div class="w-full box-border relative flex flex-auto">
            <div class="w-full p-[10px] flex flex-wrap content-start relative">

                <!-- Breadcrumbs -->
                <div class="w-full mb-[20px] text-left relative">
                    <div class="transition-all box-border">
                        <div class="absolute top-0 left-0 w-full h-[49px] z-10 bg-cover bg-center box-border">
                            <div class="absolute top-0 left-0 w-full h-[49px] bg-transparent box-border"></div>
                        </div>
                        <div class="relative z-20 box-border">
                            <div class="bg-transparent box-border">
                                <ul class="bg-transparent m-0 p-0 inline-flex list-none flex-wrap rounded-lg box-border">
                                    <li class="block text-[#043E81] text-[16px] font-normal text-left box-border font-roboto">
                                        <a href="{{ url('/') }}" class="text-[#043E81] no-underline box-shadow-none">Home</a>
                                    </li>
                                    <li class="block text-[#043E81] text-[16px] font-normal text-left box-border font-roboto">
                                        <span class="text-[#043E81] px-1">/</span>
                                    </li>
                                    <li class="block text-[#043E81] text-[16px] font-normal text-left box-border font-roboto">
                                        <a href="{{ url('/bombas') }}" class="text-[#043E81] no-underline box-shadow-none">Bombas</a>
                                    </li>
                                    <li class="block text-[#043E81] text-[16px] font-normal text-left box-border font-roboto">
                                        <span class="text-[#043E81] px-1">/</span>
                                    </li>
                                    <li class="block text-[#043E81] text-[16px] font-normal text-left box-border font-roboto">
                                        <a href="{{ url('/bombas/bombas-centrifugas-calpeda') }}" class="text-[#043E81] no-underline box-shadow-none">Centrífugas Calpeda</a>
                                    </li>
                                    <li class="block text-[#043E81] text-[16px] font-normal text-left box-border font-roboto">
                                        <span class="text-[#043E81] px-1">/</span>
                                    </li>
                                    <li class="block text-[#043E81] text-[16px] font-normal text-left box-border font-roboto">
                                        <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica') }}" class="text-[#043E81] no-underline box-shadow-none">Bombas para obra civil y urbanística</a>
                                    </li>
                                    <li class="block text-[#043E81] text-[16px] font-normal text-left box-border font-roboto">
                                        <span class="text-[#043E81] px-1">/</span>
                                    </li>
                                    <li class="block text-[#043E81] text-[16px] font-normal text-left box-border font-roboto">
                                        <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-recirculacion-y-climatizacion') }}" class="text-[#043E81] no-underline box-shadow-none">
                                            Bombas Calpeda – Recirculación y climatización
                                        </a>
                                    </li>
                                    <li class="block text-[#043E81] text-[16px] font-normal text-left box-border font-roboto">
                                        <span class="text-[#043E81] px-1">/</span>
                                    </li>
                                    <li class="block text-[#043E81] text-[16px] font-normal text-left box-border font-roboto">
                                        Bombas de alimentación a Calderas, Chillers HVAC | Calpeda T
                                    </li>
                                </ul>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



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


    <!-- OBRA CIVIL -->
    <div class="box-border text-[#043E81] font-roboto font-normal gap-[79px] leading-[30px] mb-5 relative w-full flex flex-col gap-x-[79px] flex-grow-0 flex-shrink-1 order-0 self-auto">
        <div class="box-border transition duration-300 ease-in-out transform">
            <p class="text-gray-600 leading-[27px] mb-[32px] mt-0 box-border">
                <span class="text-[#043E81] box-border font-bold">Obra civil.</span>
            </p>
            <ul class="list-disc pl-4">
                <li class="box-border text-left">
                    <span class="text-[#043E81] box-border">
                        <a class="text-[#043E81] no-underline box-border shadow-none" href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas') }}">Bombas sumergibles para drenaje y tratamiento de aguas.</a>
                    </span>
                </li>
                <li class="box-border text-left">
                    <span class="text-[#043E81] box-border">
                        <a class="text-[#043E81] no-underline box-border shadow-none" href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-presurizacion') }}">Bombas para presurización de líquidos limpios.</a>
                    </span>
                </li>
                <li class="box-border text-left">
                    <span class="text-[#043E81] box-border">
                        <a class="text-[#043E81] no-underline box-border shadow-none" href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-de-recirculacion-y-alimentacion-de-circuitos-hvac') }}">Bombas de recirculación y alimentación de circuitos HVAC.</a>
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
                        <a class="text-[#043E81] no-underline box-border shadow-none" href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-industria-bombas-centrifugas-monobloc-bombas-multicelulares-horizontales/tratamiento-de-aguas-residuales') }}">Bombas de tratamientos de aguas residuales.</a>
                    </span>
                </li>
                <li class="box-border text-left">
                    <span class="text-[#043E81] box-border">
                        <a class="text-[#043E81] no-underline box-border shadow-none" href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-industria-bombas-centrifugas-monobloc-bombas-multicelulares-horizontales/bombas-calpeda-maquinaria-y-equipos-oem') }}">Maquinaria y equipos (OEM)</a>
                    </span>
                </li>
                <li class="box-border text-left">
                    <span class="text-[#043E81] box-border">
                        <a class="text-[#043E81] no-underline box-border shadow-none" href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-industria-bombas-centrifugas-monobloc-bombas-multicelulares-horizontales/bombas-calpeda-circuitos-de-transferencia-de-calor-y-refrigeracion') }}">Bombas de alimentación a circuitos HVAC en la industria.</a>
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
                        <a class="text-[#043E81] no-underline box-border shadow-none" href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-calpeda-agricultura-y-riego') }}">Bombas para alimentación de sistemas de riego.</a>
                    </span>
                </li>
                <li class="box-border text-left">
                    <span class="text-[#043E81] box-border">
                        <a class="text-[#043E81] no-underline box-border shadow-none" href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-calpeda-agricultura-y-riego/bombas-calpeda-bombas-sumergibles-de-pozo-profundo') }}">Bombas sumergibles de pozo profundo.</a>
                    </span>
                </li>
            </ul>                
        </div>
    </div>

    <div class="box-border">
        <a href="{{ url('/bombas/sellos-mecanicos-calpeda') }}" class="text-white no-underline bg-[#610001] box-border font-roboto font-medium inline-block leading-[15px] text-[15px] py-3 px-6 rounded-[3px] text-center transition-all duration-300 ease-in-out shadow-none">
            <span class="box-border no-underline flex justify-center">
                <span class="box-border no-underline flex-grow order-10 block">Sellos mécanicos CALPEDA®</span>
            </span>
        </a>
    </div>
    </div>

    <div class="w-full lg:w-3/4 flex flex-col lg:flex-row lg:flex-wrap px-1 py-0 mx-auto">
        <div class="box-border p-2.5 flex w-full flex-col lg:flex-wrap content-start">
            <section class="block box-border w-full">
                <div class="max-w-[1190px] mx-auto flex flex-col lg:flex-row">
                    <div class="w-full lg:w-1/2 box-border p-2.5 flex flex-col lg:flex-wrap content-start">
                        <div class="w-full">
                            <div class="w-full">
                                <div class="transition-all duration-300">
                                    <div dir="ltr" class="pb-7.5 mx-auto relative overflow-hidden z-1">

                                        <div class="box-border p-2.5 flex relative w-full flex-wrap content-start">
                                            <div data-id="70dd5e6" data-element_type="widget" data-settings='{"slides_to_show":"1","navigation":"dots","autoplay":"yes","pause_on_hover":"yes","pause_on_interaction":"yes","autoplay_speed":5000,"infinite":"yes","effect":"slide","speed":500}' class="relative w-full flex-row flex-nowrap">
                                                <div class="transition-all duration-300 ease-in-out">
                                                    <div dir="ltr" class="pb-7.5 mx-auto static overflow-hidden z-[1]">
                                                        <div aria-live="off" class="box-content transform-none relative w-full h-[450px] z-[1] flex transition-transform">
                                                            <div class="swiper-container">
                                                                <div class="swiper-wrapper">
                                                                    <!-- Slide 1 -->
                                                                    <div class="swiper-slide">
                                                                        <img src="/img/Bombas-centrifugas-con-rodete-abierto-c-2.png.webp" alt="Slide 1" class="w-full h-auto object-cover">
                                                                    </div>
                                                                    <!-- Slide 2 -->
                                                                    <div class="swiper-slide">
                                                                        <img src="/img/Bombas-centrifugas-con-rodete-abierto-c.png (1).webp" alt="Slide 2" class="w-full h-auto object-cover">
                                                                    </div>
                                                                    <!-- Slide 3 -->
                                                                    <div class="swiper-slide">
                                                                        <img src="/img/Bombas-centrifugas-con-rodete-abierto-c-3.png.webp" alt="Slide 3" class="w-full h-auto object-cover">
                                                                    </div>
                                                                </div>
                                                                <!-- Add Pagination -->
                                                                <div class="swiper-pagination"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="box-border p-2.5 flex flex-wrap w-full align-start text-justify mt-5">
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
                                                   
                                                    <p class="leading-[23px] mb-8 mt-0 text-[#666]">
                                                        Bombas monobloc con impulsor periférico diseñadas para aumentar la presión en redes de agua, circuitos de alimentación HVAC y alimentación a calderas.
                                                    </p>
                                                    <ul class="list-square ml-4">
                                                        <li class="leading-[23px] text-left">Cuerpo de bomba en Hierro o Bronce.</li>
                                                        <li class="leading-[23px] text-left">Impulsor periférico en Latón.</li>
                                                        <li class="leading-[23px] text-left">Eje de Acero inoxidable Cr-Ni/ Cr-Ni-Mo.</li>
                                                        <li class="leading-[23px] text-left">Qmax. 6 m3/h</li>
                                                        <li class="leading-[23px] text-left">Hmax. 165 m.</li>
                                                    </ul>
                                                </div>
                                            </div>




                                            <div class="w-full mb-[20px] relative flex flex-row flex-nowrap justify-start items-start content-start">
                                                <div class="overflow-hidden transition-transform duration-300 transform">
                                                    <div class="aspect-w-16 aspect-h-9">
                                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/sjQzpHTaGXo?si=sOSSXa6sdZL4SvB7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            <div class="w-full relative flex flex-row flex-nowrap justify-start items-start content-start">
                                                <div class="overflow-hidden transition-transform duration-300 transform">
                                                    <div class="aspect-w-16 aspect-h-9">
                                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/RSF4wQI5dY8?si=wV66USZC1k4r4S-D" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></iframe></div>
                                                </div>
                                            </div>



                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 box-border p-2.5 flex flex-col lg:flex-wrap content-start">
                        <div class="relative w-full">
                            <div class="mb-5 w-full flex flex-col">
                                <div class="transition-all duration-300 ease-in-out">
                                    <div class="text-gray-500">
                                        <div class="font-roboto font-semibold w-full absolute select-none"></div>
                                    </div>
                                    <h2 class="text-2xl text-blue-700 leading-6 mt-0 mb-0 font-semibold font-open-sans text-left">
                                        <div class="inline-block relative">
                                            <div class="font-roboto font-semibold text-blue-800 border-cyan-400 inline-flex text-[20PX]">
                                                Bomba T, TP
                                            </div>
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
                                            <div class="font-roboto font-semibold text-blue-800 border-cyan-400 inline-flex text-lg">Bombas Presurizadoras con Impulsor periférico.
                                            </div>
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
                            <div class="box-border transition-all duration-300 bg-transparent border-none border-radius-none shadow-none lg:mt-[320px] mx-0 p-2.5 flex w-full flex-wrap content-start">
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
                                            <a href="/img/curve_T-TP.jpg.webp" data-elementor-open-lightbox="yes" data-elementor-lightbox-title="curve_T-TP" class="text-[#007bff] no-underline inline-block shadow-none">
                                                <picture class="box-border">
                                                    <source type="image/webp" sizes="(max-width: 994px) 100vw, 994px" srcset="/img/curve_T-TP.jpg.webp 994w, /img/curve_T-TP-300x178.jpg.webp 300w, /img/curve_T-TP-768x457.jpg.webp 768w" />
                                                    <img fetchpriority="high" width="994" height="591" alt="curve T TP" sizes="(max-width: 994px) 100vw, 994px" srcset="/img/curve_T-TP.jpg 994w, /img/curve_T-TP-300x178.jpg 300w, /img/curve_T-TP-768x457.jpg 768w" src="/img/curve_T-TP.jpg" class="max-w-full h-auto align-middle border-none inline-block" />
                                                </picture>
                                            </a>
                                        </div>
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