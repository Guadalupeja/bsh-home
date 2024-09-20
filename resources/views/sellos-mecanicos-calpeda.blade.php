@extends('layouts.app')

@section('title', 'La más amplia gama de sellos mecánicos CALPEDA® -  BSH.')
@section('description', 'Cotiza la más amplia gama de sellos mecánicos CALPEDA® -  BSH. Asesoría gratuita en sitio. 
Entrega inmediata MX y Precio Mayorista, mantenimiento en sitio.')

@section('structured-data')
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
      "availableLanguage": ["Español", "English"],
      "contactPoint": {
        "@type": "ContactPoint",
        "contactType": "Sales",
        "telephone": "+52-55-5752-1715",
        "email": "bsh@bombasellos.com.mx"
      }
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
        "text": "Los sellos mecánicos Calpeda® son piezas de precisión utilizadas para evitar fugas en bombas y sistemas hidráulicos. Están fabricados con materiales de alta calidad como carburo de silicio y grafito."
      }
    },
    {
      "@type": "Question",
      "name": "¿Cómo puedo solicitar más información sobre los sellos mecánicos?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Puede contactar a BSH para asesoría gratuita en sitio y solicitar cotización a través de nuestra página de contacto o llamando al +52-55-5752-1715."
      }
    }
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "Asesoría gratuita",
  "provider": {
    "@type": "Organization",
    "name": "BSH (Bombas Sellos y Hules Industriales S.A. de C.V.)",
    "areaServed": "MX",
    "availableLanguage": ["Español", "English"]
  },
  "description": "Ofrecemos asesoría gratuita para la selección de sellos mecánicos adecuados para bombas Calpeda y otros equipos. Servicio de entrega inmediata."
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ContactPage",
  "mainEntity": {
    "@type": "ContactPoint",
    "contactType": "Sales",
    "url": "https://bombasellos.com.mx/contacto",
    "telephone": "+52-55-5752-1715"
  }
}
</script>
@endsection



@section('contenido')

<section class="bg-[#F2F2F2] transition-all duration-300 relative w-full flex-shrink-0">
    <div class="max-w-[1190px] mx-auto relative flex">
        <div class="w-full min-h-1 box-border flex">
            <div class="p-2.5 w-full flex-wrap flex items-start box-border relative">
                <div class="w-full flex-nowrap box-border relative">
                    <div class="transition-all duration-300">
                        <div>
                            <div class="h-[51px]"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="bg-[#F2F2F2] transition-all duration-300 shadow-none relative flex-auto">
    <div class="max-w-[1190px] mx-auto lg:flex relative">
        <!-- Left Column -->
        <div class="lg:w-1/2 flex relative p-2.5 flex-wrap">
            <h1 class="text-[35px] leading-[44.5455px] mt-0 mb-0 font-semibold font-sans text-gray-700">
                <span class="font-roboto font-black text-[#043E81] border-none text-[36px]">
                    Sellos mecánicos Calpeda®
                </span>
            </h1>
        
            <!-- Text Content -->
            <div class="mb-5 text-justify text-gray-600">
                <p class="leading-[23px] mb-[32px]">
                    La expectativa de vida de una bomba centrífuga o su motor exceden con creces la del sello mecánico, volviendo muy importante la correcta selección técnica; configuración, materiales, caras, empaques, la disponibilidad, precio y las garantías de marca de esta refacción.&nbsp;
                </p>
                <p class="leading-[23px] mb-[12px]">
                    Cuente con asesoria gratuita en sitio para la selección del sello adecuado, así como existencias para entrega inmediata.
                </p>
            </div>
            <!-- Button -->
            <div class="w-[305px] mb-5">
                <a href="#contacto" class="text-white no-underline outline-none bg-[#610001] font-roboto font-black inline-block leading-[15px] text-[15px] py-3 px-6 rounded-md text-center transition-all duration-300 shadow-none flex justify-center">
                    <span class="flex-grow order-10 block">SOLICITAR INFORMACIÓN</span>
                </a>
                
            </div>
        </div>
        <!-- Right Column -->
        <div class="w-1/2 flex relative min-h-[1px] p-2.5 flex-wrap m-auto">
            <div class="w-full text-center">
                <picture>
                    <source type="image/webp" srcset="/img/sellos-mecanicos-1.png.webp 300w" />
                    <img src="/img/sellos-mecanicos-1.png" alt="Sellos mecanicos" class="max-w-50% lg:w-[350px] h-auto inline-block border-none" />
                </picture>
            </div>
        </div>
    </div>
</section>








<!--Puntuar página-->
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