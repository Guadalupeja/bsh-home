@extends('layouts.app')

@section('title', 'Cotiza Bombas Calpeda - Recirculación y climatización - BSH')
@section('description', 'Cotiza Bombas de Recirculación y climatización CALPEDA. 
En acero inoxidable, fundición y bronce. Entrega inmediata Mx y Precios Mayorista. Marca Italiana.')

@section('structured-data')
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Product",
      "name": "Bombas de Recirculación, Presurizadoras y de Alimentación | Calpeda®",
      "description": "Cotiza Bombas de recirculación, presurizadoras y de alimentación CALPEDA. En acero inoxidable, fundición y bronce. Entrega inmediata en México y precios de mayorista.",
      "brand": {
        "@type": "Brand",
        "name": "Calpeda"
      },
      "sku": "CALP-RECIRC-PRES-ALIM",
      "mpn": "CALP-RECIRC-001",
      "category": "Industrial Pumps",
      "image": [
        "/img/Bomba-nm-nmd-calpeda.png.webp",
        "/img/Bombamxh-calpeda.png.webp",
        "/img/bomba-mxp-calpeda.png.webp",
        "/img/Bombas-multicelulares-horizontales-monobloc-mgp.png.webp"
      ],
      "offers": {
        "@type": "AggregateOffer",
        "url": "https://bombasellos.com.mx/bombas/bombas-centrifugas-calpeda/bombas-calpeda-presurizacion/",
        "priceCurrency": "MXN",
        "lowPrice": "5000",
        "highPrice": "45000",
        "offerCount": "6",
        "availability": "https://schema.org/InStock"
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.7",
        "reviewCount": "18"
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
            "name": "Carlos P."
          },
          "reviewBody": "Excelente bomba para sistemas de presurización en HVAC. Muy eficiente y de alta calidad."
        },
        {
          "@type": "Review",
          "reviewRating": {
            "@type": "Rating",
            "ratingValue": "4.5"
          },
          "author": {
            "@type": "Person",
            "name": "Laura G."
          },
          "reviewBody": "Muy buena para recirculación en sistemas industriales, fácil instalación."
        }
      ],
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://bombasellos.com.mx/bombas-calpeda-presurizacion"
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
              "name": "Bombas Calpeda – Presurización",
              "item": "https://bombasellos.com.mx/bombas-calpeda-presurizacion"
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
                  "name": "¿Qué tipo de bombas de recirculación y presurización ofrece Calpeda?",
                  "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Calpeda ofrece una amplia gama de bombas de recirculación y presurización diseñadas para diversas aplicaciones industriales, comerciales y residenciales, incluyendo bombas centrífugas monobloc, multicelulares y autoaspirantes."
                  }
                },
                {
                  "@type": "Question",
                  "name": "¿Cuáles son los materiales disponibles para las bombas Calpeda?",
                  "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Las bombas Calpeda están disponibles en acero inoxidable, fundición y bronce, dependiendo del modelo y la aplicación específica."
                  }
                },
                {
                  "@type": "Question",
                  "name": "¿Dónde puedo comprar bombas Calpeda en México?",
                  "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Puedes comprar bombas Calpeda a través de nuestro sitio web o contactando con nuestro equipo de ventas. Ofrecemos entrega inmediata en todo México."
                  }
                }
              ]
            }
            </script>
            
            <script type="application/ld+json">
                {
                  "@context": "https://schema.org",
                  "@type": "Service",
                  "serviceType": "Venta de bombas Calpeda",
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
                  "description": "Ofrecemos venta y soporte especializado de bombas Calpeda en México con entrega inmediata."
                }
                </script>
                
    
@endsection


@section('contenido')

<div class="box-border p-2.5 flex relative w-[90%] flex-wrap content-start mx-auto lg:ml-[120.5px]">
    <div class="box-border mb-5 relative w-full flex-row flex-nowrap justify-start items-start content-start">
        <div class="transition-all duration-300">
            <div class="box-border h-[76px]"></div>
        </div>
    </div>
    <div class="box-border mb-5 text-left relative w-full flex-row flex-nowrap justify-start items-start content-start">
        <div class="transition-all duration-300">
            <div class="box-border text-[#7a7a7a] font-roboto font-semibold w-full absolute select-none"></div>
            <h1 class="text-[35px] leading-[44.5455px] mt-0 mb-0 font-semibold font-['Open Sans'] box-border m-0 text-left break-all relative">
                <div class="inline-block relative z-10">
                    <div class="font-roboto font-bold text-[#333333] text-[27px] inline-flex">
                        Recirculacion y climatización.
                    </div>
                    <div class="mt-[10px] relative">
                        <div class="after:content-[''] after:block after:bg-[#610001] after:w-[100px] after:h-[2px] after:mt-2"></div>
                    </div>
                </div>
            </h1>
        </div>
    </div>
