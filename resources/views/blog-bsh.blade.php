@extends('layouts.app')
@section('title', 'Fichas técnicas, manuales y presentaciones de producto.')
@section('description', 'Descargue gratis manuales de operación, fichas técnicas, presentaciones y cursos de Sellos Hidráulicos Trelleborg, Bombas Calpeda, Wilden y nuestras líneas.')

@section('structured-data')

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Bombas Sellos y Hules Industriales S.A. de C.V.",
  "url": "{{ url('/') }}",
  "logo": "{{ url('img/logo.png') }}",  
  "description": "Comercializadora de equipos y refacciones para el manejo de fluidos, ofreciendo soluciones integrales en los sectores Metal-mecánico, Minería, Oil&Gas e Industria.",
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

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Fichas técnicas, manuales y presentaciones de producto.",
  "description": "Descargue gratis manuales de operación, fichas técnicas, presentaciones y cursos de Sellos Hidráulicos Trelleborg, Bombas Calpeda, Wilden y nuestras líneas.",
  "url": "{{ url('/fichas-tecnicas-manuales-y-presentaciones') }}",
  "mainEntity": {
    "@type": "WebSite",
    "@id": "{{ url('/') }}",
    "potentialAction": {
      "@type": "SearchAction",
      "target": "{{ url('/') }}/?s={search_term_string}",
      "query-input": "required name=search_term_string"
    }
  }
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "¿Qué son los sellos mecánicos Calpeda®?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Los sellos mecánicos Calpeda® son piezas utilizadas para evitar fugas en bombas y sistemas hidráulicos, fabricados con materiales de alta calidad como carburo de silicio."
      }
    },
    {
      "@type": "Question",
      "name": "¿Cómo puedo solicitar asesoría técnica?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Puede solicitar asesoría técnica gratuita en sitio, contactándonos a través de nuestra página de contacto o llamando al +52-55-5752-1715."
      }
    },
    {
      "@type": "Question",
      "name": "¿Qué tipos de servicios de mantenimiento ofrecen?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ofrecemos mantenimiento preventivo y correctivo para sistemas hidráulicos, bombas y otros equipos industriales."
      }
    },
    {
      "@type": "Question",
      "name": "¿Qué beneficios trae la capacitación técnica?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "La capacitación técnica mejora la eficiencia operativa, reduce fallas en los equipos y prolonga la vida útil de los sistemas hidráulicos."
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
      "name": "Fichas técnicas y manuales",
      "item": "https://bombasellos.com.mx/fichas-tecnicas-manuales-y-presentaciones"
    }
  ]
}
</script>
@endsection


@section('contenido')

<section class="relative w-full">
    <div class="max-w-[1190px] mx-auto flex relative">
        <div class="w-full flex flex-wrap">
            <div class="p-2.5 w-full flex flex-wrap">
                <div class="w-full">
                    <div class="transition duration-300 ease-in-out">
                        <div class="w-full p-0 m-0">
                            <ol class="list-none m-0 pr-4 w-auto float-left text-[13px] lg:text-[16px] font-roboto bg-[#edeff0] rounded-md">
                                <li class="inline-block p-[15px] pr-0 mr-[3px] rounded-l-md text-[13px] lg:text-[16px]"> 
                                    <span>
                                        <a href="{{ url('/') }}" class="text-[#337ab7] no-underline">
                                            <i class="fas fa-home mx-[5px]"></i>Home
                                        </a>
                                    </span>
                                    <meta itemprop="position" content="1" />
                                </li>

                                <li class="inline-block pl-1 text-gray-400">/</li>
                                <li class="inline-block pl-1">Media & Tools</li>
                            </ol>
                            <div class="clear-both"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="relative w-full bg-cover bg-center" style="background-image: url('/img/bombas-industriales.jpg');">
    <div class="max-w-[1190px] mx-auto flex relative">
        <div class="w-full flex flex-wrap">
            <div class="p-2.5 w-full flex flex-wrap content-start">
                <!-- Spacer superior -->
                <div class="w-full mb-5">
                    <div class="h-[35px]"></div>
                </div>
                
                <!-- Heading -->
                <div class="w-full text-center mb-5">
                    <h1 class="lg:text-[40px] text-[31px] font-semibold font-roboto text-white leading-[54.5455px]">
                        DESCARGABLES DE TODAS LAS LINEAS DE PRODUCTO
                    </h1>
                    <div class="mt-0 relative flex justify-center">
                        <div class="after:content-[''] after:block after:bg-[#610001] after:w-[100px] after:h-[2px] after:mt-2 mx-auto"></div>
                    </div> 
                </div>
  
                <!-- Spacer inferior -->
                <div class="w-full mb-5">
                    <div class="h-[35px]"></div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="bg-[#f2f2f2] transition-all duration-300">
    <div class="max-w-[1190px] mx-auto flex relative">
        <!-- Columna única -->
        <div class="w-full flex relative">
            <div class="w-full p-2 flex-wrap">
                <!-- Spacer -->
                <div class="w-full h-[120px]"></div>
            </div>
        </div>
    </div>
