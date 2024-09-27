@extends('layouts.app')
@section('title', 'Bombas Centrífugas Neumáticas Sellos Hidraúlicos 2024| BSH')
@section('description', 'Cotiza Bombas Centrífugas Neumáticas Sellos Trelleborg en material Turcon, Turcite y Orkot. 
Entrega inmediata, Precio Mayorista. Distribuidores Autorizados Mx')

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
      "serviceType": "Asesoría Técnica",
      "provider": {
        "@type": "Organization",
        "name": "BSH (Bombas Sellos y Hules Industriales S.A. de C.V.)",
        "areaServed": "MX",
        "availableLanguage": ["Español", "English"]
      },
      "description": "Ofrecemos asesoría gratuita para la selección, instalación, y operación de equipos hidráulicos. Servicio de entrega inmediata.",
      "offers": {
        "@type": "Offer",
        "priceCurrency": "MXN",
        "price": "0",
        "url": "https://bombasellos.com.mx/contacto"
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
          "name": "Productos",
          "item": "https://bombasellos.com.mx/productos/"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Sellos Mecánicos CALPEDA®",
          "item": "https://bombasellos.com.mx/sellos-mecanicos-calpeda/"
        }
      ]
    }
    </script>
    
@endsection

@section('contenido')


<section class="relative lg:flex flex-wrap max-w-screen-xl mx-auto">
    <div class="flex w-full lg:w-1/2 p-2">
        <div class="w-full flex flex-wrap content-start m-0">
            <!-- Imagen  -->
            <div class="w-full m-0 text-center p-0">
                <a href="{{ url('bombas/bombas-centrifugas-calpeda') }}" class="inline-block">
                    <picture>
                        <source type="image/webp" srcset="/img/centrifuga-calpeda-en-mexico.jpg.webp 1000w, /img/centrifuga-calpeda-en-mexico-300x112.jpg.webp 300w">
                        <img src="/img/centrifuga-calpeda-en-mexico.jpg" alt="Bomba Centrifuga horizontal Calpeda" class="max-w-full h-auto border-none shadow-none m-0">
                    </picture>
                </a>
            </div>
            <!-- Heading 1 -->
            <div class="w-full p-5 bg-[#610001] text-white mt-[-20px] text-center">
                <h2 class="text-lg font-semibold font-roboto"><a href="{{ url('bombas/bombas-centrifugas-calpeda') }}" class="text-white no-underline">Bombas centrífugas Calpeda®.</a></h2>
            </div>
        </div>
    </div>


    
    <div class="flex w-full lg:w-1/2 p-2">
        <div class="w-full flex flex-wrap m-0">

            <!-- Imagen -->
            <div class="w-full m-0 text-center p-0">
                <img src="/img/sellos-hidraulicos-trelleborg-pqbd3zuptdkdqat5kisk61lv5f3zlnvog9859h1ifm.webp" alt="Sellos hidraulicos trelleborg" class="max-w-full h-auto border-none shadow-none">
            </div>
            <!-- Heading 2 -->
            <div class="w-full p-5 bg-[#610001] text-white mt-[-20px] text-center">
                <h1 class="text-lg font-semibold font-roboto"><a href="{{ url('/sellos-hidraulicos') }}" class="text-white no-underline m-0">Sellos Hidraúlicos Trelleborg®</a></h1>
            </div>
        </div>
    </div>
</section>






<section class="relative flex flex-wrap max-w-screen-xl mx-auto">
    <div class="w-full lg:w-1/2 p-2 flex flex-wrap">

        <!-- Imagen -->
        <div class="w-full m-0 text-center">
            <picture>
                <source type="image/webp" srcset="/img/Turcite-Slydway.jpg.webp 1000w, /img/Turcite-Slydway-300x112.jpg.webp 300w, /img/Turcite-Slydway-768x286.jpg.webp 768w">
                <img src="/img/Turcite-Slydway.jpg" alt="Guia Turcite B Slydway y Waylock" class="max-w-full h-auto border-none shadow-none">
            </picture>
        </div>
        <!-- Heading 1 -->
        <div class="w-full p-5 bg-[#610001] text-white mt[-20] text-center">
            <h2 class="text-lg font-semibold font-roboto"><a href="{{ url('/plasticos-de-ingeneria/turcite-b-slydway/') }}" class="text-white no-underline">Turcite B Slydway®</a></h2>
        </div>
    </div>

    <div class="w-full lg:w-1/2 p-2 flex flex-wrap">
        <!-- Imagen 3 -->
        <div class="w-full mb-5 text-center">
            <img src="/img/bombas-neumaticas-wilden-ouaz4rauc16doxyxshln5v5whl1csqb895n26rbfyq.webp" alt="Bomba Neumatica de doble diafragma." class="max-w-full h-auto border-none shadow-none">
        </div>
        <!-- Heading 2 -->
        <div class="w-full p-5 bg-[#610001] text-white mt-[-20px] text-center">
            <h2 class="text-lg font-semibold font-roboto"><a href="{{ url('bombas/bombas-neumaticas') }}" class="text-white no-underline">Bombas Neumáticas Wilden®</a></h2>
        </div>
    </div>
