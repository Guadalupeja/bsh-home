@extends('layouts.app')
@section('title', 'Kits Maquinaria industrial. Sellos hidráulicos, hules - BSH')
@section('description', 'Cotiza aquí Kits de sellos para Maquinaria industrial. Precios competitivos, entrega inmediata. Sellos hidráulicos - Bombas Sellos y Hules Industriales | BSH')

@section('structured-data')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Bombas Sellos y Hules Industriales S.A. de C.V.",
  "url": "https://bombasellos.com.mx",
  "logo": "https://bombasellos.com.mx/img/logo.png",
  "description": "Expertos en Mantenimiento mecánico e hidráulico a Bombas, Pistones y Sistemas de desplazamiento rotativo y lineal. Maquinados, Metalizados, Soldadura, Pailería.",
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
  },
  "numberOfEmployees": "51-200"
}
</script>

<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "serviceType": "Mantenimiento de Bombas y Sistemas Hidráulicos",
      "provider": {
        "@type": "Organization",
        "name": "BSH (Bombas Sellos y Hules Industriales S.A. de C.V.)",
        "areaServed": "MX",
        "availableLanguage": ["Español", "English"]
      },
      "description": "Ofrecemos mantenimiento a bombas y sistemas hidráulicos, incluyendo maquinados CNC, metalizados de cromo duro y zinc, y reparación de componentes hidráulicos.",
      "offers": {
        "@type": "Offer",
        "priceCurrency": "MXN",
        "price": "0",
        "url": "https://bombasellos.com.mx/servicios/"
      },
      "additionalType": "https://schema.org/TechnicalService"
    }
    </script>
    
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "¿Qué tipos de aleaciones manejan para maquinados CNC?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Manejamos acero inoxidable, titanio, Hastelloy, Inconel, Monel y otras aleaciones de alta resistencia."
          }
        },
        {
          "@type": "Question",
          "name": "¿Ofrecen servicios de prototipado?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Sí, ofrecemos servicios de prototipado y simulación mediante métodos de elementos finitos (FEM)."
          }
        },
        {
          "@type": "Question",
          "name": "¿Qué es el metalizado de cromo duro?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "El metalizado de cromo duro es un proceso que mejora la resistencia al desgaste y la corrosión de las piezas, aumentando su durabilidad."
          }
        },
        {
          "@type": "Question",
          "name": "¿Qué servicios adicionales ofrecen para mantenimiento hidráulico?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Ofrecemos maquinado CNC, soldadura, pailería, y diagnóstico de fallas en equipos hidráulicos."
          }
        }
      ]
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
          "name": "Servicios",
          "item": "https://bombasellos.com.mx/servicios/"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Kits Maquinaria Industrial",
          "item": "https://bombasellos.com.mx/kits-maquinaria-industrial/"
        }
      ]
    }
    </script>
    @endsection

@section('contenido')

<section class="relative w-full bg-cover bg-center bg-no-repeat" style="background-image: url('/img/bombas-industriales.jpg');">
    <div class="max-w-[1190px] mx-auto flex">
        <div class="lg:flex w-full">
            <div class="relative flex lg:w-1/3 min-h-[1px]">
                <div class="w-full relative flex">
                    <div class="flex w-full flex-wrap align-content-start p-2.5">
                        <div class="text-center w-full">
                            <div class="transition duration-300 ease-in-out">
                                <picture loading="lazy" title="Kits Maquinaria industrial - Sellos Hidráulicos 27">
                                    <source type="image/webp" srcset="/img/kits-maquinaria-industrial-2.png.webp 500w" sizes="(max-width: 500px) 100vw, 500px" />
                                    <img 
                                        class="max-w-full h-auto align-middle border-none" 
                                        width="500" 
                                        height="500" 
                                        src="/img/kits-maquinaria-industrial-2.png" 
                                        alt="kits maquinaria industrial 2" 
                                        loading="lazy" 
                                        srcset="/img/kits-maquinaria-industrial-2.png 500w, /img/kits-maquinaria-industrial-2-300x300.png 300w, /img/kits-maquinaria-industrial-2-150x150.png 150w" 
                                        sizes="(max-width: 500px) 100vw, 500px" />
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative flex lg:w-2/3 min-h-[1px]">
                <div class="w-full relative flex">
                    <div class="flex w-full flex-wrap align-content-start p-2.5">
                        <div class="w-full lg:mb-5">
                            <div class="lg:h-[149px]"></div>
                        </div>
                        <div class="w-full mb-5">
                            <h1 class="text-white text-[42px] leading-[42px] font-bold">Kits O-Rings</h1>
                        </div>
                        <div class="w-full mb-5">
                            <div class="h-[149px]"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--contenido-->

