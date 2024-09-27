@extends('layouts.app')
@section('title', 'Capacitación y Mantenimiento a Sistemas Hidráulicos y Bombas')
@section('description', 'Mantenimiento de Pistones, Bombas, Sistemas Hidraúlicos lineales y rotativos. 
Capacidades de Maquinado y Metalizado Cromo duro.Consultoría y Capactación Técnica')

@section('structured-data')
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Bombas Sellos y Hules Industriales S.A. de C.V.",
      "url": "https://bombasellos.com.mx",
      "logo": "https://bombasellos.com.mx/img/logo.png",
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
      "@type": "Product",
      "name": "Sellos Mecánicos CALPEDA®",
      "description": "Cotiza la más amplia gama de sellos mecánicos CALPEDA® - BSH. Asesoría gratuita en sitio. Entrega inmediata en MX y precio mayorista.",
      "sku": "CALP-SEAL-001",
      "mpn": "CALP-SEAL-MECH",
      "material": "Carburo de Silicio",
      "brand": {
        "@type": "Brand",
        "name": "Calpeda"
      },
      "offers": {
        "@type": "AggregateOffer",
        "url": "https://bombasellos.com.mx/",
        "priceCurrency": "MXN",
        "lowPrice": "1500",
        "highPrice": "12000",
        "offerCount": "12",
        "availability": "https://schema.org/InStock",
        "seller": {
          "@type": "Organization",
          "name": "BSH (Bombas Sellos y Hules Industriales S.A. de C.V.)",
          "areaServed": "MX",
          "availableLanguage": ["Español", "English"]
        }
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "35"
      }
    }
    </script>
    
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "serviceType": "Mantenimiento Industrial",
      "provider": {
        "@type": "Organization",
        "name": "BSH (Bombas Sellos y Hules Industriales S.A. de C.V.)",
        "areaServed": "MX",
        "availableLanguage": ["Español", "English"]
      },
      "description": "Ofrecemos mantenimiento preventivo y correctivo a sistemas hidráulicos y bombas industriales. Mejora el desempeño y vida útil de tus equipos.",
      "offers": {
        "@type": "Offer",
        "priceCurrency": "MXN",
        "price": "0",
        "url": "https://bombasellos.com.mx/servicio-de-mantenimiento/"
      }
    }
    </script>
    
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "serviceType": "Consultoría y Capacitación Técnica",
      "provider": {
        "@type": "Organization",
        "name": "BSH (Bombas Sellos y Hules Industriales S.A. de C.V.)",
        "areaServed": "MX",
        "availableLanguage": ["Español", "English"]
      },
      "description": "Brinda a tu personal las habilidades técnicas necesarias para seleccionar, operar y reparar equipos hidráulicos y sistemas de bombeo.",
      "offers": {
        "@type": "Offer",
        "priceCurrency": "MXN",
        "price": "0",
        "url": "https://bombasellos.com.mx/consultoria-y-capacitacion-tecnica/"
      }
    }
    </script>
    
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "serviceType": "Maquinados y Metalizados",
      "provider": {
        "@type": "Organization",
        "name": "BSH (Bombas Sellos y Hules Industriales S.A. de C.V.)",
        "areaServed": "MX",
        "availableLanguage": ["Español", "English"]
      },
      "description": "Ofrecemos servicios de maquinados de piezas especiales y metalizados con cromo duro para la industria. Capacidades en aleaciones no-convencionales.",
      "offers": {
        "@type": "Offer",
        "priceCurrency": "MXN",
        "price": "0",
        "url": "https://bombasellos.com.mx/maquinados-y-metalizados/"
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
          "name": "Mantenimiento Industrial",
          "item": "https://bombasellos.com.mx/servicio-de-mantenimiento/"
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
                            <ol class="list-none m-0 p-0 w-auto float-left text-[16px] font-roboto bg-[#edeff0] rounded-md">
                                <li class="inline-block p-[15px] pr-0 mr-[3px] rounded-l-md text-[16px]"> 
                                    <span>
                                        <a href="{{ url('/') }}" class="text-[#337ab7] no-underline">
                                            <i class="fas fa-home mx-[5px]"></i>Home
                                        </a>
                                    </span>
                                    <meta itemprop="position" content="1" />
                                </li>
                                <li class="inline-block p-[15px] text-gray-400">/</li>
                                <li class="inline-block p-[15px] pl-2 rounded-r-md text-[16px]">
                                    <span class="text-[#27272A]" title="Capacitación y Mantenimiento a Sistemas Hidráulicos y Bombas">Capacitación y Mantenimiento a Sistemas Hidraulicos y Bombas</span>
                                    <meta itemprop="position" content="2" />
                                </li>
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
                    <div class="h-[70px]"></div>
                </div>
                
                <!-- Heading -->
                <div class="w-full text-center mb-5">
                    <h1 class="lg:text-[61px] text-[31px] font-semibold font-roboto text-white leading-[54.5455px]">
                        Servicios de Mantenimiento y Consultoría Técnica Industrial.
                    </h1>
                    <div class="mt-0 relative flex justify-center">
                        <div class="after:content-[''] after:block after:bg-[#610001] after:w-[100px] after:h-[2px] after:mt-2 mx-auto"></div>
                    </div> 
                </div>
  
                <!-- Spacer inferior -->
                <div class="w-full mb-5">
                    <div class="h-[70px]"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="my-[45px] text-center">
    <div class="inline-block relative z-10">
        <div class="font-roboto font-semibold text-[#043E81] text-[35px] inline-flex">
            Nuestras soluciones en servicios industriales.
        </div>
     
        <div class="mt-0 relative flex justify-center">
            <div class="after:content-[''] after:block after:bg-[#610001] after:w-[100px] after:h-[2px] after:mt-1 mx-auto"></div>
        </div>   
    </div>
</div>



<!--sección de 3 columnas servicios especializados-->
<section class="bg-[#f2f2f2] transition-all duration-300">
    <div class="max-w-[1190px] mx-auto lg:flex relative">
        <!-- Primera columna -->
        <div class="lg:w-1/3 mt-5 lg:mt-0 flex flex-col bg-white p-0 ml-[19px]">
            <!-- Imagen -->
            <div class="relative w-full text-center mb-5">
                <a href="{{ url('servicios-mantenimiento-y-asesoria-industrial/servicio-de-mantenimiento') }}">
                    <img src="{{ asset('img/Mantenimiento.webp') }}" alt="Servicios de mantenimiento mecanico e hidraúlico industrial" class="w-full h-auto">
                </a>                
            </div>
            <!-- Título -->
            <div class="p-4 pt-5 pb-6 bg-white text-[#043e81] h-[70px]">
                <h2 class="text-[25px] font-semibold font-roboto leading-[25px] h-[100px]">
                    <a href="{{ url('servicios-mantenimiento-y-asesoria-industrial/servicio-de-mantenimiento') }}" class="text-[#043e81] no-underline font-roboto">
                        Mantenimiento industrial.
                    </a>
                </h2>
            </div>
            <!-- Descripción -->
            <div class="p-3 bg-white text-[#666]">
                <p class="leading-[23px] font-Roboto mt-0 text-[15px]">
                    Averigua aquí cómo extender la vida y mejorar el desempeño de tus equipos y procesos.
                </p>
            </div>
            <!-- Botón -->
            <div class="mt-6 text-center w-full font-roboto">
                <a href="{{ url('servicios-mantenimiento-y-asesoria-industrial/servicio-de-mantenimiento') }}" class="inline-block bg-[#610001] text-white text-[16px] py-3 px-7 w-full">
                    Más información
                </a>
            </div>
        </div>

        <!-- Segunda columna -->
        <div class="lg:w-1/3 mt-5 lg:mt-0 flex flex-col bg-white p-0 ml-[19px]">
            <!-- Imagen -->
            <div class="relative w-full text-center mb-5">
                <a href="{{ url('servicios-mantenimiento-y-asesoria-industrial/consultoria-y-capacitacion-tecnica') }}">
                    <img src="{{ asset('img/Consultoria-Técnica.png.webp') }}" alt="Consultoría y capacitación técnica en Bombas y sistemas hidraúlicos" class="w-full h-auto">
                </a>                
            </div>
            <!-- Título -->
            <div class="p-4 pt-5 pb-6 bg-white text-[#043e81] h-[70px]">
                <h2 class="text-[25px] font-semibold font-roboto leading-[25px]">
                    <a href="{{ url('servicios-mantenimiento-y-asesoria-industrial/consultoria-y-capacitacion-tecnica') }}" class="text-[#043e81] no-underline">
                        Consultoría y capacitación técnica.
                    </a>
                </h2>
            </div>
            <!-- Descripción -->
            <div class="p-3 bg-white text-[#666]">
                <p class="leading-[23px] mb-0 mt-0 text-[15px] font-roboto">
                    Brinda a tu personal las habilidades técnicas necesarias para seleccionar, operar y reparar.
                </p>
            </div>
            <!-- Botón -->
            <div class="mt-6 text-center w-full font-roboto">
                <a href="{{ url('servicios-mantenimiento-y-asesoria-industrial/consultoria-y-capacitacion-tecnica') }}" class="inline-block bg-[#610001] text-white text-[16px] py-3 px-7 w-full">
                    Más información
                </a>
            </div>
        </div>

        <!-- Tercera columna -->
        <div class="lg:w-1/3 mt-5 lg:mt-0 flex flex-col bg-white p-0 ml-[19px]">
            <!-- Imagen -->
            <div class="relative w-full text-center mb-5">
                <a href="{{ url('servicios-mantenimiento-y-asesoria-industrial/maquinados-y-metalizados') }}">
                    <img src="{{ asset('img/Maquinados-Metalizados.png.webp') }}" alt="Maquinados de piezas especiales y metalizados cromo duro" class="w-full h-auto">
                </a>                
            </div>
  
            <!-- Título -->
            <div class="p-4 pt-5 pb-6 bg-white text-[#043e81] h-[70px]">
                <h2 class="text-[25px] font-semibold font-roboto leading-[25px]">
                    <a href="{{ url('servicios-mantenimiento-y-asesoria-industrial/maquinados-y-metalizados') }}" class="text-[#043e81] no-underline">
                        Maquinados y metalizados.
                    </a>
                </h2>
            </div>
            <!-- Descripción -->
            <div class="p-3 bg-white text-[#666]">
                <p class="leading-[23px] mb-0 font-robot text[15px] mt-0">
                    Conoce nuestras amplias capacidades para mecanizar en aleaciones no-convencionales.
                </p>
            </div>
            <!-- Botón -->
            <div class="mt-6 text-center font-roboto">
                <a href="{{ url('servicios-mantenimiento-y-asesoria-industrial/maquinados-y-metalizados') }}" class="inline-block bg-[#610001] text-white text-[16px] py-3 px-7 w-full">
                    Más información
                </a>
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