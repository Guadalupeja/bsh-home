@extends('layouts.app')
@section('title', 'Mejores sellos hidraúlicos estáticos o-rings, rotativos 2024')
@section('description', 'Cotiza o-rings, v-rings, sellos dinámicos en turcon, cintas guía de orkot y turcite, 
retenes rotativos y toda la línea de Trelleborg 2024. Entrega inmediata.')

@section('structured-data')

<!-- Datos estructurados de la organización -->
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebPage",
      "name": "Mejores sellos hidraúlicos estáticos o-rings, rotativos 2024",
      "description": "Cotiza o-rings, v-rings, sellos dinámicos en turcon, cintas guía de orkot y turcite, retenes rotativos y toda la línea de Trelleborg 2024. Entrega inmediata.",
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
            "name": "Sellos Hidráulicos"
          }
        ]
      },
      "mainEntity": {
        "@type": "Product",
        "name": "Sellos Hidráulicos Trelleborg®",
        "description": "Distribuidores a nivel nacional de la marca Trelleborg® con amplias existencias de toda su gama de productos.",
        "brand": {
          "@type": "Brand",
          "name": "Trelleborg"
        },
        "offers": {
          "@type": "Offer",
          "priceCurrency": "MXN",
          "url": "{{ url('sellos-hidraulicos/sellos-individuales-dinamicos-de-piston-y-vastago') }}",
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
            "name": "¿Qué gama de sellos Trelleborg individuales existe?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Existen O-Rings, Copas U, retenes, V-rings en elastómeros comunes como Nitrilo, Vitón, Neopreno y Poliuretano, entre otros."
            }
          },
          {
            "@type": "Question",
            "name": "¿Dónde puedo comprar kits de sellos de pistón hidráulicos?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Puedes comprar kits de sellos de pistón hidráulicos en nuestro catálogo en línea en la página de BSH."
            }
          },
          {
            "@type": "Question",
            "name": "¿Dónde puedo solicitar la fabricación de sellos a medida?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Puedes solicitar la fabricación de sellos a medida a través de nuestra página web en la sección de sellos personalizados."
            }
          }
        ]
      }
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
                                           <!-- Ordered list -->
                                                <ol itemscope itemtype="https://schema.org/BreadcrumbList"
                                                class="block list-none m-0 p-0 float-left font-roboto text-[16px] rounded-[4px] bg-[#edf1f0]">
                                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"
                                                    class="inline-block p-[15px_0_15px_16px] mr-[3px] rounded-l-[4px] text-[16px] leading-normal">
                                                    <span itemprop="name">
                                                        <!-- Home Link -->
                                                        <a itemprop="item" href="{{ url('/') }}"
                                                            class="text-[#337ab7] no-underline transition-none">
                                                            <i aria-hidden="true" class="fas fa-home inline-block mr-[5px]"></i>Home
                                                        </a>
                                                    </span>
                                                    <meta itemprop="position" content="1" />
                                                </li>
                                                <li class="inline-block p-[15px_2px] text-[16px] leading-normal text-[#cccccc]">/</li>
                                                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"
                                                    class="inline-block p-[15px_15px_15px_2px] rounded-r-[4px] text-[16px] leading-normal text-[#27272a]">
                                                    <span itemprop="name" title="Sellos Hidráulicos">Sellos Hidráulicos</span>
                                                    <meta itemprop="position" content="2" />
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










<section class=" bg-[#a4addd] bg-cover" style="background-image:url('/img/bombas-industriales.jpg'); transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;">
   
</section>