</div>

<!-- Contenido e imágenes -->
<div class="box-border p-2.5 flex flex-col relative w-full flex-wrap content-start m-5 lg:w-[90%] md:flex-row md:ml-[120.5px]">
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
        <a href="{{ url('/bombas/sellos-mecanicos-calpeda') }}" class="text-white no-underline bg-[#610001] box-border font-roboto font-medium inline-block leading-[15px] text-[15px] py-3 px-6 rounded-[3px] text-center transition-all duration-300 ease-in-out shadow-none">
            <span class="box-border no-underline flex justify-center">
                <span class="box-border no-underline flex-grow order-10 block">Sellos mécanicos CALPEDA®</span>
            </span>
        </a>
    </div>
    </div>

    <div class="w-full md:w-3/4 flex flex-wrap px-1 py-0 mx-auto">

        <!-- Bomba 1 -->
        <div class="box-border p-1 lg:m-0 mx-auto flex relative w-full lg:w-1/3 flex-wrap content-start">
            <div class="box-border mb-1 overflow-hidden relative w-full flex flex-row flex-nowrap">
                <div class="box-border transition-all ease-in-out group">
                    <div class="box-border block relative z-10 overflow-hidden text-center">
                        <picture fetchpriority="high" decoding="async" title="Bombas Calpeda - Bombas de alimentación a circuitos HVAC en la industria. 1" class="box-border">
                            <source type="image/webp" srcset="/img/Bomba-nm-nmd-calpeda.png.webp 300w" sizes="(max-width: 300px) 100vw, 300px" class="box-border" />
                            <img fetchpriority="high" decoding="async" width="300" height="490" src="/img/Bomba-nm-nmd-calpeda.png" alt="Bomba monobloc de aspiración axial en bronce." srcset="/img/Bomba-nm-nmd-calpeda.png 300w, /img/Bomba-nm-nmd-calpeda-184x300.png 184w" sizes="(max-width: 300px) 100vw, 300px" class="max-w-full h-auto align-middle border-none p-0 m-0 transition-transform ease-in-out transform group-hover:translate-x-2" />
                        </picture>
                    </div>
                </div>
            </div>
            <div class="mb-2 relative w-full flex flex-row">
                <div class="box-border transition-all ease-in-out">
                    <div>
                        <h2 class="text-[20px] text-[#2953b1] leading-[25px] mt-0 mb-0 clear-both font-semibold font-[Open Sans] m-0 text-left">
                            <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-presurizacion/bombas-centrifugas-monobloc-con-orificios-roscados-nm-nmd') }}" class="text-[#007bff] no-underline bg-transparent">
                                <span class="font-roboto font-semibold text-[#043e81] border-[#6ec1e4] inline-flex border-none">Bomba NM, NMD</span>
                            </a>
                        </h2>                        
                    </div>
                </div>
            </div>
            <div class="text-[#7a7a7a] font-roboto font-normal mb-2 text-[12px] relative w-full flex flex-row h-10">
                <div class="box-border m-0 p-0 transition-all ease-in-out">
                    <div>
                        <p class="text-[#666666] leading-[21.6px] mb-2 mt-0">Bombas centrífugas monobloc con orificios roscados.</p>
                    </div>
                </div>
            </div>
            <div class="relative w-full text-left flex flex-row">
                <div class="box-border m-0 transition-all ease-in-out">
                    <div>
                        <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-presurizacion/bombas-centrifugas-monobloc-con-orificios-roscados-nm-nmd') }}" class="text-white no-underline bg-[#043e81] box-border font-roboto font-medium text-[18px] py-2.5 px-3 rounded-[5px] inline-block leading-[18px] text-center transition-all ease-in-out w-auto">
                            <span class="flex justify-center">
                                <span class="mr-1 order-5 flex-grow-0">
                                    <i class="fas fa-plus text-white py-3"></i>
                                </span>
                                <span class="flex-grow-1 order-10 block py-3 px-8">MÁS INFORMACIÓN</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bomba 2 -->
        <div class="box-border p-1 lg:m-0 mx-auto flex relative w-full lg:w-1/3 flex-wrap content-start">
            <div class="box-border mb-1 overflow-hidden relative w-full flex flex-row flex-nowrap">
                <div class="box-border transition-all ease-in-out group">
                    <div class="box-border block relative z-10 overflow-hidden text-center">
                        <picture decoding="async" title="Bombas Calpeda - Bombas de alimentación a circuitos HVAC en la industria. 2" class="box-border">
                            <source type="image/webp" srcset="/img/Bombas-centriIfugas-monobloc-n-1450-1min-NM4-NMS4-1.png.webp 300w" sizes="(max-width: 300px) 100vw, 300px" class="box-border" />
                            <img decoding="async" width="300" height="490" src="/img/Bombas-centriIfugas-monobloc-n-1450-1min-NM4-NMS4-1.png" alt="Bomba monobloc de aspiración axial en bronce." srcset="/img/Bombas-centriIfugas-monobloc-n-1450-1min-NM4-NMS4-1.png 300w, /img/Bombas-centriIfugas-monobloc-n-1450-1min-NM4-NMS4-1-184x300.png 184w" sizes="(max-width: 300px) 100vw, 300px" class="max-w-full h-auto align-middle border-none p-0 m-0 transition-transform ease-in-out transform group-hover:translate-x-2" />
                        </picture>
                    </div>
                </div>
            </div>
            <div class="mb-2 relative w-full flex flex-row">
                <div class="box-border transition-all ease-in-out">
                    <div>
                        <h2 class="text-[20px] text-[#2953b1] leading-[25px] mt-0 mb-0 clear-both font-semibold font-[Open Sans] m-0 text-left">
                            <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-recirculacion-y-climatizacion/bombas-centrifugas-monobloc-con-bridas-nm-nms') }}" class="text-[#007bff] no-underline bg-transparent">
                                <span class="font-roboto font-semibold text-[#043e81] border-[#6ec1e4] inline-flex border-none">Bomba NM, NMS</span>
                            </a>
                        </h2>                        
                    </div>
                </div>
            </div>
            <div class="text-[#7a7a7a] font-roboto font-normal mb-2 text-[12px] relative w-full flex flex-row h-10">
                <div class="box-border m-0 p-0 transition-all ease-in-out">
                    <div>
                        <p class="text-[#666666] leading-[21.6px] mb-2 mt-0">Bombas centrífugas monobloc con bridas.</p>
                    </div>
                </div>
            </div>
            <div class="relative w-full text-left flex flex-row">
                <div class="box-border m-0 transition-all ease-in-out">
                    <div>
                        <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-recirculacion-y-climatizacion/bombas-centrifugas-monobloc-con-bridas-nm-nms') }}" class="text-white no-underline bg-[#043e81] box-border font-roboto font-medium text-[18px] py-2.5 px-3 rounded-[5px] inline-block leading-[18px] text-center transition-all ease-in-out w-auto">
                            <span class="flex justify-center">
                                <span class="mr-1 order-5 flex-grow-0">
                                    <i class="fas fa-plus text-white py-3"></i>
                                </span>
                                <span class="flex-grow-1 order-10 block py-3 px-8">MÁS INFORMACIÓN</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

 <!-- Bomba 3 -->
       <div class="box-border p-1 lg:m-0 mx-auto flex relative w-full lg:w-1/3 flex-wrap content-start">
           <div class="box-border mb-1 overflow-hidden relative w-full flex flex-row flex-nowrap">
               <div class="box-border transition-all ease-in-out group">
                   <div class="box-border block relative z-10 overflow-hidden text-center">
                       <picture loading="lazy" decoding="async" title="Bombas Calpeda - Maquinaria y equipos (OEM) 3" class="box-border">
                           <source type="image/webp" srcset="/img/Bombas-centriIfugas-monobloc-n-1450-1min-NM4-NMS4-1.png.webp 300w" sizes="(max-width: 300px) 100vw, 300px" class="box-border" />
                           <img loading="lazy" decoding="async" width="300" height="490" src="/img/Bombas-centriIfugas-monobloc-n-1450-1min-NM4-NMS4-1.png" alt="Bomba monobloc de aspiración axial en bronce." srcset="/img/Bombas-centriIfugas-monobloc-n-1450-1min-NM4-NMS4-1.png 300w, /img/Bombas-centriIfugas-monobloc-n-1450-1min-NM4-NMS4-1-184x300.png 184w" sizes="(max-width: 300px) 100vw, 300px" class="max-w-full h-auto align-middle border-none p-0 m-0 transition-transform ease-in-out transform group-hover:translate-x-2" />
                       </picture>
                   </div>
               </div>
           </div>
           <div class="mb-2 relative w-full flex flex-row">
               <div class="box-border transition-all ease-in-out">
                   <div>
                    <h2 class="text-[20px] text-[#2953b1] leading-[25px] mt-0 mb-0 clear-both font-semibold font-[Open Sans] m-0 text-left">
                        <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-recirculacion-y-climatizacion/bombas-centrifugas-monobloc-n-%e2%89%88-1450-1-min-nm4-nms4') }}" class="text-[#007bff] no-underline bg-transparent">
                            <span class="font-roboto font-semibold text-[#043e81] border-[#6ec1e4] inline-flex border-none">Bomba NM4, NMS4</span>
                        </a>
                    </h2>                    
                   </div>
               </div>
           </div>
           <div class="text-[#7a7a7a] font-roboto font-normal mb-2 text-[12px] relative w-full flex flex-row h-10">
               <div class="box-border m-0 p-0 transition-all ease-in-out">
                   <div>
                       <p class="text-[#666666] leading-[21.6px] mb-2 mt-0">Bombas centrífugas monobloc n ≈ 1450 1/min.</p>
                   </div>
               </div>
           </div>
           <div class="relative w-full text-left flex flex-row">
               <div class="box-border m-0 transition-all ease-in-out">
                   <div>
                       <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-recirculacion-y-climatizacion/bombas-centrifugas-monobloc-n-%e2%89%88-1450-1-min-nm4-nms4') }}" class="text-white no-underline bg-[#043e81] box-border font-roboto font-medium text-[18px] py-2.5 px-3 rounded-[5px] inline-block leading-[18px] text-center transition-all ease-in-out w-auto">
                           <span class="flex justify-center">
                               <span class="mr-1 order-5 flex-grow-0">
                                   <i class="fas fa-plus text-white py-3"></i>
                               </span>
                               <span class="flex-grow-1 order-10 block py-3 px-8">MÁS INFORMACIÓN</span>
                           </span>
                       </a>
                   </div>
               </div>
           </div>
       </div>


 <!-- Bomba 4 -->
 <div class="box-border p-1 lg:m-0 mx-auto flex relative w-full lg:w-1/3 flex-wrap content-start">
    <div class="box-border mb-1 overflow-hidden relative w-full flex flex-row flex-nowrap">
        <div class="box-border transition-all ease-in-out group">
            <div class="box-border block relative z-10 overflow-hidden text-center">
                <picture loading="lazy" decoding="async" title="Bombas Calpeda - Maquinaria y equipos (OEM) 4" class="box-border">
                    <source type="image/webp" srcset="/img/N4-Bombas-centrigugas-de-aspiracion-axial-seguun-norma-europea-EN-733-1.png.webp 300w" sizes="(max-width: 300px) 100vw, 300px" class="box-border" />
                    <img loading="lazy" decoding="async" width="300" height="490" src="/img/N4-Bombas-centrigugas-de-aspiracion-axial-seguun-norma-europea-EN-733-1.png" alt="Bomba axial de bronce en cantiliver." srcset="/img/N4-Bombas-centrigugas-de-aspiracion-axial-seguun-norma-europea-EN-733-1.png 300w, /img/N4-Bombas-centrigugas-de-aspiracion-axial-seguun-norma-europea-EN-733-1-184x300.png 184w" sizes="(max-width: 300px) 100vw, 300px" class="max-w-full h-auto align-middle border-none p-0 m-0 transition-transform ease-in-out transform group-hover:translate-x-2" />
                </picture>
            </div>
        </div>
    </div>
    <div class="mb-2 relative w-full flex flex-row">
        <div class="box-border transition-all ease-in-out">
            <div>
                <h2 class="text-[20px] text-[#2953b1] leading-[25px] mt-0 mb-0 clear-both font-semibold font-[Open Sans] m-0 text-left">
                    <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-recirculacion-y-climatizacion/bombas-centrifugas-de-aspiracion-axial-segun-norma-europea-en-733-n-n4') }}" class="text-[#007bff] no-underline bg-transparent">
                        <span class="font-roboto font-semibold text-[#043e81] border-[#6ec1e4] inline-flex border-none">Bomba N, N4</span>
                    </a>
                </h2>                
            </div>
        </div>
    </div>
    <div class="text-[#7a7a7a] font-roboto font-normal mb-2 text-[12px] relative w-full flex flex-row h-10">
        <div class="box-border m-0 p-0 transition-all ease-in-out">
            <div>
                <p class="text-[#666666] leading-[21.6px] mb-2 mt-0">Bombas centrífugas de aspiración axial según norma europea EN 733</p>
            </div>
        </div>
    </div>
    <div class="relative w-full text-left flex flex-row">
        <div class="box-border m-0 transition-all ease-in-out">
            <div>
                <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-recirculacion-y-climatizacion/bombas-centrifugas-de-aspiracion-axial-segun-norma-europea-en-733-n-n4') }}" class="text-white no-underline bg-[#043e81] box-border font-roboto font-medium text-[18px] py-2.5 px-3 rounded-[5px] inline-block leading-[18px] text-center transition-all ease-in-out w-auto">
                    <span class="flex justify-center">
                        <span class="mr-1 order-5 flex-grow-0">
                            <i class="fas fa-plus text-white py-3"></i>
                        </span>
                        <span class="flex-grow-1 order-10 block py-3 px-8">MÁS INFORMACIÓN</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Bomba 5 -->
