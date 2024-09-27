@extends('layouts.app')

@section('title', 'VARIOMAT Sistema velocidad variable dirigido por inversor')
@section('description', 'VARIOMAT Sistema de velocidad variable dirigido por inversor CALPEDA. Entrega Inmediata. 
Distribuidor Mayorista Mx. Mejor precio. Refacciones y Mantenimiento.')
<style>
    .swiper-container {
      width: 350px; /* Define the width of the carousel */
      height: 350px; /* Define la altura del carousel */
    }
</style>


@section('structured-data')
<!-- Schema JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "VARIOMAT Sistema velocidad variable dirigido por inversor",
  "description": "VARIOMAT Sistema de velocidad variable dirigido por inversor CALPEDA. Ideal para aplicaciones domésticas, civiles e industriales. Protección avanzada y fácil instalación.",
  "brand": {
    "@type": "Brand",
    "name": "Calpeda"
  },
  "sku": "VARIOMAT-001",
  "mpn": "VARIOMAT-001",
  "category": "Variable Speed Pump Systems",
  "image": [
    "/img/EASYMAT-Sistema-de-velocidad-variable-dirigido-por-Inversor.png.webp"
  ],
  "offers": {
    "@type": "Offer",
    "url": "https://bombasellos.com.mx/variomat-sistema-velocidad-variable-dirigido-por-inversor",
    "priceCurrency": "MXN",
    "price": "45000",
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
        "name": "Eduardo Fernández"
      },
      "reviewBody": "Sistema eficiente y confiable para el control de presión en instalaciones industriales."
    },
    {
      "@type": "Review",
      "reviewRating": {
        "@type": "Rating",
        "ratingValue": "4"
      },
      "author": {
        "@type": "Person",
        "name": "Ana Pérez"
      },
      "reviewBody": "Funciona muy bien, aunque la instalación requiere de un poco más de espacio."
    }
  ],
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://bombasellos.com.mx/variomat-sistema-velocidad-variable-dirigido-por-inversor"
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
      "name": "VARIOMAT Sistema velocidad variable dirigido por inversor",
      "item": "https://bombasellos.com.mx/variomat-sistema-velocidad-variable-dirigido-por-inversor"
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
      "name": "¿Qué es el VARIOMAT de Calpeda?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "El VARIOMAT es un sistema de velocidad variable dirigido por inversor diseñado para controlar la presión en instalaciones domésticas e industriales, ofreciendo alta eficiencia y protección avanzada."
      }
    },
    {
      "@type": "Question",
      "name": "¿Cuáles son las principales características del sistema VARIOMAT?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "El sistema VARIOMAT está equipado con un sensor de presión, boca de entrada y salida intercambiables, y protección contra sobrecorriente, funcionamiento en seco, y sobretensión. Es ideal para aplicaciones que requieren un control preciso de la presión."
      }
    },
    {
      "@type": "Question",
      "name": "¿Dónde puedo comprar el VARIOMAT?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "El sistema VARIOMAT está disponible en BSH y en sucursales en todo México. Contamos con servicio de venta y mantenimiento especializado."
      }
    }
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "Venta y mantenimiento de sistemas VARIOMAT",
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
  "description": "Ofrecemos venta, instalación y mantenimiento especializado de sistemas VARIOMAT de Calpeda. Distribuidor mayorista con soporte técnico experto en México."
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
            <a href="{{ url('/bombas/sellos-mecanicos-calpeda') }}" class="text-white no-underline bg-[#610001] box-border font-roboto font-medium inline-block leading-[15px] text-[15px] py-3 px-6 rounded-[3px] text-center transition-all duration-300 ease-in-out shadow-none">
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
                                                <picture decoding="async" title="Variomat Sistema de velocidad variable">
                                                    <source type="image/webp" srcset="/img/EASYMAT-Sistema-de-velocidad-variable-dirigido-por-Inversor.png.webp" /> 
                                                    <img decoding="async" src="/img/EASYMAT-Sistema-de-velocidad-variable-dirigido-por-Inversor.png.webp" alt="Variomat Sistema de velocidad variable" class="max-w-full h-auto align-middle border-none shadow-none" />
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
                                                    <p class="leading-[23px] mb-[32px] mt-0 text-gray-600">
                                                        <strong class="font-bold">Fabricación</strong><br />
                                                        Sistema de velocidad variable dirigido por Inversor para el control de la presión de utilización en las instalaciones domésticas y residenciales. Fácil de ensamblar y de dimensiones compactas. Variomat 2 está equipado con un sensor de presión. Boca de entrada y salida intercambiables y disponibles de G 1 1/4 y G 1 1/2.
                                                    </p>
                                                    <p class="leading-[23px] mb-[32px] mt-0 text-gray-600">
                                                        <strong class="font-bold">Aplicaciones</strong>
                                                    </p>
                                                    <p class="leading-[23px] mb-[32px] mt-0 text-gray-600">
                                                        Inversor para el control automático de bombas de abastecimiento y aumento de presión del agua. El sistema mantiene constante la presión al interior de la maquinaria y manda el arranque y la parada de la bomba según la demanda del usuario. Protege la bomba:<br />
                                                        - contra funcionamiento en seco<br />
                                                        - contra funcionamiento con boca cerrada<br />
                                                        - contra sobrecorriente en el motor<br />
                                                        - contra sobretensión o baja tensión en la red de alimentación
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
                                            <div class="font-roboto font-semibold text-blue-800 border-cyan-400 inline-flex text-lg">
                                                VARIOMAT</div>
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
                                            <div class="font-roboto font-semibold text-blue-800 border-cyan-400 inline-flex text-lg">Sistema presurizado con control de presión integrado (bomba autocebante)
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
                                                            <a href="https://www.calpeda.de/media/pdf/df/7e/ff/41_VARIOMAT_CAT_2016_AM60Hz.pdf" target="_blank" rel="noopener" data-type="pdf" class="text-[#007bff] no-underline box-shadow-none">Descargar<br />Catálogo 60 Hz</a>
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
                                                            <a href="https://calpeda.de/media/pdf/51/c8/fb/IST_VARIOMAT2_P560_02_01_2019.pdf" target="_blank" rel="noopener" data-type="pdf" class="text-[#007bff] no-underline box-shadow-none">Descargar
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


@endsection