<section class=" bg-[#a4addd] bg-cover lg:p-[80px]" style="background-image:url('/img/bombas-industriales.jpg'); transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;">
        <div class="w-full lg:flex">
            <!-- Columna Izquierda -->
            <div class="lg:flex lg:w-[53.719%] min-h-[1px]">
                <div class="w-full flex">
                    <div class="flex w-full flex-wrap content-start p-[10px]">
                        <div class="w-full mb-5">
                            <div class="mx-8 transition-all duration-300">
                                <div role="tablist" class="text-left">
                                    <!-- Acordeón Título -->
                                    <div class="border border-gray-300 rounded-lg">
                                        <div data-tab="1" role="tab" aria-controls="tab-content-1" aria-expanded="false" tabindex="0" aria-selected="false"
                                            class="bg-[#610001] text-white font-semibold p-4 rounded-t-lg cursor-pointer flex justify-between items-center" onclick="toggleAccordion(event)">
                                            <span class="text-lg">Tabla de Contenido</span>
                                            <span class="accordion-icon">+</span>
                                        </div>
                                        <!-- Acordeón Contenido -->
                                        <div id="tab-content-1" class="hidden p-4 bg-none text-white border-t border-gray-300 rounded-b-lg">
                                            <ol class="list-decimal ml-6">
                                                <li><a href="#T1" class="text-white hover:underline block py-1">Sellos hidráulicos Trelleborg</a></li>
                                                <li><a href="#T2" class="text-white hover:underline block py-1">Catálogo general de productos</a></li>
                                                <li><a href="#T3" class="text-white hover:underline block py-1">Sellos individuales</a></li>
                                                <li><a href="#T4" class="text-white hover:underline block py-1">Kits de sellos hidráulicos</a></li>
                                                <li><a href="#T5" class="text-white hover:underline block py-1">Fabricación de sellos a medida</a></li>
                                                <li><a href="#T6" class="text-white hover:underline block py-1">Cotiza ahora mismo</a></li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Heading Widget -->
                        <div data-id="e0a875b" data-element_type="widget" data-widget_type="heading.default" class="w-full relative text-center mb-[20px]">
                            <div class="transition-all duration-300">
                                <h1 class="text-white font-roboto font-semibold text-[35px] leading-[35px] m-0">Sellos Hidráulicos Trelleborg®</h1>
                            </div>
                        </div>
                        <!-- Text Editor Widget -->
                        <div data-id="a6fae48" data-element_type="widget" data-widget_type="text-editor.default" class="w-full relative text-justify mb-[20px]">
                            <div class="m-[5px] p-[5px] transition-all duration-300">
                                <div>
                                    <p class="text-white leading-[27px] mb-[32px] mt-0">
                                        Desde el año 2010 somos Distribuidores a nivel nacional de la marca Trelleborg® contando con amplias existencias de toda su gama de producto:
                                    </p>





                        <!-- Icon List Widget -->
                        <div data-id="fc2f99d" data-element_type="widget" data-widget_type="icon-list.default" class="w-full relative mb-[20px]">
                            <div class="m-[5px] p-[5px] transition-all duration-300">
                                <ul class="list-none m-0 p-0">
                                    <li class="flex text-left items-center font-[15px] pb-[21px]">
                                        <a href="{{ url('sellos-hidraulicos/sellos-individuales-dinamicos-de-piston-y-vastago') }}" class="font-roboto font-normal text-lg text-white no-underline underline flex items-center w-full">
                                            <span class="flex text-left">
                                                <i aria-hidden="true" class="fas fa-check text-[#6ec1e4] w-[1.25em] text-[14px]"></i>
                                            </span>
                                            <span class="text-white text-shadow-md align-middle pl-[5px]">Sellos de pistón hidráulicos Trelleborg</span>
                                        </a>
                                    </li>
                                    <li class="flex text-left items-center font-[15px] pb-[21px] mt-[21px]">
                                        <a href="{{ url('sellos-hidraulicos/sellos-individuales-estaticos-o-rings') }}" class="font-roboto font-normal text-lg text-white no-underline underline flex items-center w-full">
                                            <span class="flex text-left">
                                                <i aria-hidden="true" class="fas fa-check text-[#6ec1e4] w-[1.25em] text-[14px]"></i>
                                            </span>
                                            <span class="text-white text-shadow-md align-middle pl-[5px]">O-rings y estáticos Trelleborg</span>
                                        </a>
                                    </li>
                                    <li class="flex text-left items-center font-[15px] mt-[21px]">
                                        <a href="{{ url('sellos-hidraulicos/sellos-individuales-rotativos') }}" class="font-roboto font-normal text-lg text-white no-underline underline flex items-center w-full">
                                            <span class="flex text-left">
                                                <i aria-hidden="true" class="fas fa-check text-[#6ec1e4] w-[1.25em] text-[14px]"></i>
                                            </span>
                                            <span class="text-white text-shadow-md align-middle pl-[5px]">Sellos rotativos Trelleborg</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>




                        <!-- Text Editor Widget -->
                        <div data-id="38c4351" data-element_type="widget" data-widget_type="text-editor.default" class="w-full relative text-justify">
                            <div class="m-[5px] p-[5px] transition-all duration-300">
                                <div>
                                    <p class="text-white leading-[27px] mb-[32px] mt-0">
                                        <a href="https://www.trelleborg.com/es-es/seals?_gl=1*xdgw9l*_up*MQ..&amp;gclid=CjwKCAjwy_aUBhACEiwA2IHHQNsZJjPHCOyJpKgqkclUZloFgRZyPv2HDvpejUpxUU7J22glOhrhuBoC3moQAvD_BwE" target="_blank" rel="noopener" class="text-white no-underline"><u><strong>Trelleborg®</strong></u></a> es un fabricante líder en el ramo con amplio posicionamiento OEM de sus perfiles y materiales patentados Turcon®, Turcite®, Orkot®, Isolast®, Zurcon® entre otros.
                                    </p>
                                    <!-- Más párrafos aquí -->
                                </div>
                            </div>
                        </div>




                                    <p class="text-white leading-[27px] mb-[32px] mt-0">
                                        Con nosotros encontrará la gama más amplia de producto para cualquier especificación técnica, con más de 30,000 códigos de parte conforme las normativas ISO, 
                                        DIN, AS y JIS en todo tipo de juntas y materiales antifricción-desgaste. 
                                    </p>

                                    <p class="text-white leading-[27px] mb-[32px] mt-0">
                                        Contamos con los perfiles más usados como O-Rings, Copas U, retenes y V-rings en elastómeros comunes; Nitrilo, Vitón, Neopreno o Poliuretano, pero también con los sellos dinámicos, limpiadores y cintas guía exclusivos de la marca en materiales para aplicaciones 
                                        demandantes base PTFE con cargas minerales de bronce, grafito, fibra de vidrio y carbono.
                                    </p>
                                    <p class="text-white leading-[27px] mb-[32px] mt-0">
                                    Las Juntas de Estanqueidad son un componente esencial de cualquier sistema hidráulico lineal, rotativo o estático. Ya sea un pistón, una conexión, 
                                    bomba, unidad de potencia o un elemento de control como una válvula.
                                </p>
                                </div>
                            </div>
                        </div>

                        <!-- Button Widget -->
                        <div data-id="29e0f8f" data-element_type="widget" data-widget_type="button.default" class="w-full relative text-center mb-[20px]">
                            <div class="transition-all duration-300">
                                <div>
                                    <a href="#GAMA" role="button" class="font-roboto font-black bg-[#610001] text-white inline-block text-[15px] py-[12px] px-[24px] rounded-[3px] text-center transition-all duration-300">
                                        <span class="flex justify-center">
                                            <span class="block">VER GAMA DE PRODUCTOS</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Spacer Widget -->
                        <div data-id="4795edb" data-element_type="widget" data-widget_type="spacer.default" class="w-full relative">
                            <div class="transition-all duration-300">
                                <div>
                                    <div class="h-[10px]"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Columna Derecha -->
            <div data-id="b9f9164" data-element_type="column" class="relative lg:flex lg:w-[46.28%] min-h-[1px]">
                <div class="w-full relative flex">
                    <div class="flex w-full flex-wrap content-start p-[10px]">
                        <!-- Image Widget -->
                        <div data-id="d8d602e" data-element_type="widget" data-widget_type="image.default" class="w-full relative text-center mb-[20px]">
                            <div class="transition-all duration-300">
                                <div>
                                    <picture title="Pistón hidráulico con sello dinámico Trelleborg">
                                        <source type="image/webp" srcset="/img/sellos-trelleborg.png.webp" />
                                        <img src="/img/sellos-trelleborg.png.webp" alt="Pistón hidráulico con sellos Trelleborg" class="max-w-[89%] h-auto align-middle border-none inline-block" />
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <!-- Heading Widget -->
                        <div data-id="7757abf" data-element_type="widget" data-widget_type="heading.default" class="w-full relative mb-[20px]">
                            <div class="transition-all duration-300">
                                <h2 class="text-white font-roboto font-semibold text-[20px] leading-[20px] m-0">Distribuidores Trelleborg Seals en México</h2>
                            </div>
                        </div>
                        <!-- Text Editor Widget -->
                        <div data-id="f4a0a49" data-element_type="widget" data-widget_type="text-editor.default" class="w-full relative text-justify mb-[20px]">
                            <div class="m-[5px] p-[5px] transition-all duration-300">
                                <div>
                                    <p class="text-white leading-[27px] mb-[32px] mt-0 box-border">
                                        Nuestros ingenieros de ventas le ayudarán a conocer y determinar adecuadamente los parámetros de operación, su sistema para la selección del sello adecuado; Tales como la presión, la temperatura, las características de fluido empleado, la rugosidad de los componentes, las dimensiones críticas, las normativas aplicables y, por supuesto, la expectativa de vida.
                                    </p>
                                    <p class="text-white leading-[27px] mb-[32px] mt-0 box-border">
                                        Tenemos presencia local y fuerza de ventas en Ciudad de México, Puebla, Tamaulipas, San Luis Potosí, Monterrey, Edomex y Veracruz. Solicita asesoría directa en nuestro sitio de 
                                        <a href="https://bombasellos.com.mx/contacto/" target="_blank" rel="noopener" class="text-white no-underline">
                                            <span class="underline font-bold">contacto</span>
                                        </a>.
                                    </p>
                                    <p class="text-white leading-[27px] mb-[32px] mt-0 box-border">
                                        Sabemos que distintas Industrias requerirán soluciones muy específicas, incluso materiales o perfiles “a la medida” para los que contamos con capacidades de
                                        <a href="https://bombasellos.com.mx/sellos-hidraulicos/sellos-a-la-medida/" target="_blank" rel="noopener" class="text-white underline no-underline">
                                            <strong class="font-bold underline">fabricación express</strong>
                                        </a> por moldeo y maquinado.
                                    </p>
                                    <p class="text-white leading-[27px] mb-[32px] mt-0 box-border">
                                        En nuestro catálogo en línea de Kits de Sellos podrá encontrar:
                                    </p>

                                </div>
                            </div>
                        </div>
                        <!-- Icon List Widget -->
                        <div data-id="536c0d9" data-element_type="widget" data-widget_type="icon-list.default" class="w-full relative mb-[20px]">
                            <div class="m-[5px] p-[5px] transition-all duration-300">
                                <ul class="list-none m-0 p-0">
                                    <li class="flex text-left items-center font-[15px] pb-[16.5px]">
                                        <a href="https://bombasellos.com.mx/kits-o-rings/" class="font-roboto font-normal text-lg text-white no-underline flex items-center w-full">
                                            <span class="flex text-left">
                                                <i aria-hidden="true" class="fas fa-check text-[#6ec1e4] w-[1.25em] text-[14px]"></i>
                                            </span>
                                            <span class="text-white align-middle pl-[5px]">Kits de o-rings</span>
                                        </a>
                                    </li>
                                    <li class="flex text-left items-center font-[15px] pb-[16.5px] mt-[16.5px]">
                                        <a href="https://bombasellos.com.mx/kits-maquinaria-pesada/" class="font-roboto font-normal text-lg text-white no-underline flex items-center w-full">
                                            <span class="flex text-left">
                                                <i aria-hidden="true" class="fas fa-check text-[#6ec1e4] w-[1.25em] text-[14px]"></i>
                                            </span>
                                            <span class="text-white align-middle pl-[5px]">Kits de sellos dinámicos para maquinaria pesada móvil</span>
                                        </a>
                                    </li>
                                    <li class="flex text-left items-center font-[15px] mt-[16.5px]">
                                        <a href="https://bombasellos.com.mx/kits-maquinaria-industrial/" class="font-roboto font-normal text-lg text-white no-underline flex items-center w-full">
                                            <span class="flex text-left">
                                                <i aria-hidden="true" class="fas fa-check text-[#6ec1e4] w-[1.25em] text-[14px]"></i>
                                            </span>
                                            <span class="text-white align-middle pl-[5px]">Maquinaria industrial</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Final Text Editor -->
                        <div data-id="8bde633" data-element_type="widget" data-widget_type="text-editor.default" class="w-full relative text-justify">
                            <div class="m-[5px] p-[5px] transition-all duration-300">
                                <div>
                                    <p class="text-white leading-[27px] mb-[32px] mt-0">
                                        con cruzabilidad directa marca-modelo, amplio stock y precios competitivos.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Aquí puedes continuar con otros widgets -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>









