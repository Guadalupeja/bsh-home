@extends('layouts.app')
@section('title', 'Fabricación de piezas de Hule. Maquinado, Moldeo, Extruido
')
@section('description', 'Fabricación Express de piezas especiales en Plásticos y Composites sobre muestra o diseño. Técnicas avanzadas de Diseño y Simulación de Elemento Finito.')

@section('structured-data')

<!-- Datos estructurados de la organización -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Bombas Sellos y Hules Industriales S.A. de C.V.",
  "url": "https://bombasellos.com.mx",
  "logo": "https://bombasellos.com.mx/img/logo.png",
  "description": "Fabricación de piezas de Hule por Maquinado, Moldeo y Extruido, ofreciendo soluciones integrales en los sectores Metal-mecánico, Minería, Oil&Gas e Industria.",
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

<!-- Datos estructurados de la página web -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Fabricación de piezas de Hule - BSH",
  "description": "Fabricación Express de piezas especiales en Plásticos y Composites sobre muestra o diseño. Técnicas avanzadas de Diseño y Simulación de Elemento Finito.",
  "url": "https://bombasellos.com.mx/fabricacion-hules",
  "breadcrumb": {
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
        "name": "Fabricación de piezas de Hule",
        "item": "https://bombasellos.com.mx/fabricacion-hules"
      }
    ]
  },
  "mainEntityOfPage": {
    "@type": "WebSite",
    "@id": "https://bombasellos.com.mx",
    "potentialAction": {
      "@type": "SearchAction",
      "target": "https://bombasellos.com.mx/?s={search_term_string}",
      "query-input": "required name=search_term_string"
    }
  }
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
      "name": "¿Cuáles son los métodos de fabricación de piezas de hule?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Fabricamos piezas de hule utilizando métodos de maquinado, moldeo y extruido, adaptándonos a las necesidades de cada proyecto."
      }
    },
    {
      "@type": "Question",
      "name": "¿Qué tipo de piezas pueden fabricar?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Podemos fabricar piezas de hule de diferentes formas y tamaños, desde juntas y empaques hasta perfiles de hule personalizados."
      }
    },
    {
      "@type": "Question",
      "name": "¿Ofrecen asesoría técnica para proyectos de fabricación de hule?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Sí, ofrecemos asesoría técnica para garantizar que sus piezas de hule cumplan con los estándares de calidad y eficiencia requeridos."
      }
    },
    {
      "@type": "Question",
      "name": "¿Cuáles son los tiempos de entrega para la fabricación de piezas de hule?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Nuestros tiempos de entrega varían según la complejidad del proyecto, pero ofrecemos fabricación express para piezas urgentes."
      }
    }
  ]
}
</script>

<!-- Datos estructurados de producto relacionado -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Fabricación de Piezas de Hule por Moldeo, Maquinado y Extruido",
  "description": "Ofrecemos la fabricación de piezas de hule por moldeo, maquinado y extruido, adaptadas a sus necesidades y requerimientos.",
  "brand": {
    "@type": "Brand",
    "name": "BSH"
  },
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "MXN",
    "availability": "https://schema.org/InStock",
    "url": "https://bombasellos.com.mx/fabricacion-hules"
  },
  "image": "https://bombasellos.com.mx/img/fabricacion-hules.jpg"
}
</script>

@endsection



@section('contenido')