</section>

<section class="relative block">
    <div class="max-w-[1190px] min-h-[775px] flex mx-auto relative">
        <div class="w-full lg:flex">
            <div class="lg:flex flex-col lg:w-[73.486%] relative min-h-[1px]">
                <div class="w-full relative lg:flex">
                    <div class="lg:flex flex-wrap align-start p-2.5">
                        <section class="w-full relative block">
                            <div class="max-w-[1190px] mx-auto relative flex">
                                <div class="w-full lg:flex">
                                    <div class="lg:flex flex-col lg:w-[48.336%] relative min-h-[1px]">
                                        <div class="flex bg-cover bg-no-repeat transition duration-300 ease-in-out" style="background-image:url('/img/bsh-group.png');">
                                            <div class="flex w-full flex-wrap align-start p-7">
                                                <div class="mb-5 w-full">
                                                    <div class="h-[30px]"></div>
                                                </div>
                                                <div class="mb-5 w-full text-center">
                                                    <h2 class="text-white font-roboto font-semibold text-[20px] leading-[20px]">
                                                        <a href="{{ url('/blog-bsh/presentaciones/presentaciones-por-aplicacion') }}" class="text-white no-underline">Presentaciones</a>
                                                    </h2>
                                                </div>
                                                <div class="mb-5 w-full text-center">
                                                    <a href="https://bombasellos.com.mx/blog-bsh/presentaciones" class="bg-transparent text-white font-roboto font-medium text-[20px] py-[12px] px-[24px] rounded-md transition duration-300">
                                                        <span class="flex justify-center items-center">
                                                            <span class="mr-1">
                                                                <i aria-hidden="true" class="fas fa-info-circle"></i>
                                                            </span>
                                                            <span>Ver más información</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-5 w-full">
                                                    <div class="h-[30px]"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-[2.13%] relative flex min-h-[1px]"></div>
                                    <div class="lg:flex flex-col lg:w-[49.169%] relative min-h-[1px]">
                                        <div class="flex bg-cover bg-no-repeat transition duration-300 ease-in-out" style="background-image:url('/img/bsh-group.png');">
                                            <div class="flex w-full flex-wrap align-start p-7">
                                                <div class="mb-5 w-full">
                                                    <div class="h-[30px]"></div>
                                                </div>
                                                <div class="mb-5 w-full text-center">
                                                    <h2 class="text-white font-roboto font-semibold text-[20px] leading-[20px]">Catálogos del fabricante</h2>
                                                </div>
                                                <div class="mb-5 w-full text-center">
                                                    <a href="#" class="bg-transparent text-white font-roboto font-medium text-[20px] py-[12px] px-[24px] rounded-md transition duration-300">
                                                        <span class="flex justify-center items-center">
                                                            <span class="mr-1">
                                                                <i aria-hidden="true" class="fas fa-info-circle"></i>
                                                            </span>
                                                            <span>Ver más información</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-5 w-full">
                                                    <div class="h-[30px]"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="mb-5 w-full">
                            <div class="h-[10px]"></div>
                        </div>
                        <section class="w-full relative block">
                            <div class="max-w-[1190px] mx-auto relative lg:flex">
                                <div class="w-full lg:flex">
                                    <div class="lg:flex flex-col lg:w-[48.336%] relative min-h-[1px]">
                                        <div class="flex bg-cover bg-no-repeat transition duration-300 ease-in-out" style="background-image:url('/img/bsh-group.png');">
                                            <div class="flex w-full flex-wrap align-start p-7">
                                                <div class="mb-5 w-full">
                                                    <div class="h-[30px]"></div>
                                                </div>
                                                <div class="mb-5 w-full text-center">
                                                    <h2 class="text-white font-roboto font-semibold text-[20px] leading-[20px]">Herramientas de selección</h2>
                                                </div>
                                                <div class="mb-5 w-full text-center">
                                                    <a href="#" class="bg-transparent text-white font-roboto font-medium text-[20px] py-[12px] px-[24px] rounded-md transition duration-300">
                                                        <span class="flex justify-center items-center">
                                                            <span class="mr-1">
                                                                <i aria-hidden="true" class="fas fa-info-circle"></i>
                                                            </span>
                                                            <span>Ver más información</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-5 w-full">
                                                    <div class="h-[30px]"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-[2.13%] relative flex min-h-[1px]"></div>
                                    <div class="lg:flex flex-col lg:w-[49.169%] relative min-h-[1px]">
                                        <div class="flex bg-cover bg-no-repeat transition duration-300 ease-in-out" style="background-image:url('/img/bsh-group.png');">
                                            <div class="flex w-full flex-wrap align-start p-7">
                                                <div class="mb-5 w-full">
                                                    <div class="h-[30px]"></div>
                                                </div>
                                                <div class="mb-5 w-full text-center">
                                                    <h2 class="text-white font-roboto font-semibold text-[20px] leading-[20px]">Videos</h2>
                                                </div>
                                                <div class="mb-5 w-full text-center">
                                                    <a href="#" class="bg-transparent text-white font-roboto font-medium text-[20px] py-[12px] px-[24px] rounded-md transition duration-300">
                                                        <span class="flex justify-center items-center">
                                                            <span class="mr-1">
                                                                <i aria-hidden="true" class="fas fa-info-circle"></i>
                                                            </span>
                                                            <span>Ver más información</span>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="mb-5 w-full">
                                                    <div class="h-[30px]"></div>
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
            <div class="lg:w-[26.514%] relative lg:flex ml-10">
                <div class="flex w-full">
                    <div class="flex flex-col w-full">
                        <div class="lg:text-left text-center text-[#7A7A7A] leading-[40.5px] tracking-[0.6px]">
                            <ul class="list-square pl-4">
                                <h2 class="text-[20px] text-[#2953B1] leading-[25px] font-semibold mb-5">Presentaciones</h2>
                                <li class="mb-2">
                                    <strong><a href="https://bombasellos.com.mx/blog-bsh/presentaciones/" class="text-[#007BFF] no-underline">Presentaciones</a></strong>
                                    <ul class="list-square pl-4"></ul>
                                </li>
                                <li><a href="https://bombasellos.com.mx/blog-bsh/presentaciones/presentaciones-por-aplicacion/" class="text-[#007BFF] no-underline">Por aplicación.</a></li>
                                <li><a href="https://bombasellos.com.mx/blog-bsh/presentaciones/presentaciones-por-segmento/" class="text-[#007BFF] no-underline">Por segmento.</a></li>
                                <li><a href="https://bombasellos.com.mx/blog-bsh/presentaciones/gama-de-producto-y-servicios/" class="text-[#007BFF] no-underline">Por gama de productos.</a></li>
                                <li><a href="https://bombasellos.com.mx/blog-bsh/presentaciones/presentaciones-capacitacion/" class="text-[#007BFF] no-underline">Capacitación.</a></li>
                            </ul>
                            <h2 class="text-[20px] text-[#2953B1] leading-[25px] font-semibold mb-5">Catálogos del fabricante:</h2>
                            <ul class="list-square pl-4">
                                <li><a href="#" class="text-[#007BFF] no-underline">Sellos.</a></li>
                                <li><a href="#" class="text-[#007BFF] no-underline">Bombas.</a></li>
                                <li><a href="#" class="text-[#007BFF] no-underline">Bombas neumáticas.</a></li>
                                <li><a href="#" class="text-[#007BFF] no-underline">Materiales.</a></li>
                            </ul>
                            <h2 class="text-[20px] text-[#2953B1] leading-[25px] font-semibold mb-5">Herramientas de selección.</h2>
                            <h2 class="text-[20px] text-[#2953B1] leading-[25px] font-semibold mb-5">Videos.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="relative block transition-all duration-300 bg-gradient-to-r from-[#610001] to-[#b00204]">
    <div class="max-w-[1190px] mx-auto flex relative">
        <div class="w-full flex">
            <div class="flex flex-col w-full relative min-h-[1px]">
                <div class="w-full relative flex">
                    <div class="flex flex-wrap p-2.5">
                        <div class="mb-5 w-full">
                            <div class="h-[50px]"></div>
                        </div>
                        <div class="mb-5 w-full">
                            <div class="text-center">
                                <div class="inline-block z-10 relative">
                                    <p class="font-roboto font-semibold text-white text-[20px] leading-[28px]">
                                        Somos expertos en hidráulica. Te ayudamos en la selección del equipo adecuado, instalación, operación y mantenimiento. Mejora tus procesos y evita paros técnicos.
                                    </p>
                                </div>
                            </div>
                        </div>
               
                        <a href="#contacto" role="button" class="flex justify-center w-full">
                            <span class="text-white font-roboto font-medium text-[15px] px-[60px] py-[12px] bg-black rounded-[3px] transition duration-300 text-center">
                                Agendar asesoría
                            </span>
                        </a>
                        
                        <div class="mb-5 w-full">
                            <div class="h-[50px]"></div>
                        </div>
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
