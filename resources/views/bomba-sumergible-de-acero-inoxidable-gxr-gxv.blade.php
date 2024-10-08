@extends('layouts.app')

@section('title', 'Bomba Sumergible de Acero Inox para agua sucia| Calpeda GXR')
@section('description', 'Cotiza Bombas Sumergibles GXR, GXV para el desagüe de aguas con sólidos de cárcamos y cisternas. 
En acero inoxidable. Entrega inmediata y Precio Mayorista.')

@section('structured-data')
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Product",
      "name": "Bomba Sumergible de Acero Inox para agua sucia | Calpeda GXR",
      "description": "Cotiza Bombas Sumergibles GXR, GXV para el desagüe de aguas con sólidos de cárcamos y cisternas. En acero inoxidable. Entrega inmediata y Precio Mayorista.",
      "brand": {
        "@type": "Brand",
        "name": "Calpeda"
      },
      "offers": {
        "@type": "AggregateOffer",
        "url": "{{ url('/') }}",
        "priceCurrency": "MXN",
        "lowPrice": "10000",
        "highPrice": "55000",
        "offerCount": "5",
        "availability": "https://schema.org/InStock"
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "30"
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
          "item": "{{ url('/') }}",
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Bombas",
          "item": "{{ url('/bombas/') }}",
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Centrífugas Calpeda",
          "item": "{{ url('/bombas/bombas-centrifugas-calpeda/') }}",
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "Bombas para obra civil y urbanística",
          "item": "{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/') }}",
        },
        {
          "@type": "ListItem",
          "position": 5,
          "name": "Bombas Calpeda – Drenaje y tratamiento de aguas",
          "item": "https://bombasellos.com.mx/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/"
        },
        {
          "@type": "ListItem",
          "position": 6,
          "name": "Bomba Sumergible de Acero Inox para agua sucia | Calpeda GXR",
          "item": "https://bombasellos.com.mx/bombas/bombas-centrifugas-calpeda/bomba-sumergible-de-acero-inoxidable-gxr-gxv/"
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
          "name": "¿Cuáles son las aplicaciones de las bombas sumergibles GXR, GXV?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Las bombas sumergibles GXR, GXV son ideales para el desagüe de aguas con sólidos en cárcamos y cisternas, hechas en acero inoxidable para mayor durabilidad."
          }
        },
        {
          "@type": "Question",
          "name": "¿Cómo puedo solicitar más información sobre las bombas Calpeda GXR, GXV?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Puedes solicitar más información visitando nuestra página de contacto o llamando al +52-55-5752-1715 para asesoría gratuita sobre la selección del equipo adecuado."
          }
        }
      ]
    }
    </script>
    
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "serviceType": "Asesoría gratuita",
      "provider": {
        "@type": "Organization",
        "name": "BSH (Bombas Sellos y Hules Industriales S.A. de C.V.)"
      },
      "description": "Asesoría gratuita para la selección del equipo adecuado a sus necesidades."
    }
    </script>
    
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ContactPage",
      "mainEntity": {
        "@type": "ContactPoint",
        "contactType": "Sales",
        "url": "https://bombasellos.com.mx/contacto",
        "telephone": "+52-55-5752-1715"
      }
    }
    </script>
    
@endsection