<section class="relative block">
    <div class="max-w-[1190px] flex mx-auto relative">
        <div class="w-full flex">
            <div class="relative flex w-full min-h-[1px]">
                <div class="relative flex w-full">
                    <div class="relative flex flex-wrap content-start p-[10px] w-full">
                        <div class="relative w-full">
                            <div class="transition-all duration-300">
                                <div>
                                    <!-- Flexy Breadcrumb -->
                                    <div>
                                        <!-- Breadcrumb wrapper -->
                                        <div class="m-0 p-0">
                                         
                                                                    <!-- Ordered list-->
                                                <!-- Ordered list-->
                                                <ol itemscope itemtype="https://schema.org/BreadcrumbList" class="block list-none p-0 m-0 font-roboto text-[16px] float-left bg-[#edf1f0] rounded-lg">
                                                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="inline-block px-4 py-3 mr-0.75 rounded-l-lg text-[16px]">
                                                        <span itemprop="name">
                                                            <!-- Home Link -->
                                                            <a itemprop="item" href="{{ url('/') }}" class="text-[#337ab7] hover:text-[#2a5884]">
                                                                <i class="fa fa-home mr-1"></i>Home 
                                                            </a>
                                                        </span>
                                                        <meta itemprop="position" content="1" />
                                                    </li>
                                                    <li class="inline-block px-0.5 py-3 text-[#cccccc]">/</li>
                                                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="inline-block px-0.5 py-3 text-[16px]">
                                                        <a itemprop="item" href="{{ url('plasticos-de-ingeneria') }}" class="text-[#337ab7] hover:text-[#2a5884]" title="Plásticos de ingenería">
                                                            <span itemprop="name">Plásticos de ingenería</span>
                                                        </a>
                                                        <meta itemprop="position" content="2" />
                                                    </li>
                                                    <li class="inline-block px-0.5 py-3 text-[#cccccc]">/</li>
                                                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="inline-block px-3 py-3 rounded-r-lg text-[16px]">
                                                        <span itemprop="name" title="Hules moldeados y extruidos" class="text-[#27272a]">Hules moldeados y extruidos</span>
                                                        <meta itemprop="position" content="3" />
                                                    </li>
                                                </ol>
                                            <div class="m-0 p-0"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<section class="relative block w-full lg:w-[1423px] bg-cover transition-all duration-300" style="background-image: url('/img/bombas-industriales.jpg'); left: 0;">
    <div class="max-w-[1190px] flex mx-auto relative">
        <div class="w-full flex">
            <div class="relative flex w-full min-h-[1px]">
                <div class="relative flex w-full">
                    <div class="relative flex flex-wrap content-start p-2.5 w-full">
                        <!-- Espaciador superior -->
                        <div class="relative w-full mb-5">
                            <div class="transition-all duration-300">
                                <div>
                                    <div class="h-[50px] md:h-[70px]"></div>
                                </div>
                            </div>
                        </div>

                    <!-- Título -->
                    <div class="relative w-full mb-5">
                        <div class="transition-all duration-300">
                            <div class="text-[#7a7a7a]">
                                <div class="absolute w-full font-roboto font-semibold user-select-none"></div>
                            </div>
                            <h2 class="text-[16px] md:text-[20px] text-[#2953b1] leading-[20px] md:leading-[25px] lg:leading-[30px] mt-0 mb-0 font-semibold font-open-sans text-center break-all">
                                <div class="inline-block relative z-1">
                                    <div class="inline-flex text-white font-roboto font-semibold border-none text-[34px] md:text-[48px] lg:text-[58px] lg:leading-[65px] border-[#6ec1e4]">
                                        Perfiles de hule por moldeo, maquinado y extruido.
                                    </div>
                                    <div class="mt-0 relative flex justify-center">
                                        <div class="after:content-[''] after:block after:bg-[#610001] after:w-[50px] md:after:w-[100px] after:h-[2px] after:mt-2 mx-auto"></div>
                                    </div>
                                </div>
                            </h2>
                        </div>
                    </div>


                        <!-- Espaciador inferior -->
                        <div class="relative w-full">
                            <div class="transition-all duration-300">
                                <div>
                                    <div class="h-[50px] md:h-[70px]"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






<section class="relative block lg:mt-[90px]">
    <div class="max-w-[1190px] lg:flex mx-auto relative">
        <div class="lg:flex w-full">
            <!-- Primera columna de texto -->
            <div class="relative lg:flex lg:w-1/2 min-h-[1px]">
                <div class="relative flex w-full">
                    <div class="relative flex flex-wrap content-start lg:p-[10px]  p-5 w-full">
                        <div class="text-[#7a7a7a] font-roboto font-normal text-justify text-[17px] mb-[20px] relative w-full">
                            <div class="transition-all duration-300">
                                <div>
                                    <p class="text-[#666666] leading-[30.6px] mb-[32px] mt-0">
                                        <span class="font-normal">Incontables aplicaciones para la industria requerirán un elemento de amortiguamiento, de aislamiento en cámaras y compuertas, de empalme o como material de sacrificio. Contamos con herramientas avanzadas de ingeniería tales como la simulación y análisis por elementos finitos FEA/FEM para la fabricación express de moldes y dados, un laboratorio de pruebas propio para el análisis de muestras físicas y 
                                            desarrollo de composites, así como estándares de calidad ISO 9001 2018.</span>
                                    </p>
                                   
                                </div>
                            </div>
                        </div>

                        <!-- Botón de agendar asesoría -->
                        <div class="relative">
                            <div class="transition-all duration-300">
                                <div>
                                    <a href="#contacto" role="button" class="font-roboto font-black bg-[#610001] text-white no-underline inline-block leading-[15px] text-[15px] py-[12px] px-[24px] rounded-[3px] text-center transition-all duration-300 flex justify-center hover:bg-[#890002]">
                                        <span class="flex justify-center">
                                            <span class="block">AGENDAR ASESORÍA</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Segunda columna con imagen -->
            <div class="relative lg:flex lg:w-1/2 min-h-[1px]">
                <div class="relative flex w-full">
                    <div class="relative flex flex-wrap content-start p-[10px] w-full">
                        <div class="relative w-full text-center">
                            <div class="transition-all duration-300">
                                <div>
                                    <picture loading="lazy" title="Plásticos de ingenería 1">
                                        <source type="image/webp" srcset="/img/Hules-moldeo-extruido.png.webp 600w" sizes="(max-width: 600px) 100vw, 600px" />
                                        <img width="600" height="470" src="/img/Hules-moldeo-extruido.png.webp" alt="Perfiles sobre diseño por moldeo, extrusión y maquinado" loading="lazy" srcset="/img/Hules-moldeo-extruido.png.webp 600w, /img/Hules-moldeo-extruido.png.webp 300w" sizes="(max-width: 600px) 100vw, 600px" class="max-w-full h-auto align-middle border-none inline-block" />
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