<div class="box-border flex relative w-full flex-wrap content-start p-2.5">
    <div data-id="0086533" data-element_type="widget" data-widget_type="spacer.default" class="mb-5 box-border relative w-full">
        <div class="box-border transition duration-300 ease-in-out">
            <div class="box-border">
                <div class="box-border h-5"></div>
            </div>
        </div>
    </div>
    <div data-id="041e471" data-element_type="widget" data-widget_type="mdp-headinger-elementor.default" class="box-border relative w-full">
        <div class="box-border transition duration-300 ease-in-out">
            <div class="box-border">
                <div class="text-gray-500 box-border">
                    <div class="font-roboto font-semibold box-border w-full absolute select-none"></div>
                </div>
                <h2 class="text-lg text-blue-900 leading-6 mt-0 mb-0 font-semibold font-open-sans text-center break-all box-border">
                    <div class="box-border inline-block relative z-1">
                        <div class="px-[50px] leading-[37px] font-roboto font-semibold text-blue-800 border-none box-border inline-flex lg:text-[41px] text[35px]">
                            ¿Dónde descargar el catálogo general de productos de la marca Trelleborg®(busak shamban catálogo)?
                        </div>
                        <div class="box-border mt-2.5 leading-0 bg-transparent"></div>
                    </div>
                </h2>
            </div>
        </div>
    </div>