<section data-id="685551f" data-element_type="section" class="relative block">
    <div class="max-w-[1190px] mx-auto flex relative">
        <div class="w-full flex">
            <div data-id="270c042" data-element_type="column" class="relative flex min-h-[1px]">
                <div class="w-full relative flex">
                    <div class="flex relative w-full flex-wrap align-content-start p-2.5">
                        <div data-id="7af6806" data-element_type="widget" data-widget_type="spacer.default" class="mb-5 relative w-full">
                            <div class="transition duration-300 ease-in-out">
                                <div class="h-[76px]"></div>
                            </div>
                        </div>
                        <div data-id="1382309" data-element_type="widget" data-widget_type="mdp-headinger-elementor.default" class="relative w-full">
                            <div class="transition duration-300 ease-in-out">
                                <div>
                                    <div class="text-gray-500">
                                        <div class="font-roboto font-semibold absolute w-full user-select-none"></div>
                                    </div>
                                    <h2 class="text-[20px] text-[#2953B1] leading-[25px] mt-0 mb-0 clear-both font-semibold font-open-sans text-left break-all">
                                        <div class="inline-block relative z-10">
                                            <div class="font-roboto font-semibold text-[#333333] border-[#6ECBE4] inline-flex border-none">
                                                KITS O RINGS
                                            </div>
                                            <div class="mt-0 relative flex">
                                                <div class="after:content-[''] after:block after:bg-[#610001] after:w-[100px] after:h-[2px] after:mt-2"></div>
                                            </div> 
                                        </div>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>










