@extends('layouts.app')
@section('title', 'Cotiza sellos hidráulicos estáticos, o-rings & respaldos| Mx')
@section('description', 'Empaques hidráulicos de sellado para aplicaciones estáticas en válvulas, 
conexiones, guarniciones y contenedores tales como sellos estáticos o-rings y respaldos')

@section('structured-data')
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebPage",
      "name": "Cotiza sellos hidráulicos estáticos, o-rings & respaldos | Mx",
      "description": "Empaques hidráulicos de sellado para aplicaciones estáticas en válvulas, conexiones, guarniciones y contenedores tales como sellos estáticos o-rings y respaldos.",
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
            "name": "Sellos Individuales – Estáticos O-Rings"
          }
        ]
      },
      "mainEntity": {
        "@type": "Product",
        "name": "Sellos Estáticos O-Rings y Respaldos",
        "description": "O-Rings y respaldos (Back-up Rings) como componentes básicos de estanqueidad en sistemas hidráulicos, disponibles en materiales como Nitrilo, Viton, Silicon y Teflón, entre otros.",
        "brand": {
          "@type": "Brand",
          "name": "Dichtomatik"
        },
        "material": "NBR (Nitrilo), FKM (Viton), VQM (Silicon), EPDM (Neopreno), PTFE (Teflon), FFKM (Kalrez® / Isolast®)",
        "offers": {
          "@type": "Offer",
          "priceCurrency": "MXN",
          "url": "{{ url('sellos-hidraulicos/estaticos-o-rings') }}",
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
            "name": "¿Cuáles son los materiales disponibles para los O-Rings?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Disponemos de materiales como NBR (Nitrilo), FKM (Viton), Silicon, EPDM, PTFE y FFKM, adecuados para distintas aplicaciones y condiciones industriales."
            }
          },
          {
            "@type": "Question",
            "name": "¿Para qué aplicaciones son recomendados los O-Rings?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Los O-Rings son ideales para conexiones, válvulas, grifería, y como complementos de sellos dinámicos o primarios en aplicaciones cuasi-estáticas."
            }
          },
          {
            "@type": "Question",
            "name": "¿Qué otros sellos estáticos se ofrecen?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Ofrecemos sellos como Turcon® Variseal® para altas presiones y temperaturas, O-Rings encapsulados para la industria química, y otros perfiles elastoméricos especializados."
            }
          }
        ]
      }
    }
    </script>
    
@endsection



@section('contenido')


<section class="block relative transition-all duration-300 bg-gray-200">
    <div class="max-w-[1190px] flex mx-auto relative">
        <div class="w-full flex">
            <div class="w-full flex relative min-h-[1px]">
                <div class="w-full relative flex">
                    <div class="w-full flex flex-wrap items-start p-2.5">
                        <div class="w-full relative">
                            <div class="transition-all duration-300">
                                <div>
                                    <div>
                                        <div class="m-0 p-0">
                                            <ol itemscope="" itemtype="https://schema.org/BreadcrumbList" class="block list-none p-0 m-0 font-roboto w-auto float-left text-[16px] rounded bg-gray-200">
                                                <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem" class="inline-block text-[16px] px-1 py-3 rounded-l-md mr-1">
                                                    <span itemprop="name">
                                                        <a itemprop="item" href="{{ url('/') }}" class="text-blue-600 no-underline">
                                                            <i aria-hidden="true" class="fas fa-home mr-1"></i>Home
                                                        </a>
                                                    </span>
                                                    <meta itemprop="position" content="1" />
                                                </li>
                                                <li class="inline-block text-[16px] px-1 py-3 text-gray-400">/</li>
                                                <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem" class="inline-block text-[16px] px-1 py-3">
                                                    <a itemprop="item" href="{{ url('/sellos-hidraulicos') }}" title="Sellos Hidráulicos" class="text-blue-600 no-underline">
                                                        <span itemprop="name">Sellos Hidráulicos</span>
                                                    </a>
                                                    <meta itemprop="position" content="2" />
                                                </li>
                                                <li class="inline-block text-[16px] px-1 py-3 text-gray-400">/</li>
                                                <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem" class="inline-block text-[16px] px-1 py-3 rounded-r-md">
                                                    <span itemprop="name" title="Sellos Individuales – Estáticos O Rings" class="text-gray-900">Sellos Individuales – Estáticos O Rings</span>
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