</section>




<section class="relative w-full box-border">
    <div class="max-w-[1190px] mx-auto flex relative box-border">
        <div class="w-full flex flex-wrap p-2.5 box-border">
            <!-- Spacer -->
            <div class="w-full mb-5 box-border">
                <div class="lg:h-[50px] h-[20px]"></div>
            </div>
            <!-- Heading -->
            <div class="w-full mb-5 box-border text-center">
                <div class="text-center">
                    <span class="inline-block relative z-10">
                        <div class="font-roboto font-semibold text-[#043E81] lg:text-[33px] text-[20px] lg:leading-[49.5px] border-none">
                            Conoce más de nuestra gama de sellos hidraúlicos, equipos de bombeo y control de fluidos.
                        </div>
                        <div class="mt-[10px] relative flex justify-center">
                            <div class="after:content-[''] after:block after:bg-[#610001] after:w-[100px] after:h-[4px] after:mt-2 mx-auto"></div>
                        </div>                        
                    </span>
                </div>
            </div>
            <!-- Spacer -->
            <div class="w-full mt-5 box-border">
                <div class="lg:h-[50px] h-[20px]"></div>
            </div>
        </div>
    </div>
</section>

<!--Seccion 3 columnas-->
<section class="relative">
    <div class="max-w-[1190px] mx-auto lg:flex">
        <!-- Columna 1 -->
        <div class="lg:w-1/3 p-2.5 flex">
            <div class="w-full flex flex-wrap content-start">
                <div class="w-full m-0 text-center">
                    <a href="https://juntasflexibles.com/" target="_blank" rel="noopener" class="inline-block">
                        <picture>
                            <source type="image/webp" srcset="/img/IMAGEN-1-JUNTAS-FLEXIBLES-2.jpg.webp 394w, /img/IMAGEN-1-JUNTAS-FLEXIBLES-2-300x228.jpg.webp 300w">
                            <img src="/img/IMAGEN-1-JUNTAS-FLEXIBLES-2.jpg" alt="IMAGEN 1 JUNTAS FLEXIBLES 2" class="max-w-full h-auto">
                        </picture>
                    </a>
                </div>
                <div class="w-full bg-[#610001] text-center p-0 mt-[-20px]">
                    <h2 class="text-[18px] lg:text-[25px] font-roboto font-semibold text-white leading-[77.5px] m-0"><a href="https://juntasflexibles.com/" target="_blank" rel="noopener" class="text-white no-underline">Juntas de Expansión</a></h2>
                </div>
            </div>
        </div>
        <!-- Columna 2 -->
        <div class="lg:w-1/3 p-2.5 flex">
            <div class="w-full flex flex-wrap content-start">
                <div class="w-full m-0 text-center">
                    <a href="https://bombasellos.com.mx/kits-maquinaria-industrial" target="_blank" class="inline-block">
                        <picture>
                            <source type="image/webp" srcset="/img/kits-maquinaria-industrial.png.webp 394w, /img/kits-maquinaria-industrial-300x228.png.webp 300w">
                            <img src="/img/kits-maquinaria-industrial.png" alt="Maquina de Inyeccion de plasticos con sellos" class="max-w-full h-auto">
                        </picture>
                    </a>
                </div>
                <div class="w-full bg-[#610001] text-center py-2 mt-[-20px]">
                    <h2 class="text-[18px] lg:text-[25px] font-semibold font-roboto text-white leading-[32.5px] m-0"><a href="https://bombasellos.com.mx/kits-maquinaria-industrial" class="text-white no-underline">Kits de sellos<br>para maquinaria Industrial.</a></h2>
                </div>
            </div>
        </div>
        <!-- Columna 3 -->
        <div class="lg:w-1/3 p-2.5 flex">
            <div class="w-full flex flex-wrap content-start">
                <div class="w-full m-0 text-center">
                    <a href="https://bombasdealtapresion.com.mx/" target="_blank" rel="noopener" class="inline-block">
                        <picture>
                            <source type="image/webp" srcset="/img/IMAGEN-2-MAXIMATOR.jpg.webp 394w, /img/IMAGEN-2-MAXIMATOR-300x228.jpg.webp 300w">
                            <img src="/img/IMAGEN-2-MAXIMATOR.jpg" alt="IMAGEN 2 MAXIMATOR" class="max-w-full h-auto">
                        </picture>
                    </a>
                </div>
                <div class="w-full bg-[#610001] text-center py-2 mt-[-20px]">
                    <h2 class="text-[18px] lg:text-[25px] font-semibold font-roboto text-white leading-[32.5px] m-0"><a href="https://bombasdealtapresion.com.mx/" target="_blank" rel="noopener" class="text-white no-underline">Amplificadores<br>Maximator®</a></h2>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="p-2.5 flex relative w-full flex-wrap content-start">
    <!-- Espaciador -->
    <div class="w-full">
        <div class="transition-all duration-300">
            <div class="h-[120px]"></div>
        </div>
    </div>