<div class="box-border p-1 lg:m-0 mx-auto flex relative w-full lg:w-1/3 flex-wrap content-start">
    <div class="box-border mb-1 overflow-hidden relative w-full flex flex-row flex-nowrap">
        <div class="box-border transition-all ease-in-out group">
            <div class="box-border block relative z-10 overflow-hidden text-center">
                <picture loading="lazy" decoding="async" title="Bombas Calpeda - Maquinaria y equipos (OEM) 5" class="box-border">
                    <source type="image/webp" srcset="/img/Bombas-in-line-nr-nr4-1.png.webp 300w" sizes="(max-width: 300px) 100vw, 300px" class="box-border" />
                    <img loading="lazy" decoding="async" width="300" height="490" src="/img/Bombas-in-line-nr-nr4-1.png" alt="Bomba vertical en linea SS 316." srcset="/img/Bombas-in-line-nr-nr4-1.png 300w, /img/Bombas-in-line-nr-nr4-1-184x300.png 184w" sizes="(max-width: 300px) 100vw, 300px" class="max-w-full h-auto align-middle border-none p-0 m-0 transition-transform ease-in-out transform group-hover:translate-x-2" />
                </picture>
            </div>
        </div>
    </div>
    <div class="mb-2 relative w-full flex flex-row">
        <div class="box-border transition-all ease-in-out">
            <div>
                <h2 class="text-[20px] text-[#2953b1] leading-[25px] mt-0 mb-0 clear-both font-semibold font-[Open Sans] m-0 text-left">
                    <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-recirculacion-y-climatizacion/bombas-in-line-n-2900-1-min-n-1450-1-min-nr-nr4') }}" class="text-[#007bff] no-underline bg-transparent">
                        <span class="font-roboto font-semibold text-[#043e81] border-[#6ec1e4] inline-flex border-none">Bomba NR, NR4</span>
                    </a>
                </h2>                
            </div>
        </div>
    </div>
    <div class="text-[#7a7a7a] font-roboto font-normal mb-2 text-[12px] relative w-full flex flex-row h-10">
        <div class="box-border m-0 p-0 transition-all ease-in-out">
            <div>
                <p class="text-[#666666] leading-[21.6px] mb-2 mt-0">Bombas in-line. n ≈ 2900 1/min; n ≈ 1450 1/min</p>
            </div>
        </div>
    </div>
    <div class="relative w-full text-left flex flex-row">
        <div class="box-border m-0 transition-all ease-in-out">
            <div>
                <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-recirculacion-y-climatizacion/bombas-in-line-n-2900-1-min-n-1450-1-min-nr-nr4') }}" class="text-white no-underline bg-[#043e81] box-border font-roboto font-medium text-[18px] py-2.5 px-3 rounded-[5px] inline-block leading-[18px] text-center transition-all ease-in-out w-auto">
                    <span class="flex justify-center">
                        <span class="mr-1 order-5 flex-grow-0">
                            <i class="fas fa-plus text-white py-3"></i>
                        </span>
                        <span class="flex-grow-1 order-10 block py-3 px-8">MÁS INFORMACIÓN</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Bomba 6 -->