<section class="block relative lg:mt-[100px]">
    <div class="max-w-[1190px] flex mx-auto relative">
        <div class="w-full lg:flex">
            <!-- Columna 1 -->
            <div class="lg:w-1/2 relative flex min-h-[1px]">
                <div class="w-full relative flex">
                    <div class="w-full flex flex-wrap items-start p-2.5">
                        <div class="w-full text-center relative">
                            <div class="transition-all duration-300">
                                <picture title="Sellos Turcon">
                                    <source type="image/webp" srcset="/img/o-rings-Dichtomatik.png.webp" />
                                    <img src="/img/o-rings-Dichtomatik.png.webp" alt="Sellos dinámicos Turcon" class="max-w-full h-auto align-middle border-none" />
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Columna 2 -->
            <div class="lg:w-1/2 relative flex min-h-[1px]">
                <div class="w-full relative flex">
                    <div class="w-full flex flex-wrap items-start p-2.5">
                        <!-- Título -->
                        <div class="w-full mb-5 relative">
                            <div class="transition-all duration-300">
                                <h1 class="text-[35px] leading-[45px] font-bold text-left text-gray-800 font-sans">
                                    <span class="inline-flex text-[#043e81] border-none">Sellos Estáticos. O-Rings y Respaldos.</span>
                                    <div class="after:content-[''] after:block after:bg-[#610001] after:w-[100px] after:h-[2px] after:mt-2 mx-auto"></div>
                                </h1>
                            </div>
                        </div>
                       <!-- Contenido -->
                <div class="w-full mb-5 text-gray-600 font-normal">
                    <div class="transition-all duration-300">
                        <p class="text-justify leading-[23px] mb-8 text-[#666666]">Los O-Rings en conjunto con los respaldos (Back-up Rings) son el componente básico de estanqueidad de cualquier sistema hidráulico. Están presentes en conexiones, válvulas, grifería, como complemento de sellos dinámicos de pistón y vástago, o incluso como sello primario en algunas aplicaciones dinámicas cuasi-estáticas poco demandantes.</p>
                        <p class="text-justify leading-[23px] mb-8 text-[#666666]">Si bien, sus rangos de operación resultan limitados, son muy económicos, de fácil instalación y se fabrican en una amplia gama de diámetros, durezas y materiales que brindan compatibilidad química prácticamente universal. Los más comunes NBR (Nitrilo), FKM (Viton), VQM (Silicon), EPDM (Neopreno), PTFE (Teflon) y FFKM; Perfluoelastómeros de alta densidad -KALREZ® / ISOLAST®.</p>
                        <p class="text-justify leading-[23px] mb-8 text-[#666666]">Miles de códigos de parte individuales, integrados en kits misceláneos o cordón por metro para vulcanizar; están disponibles para entrega inmediata.</p>
                        <p class="text-justify leading-[23px] mb-8 text-[#666666]">En dimensiones milimétricas y estándar conforme normativas ISO, DIN, AS y JIS.</p>
                        <p class="text-justify leading-[23px] mb-8 text-[#666666]">Solicite también información de nuestras soluciones de sellado para aplicaciones estáticas demandantes:</p>

                        <ul class="list-disc pl-5 text-[#666666]">
                            <li class="mb-4">
                                <h2 class="text-[20px] leading-[25px] font-semibold text-left text-[#2953b1] mb-2">Turcon® Variseal®</h2>
                                <p>.Perfiles en Composites de Teflón energizados por almas metálicas para altas presiones y temperaturas.</p>
                            </li>
                            <li class="mb-4">
                                <h2 class="text-[20px] leading-[25px] font-semibold text-left text-[#2953b1] mb-2">O-Rings encapsulados</h2>
                                <p>Para la industria química y farmacéutica.</p>
                            </li>
                            <li class="mb-4">Wills Rings O. Juntas tóricas de aleaciones metálicas.</li>
                            <li class="mb-4">Kant-Seal &amp; Dual-Seal. Otros perfiles elastoméricos para complementar o sustituir los O-Rings en guarniciones hidráulicas.</li>
                            <li class="mb-4">O-Rings especiales De grandes dimensiones &gt;2000 mm fabricados por técnicas especiales de moldeo, no vulcanizados.</li>
                        </ul>
                    </div>
                </div>

                <!-- Botón -->
                <div class="w-full relative">
                    <div class="transition-all duration-300">
                        <a href="#contacto" role="button" class="font-roboto font-extrabold bg-[#610001] text-white no-underline inline-block leading-[15px] text-[15px] py-3 px-6 rounded-[3px] text-center transition-all duration-300">Agendar asesoría</a>
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