</div>


<section class="relative bg-gradient-to-r from-[#610001] to-[#b00204]">
    <div class="max-w-[1190px] mx-auto flex">
        <div class="w-full flex flex-wrap p-2.5">
            <!-- Espaciador Superior -->
            <div class="w-full mb-5">
                <div class="h-[50px]"></div>
            </div>
            <!-- Texto Principal -->
            <div class="w-full mb-5 text-center">
                <div class="inline-block relative z-10">
                    <p class="text-white font-roboto font-semibold text-[20px] leading-[28px]">Somos expertos en hidráulica. Te ayudamos en la selección del equipo adecuado, instalación, operación y mantenimiento. Mejora tus procesos y evita paros técnicos.</p>
                </div>
            </div>
            <!-- Botón de Asesoría -->
            <div class="w-full mb-5 text-center">
                <a href="#contacto" class="inline-block bg-black text-white font-roboto font-medium text-[15px] leading-[15px] py-3 px-6 rounded-md transition-all hover:bg-gray-700">
                    Agendar asesoría
                </a>
            </div>
            <!-- Espaciador Inferior -->
            <div class="w-full">
                <div class="h-[50px]"></div>
            </div>
        </div>
    </div>
</section>

<div class="p-2.5 flex w-full flex-wrap content-start">
    <!-- Espaciador superior -->
    <div class="w-full mb-5">
        <div class="h-[25px]"></div>
    </div>

    <!-- Texto principal centrado -->
    <div class="w-full mb-5 text-center">
        <div class="inline-block relative z-10">
            <p class="font-roboto font-semibold text-[#043e81] text-[27px]">
                Servicios técnicos especializados para cada industria.
            </p>
        </div>
        <div class="mt-0 relative flex justify-center">
            <div class="after:content-[''] after:block after:bg-[#610001] after:w-[100px] after:h-[2px] after:mt-2 mx-auto"></div>
        </div>    
        
    </div>

    <!-- Espaciador inferior -->
    <div class="w-full mb-5">
        <div class="h-[25px]"></div>
    </div>
</div>


<!--sección de 3 columnas servicios especializados-->
<section class="bg-[#f2f2f2] transition-all duration-300">
    <div class="max-w-[1190px] mx-auto lg:flex relative">
        <!-- Primera columna -->
        <div class="lg:w-1/3 mt-5 lg:mt-0 flex flex-col bg-white p-0 ml-[19px]">
            <!-- Imagen -->
            <div class="relative w-full text-center mb-5">
                <a href="{{ url('servicio-de-mantenimiento/') }}">
                    <img src="/img/Mantenimiento.webp" alt="Servicios de mantenimiento mecanico e hidraúlico industrial" class="w-full h-auto">
                </a>
            </div>
            <!-- Título -->
            <div class="p-4 pt-5 pb-6 bg-white text-[#043e81] h-[70px]">
                <h2 class="text-[25px] font-semibold font-roboto leading-[25px] h-[100px]">
                    <a href="{{ url('servicio-de-mantenimiento/') }}" class="text-[#043e81] no-underline font-roboto">
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
                <a href="{{ url('servicio-de-mantenimiento/') }}" class="inline-block bg-[#610001] text-white text-[16px] py-3 px-7 w-full">
                    Más información
                </a>
            </div>
        </div>

        <!-- Segunda columna -->
        <div class="lg:w-1/3 mt-5 lg:mt-0 flex flex-col bg-white p-0 ml-[19px]">
            <!-- Imagen -->
            <div class="relative w-full text-center mb-5">
                <a href="{{ url('servicios-mantenimiento-y-asesoria-industrial/consultoria-y-capacitacion-tecnica/') }}">
                    <img src="/img/Consultoria-T%C3%A9cnica.png.webp" alt="Consultoría y capacitación técnica en Bombas y sistemas hidraúlicos" class="w-full h-auto">
                </a>
            </div>
            <!-- Título -->
            <div class="p-4 pt-5 pb-6 bg-white text-[#043e81] h-[70px]">
                <h2 class="text-[25px] font-semibold font-roboto leading-[25px]">
                    <a href="{{ url('servicios-mantenimiento-y-asesoria-industrial/consultoria-y-capacitacion-tecnica/') }}" class="text-[#043e81] no-underline">
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
                <a href="{{ url('servicios-mantenimiento-y-asesoria-industrial/consultoria-y-capacitacion-tecnica/') }}" class="inline-block bg-[#610001] text-white text-[16px] py-3 px-7 w-full">
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