</div>




<section data-id="2673445" data-element_type="section" class="relative bg-[#a4addd] bg-cover" style="background-image:url('https://bombasellos.com.mx/wp-content/uploads/2020/04/bombas-industriales.jpg'); transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;">
    <div class="absolute top-0 left-0 w-full h-[446px] opacity-50 transition-opacity duration-300"></div>
    <div class="max-w-[1190px] min-h-[164px] flex items-center mx-auto relative">
        <div class="w-full lg:flex">
            <div data-id="ac3ab8e" class="lg:w-1/2 relative flex min-h-[1px]">
                <div class="w-full relative flex">
                    <div class="flex w-full flex-wrap content-start p-4">
                        <div data-id="4c96ebc" class="w-full mb-0">
                            <div class="p-4 bg-[#610001] transition duration-300 ease-in-out rounded-md">
                                <h2 class="text-white font-roboto font-semibold text-[20px] leading-[20px] m-0">
                                    Sellos Turcón y Zurcon para Pistón y Vástago, Retenes, V-rings y O-rings línea Trelleborg®.
                                </h2>
                            </div>
                        </div>
                        <div data-id="834be5e" class="text-center w-full mb-4">
                            <div class="transition duration-300 ease-in-out">
                                <picture title="Cilindro hidráulico con sello Turcon">
                                    <source type="image/webp" srcset="/img/Turcon.png.webp" />
                                    <img src="/img/Turcon.png.webp" alt="Piston con sellos dinamicos Turcon" class="max-w-full h-[250px] object-contain inline-block border-none shadow-none" />
                                </picture>
                            </div>
                        </div>
                        <div data-id="62fd562" class="text-center w-full">
                            <div class="m-2.5 transition duration-300 ease-in-out">
                                <a href="/docs/PRODUCT-RANGE-TSS.pdf" target="_blank" class="inline-block bg-[#610001] text-white text-[16px] font-roboto font-medium p-[15px_30px] rounded-[4px] transition duration-300">
                                    Descarga aquí
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-id="ccbd5f5" class="lg:w-1/2 relative flex min-h-[1px]">
                <div class="w-full relative flex">
                    <div class="flex w-full flex-wrap content-start p-4">
                        <div data-id="b3d90a1" class="w-full mb-0">
                            <div class="p-4 bg-[#610001] transition duration-300 ease-in-out rounded-md">
                                <h2 class="text-white font-roboto font-semibold text-[20px] leading-[20px] m-0">
                                    Catálogos, Fichas Técnicas y presentaciones por Industria o línea Trelleborg®.
                                </h2>
                            </div>
                        </div>
                        <div data-id="831e194" class="text-center w-full mb-4">
                            <div class="transition duration-300 ease-in-out">
                                <picture title="Sellos hidráulicos línea trelleborg">
                                    <source type="image/webp" srcset="/img/sellos-hidraulicos-trelleborg.png.webp" />
                                    <img src="/img/sellos-hidraulicos-trelleborg.png.webp" alt="Sellos hidraulicos trelleborg" class="max-w-full h-[250px] object-contain inline-block border-none shadow-none" />
                                </picture>
                            </div>
                        </div>
                        <div data-id="1df1dc1" class="text-center w-full">
                            <div class="m-2.5 transition duration-300 ease-in-out">
                                <a  href="{{ url('blog-bsh') }}" class="inline-block bg-[#610001] text-white text-[16px] font-roboto font-medium p-[15px_30px] rounded-[4px] transition duration-300">
                                    Descarga aquí
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>










