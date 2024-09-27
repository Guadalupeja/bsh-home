@extends('layouts.app')
@section('title', 'Maquinados CNC todo tipo de aleaciones Metalizado Cromo Zinc')
@section('description', 'Cotiza maquinados CNC Express en todo tipo de metalurgias sobre diseño o muestra con aplicación de Cromo duro y Zinc. 
Prototipado y simulación de elementos FEM.')

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
  "serviceType": "Maquinados CNC y Metalizados",
  "provider": {
    "@type": "Organization",
    "name": "BSH (Bombas Sellos y Hules Industriales S.A. de C.V.)",
    "areaServed": "MX",
    "availableLanguage": ["Español", "English"]
  },
  "description": "Cotizamos maquinados CNC en todo tipo de aleaciones y aplicamos Cromo duro y Zinc, con capacidades de prototipado y simulación de elementos FEM.",
  "offers": {
    "@type": "Offer",
    "priceCurrency": "MXN",
    "price": "0",
    "url": "https://bombasellos.com.mx/maquinados-cnc/"
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
      "name": "Maquinados y Metalizados",
      "item": "https://bombasellos.com.mx/maquinados/"
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
                                        <a href="{{ url('/') }}" class="text-[#337ab7] no-underline">
                                            <i class="fas fa-home mx-[5px]"></i>Home
                                        </a>
                                    </span>
                                    <meta itemprop="position" content="1" />
                                </li>
                                <li class="inline-block pl-1 text-gray-400">/</li>
                                <li class="inline-block pl-2 rounded-r-md text-[16px]">
                                    <span class="text-[#27272A]" title="Capacitación y Mantenimiento a Sistemas Hidráulicos y Bombas">
                                    <a href="{{ url('/servicios-mantenimiento-y-asesoria-industrial') }}" class="text-[#337ab7] no-underline">Capacitación y Mantenimiento a Sistemas Hidraulicos y Bombas
                                    </a>
                                    </span>
                                    <meta itemprop="position" content="2" />
                                </li>
                                <li class="inline-block pl-1 text-gray-400">/</li>
                                <li class="inline-block pl-1">Maquinados y metalizados</li>
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
                        Prototipado y Maquinados CNC con aplicación de Cromo Duro y Zinc.
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
                        <picture fetchpriority="high" decoding="async" title="Maquinados y Metalizados">
                            <source type="image/webp" srcset="/img/Maquinados-y-metalizados.png.webp 984w" sizes="(max-width: 984px) 100vw, 984px" />
                            <img fetchpriority="high" decoding="async" src="/img/Maquinados-y-metalizados.png.webp" alt="Maquinados y metalizados" class="w-full h-auto object-cover" />
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
                                        Maquinados y metalizados.
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
                        <p class="text-gray-600 leading-[27px] mb-[32px]">
                            Maquinado convencional con 
                            capacidad de volteo de hasta 2000 mm y CNC; Sobre dibujo o muestra para diseño CAD.
                        </p>
                        <p class="text-gray-600 leading-[27px] mb-[32px]">
                            Mecanizados en Metalurgias No-Convencionales; Aceros inoxidables de alto contenido de Cromo, 
                            Titanio, Hastelloy, Inconel, Monel, Cobalto.
                        </p>
                        <p class="text-gray-600 leading-[27px] mb-[32px]">
                            Prototipado y simulacion elementos finitos FEM. <br>
                            Metalizado Cromo duro y Zinc. <br>
                            Certificacion de calidad ISO 9001 2018. <br>
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