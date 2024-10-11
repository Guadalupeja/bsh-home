@extends('layouts.app')
@section('title', 'Sellos rotativos, retenes v-rings turcon sellos individuales')
@section('description', 'Sellos rotativos en ejes de motores, transmisiones, multiplicadoras, husillos, 
flechas de centros de maquinado, entre otros. retenes, v-rings, sellos de Turcon®')

@section('structured-data')
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebPage",
      "name": "Sellos rotativos, retenes v-rings turcon sellos individuales",
      "description": "Sellos rotativos en ejes de motores, transmisiones, multiplicadoras, husillos, flechas de centros de maquinado. Retenes, v-rings, sellos de Turcon®.",
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
            "name": "Sellos Rotativos. Retenes, V-Rings y Turcon®"
          }
        ]
      },
      "mainEntity": {
        "@type": "Product",
        "name": "Sellos Rotativos. Retenes y V-Rings",
        "description": "Sellos rotativos como retenes y v-rings para ejes de motores y transmisiones. Garantizan estanqueidad, durabilidad y resistencia química bajo condiciones industriales exigentes.",
        "brand": {
          "@type": "Brand",
          "name": "Forsheda®"
        },
        "material": "NBR (Nitrilo), HNBR (Nitrilo Hidrogenado), FKM (Viton), ACM (Caucho Poli-Acrílico), VMQ (Silicona)",
        "offers": {
          "@type": "Offer",
          "priceCurrency": "MXN",
          "url": "{{ url('sellos-hidraulicos/rotativos-retenes-v-rings') }}",
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
            "name": "¿Qué tipos de materiales están disponibles para los retenes y V-Rings?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Los materiales disponibles incluyen NBR (Nitrilo), HNBR (Nitrilo Hidrogenado), FKM (Viton), ACM (Caucho Poli-Acrílico) y VMQ (Silicona), adecuados para una variedad de aplicaciones industriales."
            }
          },
          {
            "@type": "Question",
            "name": "¿Para qué aplicaciones son recomendados los retenes y V-Rings?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Son ideales para ejes de motores, transmisiones, multiplicadoras, husillos de máquinas herramienta, y bombas hidráulicas, protegiendo contra el polvo, suciedad, y retención de grasa."
            }
          },
          {
            "@type": "Question",
            "name": "¿Qué otras soluciones de sellado están disponibles?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Disponemos de sellos rotativos Turcon® con materiales PTFE para aplicaciones que requieren baja fricción y durabilidad, ideales para transmisiones y compresores."
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
                                                    <span itemprop="name" title="Sellos Rotativos. Retenes, V-Rings y Turcon®" class="text-gray-900">Sellos Rotativos. Retenes, V-Rings y Turcon®</span>
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
            <div class="lg:w-1/2 flex relative min-h-[1px]">
                <div class="w-full flex relative">
                    <div class="w-full flex flex-wrap items-start p-2.5">
                        <div class="w-full relative">
                            <div class="transition-all duration-300">
                                <div class="relative mx-auto overflow-hidden z-10 pb-8">
                                    <div class="relative w-full h-[483px] flex transition-transform">
                                        <div class="w-full h-[483px] flex-shrink-0 text-center relative">
                                            <figure class="m-0 block">
                                                <picture title="Sellos Rotativos. Retenes, V-Rings y Turcon® 1">
                                                    <source type="image/webp" srcset="/img/V-Ring-V-250-A.png.webp" />
                                                    <img src="/img/V-Ring-V-250-A.png.webp" alt="V-Rings V-70 A en nitrilo" class="max-w-full h-auto align-middle border-none" />
                                                </picture>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Columna 2 -->
            <div class="lg:w-1/2 flex relative min-h-[1px]">
                <div class="w-full flex relative">
                    <div class="w-full flex flex-wrap items-start p-2.5">
                        <!-- Título -->
                        <div class="w-full mb-5 relative">
                            <div class="transition-all duration-300">
                                <h1 class="text-[35px] leading-[45px] font-bold text-left text-gray-800 font-sans">
                                    <span class="inline-flex text-[#043e81]">Retenes y V-Rings.</span>
                                    <div class="after:content-[''] after:block after:bg-[#610001] after:w-[100px] after:h-[2px] after:mt-2 mx-auto"></div>
                                </h1>
                            </div>
                        </div>
                        <!-- Contenido -->
                        <div class="w-full mb-5 text-gray-600 font-normal">
                            <div class="transition-all duration-300">
                                <p class="text-justify leading-[23px] mb-8 text-[#666666]">Los Retenes Radiales son el elemento de estanqueidad en aplicaciones rotativas como por ejemplo ejes de motores, transmisiones por engranes, multiplicadoras, compresores, husillos de máquinas herramienta o bombas hidráulicas.</p>
                                <p class="text-justify leading-[23px] mb-8 text-[#666666]">En muchas de estas aplicaciones se alcanzan velocidades superficiales de hasta 30 m/s, temperaturas de 200 ºC y el elemento de sellado suele encontrarse parcial o totalmente embebido en el fluido de trabajo; por lo que ha de garantizarse que los perfiles y materiales cumplan con un rango operativo demandante y buena compatibilidad química con lubricantes, grasas, aceites minerales y sintéticos.</p>
                                <p class="text-justify leading-[23px] mb-8 text-[#666666]">Hemos por ello integrado retenes de Nitrilo NBR, Nitrilo Hidrogenado HNBR, Vitón FKM, Caucho Poli-Acrilico ACM, Silicona VMQ y fabricaciones especiales en compuestos elastoméricos con la gama más amplia de perfiles con alma de acero y energizador tipo muelle metálico de resortes para aplicaciones demandantes, bajo las normativas ISO, DIN y AS.</p>
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
        </div>
    </div>
</section>




<section class="block relative">
    <div class="max-w-[1190px] flex mx-auto relative">
        <div class="w-full lg:flex">
            <!-- Columna 1 -->
            <div class="lg:w-1/2 flex relative min-h-[1px]">
                <div class="w-full flex relative">
                    <div class="w-full flex flex-wrap items-start p-2.5">
                        <!-- Título -->
                        <div class="w-full mb-5 relative">
                            <div class="transition-all duration-300">
                                <h2 class="text-[20px] leading-[25px] font-semibold text-left text-[#2953b1] font-sans">
                                    <span class="inline-flex text-[#043e81]">V-Rings</span>
                                    <div class="after:content-[''] after:block after:bg-[#610001] after:w-[100px] after:h-[2px] after:mt-2 mx-auto"></div>
                                </h2>
                            </div>
                        </div>
                        <!-- Contenido -->
                        <div class="w-full mb-5 text-gray-600 font-normal">
                            <div class="transition-all duration-300">
                                <p class="text-justify leading-[23px] mb-8 text-[#666666]">Un V-Ring no es propiamente un elemento de sellado, si no que se emplea para proteger elementos alrededor de un eje como por ejemplo rodamientos; de suciedad, polvo, agua, scrap, al tiempo que retiene la grasa lubricante.</p>
                                <p class="text-justify leading-[23px] mb-8 text-[#666666]">Otra aplicación común es como junta en el empalme de cámaras y compuertas en calderas, lavadoras industriales y otras máquinas industriales que no requieren perfiles para alta presión.</p>
                                <p class="text-justify leading-[23px] mb-8 text-[#666666]">Se encuentra disponible en Nitrilo NBR, Viton FKM y Silicon VMQ en cinco perfiles diferentes y para diámetros de hasta 2000 mm.</p>
                                <p class="text-justify leading-[23px] mb-8 text-[#666666]">Aunque innumerables fabricantes han replicado este perfil original de Forsheda®, el desempeño, durabilidad, rango de materiales y dimensiones lo concibe aún como uno de nuestros productos mejor posicionados en la industria.</p>
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
            <!-- Columna 2 -->
            <div class="lg:w-1/2 flex relative min-h-[1px]">
                <div class="w-full flex relative">
                    <div class="w-full flex flex-wrap items-start p-2.5">
                        <div class="w-full relative">
                            <div class="transition-all duration-300">
                                <div class="relative mx-auto overflow-hidden z-10 pb-8">
                                    <div class="relative w-full h-[483px] flex transition-transform">
                                        <div class="w-full h-[483px] flex-shrink-0 text-center relative">
                                            <figure class="m-0 block">
                                                <picture title="Sellos Rotativos. Retenes, V-Rings y Turcon® 2">
                                                    <source type="image/webp" srcset="/img/Reten-Aceite-Nitrilo-1.png.webp" />
                                                    <img src="/img/Reten-Aceite-Nitrilo-1.png" alt="Reten radial de acite en nitrilo" class="max-w-full h-auto align-middle border-none" />
                                                </picture>
                                            </figure>
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






<section class="block relative">
    <div class="max-w-[1190px] flex mx-auto relative">
        <div class="w-full lg:flex">
            <!-- Columna 1 -->
            <div class="lg:w-1/2 flex relative min-h-[1px]">
                <div class="w-full flex relative">
                    <div class="w-full flex flex-wrap items-start p-2.5">
                        <div class="w-full text-center relative">
                            <div class="transition-all duration-300">
                                <picture title="Sello rotativo base teflón">
                                    <source type="image/webp" srcset="/img/Turcon-Roto-GlydRing-1.png.webp" />
                                    <img src="/img/Turcon-Roto-GlydRing-1.png.webp" alt="Sello rotativo Turcon" class="max-w-full h-auto align-middle border-none" />
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Columna 2 -->
            <div class="lg:w-1/2 flex relative min-h-[1px]">
                <div class="w-full flex relative">
                    <div class="w-full flex flex-wrap items-start p-2.5">
                        <!-- Título -->
                        <div class="w-full mb-5 relative">
                            <div class="transition-all duration-300">
                                <h2 class="text-[20px] leading-[25px] font-semibold text-left text-[#2953b1] font-sans">
                                    <span class="inline-flex text-[#043e81]">Sellos Turcon® Rotativos.</span>
                                </h2>
                                <div class="after:content-[''] after:block after:bg-[#610001] after:w-[100px] after:h-[2px] after:mt-2 mx-auto"></div>

                            </div>
                        </div>
                        <!-- Contenido -->
                        <div class="w-full mb-5 text-gray-600 font-normal">
                            <div class="transition-all duration-300">
                                <p class="text-justify leading-[23px] mb-8 text-[#666666]">Otras soluciones de sellado incluyen los sellos rotativos del material patentado Turcon®, de base PTFE (teflón) con cargas minerales y aditivos que garantizan la estanqueidad, baja fricción, memoria de forma y durabilidad incluso en las condiciones más demandantes.</p>
                                <p class="text-justify leading-[23px] mb-8 text-[#666666]">Estos sellos rotativos son muy comunes en ejes de transmisiones, compresores y centros de maquinado.</p>
                                <p class="text-justify leading-[23px] mb-8 text-[#666666]">Amplias existencias para entrega inmediata a nivel nacional y asesoría gratuita en la selección del producto adecuado para su aplicación.</p>
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