<section class="relative block box-border">
    <div class="max-w-[1190px] mx-auto flex relative box-border">
        <div class="w-full flex box-border">
            <div class="w-full flex relative box-border min-h-[1px]">
                <div class="w-full relative flex box-border">
                    <div class="w-full flex flex-wrap content-start p-2.5 box-border">
                        <div class="w-full mb-5 box-border relative">
                            <div class="transition duration-300 ease-in-out">
                                <div class="box-border">
                                    <div class="h-[30px] box-border"></div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full relative box-border">
                            <div class="transition duration-300 ease-in-out box-border">
                                <div class="box-border">
                                    <div class="text-[#7a7a7a] box-border">
                                        <div class="font-roboto font-semibold absolute w-full select-none box-border"></div>
                                    </div>
                                    <h2 class="text-[#2953b1] text-[20px] leading-[25px] mt-0 mb-0 font-semibold font-open-sans text-center break-all box-border">
                                        <div class="inline-block relative z-10 box-border">
                                            <div class="font-roboto font-semibold text-[#043e81] lg:text-[41px] text-[32px] border-none inline-flex box-border">
                                                ¿Qué gama de sellos Trelleborg individuales existe?
                                            </div>
                                            <div class="mt-2.5 bg-transparent box-border"></div>
                                        </div>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="relative block box-border">
    <div class="max-w-[1190px] mx-auto flex relative box-border">
        <div class="w-full lg:flex box-border">
            <!-- First Column -->
            <div class="lg:w-1/3 flex relative box-border min-h-[1px]">
                <div class="w-full relative flex box-border">
                    <div class="w-full flex flex-wrap content-start p-2.5 box-border">
                        <div class="w-full mb-5 text-center box-border">
                            <div class="transition duration-300 ease-in-out box-border">
                                <div class="box-border">
                                    <picture title="Sellos estáticos Trelleborg O-Ring de Nitrilo" class="box-border">
                                        <source type="image/webp" srcset="/img/O-Rings.png.webp" />
                                        <img src="/img/O-Rings.png.webp" alt="Sellos estáticos O-Ring de Nitrilo" class="max-w-full h-auto inline-block border-none shadow-none box-border" />
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <div class="w-full mb-5 text-center box-border">
                            <div class="mt-[-20px] p-0 bg-[#610001] transition duration-300 ease-in-out box-border">
                                <h2 class="text-white font-roboto font-semibold text-[20px] leading-[36px] m-0 box-border">
                                    <a href="{{ url('sellos-hidraulicos/sellos-individuales-estaticos-o-rings') }}" class="text-white text-decoration-none">
                                        O-Rings Trelleborg | Sellos estáticos.
                                    </a>                                    
                                </h2>
                            </div>
                        </div>
                        <div class="w-full text-justify box-border">
                            <div class="mx-1.5 transition duration-300 ease-in-out box-border">
                                <p class="text-[#666666] leading-[28.8px] mb-8 box-border">
                                    Los sellos dinámicos son dispositivos utilizados para prevenir fugas o filtraciones en aplicaciones donde hay movimiento relativo entre dos superficies en contacto. Estos sellos se utilizan comúnmente en sistemas de máquinas y equipos que requieren una estanqueidad efectiva en condiciones 
                                    de movimiento, como cilindros hidráulicos, bombas, motores, válvulas y otras aplicaciones similares.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second Column -->
            <div class="lg:w-1/3 flex relative box-border min-h-[1px]">
                <div class="w-full relative flex box-border">
                    <div class="w-full flex flex-wrap content-start p-2.5 box-border">
                        <div class="w-full mb-5 text-center box-border">
                            <div class="transition duration-300 ease-in-out box-border">
                                <div class="box-border">
                                    <picture title="Sello dinamico Turcon" class="box-border">
                                        <source type="image/webp" srcset="/img/Sellos-Turcon.png.webp" />
                                        <img src="/img/Sellos-Turcon.png.webp" alt="Sello Turcon de Trelleborg" class="max-w-full h-auto inline-block border-none shadow-none box-border" />
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <div class="w-full mb-5 text-center box-border">
                            <div class="mt-[-20px] p-0 bg-[#610001] transition duration-300 ease-in-out box-border">
                                <h2 class="text-white font-roboto font-semibold text-[20px] leading-[36px] m-0 box-border">
                                    <a href="{{ url('sellos-hidraulicos/sellos-individuales-dinamicos-de-piston-y-vastago') }}" class="text-white text-decoration-none">
                                        Sellos Dinámicos Trelleborg Turcon®
                                    </a>                                    
                                </h2>
                            </div>
                        </div>
                        <div class="w-full text-justify box-border">
                            <div class="mx-1.5 transition duration-300 ease-in-out box-border">
                                <p class="text-[#666666] leading-[28.8px] mb-8 box-border">
                                    Los sellos dinámicos son dispositivos utilizados para prevenir fugas o filtraciones en aplicaciones donde hay movimiento relativo entre dos superficies en contacto. Estos sellos se utilizan comúnmente en sistemas de máquinas y equipos que requieren una estanqueidad efectiva en condiciones 
                                    de movimiento, como cilindros hidráulicos, bombas, motores, válvulas y otras aplicaciones similares.
                                </p>
                               </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Third Column -->
            <div class="lg:w-1/3 flex relative box-border min-h-[1px]">
                <div class="w-full relative flex box-border">
                    <div class="w-full flex flex-wrap content-start p-2.5 box-border">
                        <div class="w-full mb-5 text-center box-border">
                            <div class="transition duration-300 ease-in-out box-border">
                                <div class="box-border">
                                    <picture title="Reten radial de Nitrilo" class="box-border">
                                        <source type="image/webp" srcset="/img/Retenes.png.webp" />
                                        <img src="/img/Retenes.png.webp" alt="Reten de Nitrilo" class="max-w-full h-auto inline-block border-none shadow-none box-border" />
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <div class="w-full mb-5 text-center box-border">
                            <div class="mt-[-20px] p-0 bg-[#610001] transition duration-300 ease-in-out box-border">
                                <h2 class="text-white font-roboto font-semibold text-[20px] leading-[36px] m-0 box-border">
                                    <a href="{{ url('sellos-hidraulicos/sellos-individuales-rotativos') }}" class="text-white text-decoration-none">
                                        Retenes y V-Rings | Trelleborg Forsheda
                                    </a>                                    
                                </h2>
                            </div>
                        </div>
                        <div class="w-full text-justify box-border">
                            <div class="mx-1.5 transition duration-300 ease-in-out box-border">
                                <p class="text-[#666666] leading-[28.8px] mb-8 box-border">
                                    Los retenes se utilizan comúnmente en ejes, árboles, rodamientos y otras partes móviles de maquinaria y equipos. Los V-rings se montan en el eje o en la carcasa y se ajustan alrededor de él, proporcionando un sellado efectivo contra partículas y líquidos no deseados. Se utilizan en una amplia gama 
                                    de aplicaciones industriales, como motores, cajas de engranajes, bombas y otras máquinas rotativas.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>