<div class="box-border p-1 lg:m-0 mx-auto flex relative w-full lg:w-1/3 flex-wrap content-start">
    <div class="box-border mb-1 overflow-hidden relative w-full flex flex-row flex-nowrap">
        <div class="box-border transition-all ease-in-out group">
            <div class="box-border block relative z-10 overflow-hidden text-center">
                <picture loading="lazy" decoding="async" title="Bombas Calpeda - Maquinaria y equipos (OEM) 6" class="box-border">
                    <source type="image/webp" srcset="/img/Bombamxh-calpeda.png.webp 300w, /img/Bombamxh-calpeda-184x300.png.webp 184w" sizes="(max-width: 300px) 100vw, 300px" class="box-border" />
                    <img loading="lazy" decoding="async" width="300" height="490" src="/img/Bombamxh-calpeda.png" alt="Bomba Monobloc en SS 304." srcset="/img/Bombamxh-calpeda.png 300w, /img/Bombamxh-calpeda-184x300.png 184w" sizes="(max-width: 300px) 100vw, 300px" class="max-w-full h-auto align-middle border-none p-0 m-0 transition-transform ease-in-out transform group-hover:translate-x-2" />
                </picture>
            </div>
        </div>
    </div>
    <div class="mb-2 relative w-full flex flex-row">
        <div class="box-border transition-all ease-in-out">
            <div>
                <h2 class="text-[20px] text-[#2953b1] leading-[25px] mt-0 mb-0 clear-both font-semibold font-[Open Sans] m-0 text-left">
                    <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-presurizacion/bombas-multicelulares-horizontales-monobloc-de-acero-inoxidable-mxh') }}" class="text-[#007bff] no-underline bg-transparent">
                        <span class="font-roboto font-semibold text-[#043e81] border-[#6ec1e4] inline-flex border-none">Bomba MXH</span>
                    </a>
                </h2>                
            </div>
        </div>
    </div>
    <div class="text-[#7a7a7a] font-roboto font-normal mb-2 text-[12px] relative w-full flex flex-row h-10">
        <div class="box-border m-0 p-0 transition-all ease-in-out">
            <div>
                <p class="text-[#666666] leading-[21.6px] mb-2 mt-0">Bombas multicelulares horizontales monobloc de acero inoxidable</p>
            </div>
        </div>
    </div>
    <div class="relative w-full text-left flex flex-row">
        <div class="box-border m-0 transition-all ease-in-out">
            <div>
                <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-presurizacion/bombas-multicelulares-horizontales-monobloc-de-acero-inoxidable-mxh') }}" class="text-white no-underline bg-[#043e81] box-border font-roboto font-medium text-[18px] py-2.5 px-3 rounded-[5px] inline-block leading-[18px] text-center transition-all ease-in-out w-auto">
                    <span class="flex justify-center">
                        <span class="mr-1 order-5 flex-grow-0">
                            <i class="fas fa-plus text-white py-3"></i>
                        </span>
                        <span class="flex-grow-1 order-10 block py-3 px-8">MÁS INFORMACIÓN</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>



  <!-- Bomba 7 -->
  <div class="box-border p-1 lg:m-0 mx-auto flex relative w-full lg:w-1/3 flex-wrap content-start">
    <div class="box-border mb-1 overflow-hidden relative w-full flex flex-row flex-nowrap">
        <div class="box-border transition-all ease-in-out group">
            <div class="box-border block relative z-10 overflow-hidden text-center">
                <picture class="block">
                    <source type="image/webp" srcset="/img/NC3-Bombas-circulantes-de-tres-velocidades-con-puertos-roscados.png.webp 300w" sizes="(max-width: 300px) 100vw, 300px" />
                    <img loading="lazy" decoding="async" width="300" height="490" src="/img/NC3-Bombas-circulantes-de-tres-velocidades-con-puertos-roscados.png" alt="NC3 Bombas circulantes de tres velocidades con puertos roscados" srcset="https://bombasellos.com.mx/wp-content/uploads/2020/05/NC3-Bombas-circulantes-de-tres-velocidades-con-puertos-roscados.png 300w, https://bombasellos.com.mx/wp-content/uploads/2020/05/NC3-Bombas-circulantes-de-tres-velocidades-con-puertos-roscados-184x300.png 184w" class="w-[calc(100%+20px)] h-auto mx-auto" />
                </picture>
            </div>
        </div>
    </div>
    <div class="mb-2 relative w-full flex flex-row">
        <div class="box-border transition-all ease-in-out">
            <div>
                <h2 class="text-[20px] text-[#2953b1] leading-[25px] mt-0 mb-0 clear-both font-semibold font-[Open Sans] m-0 text-left">
                    <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-recirculacion-y-climatizacion/bombas-circulantes-de-tres-velocidades-con-puertos-roscados-nc3') }}" class="text-[#007bff] no-underline bg-transparent">
                        <span class="font-roboto font-semibold text-[#043e81] border-[#6ec1e4] inline-flex border-none">Bomba NC3</span>
                    </a>
                </h2>                
            </div>
        </div>
    </div>
    <div class="text-[#7a7a7a] font-roboto font-normal mb-2 text-[12px] relative w-full flex flex-row h-10">
        <div class="box-border m-0 p-0 transition-all ease-in-out">
            <div>
                <p class="text-[#666666] leading-[21.6px] mb-2 mt-0">Bombas circulantes de tres velocidades con puertos roscados</p>
            </div>
        </div>
    </div>
    <div class="relative w-full text-left flex flex-row">
        <div class="box-border m-0 transition-all ease-in-out">
            <div>
                <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-recirculacion-y-climatizacion/bombas-circulantes-de-tres-velocidades-con-puertos-roscados-nc3') }}" class="text-white no-underline bg-[#043e81] box-border font-roboto font-medium text-[18px] py-2.5 px-3 rounded-[5px] inline-block leading-[18px] text-center transition-all ease-in-out w-auto">
                    <span class="flex justify-center">
                        <span class="mr-1 order-5 flex-grow-0">
                            <i class="fas fa-plus text-white py-3"></i>
                        </span>
                        <span class="flex-grow-1 order-10 block py-3 px-8">MÁS INFORMACIÓN</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Bomba 8 -->
