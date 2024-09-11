@extends('layouts.app')

@section('title', 'NCD3 -Bombas gemelas circulantes de tres velocidades CALPEDA')
@section('description', 'Bombas gemelas circulantes de tres velocidades NCD3 - CALPEDA. Entrega Inmediata. 
Distribuidor y Precio Mayorista Mx. Mejor precio. Refacciones y Mantenimiento')
<style>
    .swiper-container {
      width: 350px; /* Define the width of the carousel */
      height: 350px; /* Define la altura del carousel */
    }
</style>


@section('structured-data')
<!-- Datos estructurados JSON-LD para el producto -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "NCD3 - Bombas gemelas circulantes de tres velocidades CALPEDA",
  "description": "La bomba gemela circulante NCD3 de tres velocidades de Calpeda está diseñada para sistemas de calefacción y aire acondicionado, ofreciendo control eficiente y durabilidad superior en instalaciones industriales y domésticas.",
  "brand": {
    "@type": "Brand",
    "name": "Calpeda"
  },
  "sku": "NCD3-001",
  "mpn": "NCD3-001",
  "category": "Centrifugal Pumps",
  "image": [
    "/img/NCD3-Bombas-gemelas-circulantes-de-tres-velocidades-con-puertos-roscados.png.webp"
  ],
  "offers": {
    "@type": "Offer",
    "url": "https://bombasellos.com.mx/bombas-gemelas-ncd3",
    "priceCurrency": "MXN",
    "price": "40000",
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
        "areaServed": "MX",
        "availableLanguage": ["Español", "English"]
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
        "name": "Carlos González"
      },
      "reviewBody": "La bomba NCD3 es excepcional, con un rendimiento superior y un bajo consumo energético."
    },
    {
      "@type": "Review",
      "reviewRating": {
        "@type": "Rating",
        "ratingValue": "4"
      },
      "author": {
        "@type": "Person",
        "name": "Laura Sánchez"
      },
      "reviewBody": "Funciona bien, pero la instalación fue algo complicada en mi sistema de calefacción."
    }
  ],
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://bombasellos.com.mx/bombas-gemelas-ncd3"
  }
}
</script>

<!-- Datos estructurados Breadcrumb -->
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
      "item": "https://bombasellos.com.mx/bombas-calpeda/"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "NCD3",
      "item": "https://bombasellos.com.mx/bombas-gemelas-ncd3"
    }
  ]
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
      "name": "¿Qué es la bomba NCD3 de Calpeda?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "La bomba NCD3 es una bomba gemela de tres velocidades de Calpeda diseñada para sistemas de calefacción y refrigeración, optimizando el consumo energético y ofreciendo alta durabilidad."
      }
    },
    {
      "@type": "Question",
      "name": "¿Cuáles son las características de la bomba NCD3?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "La bomba NCD3 cuenta con un motor robusto de tres velocidades, puertos roscados para una instalación fácil y eficiente, y está diseñada para sistemas de calefacción industriales y domésticos."
      }
    },
    {
      "@type": "Question",
      "name": "¿Cómo puedo adquirir la bomba NCD3?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Puedes comprar la bomba NCD3 en Bombas Sellos y Hules Industriales S.A. de C.V., con opciones de instalación y mantenimiento disponibles en toda la República Mexicana."
      }
    }
  ]
}
</script>

<!-- Datos estructurados del servicio -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "Venta, instalación y mantenimiento de bombas NCD3",
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
  "description": "Ofrecemos venta, instalación y mantenimiento especializado de la bomba NCD3. Somos distribuidores autorizados de Calpeda en México."
}
</script>
@endsection





@section('contenido')
<div class="box-border p-2.5 flex relative w-full flex-wrap content-start">
    <!-- Spacer -->
    <div class="box-border mb-5 w-full flex-row flex-nowrap">
        <div class="transition-all box-border">
            <div class="box-border lg:h-[76px]"></div>
        </div>
    </div>
    <!-- Heading -->
    <div class="box-border w-full flex-row flex-nowrap">
        <div class="transition-all box-border">
            <h2 class="text-[19px] leading-[19px] mt-0 mb-0 font-semibold font-roboto text-black clear-both lg:ml-[120.5px]">
                ELECTROBOMBAS DE CIRCULACIÓN Y EN LÍNEA
            </h2>
        </div>
    </div>
</div>

<!-- Contenido e imágenes -->
<div class="lg:mt-[40px] mt-[20px] box-border p-2.5 flex flex-col relative w-full content-start mx-auto lg:w-[90%] lg:flex-row lg:ml-[120.5px]">
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
                                            <figure class="m-0 block box-border leading-[23px]">
                                                <picture decoding="async" title="NCD3 - Bombas gemelas circulantes de tres velocidades con puertos roscados" class="box-border">
                                                    <source type="image/webp" srcset="/img/NCD3-Bombas-gemelas-circulantes-de-tres-velocidades-con-puertos-roscados.png.webp" />
                                                    <img alt="NCD3---Bombas-gemelas-circulantes-de-tres-velocidades-con-puertos-roscados" decoding="async" src="/img/NCD3-Bombas-gemelas-circulantes-de-tres-velocidades-con-puertos-roscados.png" class="max-w-full h-auto align-middle border-none" />
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
                                                    <p class="leading-[23px] mb-8 mt-0 text-[#666]">
                                                        <strong class="font-semibold">Construcción</strong><br />
                                                        Carcasa de la bomba con conexiones de succión y suministro con el mismo diámetro y en el mismo eje (en línea).<br />
                                                        Uniones de latón o hierro fundido bajo pedido.
                                                    </p>
                                                    <p class="leading-[23px] mb-8 mt-0 text-[#666]">
                                                        <strong class="font-semibold">Aplicaciones</strong><br />
                                                        – Para líquidos limpios, sin abrasivos, que no son agresivos para los materiales de la bomba.<br />
                                                        – Sistemas de calefacción civil e industrial.
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
                                                NCD3</div>
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
                                            <div class="font-roboto font-semibold text-blue-800 border-cyan-400 inline-flex text-lg">Bombas gemelas circulantes de tres velocidades con puertos roscados                                          </div>
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

                            <div class="box-border transition-all duration-300 bg-transparent border-none border-radius-none shadow-none mt-[80px]  lg:mt-[280px] mx-0 p-2.5 flex relative w-full flex-wrap content-start">
                                <div class="box-border p-2.5 flex relative w-full flex-wrap content-start">
                                    <div class="relative w-full flex flex-wrap items-start">
                                        <div class="text-[#7a7a7a] font-roboto font-normal text-xs mb-5">
                                            <div class="transition-all duration-300">
                                                <p class="text-[#666] leading-[1.8] mb-2 mt-0">
                                                    <strong class="font-semibold">Campo de aplicaciones</strong>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="relative w-full flex justify-center">
                                        <div class="transition-all duration-300 ease-in-out transform">
                                           
                                                <img fetchpriority="high" decoding="async" width="1024" height="854" src="/img/NCD3_curve.png.webp" alt="NCD3 curve" srcset="/img/NCD3_curve.png.webp 1024w, /img/NCD3_curve.png.webp 300w, /img/NCD3_curve.png.webp 768w, /img/NCD3_curve.png.webp 1097w" sizes="(max-width: 1024px) 100vw, 1024px" title="Bombas gemelas circulantes de tres velocidades con puertos roscados NCD3" class="max-w-full h-auto align-middle border-none inline-block" />
                                           
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