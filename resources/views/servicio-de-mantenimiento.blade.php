@extends('layouts.app')
@section('title', 'Mantenimiento de Bombas, Pistones y Sistemas Hidráulicos')
@section('description', '	
Expertos en Mantenimiento mecánico e hidraúlico a Bombas, Pistones y 
Sistemas de desplazamiento rotativo y lineal. Maquinados, Metalizados, Soldadura, Pailería.')

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
      "name": "Mantenimiento de Bombas y Sistemas Hidráulicos",
      "item": "https://bombasellos.com.mx/servicios-mantenimiento-y-asesoria-industrial/"
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
                                        <a href="{{ url('servicios-mantenimiento-y-asesoria-industrial') }}" class="text-[#337ab7] no-underline">Capacitación y Mantenimiento a Sistemas Hidraulicos y Bombas
                                        </a>
                                    </span>
                                    <meta itemprop="position" content="2" />
                                </li>
                                <li class="inline-block pl-1 text-gray-400">/</li>
                                <li class="inline-block pl-1">Servicios de Mantenimiento Industrial</li>
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
                        Mantenimiento Industrial de Bombas y Sistemas Hidraúlicos.
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
                        <picture fetchpriority="high" decoding="async" title="Mantenimiento Industrial">
                            <source type="image/webp" srcset="/img/Bombas-Sellos-y-Hules-Industriales.png.webp 984w" sizes="(max-width: 984px) 100vw, 984px" />
                            <img fetchpriority="high" decoding="async" src="/img/Bombas-Sellos-y-Hules-Industriales.png.webp" alt="Mantenimiento Industrial" class="w-full h-auto object-cover" />
                        </picture>
                    </div>
                </div>
            </div>
        </div>
        
        <div data-id="10b5fbf5" data-element_type="column" class="lg:w-1/2 lg:p-0 relative flex text-justify px-5 font-roboto">
            <div class="box-border p-2 flex w-full flex-wrap align-content-start">
                <div data-id="5ed7b03c" data-element_type="widget" data-widget_type="mdp-headinger-elementor.default" class="w-full mb-5">
                    <div class="box-border transition-all duration-300">
                        <div class="box-border">
                            <h2 class="text-[20px] text-[#2953B1] leading-[25px] font-semibold font-open-sans m-0 text-left">
                                <div class="inline-block relative z-10">
                                    <span class="font-roboto font-semibold text-[#043E81]">
                                        Servicio de mantenimiento.
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
                            Nuestras amplias capacidades para reparación y fabricación de componentes hidráulicos lineales y rotativos incluye:    
                        </p>
                        <ul class="text-gray-600 list-disc pl-4 mb-0 box-border font-roboto">
                            <li class="mb-2 text-left box-border"><span class="font-normal box-border">Maquinado convencional y CNC.</span></li>
                            <li class="mb-2 text-left box-border"><span class="font-normal box-border">Volteo hasta 2000 mm.</span></li>
                            <li class="mb-2 text-left box-border"><span class="font-normal box-border">Metalizados Cromo duro y Zinc.</span></li>
                            <li class="mb-2 text-left box-border"><span class="font-normal box-border">Recuperación por soldadura.</span></li>
                            <li class="mb-2 text-left box-border"><span class="font-normal box-border">Prensas y cizallas.</span></li>
                            <li class="mb-2 text-left box-border"><span class="font-normal box-border">Pailería.</span></li>
                            <li class="mb-2 text-left box-border"><span class="font-normal box-border">Corte Láser.</span></li>
                            <li class="mb-2 text-left box-border"><span class="font-normal box-border">Sandblast y Pintura.</span></li>
                            <li class="mb-2 text-left box-border"><span class="font-normal box-border">Banco de pruebas hidráulicas hasta 2000 bar y 100 Litros/min.</span></li>
                            <li class="mb-2 text-left box-border"><span class="font-normal box-border">Fabricación sobre especificaciones o capacidades de diseño CAD conforme normativas ISO/DIN 7425, ISO/DIN 5597, AS4716, ISO/DIN 10766, ISO/DIN 6195.</span></li>
                        </ul>
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



<section data-id="ca69df6" data-element_type="section" class="relative block lg:mt-[50px]">
    <div class="max-w-[1190px] mx-auto flex relative">
        <div class="lg:flex w-full">
            <div data-id="f13918c" data-element_type="column" class="relative flex lg:w-1/2 min-h-[1px] font-roboto text-justify">
                <div class="relative flex w-full">
                    <div class="flex relative w-full flex-wrap align-content-start p-2.5">
                        <div data-id="130633b" data-element_type="widget" data-widget_type="mdp-headinger-elementor.default" class="mb-5 relative w-full">
                            <div class="box-border transition-all duration-300">
                                <div class="box-border">
                                    <div class="text-[#7a7a7a] box-border">
                                        <div class="font-roboto font-semibold w-full absolute user-select-none"></div>
                                    </div>
                                    <h2 class="text-[20px] text-[#2953B1] leading-[25px] mt-0 mb-0 clear-both font-semibold font-open-sans box-border text-left">
                                        <div class="inline-block relative z-10">
                                            <div class="font-roboto font-semibold text-[#043E81] border-[#6EC1E4] box-border inline-flex">
                                                Reparación de sistemas Hidráulico-Mecánicos.
                                            </div>
                                        </div>
                                    </h2>
                                    <div class="mt-0 relative flex">
                                        <div class="after:content-[''] after:block after:bg-[#610001] after:w-[100px] after:h-[2px] after:mt-2"></div>
                                    </div> 
                                </div>
                            </div>
                        </div>

                        <div data-id="602950c" data-element_type="widget" data-widget_type="text-editor.default" class="text-[#7a7a7a] font-roboto font-normal mb-5 box-border text-[16px] relative w-full">
                            <div class="box-border transition-all duration-300">
                                <div class="box-border">
                                    <p class="text-[#666] leading-[32.4px] mb-8 mt-0 box-border">
                                        <span class="font-normal box-border">El mantenimiento de un equipo hidráulico, rotativo o lineal tales como&nbsp;</span>
                                        <a href="{{ url('sellos-hidraulicos') }}" target="_blank" rel="nofollow noopener" class="text-[#007bff] no-underline">Cilindros Hidráulicos</a>
                                        <span class="font-normal box-border">, Bombas Hidráulicas o 
                                            <a href="{{ url('bombas/bombas-centrifugas-calpeda') }}" target="_blank" rel="nofollow noopener" class="text-[#007bff] no-underline">Bombas centrífugas</a>, 
                                            nunca debe limitarse al cambio de refacciones o partes con daño evidente; si no que se han de determinar las condiciones de diseño, los parámetros normados, las tolerancias dimensionales y los rangos operativos a evaluar, re-establecer, probar y documentar.
                                        </span>
                                    </p>                                    
                                    <p class="text-[#666] leading-[32.4px] mb-8 mt-0 box-border">
                                        <span class="font-normal box-border">Es importante también entender que un equipo opera dentro de un sistema y que, en el diagnóstico de falla, ha de diferenciarse el desgaste normal de sus componentes de un posible mal funcionamiento por errores de selección, instalación y operación en el sistema.</span>
                                    </p>
                                    <p class="text-[#666] leading-[32.4px] mb-8 mt-0 box-border">
                                        <span class="font-normal box-border">Equipos periféricos, particularmente la unidad de potencia acoplada, en el caso de los equipos hidráulicos rotativos, también han de correr el mismo proceso de análisis y diagnóstico de falla, incluso cuando no hay daño aparente, para poder garantizar el correcto funcionamiento del conjunto.</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div data-id="ba3c1b9" data-element_type="widget" data-widget_type="button.default" class="relative w-full">
                            <div class="box-border transition-all duration-300">
                                <div class="box-border">
                                    <a href="{{ url('hidraulico-mecanico') }}" role="button" class="font-roboto font-black bg-[#610001] text-white no-underline text-[18px] inline-block leading-[18px] py-3 px-6 rounded-md text-center transition-all">
                                        <span class="flex justify-center">
                                            <span class="flex-grow">Más información</span>
                                        </span>
                                    </a>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div data-id="15ae5a7" data-element_type="column" class="relative flex lg:w-1/2 min-h-[1px] mt-[30px] lg:mt-[0px] p-[20px]">
                <div class="relative flex w-full">
                    <div class="flex relative w-full flex-wrap align-content-start p-2.5">
                        <div data-id="dd9621c" data-element_type="widget" data-widget_type="image.default" class="text-center relative w-full">
                            <div class="box-border transition-all duration-300">
                                <div class="box-border">
                                    <picture loading="lazy" title="Servicios de Mantenimiento Industrial 2">
                                        <source type="image/webp" srcset="/img/servicio-hidraulico-mecanico.png.webp 984w" sizes="(max-width: 984px) 100vw, 984px" />
                                        <img width="984" height="840" src="/img/servicio-hidraulico-mecanico.png" alt="Reparación de pistones y bombas hidráulicas." loading="lazy" class="max-w-full h-auto align-middle border-none" />
                                    </picture>
                                </div>
                            </div>
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