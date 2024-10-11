@extends('layouts.app')
@section('title', 'Fabricación express de Sellos calidad Premium a medida | BSH')
@section('description', 'Fabricacion express de sellos no convencionales sobre diseño y aplicación por moldeo y maquinado en materiales mas comunes Nitrilo, Caucho, Viton, Silicon...')

@section('structured-data')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Fabricación express de Sellos calidad Premium a medida | BSH",
  "description": "Fabricación express de sellos no convencionales sobre diseño y aplicación en materiales como Nitrilo, Caucho, Viton, Silicon.",
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Home",
        "item": "{{ url('/') }}"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Sellos Hidráulicos",
        "item": "{{ url('/sellos-hidraulicos') }}"
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Sellos a la medida"
      }
    ]
  },
  "mainEntity": {
    "@type": "Product",
    "name": "Sellos a la medida Trelleborg®",
    "description": "Fabricación express de sellos sobre diseño o muestra, ideales para aplicaciones específicas y materiales variados.",
    "brand": {
      "@type": "Brand",
      "name": "Trelleborg"
    },
    "offers": {
      "@type": "Offer",
      "priceCurrency": "MXN",
      "url": "{{ url('sellos-hidraulicos/sellos-a-la-medida') }}",
      "price": "0", 
      "availability": "https://schema.org/InStock"
    }
  },
  "organization": {
    "@type": "Organization",
    "name": "BSH Industrial",
    "url": "https://bombasellos.com.mx",
    "logo": "https://bombasellos.com.mx/wp-content/uploads/2020/04/logo.png",
    "contactPoint": {
      "@type": "ContactPoint",
      "contactType": "customer service",
      "telephone": "+52-222-227-3866",
      "email": "bsh@bombasellos.com.mx"
    }
  },
  "mainEntityOfPage": {
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "¿Qué materiales están disponibles para la fabricación de sellos a medida?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Contamos con materiales como Nitrilo, Viton, Caucho natural, Silicón, y opciones de PTFE con cargas de bronce, grafito o fibra de vidrio."
        }
      },
      {
        "@type": "Question",
        "name": "¿Cuáles son los tiempos de entrega para los sellos fabricados a la medida?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Los sellos se fabrican en 1-2 días hábiles con disponibilidad express para necesidades urgentes."
        }
      },
      {
        "@type": "Question",
        "name": "¿Puedo solicitar soporte en la selección de perfiles y materiales?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Sí, ofrecemos soporte técnico para ayudarte a seleccionar los perfiles y materiales más adecuados para tus aplicaciones específicas."
        }
      }
    ]
  }
}
</script>
@endsection


@section('contenido')


<section data-id="27c803b" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style="display:block;box-sizing:border-box;transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;background-color:rgb(236, 236, 236);position:relative;">
    <div style="max-width:1190px;box-sizing:border-box;display:flex;margin-right: auto;margin-left: auto;position:relative;">
        <div style="box-sizing:border-box;width: 100%;display:flex;">
            <div data-id="95ef5ac" data-element_type="column" style="width: 100%;box-sizing:border-box;position:relative;display:flex;min-height:1px;">
                <div style="box-sizing:border-box;width: 100%;position:relative;display:flex;">
                    <div style="box-sizing:border-box;display:flex;position:relative;width: 100%;flex-wrap:wrap;align-content:flex-start;padding:10px;">
                        <div data-id="78aa1c0" data-element_type="widget" data-widget_type="shortcode.default" style="box-sizing:border-box;position:relative;width: 100%;">
                            <div style="box-sizing:border-box;transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s, -webkit-border-radius 0.3s, -webkit-box-shadow 0.3s;">
                                <div style="box-sizing:border-box;">
                                    <!-- Flexy Breadcrumb -->
                                    <div style="box-sizing:border-box;">

                                        <!-- Breadcrumb wrapper -->
                                        <div style="box-sizing:border-box;margin:0px;padding:0px;">

                                            <!-- Ordered list-->
                                            <ol itemscope="" itemtype="https://schema.org/BreadcrumbList" style="display:block;list-style-type:none;margin-block:0px;margin-inline:0px;padding-inline-start:0px;margin-top:0px;margin:0px;padding:0px;margin-bottom:0px;box-sizing:border-box;font-family:Roboto, sans-serif;width: auto;float:left;font-size:16px;list-style:outside none none;border-radius:4px;background-color:rgb(237, 239, 240);">
                                                <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem" style="box-sizing:border-box;padding:15px 0px 15px 16px;margin-right:3px;border-radius:4px 0px 0px 4px;padding-left:16px;padding-right:0px;line-height:normal;margin:0px 3px 0px 0px;display:inline-block;font-size:16px;">
                                                    <span itemprop="name">
                                                        <!-- Home Link -->
                                                        <a itemprop="item" href="{{ url('/') }}"
                                                            class="text-[#337ab7] no-underline transition-none">
                                                            <i aria-hidden="true" class="fas fa-home inline-block mr-[5px]"></i>Home
                                                        </a>
                                                    </span>
                                                    <meta itemprop="position" content="1" style="box-sizing:border-box;margin:0px;padding:0px;" /><!-- Meta Position-->
                                                </li>
                                                <li style="box-sizing:border-box;padding:15px 2px;line-height:normal;margin:0px;display:inline-block;font-size:16px;"><span style="box-sizing:border-box;margin:0px;padding:0px;color:rgb(204, 204, 204);">/</span></li>
                                                <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem" style="box-sizing:border-box;padding:15px 2px;line-height:normal;margin:0px;display:inline-block;font-size:16px;"><a itemprop="item" page-parent="1763" href="{{ url('/sellos-hidraulicos') }}"  title="Sellos Hidráulicos" style="color:rgb(51, 122, 183);text-decoration:none solid rgb(51, 122, 183);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;margin:0px;padding:0px;box-shadow:none;"><span itemprop="name" style="box-sizing:border-box;margin:0px;padding:0px;">Sellos Hidráulicos</span></a>
                                                    <meta itemprop="position" content="2" style="box-sizing:border-box;margin:0px;padding:0px;" />
                                                </li>
                                                <li style="box-sizing:border-box;padding:15px 2px;line-height:normal;margin:0px;display:inline-block;font-size:16px;"><span style="box-sizing:border-box;margin:0px;padding:0px;color:rgb(204, 204, 204);">/</span></li>
                                                <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem" style="box-sizing:border-box;padding:15px 15px 15px 2px;border-radius:0px 4px 4px 0px;padding-right:15px;line-height:normal;margin:0px;display:inline-block;font-size:16px;"><span itemprop="name" title="Sellos a la medida" style="box-sizing:border-box;margin:0px;padding:0px;color:rgb(39, 39, 42);font-size:16px;">Sellos a la medida</span>
                                                    <meta itemprop="position" content="3" style="box-sizing:border-box;margin:0px;padding:0px;" />
                                                </li>
                                            </ol>
                                            <div style="box-sizing:border-box;margin:0px;padding:0px;"></div>
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