<section class="relative flex">
    <div class="max-w-[1190px] mx-auto flex">
        <div class="lg:flex w-full">
            <div class="flex flex-col lg:w-1/4 px-5">
                <div class="w-full flex flex-col">
                    <div class="flex w-full flex-col">
                        <div class="w-full">
                            <h2 class="text-[43px] text-[#333333] leading-[25px] py-[20px] font-semibold mb-2">
                                <span class="font-roboto text-[#333333]">Categorías</span>
                            </h2>
                        </div>
                        <div class="w-full mb-5">
                            <h2 class="text-[20px] text-[#333333] leading-[25px] font-semibold mb-4">
                                <span class="font-roboto text-[#333333]">KITS O RINGS</span>
                            </h2>
                        </div>
                        <div class="w-full text-[#7A7A7A]">
                            <p class="font-bold">Material</p>
                            <ul class="list-disc list-inside ml-4 mb-8">
                                <li>Nitrilo</li>
                                <li>Viton</li>
                                <li>Nitrilo hidrogenado</li>
                            </ul>
                            <b class="text-[#666666]">QUAD RING</b>
                            <ul class="list-disc list-inside ml-4 mb-8">
                                <li>O-Rings</li>
                                <li>Quad Rings</li>
                                <li>Flange Seals</li>
                            </ul>
                            <p class="font-bold">Número de piezas</p>
                            <ul class="list-disc list-inside ml-4 mb-8">
                                <li>0 – 90</li>
                                <li>91 – 150</li>
                                <li>151 – 200</li>
                                <li>201 – 350</li>
                                <li>351 – 750</li>
                                <li>751 – 1200</li>
                                <li>1201 – 1700</li>
                            </ul>
                            <p class="font-bold">Dureza</p>
                            <ul class="list-disc list-inside ml-4 mb-8">
                                <li>55</li>
                                <li>70</li>
                                <li>75</li>
                                <li>90</li>
                            </ul>
                            <p class="font-bold">Normativa</p>
                            <ul class="list-disc list-inside ml-4 mb-8">
                                <li>AS</li>
                                <li>ISO</li>
                                <li>JAPONESA</li>
                                <li>SAE</li>
                            </ul>
                            <p class="font-bold">Tipo</p>
                            <ul class="list-disc list-inside ml-4 mb-8">
                                <li>Pulgadas</li>
                                <li>Métrico</li>
                                <li>Conexiones</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex lg:w-3/4 min-h-[1px] relative">
                <div class="w-full relative lg:flex">
                    <div class="lg:flex w-full flex-wrap align-content-start p-2.5">
                        <section class="lg:flex w-full">
                            <div class="max-w-[1190px] mx-auto lg:flex">
                                <div class="lg:flex w-full">
                                    <div class="lg:flex lg:w-1/3 min-h-[1px] relative">
                                        <div class="w-full relative flex">
                                            <div class="flex w-full flex-wrap align-content-start p-2.5">
                                                <div class="w-full mb-5">
                                                    <div class="transition duration-300 ease-in-out">
                                                        <picture loading="lazy" title="Kits Maquinaria industrial - Sellos Hidráulicos 28">
                                                            <source type="image/webp" srcset="/img/568-90D-KIT-kits-o-rings.png.webp" />
                                                            <img class="max-w-full h-auto" width="300" height="490" src="/img/568-90D-KIT-kits-o-rings.png" alt="568 90D KIT kits o rings" loading="lazy" />
                                                        </picture>
                                                    </div>
                                                </div>
                                                <div class="w-full mb-5">
                                                    <h2 class="text-[20px] text-[#2953B1] leading-[25px] font-semibold">
                                                        <span class="font-roboto text-[#043E81]">568 90D KIT</span>
                                                    </h2>
                                                </div>
                                                <div class="w-full mb-5">
                                                    <p class="text-[#666666] text-[12px]">436 90 juntas tóricas de durómetro en 36 tamaños diferentes</p>
                                                </div>
                                                <div class="w-full text-left">
                                                    <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/bombas-centrifugas-autocebantes-con-rodete-abierto-a/') }}" class="bg-[#043E81] text-white font-medium text-[18px] py-[20px] px-[40px] rounded-md transition duration-300">
                                                        MÁS INFORMACIÓN
                                                    </a>
                                                </div>                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lg:flex lg:w-1/3 min-h-[1px] relative">
                                        <div class="w-full relative flex">
                                            <div class="flex w-full flex-wrap align-content-start p-2.5">
                                                <div class="w-full mb-5">
                                                    <div class="transition duration-300 ease-in-out">
                                                        <picture loading="lazy" title="Kits Maquinaria industrial - Sellos Hidráulicos 29">
                                                            <source type="image/webp" srcset="/img/568-FACE-KIT-kits-o-rings-1.png.webp" />
                                                            <img class="max-w-full h-auto" width="300" height="490" src="/img/568-FACE-KIT-kits-o-rings-1.png" alt="568 FACE KIT kits o rings 1" loading="lazy" />
                                                        </picture>
                                                    </div>
                                                </div>
                                                <div class="w-full mb-5">
                                                    <h2 class="text-[20px] text-[#2953B1] leading-[25px] font-semibold">
                                                        <span class="font-roboto text-[#043E81]">568 FACE KIT</span>
                                                    </h2>
                                                </div>
                                                <div class="w-full mb-5">
                                                    <p class="text-[#666666] text-[12px]">155 90 juntas tóricas del durómetro en 8 tamaños diferentes.</p>
                                                </div>
                                                <div class="w-full text-left">
                                                    <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/bombas-sumergibles-con-sistema-triturador') }}" class="bg-[#043E81] text-white font-medium text-[18px] py-[20px] px-[40px] rounded-md transition duration-300">
                                                        MÁS INFORMACIÓN
                                                    </a>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lg:flex lg:w-1/3 min-h-[1px] relative">
                                        <div class="w-full relative flex">
                                            <div class="flex w-full flex-wrap align-content-start p-2.5">
                                                <div class="w-full mb-5">
                                                    <div class="transition duration-300 ease-in-out">
                                                        <picture loading="lazy" title="Kits Maquinaria industrial - Sellos Hidráulicos 30">
                                                            <source type="image/webp" srcset="/img/568-FLANGE-KIT-.png.webp" />
                                                            <img class="max-w-full h-auto" width="300" height="490" src="/img/568-FLANGE-KIT-.png" alt="568 FLANGE KIT" loading="lazy" />
                                                        </picture>
                                                    </div>
                                                </div>
                                                <div class="w-full mb-5">
                                                    <h2 class="text-[20px] text-[#2953B1] leading-[25px] font-semibold">
                                                        <span class="font-roboto text-[#043E81]">568 FLANGE KIT</span>
                                                    </h2>
                                                </div>
                                                <div class="w-full mb-5">
                                                    <p class="text-[#666666] text-[12px]">Este kit contiene un total de 70, 90 juntas tóricas de durómetro en 7 tamaños diferentes.</p>
                                                </div>
                                                <div class="w-full text-left">
                                                    <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/duplicado-bombas-sumergibles-con-sistema-triturador-gqg-1956') }}" class="bg-[#043E81] text-white font-medium text-[18px] py-[20px] px-[40px] rounded-md transition duration-300">
                                                        MÁS INFORMACIÓN
                                                    </a>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="lg:flex w-full">
                            <div class="max-w-[1190px] mx-auto lg:flex">
                                <div class="lg:flex w-full">
                                    <div class="lg:flex lg:w-1/3 min-h-[1px] relative">
                                        <div class="w-full relative flex">
                                            <div class="flex w-full flex-wrap align-content-start p-2.5">
                                                <div class="w-full mb-5">
                                                    <div class="transition duration-300 ease-in-out">
                                                        <picture loading="lazy" title="Kits Maquinaria industrial - Sellos Hidráulicos 31">
                                                            <source type="image/webp" srcset="/img/568-KIT.png.webp" />
                                                            <img class="max-w-full h-auto" width="300" height="490" src="/img/568-KIT.png" alt="568 KIT" loading="lazy" />
                                                        </picture>
                                                    </div>
                                                </div>
                                                <div class="w-full mb-5">
                                                    <h2 class="text-[20px] text-[#2953B1] leading-[25px] font-semibold">
                                                        <span class="font-roboto text-[#043E81]">568 KIT</span>
                                                    </h2>
                                                </div>
                                                <div class="w-full mb-5">
                                                    <p class="text-[#666666] text-[12px]">436 70 juntas tóricas de durómetro en 36 tamaños diferentes.</p>
                                                </div>
                                                <div class="w-full text-left">
                                                    <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/bombas-centrifugas-autocebantes-con-rodete-abierto-a/') }}" class="bg-[#043E81] text-white font-medium text-[18px] py-[20px] px-[40px] rounded-md transition duration-300">
                                                        MÁS INFORMACIÓN
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lg:flex lg:w-1/3 min-h-[1px] relative">
                                        <div class="w-full relative flex">
                                            <div class="flex w-full flex-wrap align-content-start p-2.5">
                                                <div class="w-full mb-5">
                                                    <div class="transition duration-300 ease-in-out">
                                                        <picture loading="lazy" title="Kits Maquinaria industrial - Sellos Hidráulicos 32">
                                                            <source type="image/webp" srcset="/img/568-KIT-A.png.webp" />
                                                            <img class="max-w-full h-auto" width="300" height="490" src="/img/568-KIT-A.png" alt="568 KIT A" loading="lazy" />
                                                        </picture>
                                                    </div>
                                                </div>
                                                <div class="w-full mb-5">
                                                    <h2 class="text-[20px] text-[#2953B1] leading-[25px] font-semibold">
                                                        <span class="font-roboto text-[#043E81]">568 KIT A</span>
                                                    </h2>
                                                </div>
                                                <div class="w-full mb-5">
                                                    <p class="text-[#666666] text-[12px]">382 juntas tóricas en 30 tamaños diferentes.</p>
                                                </div>
                                                <div class="w-full text-left">
                                                    <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/bombas-sumergibles-con-sistema-triturador') }}" class="bg-[#043E81] text-white font-medium text-[18px] py-[20px] px-[40px] rounded-md transition duration-300">
                                                        MÁS INFORMACIÓN
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lg:flex lg:w-1/3 min-h-[1px] relative">
                                        <div class="w-full relative flex">
                                            <div class="flex w-full flex-wrap align-content-start p-2.5">
                                                <div class="w-full mb-5">
                                                    <div class="transition duration-300 ease-in-out">
                                                        <picture loading="lazy" title="Kits Maquinaria industrial - Sellos Hidráulicos 33">
                                                            <source type="image/webp" srcset="/img/568-PTFE-KIT.png.webp" />
                                                            <img class="max-w-full h-auto" width="300" height="490" src="/img/568-PTFE-KIT.png" alt="568 PTFE KIT" loading="lazy" />
                                                        </picture>
                                                    </div>
                                                </div>
                                                <div class="w-full mb-5">
                                                    <h2 class="text-[20px] text-[#2953B1] leading-[25px] font-semibold">
                                                        <span class="font-roboto text-[#043E81]">568 PTFE KIT</span>
                                                    </h2>
                                                </div>
                                                <div class="w-full mb-5">
                                                    <p class="text-[#666666] text-[12px]">325 juntas tóricas de PTFE (55-58 Shore D) en 36 tamaños diferentes</p>
                                                </div>
                                                <div class="w-full text-left">
                                                    <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/duplicado-bombas-sumergibles-con-sistema-triturador-gqg-1956') }}" class="bg-[#043E81] text-white font-medium text-[18px] py-[20px] px-[40px] rounded-md transition duration-300">
                                                        MÁS INFORMACIÓN
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="lg:flex w-full">
                            <div class="max-w-[1190px] mx-auto lg:flex">
                                <div class="lg:flex w-full">
                                    <div class="lg:flex lg:w-1/3 min-h-[1px] relative">
                                        <div class="w-full relative flex">
                                            <div class="flex w-full flex-wrap align-content-start p-2.5">
                                                <div class="w-full mb-5">
                                                    <div class="transition duration-300 ease-in-out">
                                                        <picture loading="lazy" title="Kits Maquinaria industrial - Sellos Hidráulicos 34">
                                                            <source type="image/webp" srcset="/img/568-WH-KIT.png.webp" />
                                                            <img class="max-w-full h-auto" width="300" height="490" src="/img/568-WH-KIT.png" alt="568 WH KIT" loading="lazy" />
                                                        </picture>
                                                    </div>
                                                </div>
                                                <div class="w-full mb-5">
                                                    <h2 class="text-[20px] text-[#2953B1] leading-[25px] font-semibold">
                                                        <span class="font-roboto text-[#043E81]">900 BOSS KIT</span>
                                                    </h2>
                                                </div>
                                                <div class="w-full mb-5">
                                                    <p class="text-[#666666] text-[12px]">1.110 juntas tóricas en 150 tamaños diferentes</p>
                                                </div>
                                                <div class="w-full text-left">
                                                    <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/bombas-centrifugas-autocebantes-con-rodete-abierto-a/') }}" class="bg-[#043E81] text-white font-medium text-[18px] py-[20px] px-[40px] rounded-md transition duration-300">
                                                        MÁS INFORMACIÓN
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lg:flex lg:w-1/3 min-h-[1px] relative">
                                        <div class="w-full relative flex">
                                            <div class="flex w-full flex-wrap align-content-start p-2.5">
                                                <div class="w-full mb-5">
                                                    <div class="transition duration-300 ease-in-out">
                                                        <picture loading="lazy" title="Kits Maquinaria industrial - Sellos Hidráulicos 35">
                                                            <source type="image/webp" srcset="/img/568-WH-KIT.png.webp" />
                                                            <img class="max-w-full h-auto" width="300" height="490" src="/img/568-WH-KIT.png.webp" alt="900 BOSS FC" loading="lazy" />
                                                        </picture>
                                                    </div>
                                                </div>
                                                <div class="w-full mb-5">
                                                    <h2 class="text-[20px] text-[#2953B1] leading-[25px] font-semibold">
                                                        <span class="font-roboto text-[#043E81]">568 WH KIT-90D</span>
                                                    </h2>
                                                </div>
                                                <div class="w-full mb-5">
                                                    <p class="text-[#666666] text-[12px]">382 juntas tóricas en 30 tamaños diferentes.</p>
                                                </div>
                                                <div class="w-full text-left">
                                                    <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/duplicado-bombas-sumergibles-con-sistema-triturador-gqg-1956') }}" class="bg-[#043E81] text-white font-medium text-[18px] py-[20px] px-[40px] rounded-md transition duration-300">
                                                        MÁS INFORMACIÓN
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lg:flex lg:w-1/3 min-h-[1px] relative">
                                        <div class="w-full relative flex">
                                            <div class="flex w-full flex-wrap align-content-start p-2.5">
                                                <div class="w-full mb-5">
                                                    <div class="transition duration-300 ease-in-out">
                                                        <picture loading="lazy" title="Kits Maquinaria industrial - Sellos Hidráulicos 36">
                                                            <source type="image/webp" srcset="/img/900-BOSS-FC.png.webp" />
                                                            <img class="max-w-full h-auto" width="300" height="490" src="/img/900-BOSS-FC.png" alt="900 BOSS FC" loading="lazy" />
                                                        </picture>
                                                    </div>
                                                </div>
                                                <div class="w-full mb-5">
                                                    <h2 class="text-[20px] text-[#2953B1] leading-[25px] font-semibold">
                                                        <span class="font-roboto text-[#043E81]">900 BOSS FC</span>
                                                    </h2>
                                                </div>
                                                <div class="w-full mb-5">
                                                    <p class="text-[#666666] text-[12px]">Surtido de 212 piezas contiene las juntas tóricas Durómetro FKM Boss 90</p>
                                                </div>
                                                <div class="w-full text-left">
                                                    <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/duplicado-bombas-sumergibles-con-sistema-triturador-gqg-1956') }}" class="bg-[#043E81] text-white font-medium text-[18px] py-[20px] px-[40px] rounded-md transition duration-300">
                                                        MÁS INFORMACIÓN
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>




                        <section class="lg:flex w-full">
                            <div class="max-w-[1190px] mx-auto lg:flex">
                                <div class="lg:flex w-full">
                                    <div class="lg:flex lg:w-1/3 min-h-[1px] relative">
                                        <div class="w-full relative flex">
                                            <div class="flex w-full flex-wrap align-content-start p-2.5">
                                                <div class="w-full mb-5">
                                                    <div class="transition duration-300 ease-in-out">
                                                        <picture loading="lazy" title="Kits Maquinaria industrial - Sellos Hidráulicos 34">
                                                            <source type="image/webp" srcset="/img/900-BOSS-KIT.png.webp" />
                                                            <img class="max-w-full h-auto" width="300" height="490" src="/img/900-BOSS-KIT.png.webp="568 WH KIT" loading="lazy" />
                                                        </picture>
                                                    </div>
                                                </div>
                                                <div class="w-full mb-5">
                                                    <h2 class="text-[20px] text-[#2953B1] leading-[25px] font-semibold">
                                                        <span class="font-roboto text-[#043E81]">568 WH KIT</span>
                                                    </h2>
                                                </div>
                                                <div class="w-full mb-5">
                                                    <p class="text-[#666666] text-[12px]">1.110 juntas tóricas en 150 tamaños diferentes</p>
                                                </div>
                                                <div class="w-full text-left">
                                                    <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/bombas-centrifugas-autocebantes-con-rodete-abierto-a/') }}" class="bg-[#043E81] text-white font-medium text-[18px] py-[20px] px-[40px] rounded-md transition duration-300">
                                                        MÁS INFORMACIÓN
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lg:flex lg:w-1/3 min-h-[1px] relative">
                                        <div class="w-full relative flex">
                                            <div class="flex w-full flex-wrap align-content-start p-2.5">
                                                <div class="w-full mb-5">
                                                    <div class="transition duration-300 ease-in-out">
                                                        <picture loading="lazy" title="Kits Maquinaria industrial - Sellos Hidráulicos 35">
                                                            <source type="image/webp" srcset="/img/568-WH-KIT-90D.png.webp" />
                                                            <img class="max-w-full h-auto" width="300" height="490" src="/img/568-WH-KIT-90D.png" alt="568 WH KIT-90D" loading="lazy" />
                                                        </picture>
                                                    </div>
                                                </div>
                                                <div class="w-full mb-5">
                                                    <h2 class="text-[20px] text-[#2953B1] leading-[25px] font-semibold">
                                                        <span class="font-roboto text-[#043E81]">568 WH KIT-90D</span>
                                                    </h2>
                                                </div>
                                                <div class="w-full mb-5">
                                                    <p class="text-[#666666] text-[12px]">382 juntas tóricas en 30 tamaños diferentes.</p>
                                                </div>
                                                <div class="w-full text-left">
                                                    <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/bombas-sumergibles-con-sistema-triturador') }}" class="bg-[#043E81] text-white font-medium text-[18px] py-[20px] px-[40px] rounded-md transition duration-300">
                                                        MÁS INFORMACIÓN
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lg:flex lg:w-1/3 min-h-[1px] relative">
                                        <div class="w-full relative flex">
                                            <div class="flex w-full flex-wrap align-content-start p-2.5">
                                                <div class="w-full mb-5">
                                                    <div class="transition duration-300 ease-in-out">
                                                        <picture loading="lazy" title="Kits Maquinaria industrial - Sellos Hidráulicos 36">
                                                            <source type="image/webp" srcset="/img/900-BOSS-FC.png.webp" />
                                                            <img class="max-w-full h-auto" width="300" height="490" src="/img/900-BOSS-FC.png" alt="900 BOSS FC" loading="lazy" />
                                                        </picture>
                                                    </div>
                                                </div>
                                                <div class="w-full mb-5">
                                                    <h2 class="text-[20px] text-[#2953B1] leading-[25px] font-semibold">
                                                        <span class="font-roboto text-[#043E81]">900 BOSS FC</span>
                                                    </h2>
                                                </div>
                                                <div class="w-full mb-5">
                                                    <p class="text-[#666666] text-[12px]">Surtido de 212 piezas contiene las juntas tóricas Durómetro FKM Boss 90</p>
                                                </div>
                                                <div class="w-full text-left">
                                                    <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/duplicado-bombas-sumergibles-con-sistema-triturador-gqg-1956') }}" class="bg-[#043E81] text-white font-medium text-[18px] py-[20px] px-[40px] rounded-md transition duration-300">
                                                        MÁS INFORMACIÓN
                                                    </a>
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