<div class="box-border p-1 lg:m-0 mx-auto flex relative w-full lg:w-1/3 flex-wrap content-start">
    <div class="box-border mb-1 overflow-hidden relative w-full flex flex-row flex-nowrap">
        <div class="box-border transition-all ease-in-out group">
            <div class="box-border block relative z-10 overflow-hidden text-center">
                <picture loading="lazy" decoding="async" title="Bombas Calpeda - Maquinaria y equipos (OEM) 8" class="box-border">
                    <source type="image/webp" srcset="/img/Bombas-centrifugas-con-rodete-abierto-C-1.png.webp 300w" sizes="(max-width: 300px) 100vw, 300px" class="box-border" />
                    <img loading="lazy" decoding="async" width="300" height="490" src="/img/Bombas-centrifugas-con-rodete-abierto-C-1.png" alt="Bomba de impulsor vortex." srcset="/img/Bombas-centrifugas-con-rodete-abierto-C-1.png 300w, /img/Bombas-centrifugas-con-rodete-abierto-C-1-184x300.png 184w" sizes="(max-width: 300px) 100vw, 300px" class="max-w-full h-auto align-middle border-none p-0 m-0 transition-transform ease-in-out transform group-hover:translate-x-2" />
                </picture>
            </div>
        </div>
    </div>
    <div class="mb-2 relative w-full flex flex-row">
        <div class="box-border transition-all ease-in-out">
            <div>
                <h2 class="text-[20px] text-[#2953b1] leading-[25px] mt-0 mb-0 clear-both font-semibold font-[Open Sans] m-0 text-left">
                    <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-recirculacion-y-climatizacion/bombas-centrifugas-con-rodete-abierto-c') }}" class="text-[#007bff] no-underline bg-transparent">
                        <span class="font-roboto font-semibold text-[#043e81] border-[#6ec1e4] inline-flex border-none">Bomba C</span>
                    </a>
                </h2>                
            </div>
        </div>
    </div>
    <div class="text-[#7a7a7a] font-roboto font-normal mb-2 text-[12px] relative w-full flex flex-row h-10">
        <div class="box-border m-0 p-0 transition-all ease-in-out">
            <div>
                <p class="text-[#666666] leading-[21.6px] mb-2 mt-0">Bombas centrifugas con rodete abierto</p>
            </div>
        </div>
    </div>
    <div class="relative w-full text-left flex flex-row">
        <div class="box-border m-0 transition-all ease-in-out">
            <div>
                <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-recirculacion-y-climatizacion/bombas-centrifugas-con-rodete-abierto-c') }}" class="text-white no-underline bg-[#043e81] box-border font-roboto font-medium text-[18px] py-2.5 px-3 rounded-[5px] inline-block leading-[18px] text-center transition-all ease-in-out w-auto">
                    <span class="flex justify-center">
                        <span class="mr-1 order-5 flex-grow-0">
                            <i class="fas fa-plus text-white py-3"></i>
                        </span>
                        <span class="flex-grow-1 order-10 block py-3 px-8">MÁS INFORMACIÓN</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Bomba 9 -->
