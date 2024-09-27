@extends('layouts.app')
@section('title', 'Información de Contacto BSH. Sucursales, Horario, Teléfono')
@section('description', 'Información de Contacto BSH. Contáctanos vía Telefónica, acude a Sucursal, solicita información vía Correo Electrónico o la visita de nuestro personal a planta.')

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
    "addressLocality": "Gustavo A. Madero",
    "addressRegion": "CDMX",
    "postalCode": "07300",
    "addressCountry": "MX",
    "streetAddress": "Otavalo número 91, Colonia Lindavista"
  },
  "department": [
    {
      "@type": "Organization",
      "name": "Sucursal Puebla",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Avenida 125 Oriente #226, Guadalupe Hidalgo",
        "addressLocality": "Puebla",
        "postalCode": "72494",
        "addressCountry": "MX"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "222 227 3866",
        "email": "bsh@bombasellos.com.mx"
      }
    },
    {
      "@type": "Organization",
      "name": "Matriz Altamira",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Limón #1404, Ampliación Monte Alto",
        "addressLocality": "Altamira, Tamaulipas",
        "postalCode": "89606",
        "addressCountry": "MX"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "(0183) 3375-3249",
        "email": "bsh@bombasellos.com.mx"
      }
    },
    {
      "@type": "Organization",
      "name": "Sucursal CDMX",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Otavalo número 91, Colonia Lindavista, Delegación Gustavo A. Madero",
        "addressLocality": "México",
        "addressRegion": "CDMX",
        "postalCode": "07300",
        "addressCountry": "MX"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "(0155) 5752-1715",
        "email": "bsh@bombasellos.com.mx"
      }
    }
  ],
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
      "name": "¿Cuál es el horario de atención en las sucursales?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Nuestras sucursales están abiertas de lunes a viernes de 9:00 a 18:00 horas."
      }
    },
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
      "name": "Contacto",
      "item": "https://bombasellos.com.mx/servicios-mantenimiento-y-asesoria-industrial/"
    }
  ]
}
</script>
@endsection




@section('contenido')


<section class="mt-0 relative w-full bg-cover bg-center" style="background-image: url('/img/bombas-industriales.jpg');">
    <div class="max-w-[1190px] mx-auto flex relative">
        <div class="lg:flex w-full">
            <div class="lg:w-1/2 relative flex min-h-[1px] p-[20px]">
                <div class="w-full relative flex">
                    <div class="flex w-full flex-wrap align-content-start p-2.5">
                        <div class="w-full mb-1">
                            <div class="transition duration-300 ease-in-out">
                                <div class="bg-[#edeff0] rounded-md p-0 m-0">
                                  <ol itemscope itemtype="https://schema.org/BreadcrumbList" class="list-none m-0 p-0 flex text-[16px] font-roboto">
                                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="inline-block p-[15px] pr-0 mr-[3px] rounded-l-md">
                                        <span itemprop="name">
                                            <a itemprop="item" href="{{ url('/') }}" class="text-[#337ab7] no-underline">
                                                <i class="fas fa-home mx-[5px]"></i>Home
                                            </a>
                                        </span>
                                        <meta itemprop="position" content="1" />
                                    </li>
                                    <li class="inline-block pl-1 text-gray-400 p-[15px] pr-0 mr-[3px] rounded-l-md">/</li>
                                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="inline-block p-[15px] pr-0 mr-[3px] rounded-l-md">
                                        <span itemprop="name" title="Contacto – BSH" class="text-[#27272A]">
                                            Contacto – BSH
                                        </span>
                                        <meta itemprop="position" content="2" />
                                    </li>
                                </ol>                                
                                </div>
                            </div>
                        </div>
                    
                            <div class="h-[70px]"></div>
                    
                        <div class="w-full mb-1">
                            <h1 class="text-[14px] font-semibold text-white">INFORMACIÓN DE CONTACTO</h1>
                        </div>
                        <div class="w-full mb-5">
                            <h2 class="text-[45px] text-white leading-[25px] font-bold">SUCURSALES</h2>
                        </div>
                        <div class="w-full text-white mb-5">
                            <p><strong>Puebla</strong></p>
                            <p>Avenida 125 Oriente #226, Guadalupe Hidalgo. Puebla. C.P. 72494.</p>
                            <p>222 227 3866<br>bsh@bombasellos.com.mx</p>
                            <p class="mt-[20px]"><strong>Matriz</strong></p>
                            <p>Limón #1404, Ampliación Monte Alto, Altamira, Tamaulipas, C.P. 89606.<br>Tel: (0183) 3375-3249<br>bsh@bombasellos.com.mx</p>
                            <p class="mt-[20px]"><strong>CDMX</strong></p>
                            <p>Otavalo número 91, Colonia Lindavista, Delegación Gustavo A. Madero, México, Distrito Federal.<br>Teléfono: (0155) 5752-1715<br>bsh@bombasellos.com.mx</p>
                        </div>
                        <div class="w-full mb-5">
                            <div class="h-[10px]"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/2 relative flex min-h-[1px]">
<!-- Incluir el script de HubSpot en tu layout -->
<div id="hubspotFormContainer" class="p-12 rounded-md text-white">
    <h2 id="contacto" class="font-roboto text-[20px] mt-[70px] font-semibold mb-4">¿Necesitas más información?</h2>
    <p class="text-[45px] mb-6 font-bold">¡No dudes en contactarnos!</p>
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
            </div>
        </div>
    </div>
</section>






@endsection