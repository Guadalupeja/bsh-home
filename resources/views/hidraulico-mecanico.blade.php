@extends('layouts.app')
@section('title', 'Mantenimiento de equipo hidráulico rotativo o lineal | BSH.')
@section('description', 'Mantenimiento completo de equipo hidráulico rotativo o lineal tales como Cilindros Hidráulicos, 
Bombas Hidráulicas o Bombas centrífugas, selección de equipo BSH')

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
  },
  "numberOfEmployees": "51-200",
  "employee": [
    {
      "@type": "Person",
      "name": "Juan Pérez",
      "jobTitle": "Gerente de Ventas"
    }
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "Mantenimiento a Bombas y Sistemas Hidráulicos",
  "provider": {
    "@type": "Organization",
    "name": "BSH (Bombas Sellos y Hules Industriales S.A. de C.V.)",
    "areaServed": "MX",
    "availableLanguage": ["Español", "English"]
  },
  "description": "Ofrecemos mantenimiento preventivo y correctivo a bombas centrífugas y sistemas hidráulicos, mejorando el desempeño y prolongando la vida útil de tus equipos.",
  "offers": {
    "@type": "Offer",
    "priceCurrency": "MXN",
    "price": "0",
    "url": "https://bombasellos.com.mx/servicio-de-mantenimiento/"
  },
  "additionalType": "https://schema.org/TechnicalService"
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
  "description": "Brinda a tu personal las habilidades necesarias para seleccionar, operar y reparar equipos hidráulicos y sistemas de bombeo.",
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
    },
    {
      "@type": "Question",
      "name": "¿Cuáles son los equipos que mantienen?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Mantenemos cilindros hidráulicos, bombas hidráulicas, bombas centrífugas y sistemas de bombeo."
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
      "name": "Capacitación y Mantenimiento a Bombas",
      "item": "https://bombasellos.com.mx/servicios-mantenimiento-y-asesoria-industrial/"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "Hidráulico Mecánico",
      "item": "https://bombasellos.com.mx/servicios-mantenimiento-y-asesoria-industrial/hidraulico-mecanico"
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
                            <ol class="list-none m-0 p-0 w-auto float-left text-[13px] lg:text-[16px] font-roboto bg-[#edeff0] rounded-md">
                                <li class="inline-block p-[15px] pr-0 mr-[3px] rounded-l-md text-[13px] lg:text-[16px]"> 
                                    <span>
                                        <a href="https://bombasellos.com.mx" class="text-[#337ab7] no-underline">
                                            <i class="fas fa-home mx-[5px]"></i>Home
                                        </a>
                                    </span>
                                    <meta itemprop="position" content="1" />
                                </li>
                                <li class="inline-block pl-1 text-gray-400">/</li>
                                <li class="inline-block pl-2 rounded-r-md text-[16px]">
                                    <span class="text-[#27272A]" title="Capacitación y Mantenimiento a Sistemas Hidráulicos y Bombas">
                                    <a href="https://bombasellos.com.mx/servicios-mantenimiento-y-asesoria-industrial/" class="text-[#337ab7] no-underline">Capacitación y Mantenimiento a Sistemas Hidraulicos y Bombas
                                    </a>
                                    </span>
                                    <meta itemprop="position" content="2" />
                                </li>
                                <li class="inline-block pl-1 text-gray-400">/</li>
                                <li class="inline-block pl-1">HIDRÁULICO MECÁNICO                                </li>
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
                    <div class="h-[50px]"></div>
                </div>
                
                <!-- Heading -->
                <div class="w-full text-center mb-5">
                    <h1 class="lg:text-[55px] text-[31px] font-semibold font-roboto text-white lg:leading-[70px]">
                        HIDRÁULICO MECÁNICO
                    </h1>
                    <div class="mt-0 relative flex justify-center">
                        <div class="after:content-[''] after:block after:bg-[#610001] after:w-[100px] after:h-[2px] after:mt-2 mx-auto"></div>
                    </div> 
                </div>
  
                <!-- Spacer inferior -->
                <div class="w-full mb-5">
                    <div class="h-[50px]"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-id="49b36d12" data-element_type="section" class="lg:flex relative lg:mt-[100px] mt-[10px]">
    <div class="max-w-[1190px] mx-auto lg:flex">
        <div data-id="345131ee" data-element_type="column" class="lg:w-1/2 relative flex p-5 lg:p-0">
            <div class="box-border p-2 flex w-full flex-wrap align-content-start">
                <div data-id="2145ba07" data-element_type="widget" data-widget_type="image.default" class="w-full text-center">
                    <div class="box-border transition-all duration-300">
                        <picture fetchpriority="high" decoding="async" title="Servicio hidráulico mecánico">
                            <source type="image/webp" srcset="/img/servicio-hidraulico-mecanico.png.webp 984w" sizes="(max-width: 984px) 100vw, 984px" />
                            <img fetchpriority="high" decoding="async" src="/img/servicio-hidraulico-mecanico.png.webp" alt="Consultoría y capacitación" class="w-full h-auto object-cover" />
                        </picture>
                    </div>
                </div>
            </div>
        </div>
        
        <div data-id="10b5fbf5" data-element_type="column" class="lg:w-1/2 lg:p-0 relative flex text-justify px-5">
            <div class="box-border p-2 flex w-full flex-wrap align-content-start">
                <div data-id="5ed7b03c" data-element_type="widget" data-widget_type="mdp-headinger-elementor.default" class="w-full mb-5">
                    <div class="box-border transition-all duration-300">
                        <div class="box-border">
                            <h2 class="text-[20px] text-[#2953B1] leading-[25px] font-semibold font-open-sans m-0 text-left">
                                <div class="inline-block relative z-10">
                                    <span class="font-roboto font-semibold text-[#043E81]">
                                        Hidráulico-mecánico.
                                    </span>
                                </div>
                            </h2>
                            <div class="mt-0 relative flex">
                                <div class="after:content-[''] after:block after:bg-[#610001] after:w-[100px] after:h-[2px] after:mt-2"></div>
                            </div> 
                        </div>
                    </div>
                </div>
                <div data-id="73d6c9f1" data-element_type="widget" data-widget_type="text-editor.default" class="w-full mb-5">
                    <div class="box-border transition-all duration-300">
                        <p class="text-gray-600 leading-[27px] mb-[32px] font-semibold">
                            El mantenimiento de un equipo hidráulico rotativo o lineal tales como Cilindros Hidráulicos, Bombas Hidráulicas o Bombas centrífugas, nunca debe limitarse al cambio de refacciones o partes con daño evidente; si no que se han de determinar las condiciones de diseño, los parámetros normados, las tolerancias 
                            dimensionales y los rangos operativos a evaluar, re-establecer, probar y documentar.    
                        </p>
                        <p class="text-gray-600 leading-[27px] mb-[32px]">
                            Es importante tambien entender que un equipo opera dentro de un sistema y que, en el diagnóstico de falla, ha de diferenciarse el desgaste normal de sus componentes de un posible 
                            malfuncionamiento por errores de selección, instalación o operación en el sistema.   
                        </p>
                    </div>
                </div>
                <div data-id="6d371706" data-element_type="widget" data-widget_type="button.default" class="w-full">
                    <div class="box-border transition-all duration-300">
                        <div class="box-border">
                            <a href="#contacto" class="text-white no-underline bg-[#610001] font-roboto font-black text-[15px] py-3 px-6 rounded-md inline-block text-center transition-all">
                                <span class="flex justify-center">
                                    <span class="flex-grow">Agendar asesoría</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>








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