<div class="box-border p-1 lg:m-0 mx-auto flex relative w-full lg:w-1/3 flex-wrap content-start">
    <div class="box-border mb-1 overflow-hidden relative w-full flex flex-row flex-nowrap">
        <div class="box-border transition-all ease-in-out group">
            <div class="box-border block relative z-10 overflow-hidden text-center">
                <picture loading="lazy" decoding="async" title="Bombas Calpeda - Maquinaria y equipos (OEM) 9" class="box-border">
                    <source type="image/webp" srcset="/img/Bombas-con-rodete-periferico-T-TP-1.png.webp 300w" sizes="(max-width: 300px) 100vw, 300px" class="box-border" />
                    <img loading="lazy" decoding="async" width="300" height="490" src="/img/Bombas-con-rodete-periferico-T-TP-1.png" alt="Bomba de alimentacion a calderas." srcset="/img/Bombas-con-rodete-periferico-T-TP-1.png 300w, /img/Bombas-con-rodete-periferico-T-TP-1-184x300.png 184w" sizes="(max-width: 300px) 100vw, 300px" class="max-w-full h-auto align-middle border-none p-0 m-0 transition-transform ease-in-out transform group-hover:translate-x-2" />
                </picture>
            </div>
        </div>
    </div>
    <div class="mb-2 relative w-full flex flex-row">
        <div class="box-border transition-all ease-in-out">
            <div>
                <h2 class="text-[20px] text-[#2953b1] leading-[25px] mt-0 mb-0 clear-both font-semibold font-[Open Sans] m-0 text-left">
                    <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-recirculacion-y-climatizacion/bombas-con-rodete-periferico-t-tp') }}" class="text-[#007bff] no-underline bg-transparent">
                        <span class="font-roboto font-semibold text-[#043e81] border-[#6ec1e4] inline-flex border-none">Bomba T, TP</span>
                    </a>
                </h2>                
            </div>
        </div>
    </div>
    <div class="text-[#7a7a7a] font-roboto font-normal mb-2 text-[12px] relative w-full flex flex-row h-10">
        <div class="box-border m-0 p-0 transition-all ease-in-out">
            <div>
                <p class="text-[#666666] leading-[21.6px] mb-2 mt-0">Bombas con rodete periférico</p>
            </div>
        </div>
    </div>
    <div class="relative w-full text-left flex flex-row">
        <div class="box-border m-0 transition-all ease-in-out">
            <div>
                <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-recirculacion-y-climatizacion/bombas-con-rodete-periferico-t-tp') }}" class="text-white no-underline bg-[#043e81] box-border font-roboto font-medium text-[18px] py-2.5 px-3 rounded-[5px] inline-block leading-[18px] text-center transition-all ease-in-out w-auto">
                    <span class="flex justify-center">
                        <span class="mr-1 order-5 flex-grow-0">
                            <i class="fas fa-plus text-white py-3"></i>
                        </span>
                        <span class="flex-grow-1 order-10 block py-3 px-8">MÁS INFORMACIÓN</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
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
    <h2 class="text-[41px] text-center font-semibold mb-4">¿Necesitas más información?</h2>
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