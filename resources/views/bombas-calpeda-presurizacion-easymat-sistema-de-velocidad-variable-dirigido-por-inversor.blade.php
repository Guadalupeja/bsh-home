@extends('layouts.app')

@section('title', 'EASYMAT Sistema de velocidad variable dirigido por Inversor')
@section('description', 'EASYMAT Sistema de velocidad variable dirigido por Inversor CALPEDA. Entrega Inmediata. 
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
      "name": "EASYMAT Sistema de velocidad variable dirigido por Inversor",
      "brand": {
        "@type": "Brand",
        "name": "Calpeda"
      },
      "description": "Sistema de velocidad variable dirigido por Inversor para el control de la presión en instalaciones domésticas y residenciales. Disponible con entrega inmediata y soporte técnico especializado.",
      "sku": "EASYMAT-001",
      "mpn": "EASYMAT-001",
      "category": "Control Systems",
      "image": [
        "/img/EASYMAT-Sistema-de-velocidad-variable-dirigido-por-Inversor.png.webp"
      ],
      "offers": {
        "@type": "Offer",
        "url": "https://bombasellos.com.mx/easymat-sistema-velocidad-variable-inversor",
        "priceCurrency": "MXN",
        "price": "75000",
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
        "reviewCount": "45"
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
            "name": "Ana Pérez"
          },
          "reviewBody": "Este sistema ha mejorado significativamente la eficiencia de nuestras bombas. Fácil de instalar y muy confiable."
        },
        {
          "@type": "Review",
          "reviewRating": {
            "@type": "Rating",
            "ratingValue": "4"
          },
          "author": {
            "@type": "Person",
            "name": "José García"
          },
          "reviewBody": "Funciona muy bien, aunque fue necesario ajustar algunos parámetros técnicos."
        }
      ],
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://bombasellos.com.mx/easymat-sistema-velocidad-variable-inversor"
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
          "name": "Sistemas de Control",
          "item": "https://bombasellos.com.mx/sistemas-control/"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "EASYMAT Sistema de velocidad variable",
          "item": "https://bombasellos.com.mx/easymat-sistema-velocidad-variable-inversor"
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
          "name": "¿Qué es el EASYMAT y para qué se utiliza?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "EASYMAT es un sistema de velocidad variable dirigido por inversor que controla la presión de utilización en instalaciones domésticas y residenciales, manteniendo la presión constante y protegiendo la bomba de posibles daños."
          }
        },
        {
          "@type": "Question",
          "name": "¿Cuáles son las ventajas de utilizar el EASYMAT?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "El EASYMAT protege la bomba contra el funcionamiento en seco, funcionamiento con boca cerrada, sobrecorriente en el motor, y fluctuaciones de tensión, asegurando un funcionamiento eficiente y prolongando la vida útil de la bomba."
          }
        },
        {
          "@type": "Question",
          "name": "¿Dónde puedo comprar el sistema EASYMAT?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Puedes adquirir el sistema EASYMAT directamente en nuestro sitio web o en nuestras sucursales en todo México, con disponibilidad inmediata y soporte técnico especializado."
          }
        }
      ]
    }
    </script>
    
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "serviceType": "Venta y distribución de sistemas de control de velocidad variable",
      "provider": {
        "@type": "Organization",
        "name": "BSH (Bombas Sellos y Hules Industriales S.A. de C.V.)",
        "contactPoint": {
          "@type": "ContactPoint",
          "contactType": "Ventas",
          "telephone": "+52-55-5752-1715",
          "email": "bsh@bombasellos.com.mx",
          "areaServed": "MX",
          "availableLanguage": ["Español", "English"]
        }
      },
      "description": "Ofrecemos una amplia gama de sistemas de control de velocidad variable, como el EASYMAT, ideales para mejorar la eficiencia y protección de bombas en instalaciones domésticas y residenciales."
    }
    </script>
    

@endsection