<!-- Texto e imagen -->


<section class="relative block box-border lg:mt-[100px]">
    <div class="max-w-[1190px] mx-auto lg:flex relative">
        <div class="w-full lg:flex">
            <!-- Columna Izquierda -->
            <div class="lg:w-1/2 relative flex min-h-[1px]">
                <div class="w-full relative flex">
                    <div class="w-full flex flex-wrap content-start p-[10px] box-border">
                        <div class="w-full text-center relative box-border">
                            <div class="transition-all duration-300 box-border">
                                <picture loading="lazy" title="Sellos a la medida 1" class="box-border">
                                    <source type="image/webp" srcset="/img/Fabricacion-Sellos.png.webp 700w" sizes="(max-width: 700px) 100vw, 700px" />
                                    <img width="700" height="500" src="/img/Fabricacion-Sellos.png" alt="Fabricación sellos sobre diseño o muestra" loading="lazy" class="max-w-full h-auto align-middle border-none inline-block shadow-none box-border" />
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Columna Derecha -->
            <div class="lg:w-1/2 relative flex min-h-[1px]">
                <div class="w-full relative flex">
                    <div class="w-full flex flex-wrap content-start p-[10px] box-border">
                        <div class="w-full relative mb-5 box-border">
                            <div class="transition-all duration-300 box-border">
                                <h1 class="text-left text-[35px] leading-[44px] font-semibold text-[#666666] font-open-sans m-0">
                                    <span class="text-[#043e81] font-semibold font-roboto">Sellos a la medida.</span>
                                    <div class="after:content-[''] after:block after:bg-[#610001] after:w-[100px] after:h-[2px] after:mt-2 mx-auto"></div>
                                </h1>
                            </div>
                        </div>
                        <div class="w-full relative text-justify mb-5 box-border">
                            <div class="transition-all duration-300 box-border">
                                <p class="text-[#666666] leading-[27px] mb-[32px] font-roboto font-normal">Fabricación express de todo tipo de perfiles.</p>
                                <p class="text-[#666666] leading-[27px] mb-[32px] font-roboto font-normal">Una gran opción para perfiles obsoletos, no de línea, sellos difíciles de encontrar o con tiempos de entrega muy largos.</p>
                                <p class="text-[#666666] leading-[27px] mb-[32px] font-roboto font-normal">Los sellos maquinados FPE están disponibles en composites de teflón con cargas minerales de bronce, grafito o fibra de vidrio, de poliuretano y materiales elastoméricos comunes como Nitrilo-NBR, Viton-FKM, Silicón-VMQ o caucho natural.</p>
                                <p class="text-[#666666] leading-[27px] mb-[32px] font-roboto font-normal">Si bien el rendimiento esperado es menor al de un sello de molde; el precio es muy bajo al no haber costes de herramental y ofrecen una solución rápida en 1-2 días hábiles.</p>
                                <p class="text-[#666666] leading-[27px] mb-[32px] font-roboto font-normal">Soporte en la selección de los perfiles y materiales más adecuados para cada aplicación.</p>
                            </div>
                        </div>
                        <div class="w-full relative box-border">
                            <div class="transition-all duration-300 box-border">
                                <a href="#contacto" role="button" class="inline-block font-roboto font-black bg-[#610001] text-white text-[15px] py-[12px] px-[24px] rounded-[3px] text-center transition-all duration-300">Agendar asesoría</a>
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