<section class="relative block box-border">
    <div class="max-w-[1190px] mx-auto flex relative box-border">
        <div class="w-full flex box-border">
            <div class="w-full flex relative box-border min-h-[1px]">
                <div class="w-full relative flex box-border">
                    <div class="w-full flex flex-wrap content-start p-2.5 box-border">
                        <div class="w-full mb-5 box-border relative">
                            <div class="transition-all duration-300">
                                <div class="box-border">
                                    <div class="h-[30px] box-border"></div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full relative box-border">
                            <div class="transition-all duration-300 box-border">
                                <div class="box-border">
                                    <div class="text-[#7a7a7a] box-border">
                                        <div class="font-roboto font-semibold absolute w-full select-none box-border"></div>
                                    </div>
                                    <h2 class="text-[#2953b1] text-[20px] leading-[25px] mt-0 mb-0 font-semibold font-open-sans text-center break-all box-border">
                                        <div class="inline-block relative z-10 box-border">
                                            <div class="font-roboto font-semibold text-[#043e81] lg:text-[41px] text-[32px] inline-flex box-border border-none">
                                                ¿Dónde puedo comprar kits de sellos de pistón hidráulicos?
                                            </div>
                                            <div class="mt-2.5 bg-transparent box-border"></div>
                                        </div>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="relative block box-border">
    <div class="max-w-[1190px] mx-auto lg:flex relative box-border">
        <div class="w-full lg:flex box-border">
            <!-- First Column -->
            <div class="lg:w-1/3 flex relative box-border min-h-[1px]">
                <div class="w-full relative flex box-border">
                    <div class="w-full flex flex-wrap content-start p-2.5 box-border">
                        <div class="w-full mb-5 text-center box-border">
                            <div class="transition-all duration-300 box-border">
                                <div class="box-border">
                                    <a href="https://bombasellos.com.mx/kits-maquinaria-industrial" class="box-shadow-none">
                                        <img src="/img/Kit-Maquinaria-Industrial-qud12qtdtqo4izlwhpkprnpo1r2erwqnwt5x5k3c7c.png" title="Maquina de Inyección de plásticos con sellos" alt="Kits de sellos para maquinaría." class="max-w-full h-auto inline-block box-border border-none shadow-none" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full text-center box-border">
                            <div class="mt-[-20px] p-0 bg-[#610001] transition-all duration-300 box-border">
                                <h2 class="text-white font-roboto font-semibold text-[21px] leading-[52.5px] m-0 box-border">
                                    <a href="https://bombasellos.com.mx/kits-maquinaria-industrial" class="text-white text-decoration-none">Kits de maquinaría industrial.</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second Column -->
            <div class="lg:w-1/3 flex relative box-border min-h-[1px]">
                <div class="w-full relative flex box-border">
                    <div class="w-full flex flex-wrap content-start p-2.5 box-border">
                        <div class="w-full mb-5 text-center box-border">
                            <div class="transition-all duration-300 box-border">
                                <div class="box-border">
                                    <a href="https://bombasellos.com.mx/kits-maquinaria-pesada/" class="box-shadow-none">
                                        <img src="/img/Kit-Maquinaria-pesada-qud12qtdtqo4izlwhpkprnpo1r2erwqnwt5x5k3c7c.png" title="Kit de sellos para maquina pesada" alt="Kits de empaques para gato de maquinaria Komatsu." class="max-w-full h-auto inline-block box-border border-none shadow-none" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full text-center box-border">
                            <div class="mt-[-20px] p-0 bg-[#610001] transition-all duration-300 box-border">
                                <h2 class="text-white font-roboto font-semibold text-[21px] leading-[52.5px] m-0 box-border">
                                    <a href="https://bombasellos.com.mx/kits-maquinaria-pesada/" class="text-white text-decoration-none">Kits de maquinaría pesada.</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Third Column -->
            <div class="lg:w-1/3 flex relative box-border min-h-[1px]">
                <div class="w-full relative flex box-border">
                    <div class="w-full flex flex-wrap content-start p-2.5 box-border">
                        <div class="w-full mb-5 text-center box-border">
                            <div class="transition-all duration-300 box-border">
                                <div class="box-border">
                                    <img src="/img/kits-o-rings-2-qud12rr80kpeulkjc7zcc5h4n4xrzlue8xtemu1y14.png" title="Kit de O-Rings misceláneos en medidas milimétricas" alt="Kit de O-Rings muestra en Nitrilo" class="max-w-full h-auto inline-block box-border border-none shadow-none" />
                                </div>
                            </div>
                        </div>
                        <div class="w-full text-center box-border">
                            <div class="mt-[-20px] p-0 bg-[#610001] transition-all duration-300 box-border">
                                <h2 class="text-white font-roboto font-semibold text-[21px] leading-[52.5px] m-0 box-border">
                                    <a href="https://bombasellos.com.mx/kits-o-rings" class="text-white text-decoration-none">Kits de O-Rings.</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>