@section('contenido')

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
                                            

                                            <figure class="m-0 block leading-[27px]">
                                                <picture decoding="async" title="EASYMAT Sistema de velocidad variable dirigido por Inversor">
                                                    <source type="image/webp" srcset="/img/EASYMAT-Sistema-de-velocidad-variable-dirigido-por-Inversor.png.webp" /> 
                                                    <img decoding="async" src="/img/EASYMAT-Sistema-de-velocidad-variable-dirigido-por-Inversor.png" alt="EASYMAT-Sistema-de-velocidad-variable-dirigido-por-Inversor" class="max-w-full h-auto align-middle border-none shadow-none" />
                                                </picture>
                                            </figure>


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
                                                    <p class="text-[#666666] leading-[27px] mb-8 mt-0 font-bold">Ejecución</p>
                                                    <p class="text-[#666666] leading-[27px] mb-8 mt-0">
                                                        Sistema de velocidad variable dirigido por Inversor para el control de la presión de utilización en las instalaciones domésticas y residenciales. Easymat se aplica a la tubería de ida y su sistema de enganche y enfriamiento (patentado) lo renden fácil de ensamblar y de dimensiones compactas. Easymat está equipado con un sensor de presión, unión G 1⁄4 y cable de 1,5 m.
                                                    </p>
                                                    <p class="text-[#666666] leading-[27px] mb-8 mt-0 font-bold">Aplicaciones</p>
                                                    <p class="text-[#666666] leading-[27px] mb-8 mt-0">
                                                        Inversor para el control automático de bombas de abastecimiento y aumento de presión del agua. El sistema mantiene constante la presión al interior de la maquinaria y manda el arranque y la parada de la bomba según la demanda del usuario.
                                                    </p>
                                                    <p class="text-[#666666] leading-[27px] mb-8 mt-0">
                                                        Protege la bomba:
                                                        <br />- contra funcionamiento en seco
                                                        <br />- contra funcionamiento con boca cerrada
                                                        <br />- contra sobrecorriente en el motor
                                                        <br />- contra sobretensión o bajo tensión en la red de alimentación
                                                        <br /><strong>Límites de utilización:</strong>
                                                        <br />EASYMAT MM – tensión en entrada: 1~230V ±10%
                                                        <br />- tensión en salida: 1~230V
                                                        <br />EASYMAT MT – tensión en entrada: 1~230V ±10%
                                                        <br />- tensión en salida: 3~230V
                                                        <br />Frecuencia en entrada: 50-60 Hz
                                                        <br />– Frecuencia en salida: hasta 70 Hz
                                                        <br />- Nivel de protección: IP55
                                                        <br />- Máxima temperatura ambiente: 40 °C
                                                        <br />- Temperatura líquido hasta 50 °C (40°C para 7,5MT, 8,5MM)
                                                        <br />- Máximo caudal: 3 l/min
                                                        <br />- Altitud: no superior a 1000 m, al interior de un cuarto.
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
                                            <div class="font-roboto font-semibold text-blue-800 border-cyan-400 inline-flex text-lg">EASYMAT</div>
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
                                            <div class="font-roboto font-semibold text-blue-800 border-cyan-400 inline-flex text-lg">Sistema de velocidad variable dirigido por Inversor</div>
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
                            <div class="box-border transition-all duration-300 bg-transparent border-none border-radius-none shadow-none my-[80px]  lg:mt-[280px] mx-0 p-2.5 flex relative w-full flex-wrap content-start">
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
                                                            <a href="https://www.calpeda.com/wp-content/uploads/calpeda_prodotti/CATALOGHI_PDF/ES%20-%20Espa%C3%B1ol/DIVISI/EASYMAT_ES.pdf" target="_blank" rel="noopener" data-type="pdf" class="text-[#007bff] no-underline box-shadow-none">Descargar<br />Catálogo 50 Hz</a>
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
                                                            <a href="https://www.calpeda.com/wp-content/uploads/calpeda_prodotti/CATALOGHI_PDF/60Hz%20-%20English_Espa%C3%B1ol/singoli_60Hz/EASYMAT_60Hz2023.pdf" target="_blank" rel="noopener" data-type="pdf" class="text-[#007bff] no-underline box-shadow-none">Descargar
                                                                Catálogo<br/>60 Hz</a>
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
                                                            <a href="https://www.calpeda.com/wp-content/uploads/calpeda_prodotti/ISTRUZIONI/IST%20EASYMAT_P444_Rev1q_06_2021.pdf" target="_blank" rel="noopener" data-type="pdf" class="text-[#007bff] no-underline box-shadow-none">Descargar
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