@section('contenido')
<section class="block box-border relative flex-auto">
    <div class="max-w-[1190px] mx-auto relative flex lg:ml-[120.5px]">
        <div class="w-full box-border relative flex flex-auto">
            <div class="w-full p-[10px] flex flex-wrap content-start relative">
                <!-- Spacer -->
                <div class="w-full mb-[5px] relative">
                    <div class="transition-all box-border">
                        <div class="box-border h-[76px]"></div>
                    </div>
                </div>
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
                                        <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas') }}" class="text-[#043E81] no-underline box-shadow-none">
                                            Bombas Calpeda – Drenaje y tratamiento de aguas.
                                        </a>
                                    </li>
                                    <li class="block text-[#043E81] text-[16px] font-normal text-left box-border font-roboto">
                                        <span class="text-[#043E81] px-1">/</span>
                                    </li>
                                    <li class="block text-[#043E81] text-[16px] font-normal text-left box-border font-roboto">Bomba sumergible de acero inoxidable – GXR GXV</li>
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="box-border p-2.5 flex flex-col relative w-[90%] flex-wrap content-start mx-auto lg:ml-[120.5px]">
    <div class="box-border mb-5 text-left relative w-full flex-row flex-nowrap justify-start items-start content-start">
        <div class="transition-all duration-300 relative">
            <!-- Display when you choose background per Post -->
            <div class="absolute top-0 left-0 w-full h-[29px] z-10 bg-no-repeat bg-center bg-cover box-border">
                <div class="absolute top-0 left-0 w-full h-[29px] box-border bg-transparent"></div>
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
            <a href="https://bombasellos.com.mx/bombas/sellos-mecanicos-calpeda/" class="text-white no-underline bg-[#610001] box-border font-roboto font-medium inline-block leading-[15px] text-[15px] py-3 px-6 rounded-[3px] text-center transition-all duration-300 ease-in-out shadow-none">
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
                                            <div data-id="70dd5e6" data-element_type="widget" data-settings='{"slides_to_show":"1","navigation":"dots","autoplay":"yes","pause_on_hover":"yes","pause_on_interaction":"yes","autoplay_speed":5000,"infinite":"yes","effect":"slide","speed":500}' data-widget_type="image-carousel.default" class="box-border relative w-full flex flex-row flex-nowrap">
                                                <div class="box-border transition-all duration-300">
                                                    <div dir="ltr" class="box-border pb-7.5 mx-auto relative overflow-hidden z-[1]">
                                                        <div aria-live="off" class="box-border transform translate-x-0 relative w-full h-[489.047px] z-[1] flex transition-transform">
                                                            <div role="group" aria-roledescription="slide" aria-label="1 de 1" class="box-border flex-shrink-0 w-full h-[489.047px] relative max-w-full text-center">
                                                                <figure class="m-0 block box-border leading-[23px]">
                                                                    <picture decoding="async" title="Bomba GQG - Bombas sumergibles con sistema triturador 1" class="box-border">
                                                                        <source type="image/webp" srcset="/img/Bomba-sumergible-de-acero-inoxidable-GXR-GXV.png.webp" />
                                                                        <img alt="Bombas Calpeda sumergibles con sistema triturador​" src="/img/Bomba-sumergible-de-acero-inoxidable-GXR-GXV.png.webp" decoding="async" class="max-w-full h-auto align-middle border-none box-border shadow-none" />
                                                                    </picture>
                                                                </figure>
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
                                                    <p class="leading-[23px] mb-[32px] mt-0 box-border text-[#666666]">
                                                        Bomba sumergible con cuerpo, impulsor y eje en acero inoxidable. Con impulsor abierto o tipo vortex para agua con contenidos sólidos de hasta 25 mm de diámetro. 
                                                    </p>
                                                    
                                                    <ul class="list-disc pl-4">
                                                        <li>Profundidad de inmersión de hasta 5 metros y minima de 15 mm en servicio continuo.</li>
                                                        <li>Aceite blanco para aplicaciones sanitarias.</li>
                                                        <li>Interruptor de nivel magnético tipo flotador con ajustes.</li>
                                                        <li>Asa de transporte.</li>
                                                        <li>Rejilla de aspiración.</li>
                                                        <li>Fácil inspección del condensador.</li>
                                                        <li>Qmax. 13.2 m3/h</li>
                                                        <li>Hmax. 12.7 m</li>
                                                    </ul>
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
                                            <div class="font-roboto font-semibold text-blue-800 border-cyan-400 inline-flex text-lg">Bombas Sumergibles GXR, GXV</div>
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
                                            <div class="font-roboto font-semibold text-blue-800 border-cyan-400 inline-flex text-lg">Bomba Sumergible de Acero Inoxidable</div>
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
                            <div class="box-border transition-all duration-300 bg-transparent border-none border-radius-none shadow-none lg:mt-[325px] my-[45px] mx-0 p-2.5 flex relative w-full flex-wrap content-start">
                                <div data-id="84ca12f" data-element_type="widget" data-widget_type="heading.default" class="box-border my-5 mx-0 text-center relative w-full flex-wrap-none justify-normal items-normal content-normal">
                                    <div class="box-border transition-all duration-300 ease-in-out transform">
                                        <div class="box-border text-[#043e81] font-roboto font-semibold text-xs leading-3 p-0 m-0">
                                            CAMPO DE APLICACIONES
                                        </div>
                                    </div>
                                </div>
                                <section data-id="e2302cd" data-element_type="section" class="block box-border my-5 mx-0 relative w-full">
                                    <div class="max-w-[1190px] box-border mx-auto flex flex-col lg:flex-row relative">
                                        <div data-id="5e55c22" data-element_type="column" class="w-full box-border relative min-h-[1px] flex flex-wrap-none justify-normal items-normal content-normal">
                                            <div class="box-border p-2.5 flex relative w-full flex-wrap content-start">
                                                <div data-id="7ce4ff1" data-element_type="widget" data-widget_type="image.default" class="box-border text-center relative w-full flex-wrap-none justify-normal items-normal content-normal">
                                                    <div class="box-border transition-all duration-300 ease-in-out transform">
                                                        <img fetchpriority="high" decoding="async" width="994" height="591" src="/img/GXR_GXV_image.001.jpg.webp" alt="curve GXR GXV" 
                                                        srcset="/img/GXR_GXV_image.001.jpg.webp 994w, 
                                                                /img/GXR_GXV_image.001.jpg.webp 300w, 
                                                                /img/GXR_GXV_image.001.jpg.webp 768w, 
                                                                /img/GXR_GXV_image.001.jpg.webp 600w" 
                                                        sizes="(max-width: 994px) 100vw, 994px" 
                                                        class="max-w-full h-auto align-middle border-none box-border inline-block"
                                                    >
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