<section class="relative block box-border">
    <div class="max-w-[1190px] mx-auto flex relative box-border">
        <div class="w-full flex box-border">
            <div class="w-full flex relative box-border min-h-[1px]">
                <div class="w-full relative flex box-border">
                    <div class="w-full flex flex-wrap content-start p-2.5 box-border">
                        <div class="w-full mb-5 box-border relative">
                            <div class="transition-all duration-300">
                                <div class="box-border">
                                    <div class="h-[30px] box-border"></div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full relative box-border">
                            <div class="transition-all duration-300 box-border">
                                <div class="box-border">
                                    <div class="text-[#7a7a7a] box-border">
                                        <div class="font-roboto font-semibold absolute w-full select-none box-border"></div>
                                    </div>
                                    <h2 class="text-[#2953b1] text-[20px] leading-[25px] mt-0 mb-0 font-semibold font-open-sans text-center break-all box-border">
                                        <div class="inline-block relative z-10 box-border">
                                            <div class="font-roboto font-semibold text-[#043e81] lg:text-[41px] text-[32px] inline-flex box-border border-none">
                                                ¿Dónde puedo solicitar la fabricación de sellos a medida?
                                            </div>
                                            <div class="mt-2.5 bg-transparent box-border"></div>
                                        </div>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="relative block box-border">
    <div class="max-w-[1190px] mx-auto flex relative box-border">
        <div class="w-full flex box-border">
            <div class="w-full flex relative box-border min-h-[1px]">
                <div class="w-full relative flex box-border">
                    <div class="w-full flex flex-wrap content-start p-2.5 box-border">
                        <div class="w-full mb-5 overflow-hidden relative box-border">
                            <div class="transition-all duration-300 p-0 box-border">
                                <div class="relative z-10 overflow-hidden bg-[#043e81] text-center box-border">
                                    <img src="/img/Sellos-Express-qud12qtmcq4vyncw1sx2fsa5rqr0anbypfas3jbwe0.webp" alt="Sellos express fabricados a la medida" 
                                         class="max-w-[calc(100%+50px)] h-auto inline-block border-none shadow-none box-border transition-transform duration-300 transform hover:scale-105 hover:translate-x-[-10px]" />
                                    <div class="absolute left-0 bottom-0 w-full py-4 text-left box-border">
                                        <h2 class="text-white font-roboto font-semibold text-[20px] leading-[25px] mt-5 mb-5 box-border bg-transparent text-center"></h2>
                                    </div>
                                    <a href="{{ url('sellos-hidraulicos-trelleborg/sellos-a-la-medida') }}" class="absolute top-0 left-0 w-full h-[307.5px] text-transparent opacity-0 z-50" title=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="w-full text-center relative box-border">
                            <div class="mt-[-70px] p-0 bg-[#610001] transition-all duration-300 box-border">
                                <div class="text-white font-roboto font-semibold text-[21px] leading-[65.1px] m-0 box-border">
                                    <a href="https://bombasellos.com.mx/sellos-hidraulicos-trelleborg/sellos-a-la-medida/" class="text-white text-decoration-none bg-transparent">Fabricación de sellos a la medida.</a>
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




<script>
    function toggleAccordion(event) {
        const accordionHeader = event.currentTarget;
        const accordionContent = accordionHeader.nextElementSibling;
        const isExpanded = accordionContent.classList.contains("hidden");

        // Toggle visibility of the content
        accordionContent.classList.toggle("hidden");

        // Change the icon
        accordionHeader.querySelector('.accordion-icon').textContent = isExpanded ? '-' : '+';
    }
</script>
@endsection