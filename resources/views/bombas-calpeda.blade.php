@extends('layouts.app')

@section('title', 'Drenaje y Tratamiento de Aguas | Bombas Calpeda y Categorías')
@section('description', 'Bombas Calpeda para drenaje y tratamiento de aguas. Explora categorías de 
obra civil, industria y riego agrícola. Conoce más sobre todas nuestras soluciones')

@section('structured-data')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Drenaje y Tratamiento de Aguas | Bombas Calpeda y Categorías",
  "description": "Bombas Calpeda para drenaje y tratamiento de aguas. Explora categorías de obra civil, industria y riego agrícola. Conoce más sobre todas nuestras soluciones.",
  "brand": {
    "@type": "Brand",
    "name": "Calpeda"
  },
  "offers": {
    "@type": "Offer",
    "url": "https://bombasellos.com.mx/",
    "priceCurrency": "MXN",
    "availability": "https://schema.org/InStock"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.5",
    "reviewCount": "11"
  }
}
</script>
@endsection


@section('contenido')
<!-- Breadcrumb -->

<section class="block box-border transition-background transition-border transition-shadow transition-all duration-300 ease-in-out bg-gray-100 relative">
    <div class="max-w-screen-xl box-border flex mx-auto relative">
        <div class="w-full box-border flex relative min-h-[1px]">
            <div class="box-border p-2.5 flex w-full flex-wrap content-start">
                <div class="w-full flex flex-row flex-nowrap justify-normal items-normal content-normal">
                    <div class="box-border transition-background transition-border transition-shadow transition-transform duration-300 ease-in-out">
                        <div class="box-border">
                            <!-- Flexy Breadcrumb -->
                            <div class="box-border">

                                <!-- Breadcrumb wrapper -->
                                <div class="box-border m-0 p-0">

                                    <!-- Ordered list-->
                                    <ol class="block list-none m-0 p-0 pr-5 box-border font-roboto text-base float-left bg-gray-200 rounded-lg">
                                        <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem" class="box-border p-3 pr-0 rounded-l-lg inline-block">
                                            <span itemprop="name" class="box-border m-0 p-0">
                                  <!-- Home Link -->
                                  <a itemprop="item" href="{{ url('/') }}" class="text-blue-600 no-underline box-border m-0 p-0 shadow-none">
                                    <i class="fas fa-home mr-1"></i>Home 
                                  </a>

                                            </span>
                                            <meta itemprop="position" content="1" class="box-border m-0 p-0" /><!-- Meta Position-->
                                        </li>
                                        <li class="box-border p-3 pl-0 inline-block"><span class="text-gray-400">/</span></li>
                                        <li class="box-border p-3 pl-0 pr-0 rounded-r-lg inline-block" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"><span itemprop="name" title="Bombas" class="text-gray-800">Bombas/Bombas Calpeda</span>
                                            <meta itemprop="position" content="2" class="box-border m-0 p-0" />
                                        </li>
                                    </ol>
                                    <div class="box-border m-0 p-0"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Título -->






<div class="box-border flex relative w-full flex-wrap content-start">
  <div data-id="7af6806" data-element_type="widget" data-widget_type="spacer.default" class="box-border mb-5 relative w-full flex-row flex-nowrap justify-normal items-normal content-normal gap-normal flex-auto">
      <div class="box-border transition-all duration-300 ease-in-out">
          <div class="box-border">
              <div class="box-border h-[76px]"></div>
          </div>
      </div>
  </div>
  <div data-id="1382309" data-element_type="widget" data-widget_type="mdp-headinger-elementor.default" class="box-border relative w-full flex-row flex-nowrap justify-normal items-normal content-normal gap-normal flex-auto">
      <div class="box-border transition-all duration-300 ease-in-out">
          <div class="box-border px-5 md:px-20">
              <div class="box-border text-[rgb(122,122,122)]">
                  <div class="box-border font-roboto font-semibold w-full absolute select-none"></div>
              </div>
              <h2 class="text-[20px] text-[rgb(41,83,177)] leading-6 clear-both font-semibold font-open-sans box-border text-left break-all">
                  <div class="box-border inline-block relative z-1">
                      <div class="box-border font-roboto font-semibold text-[rgb(51,51,51)] border-[rgb(110,193,228)] inline-flex border-none">
                          DRENAJE Y TRATAMIENTO DE AGUAS
                      </div>
                      <div class="mt-2.5 leading-none bg-transparent flex justify-left">
                        <div class="h-[2px] w-1/3 bg-[#610001]"></div>
                    </div>
                  </div>
              </h2>
          </div>
      </div>
  </div>
</div>







<!-- Contenido desde categorías -->


<section class="relative flex-auto flex-shrink flex-col flex-wrap justify-center items-center gap-5 max-w-7xl mx-auto px-5">
  <div class="flex w-full max-w-7xl mx-auto flex-col md:flex-row">
    <div class="w-full md:w-1/4 flex-auto flex-shrink flex-col p-5">
      <div class="w-full flex-wrap items-start">
        <div class="w-full flex mb-5">
          <div class="transition-all">
            <div>
              <div class="absolute text-gray-500 font-roboto font-semibold w-full select-none"></div>
            </div>
            <h2 class="text-2xl leading-tight m-0 font-semibold font-open-sans text-left">
              <div class="inline-block relative">
                <div class="inline-flex text-[#043e81] border-none text-4xl">
                  Categorías
                </div>
              </div>
            </h2>
          </div>
        </div>
        <div class="w-full flex mb-5">
          <div class="transition-all">
            <div>
              <div class="absolute text-gray-500 font-roboto font-semibold w-full select-none"></div>
            </div>
            <h2 class="text-2xl leading-tight m-0 font-semibold font-open-sans text-left">
              <div class="inline-block relative">
                <div class="inline-flex text-[#043e81] border-none">
                  Bombas Calpeda
                </div>
              </div>
            </h2>
          </div>
        </div>
        <div class="w-full flex">
          <div class="transition-all">
            <p class="text-gray-600 leading-relaxed mb-8"><strong>Obra civil</strong></p>
            <ul class="list-square pl-4 mb-0">
              <li class="list-item"><a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/') }}" class="text-blue-500">Drenaje y tratamiento de aguas.</a></li>
              <li class="list-item"><a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-presurizacion/') }}" class="text-blue-500">Presurización.</a></li>
              <li class="list-item"><a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-calpeda-recirculacion-y-climatizacion/') }}" class="text-blue-500">Recirculación y climatización.</a></li>
              <li class="list-item"><a href="{{ url('/bombas-calpeda-sistemas-contra-incendio-2') }}" class="text-blue-500">Sistemas contra incendio.</a></li>
          </ul>          
            <p class="text-gray-600 leading-relaxed mb-8"><strong>Industria.</strong></p>
            <ul class="list-square pl-4 mb-0">
              <li class="list-item"><a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-industria-bombas-centrifugas-monobloc-bombas-multicelulares-horizontales/bombas-calpeda-maquinaria-y-equipos-oem/') }}" class="text-blue-500">Maquinaria y equipos (OEM)</a></li>
              <li class="list-item"><a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-industria-bombas-centrifugas-monobloc-bombas-multicelulares-horizontales/bombas-calpeda-circuitos-de-transferencia-de-calor-y-refrigeracion/') }}" class="text-blue-500">Circuitos de transferencia de calor y refrigeración</a></li>
              <li class="list-item"><a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/') }}" class="text-blue-500">Tratamiento de aguas residuales industriales</a></li>
          </ul>
          
            <p class="text-gray-600 leading-relaxed mb-8"><strong>Riego-Agricola.</strong></p>
            <ul class="list-square pl-4 mb-0">
              <li class="list-item"><a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-calpeda-agricultura-y-riego/') }}" class="text-blue-500">Sistemas de riego</a></li>
          </ul>
          <p class="text-gray-600 leading-relaxed mb-8">&nbsp;</p>
          <p class="text-gray-600 leading-relaxed mb-8"><a href="{{ url('/bombas/sellos-mecanicos-calpeda') }}" class="text-blue-500"><strong>Sellos mécanicos CALPEDA®</strong></a></p>          
          </div>
        </div>
      </div>
    </div>
    <div class="w-full md:w-3/4 flex-auto flex-shrink flex-col p-5">
      <div class="w-full flex-wrap items-start">
        <section class="relative flex-auto flex-shrink flex-col w-full">
          <div class="flex w-full max-w-7xl mx-auto flex-col md:flex-row">
            <div class="w-full md:w-1/3 flex-auto flex-shrink flex-col p-5">
              <div class="w-full flex flex-col h-full">
                <div class="w-full flex mb-5 overflow-hidden group">
                  <div class="transition-all">
                    <div class="relative z-10 overflow-hidden m-0 text-center">
                      <picture>
                        <source type="image/webp" srcset="/img/Bomba-sumergible-para-achiques.jpg.webp 300w, /img/Bomba-sumergible-para-achiques-184x300.jpg.webp 184w" sizes="(max-width: 300px) 100vw, 300px" />
                        <img width="300" height="490" src="/img/Bomba-sumergible-para-achiques.jpg" alt="Bomba sumergible para achiques" srcset="/img/Bomba-sumergible-para-achiques.jpg 300w, /img/Bomba-sumergible-para-achiques-184x300.jpg 184w" class="w-full max-w-lg h-auto mx-auto transition-transform duration-300 transform group-hover:scale-105" />
                      </picture>
                      <div class="absolute top-0 left-0 w-full h-full p-4 text-left">
                        <h3 class="text-[#043e81] text-lg leading-snug mt-4 mb-4 font-semibold font-roboto relative overflow-hidden p-2 bg-transparent"></h3>
                      </div>
                      <a  href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/bomba-sumergible-para-achiques-gqr') }}" class="absolute top-0 left-0 w-full h-full z-20 text-transparent bg-transparent"></a>
                    </div>
                  </div>
                </div>
                <div class="w-full flex mb-5">
                  <div class="transition-all">
                    <div>
                      <div class="absolute text-gray-500 font-roboto font-semibold w-full select-none"></div>
                    </div>
                    <h2 class="text-2xl leading-tight m-0 font-semibold font-open-sans text-left">
                      <a  href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/bomba-sumergible-para-achiques-gqr') }}" class="text-blue-500">
                        <div class="inline-block relative">
                          <div class="inline-flex text-[#043e81] border-none">
                            GQR
                          </div>
                        </div>
                      </a>
                    </h2>
                  </div>
                </div>
                <div class="w-full flex">
                  <div class="transition-all">
                    <p class="text-gray-600 leading-relaxed mb-8">Bomba sumergible para achiques.</p>
                  </div>
                </div>
                <div class="mt-auto">
                  <a  href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/bomba-sumergible-para-achiques-gqr') }}" class="text-white bg-[#043e81] font-roboto font-medium text-lg px-8 py-3 rounded-md inline-block text-center transition-all w-auto">
                    <span class="flex items-center justify-center">
                      <span class="mr-2 order-5 flex-grow-0">
                        <i class="fas fa-plus" aria-hidden="true"></i>
                      </span>
                      <span class="order-10 flex-grow-1 block">MÁS INFORMACIÓN</span>
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="w-full md:w-1/3 flex-auto flex-shrink flex-col p-5">
              <div class="w-full flex flex-col h-full">
                <div class="w-full flex mb-5 overflow-hidden group">
                  <div class="transition-all">
                    <div class="relative z-10 overflow-hidden m-0 text-center">
                      <picture>
                        <source type="image/webp" srcset="/img/Bombas-sumergibles-de-acero-inoxidable-para-aguas-sucias.jpg.webp 300w, /img/Bombas-sumergibles-de-acero-inoxidable-para-aguas-sucias-184x300.jpg.webp 184w" sizes="(max-width: 300px) 100vw, 300px" />
                        <img width="300" height="490" src="/img/Bombas-sumergibles-de-acero-inoxidable-para-aguas-sucias.jpg" alt="Bombas sumergibles de acero inoxidable para aguas sucias" srcset="/img/Bombas-sumergibles-de-acero-inoxidable-para-aguas-sucias.jpg 300w, /img/Bombas-sumergibles-de-acero-inoxidable-para-aguas-sucias-184x300.jpg 184w" class="w-full max-w-lg h-auto mx-auto transition-transform duration-300 transform group-hover:scale-105" />
                      </picture>
                      <div class="absolute top-0 left-0 w-full h-full p-4 text-left">
                        <h3 class="text-[#043e81] text-lg leading-snug mt-4 mb-4 font-semibold font-roboto relative overflow-hidden p-2 bg-transparent"></h3>
                      </div>
                      <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/bombas-sumergibles-de-acero-inoxidable-para-aguas-sucias-gx40') }}" class="absolute top-0 left-0 w-full h-full z-20 text-transparent bg-transparent"></a>
                    </div>
                  </div>
                </div>
                <div class="w-full flex mb-5">
                  <div class="transition-all">
                    <div>
                      <div class="absolute text-gray-500 font-roboto font-semibold w-full select-none"></div>
                    </div>
                    <h2 class="text-2xl leading-tight m-0 font-semibold font-open-sans text-left">
                      <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/bombas-sumergibles-de-acero-inoxidable-para-aguas-sucias-gx40') }}" class="text-blue-500">
                        <div class="inline-block relative">
                          <div class="inline-flex text-[#043e81] border-none">
                            GX 40
                          </div>
                        </div>
                      </a>
                    </h2>
                  </div>
                </div>
                <div class="w-full flex">
                  <div class="transition-all">
                    <p class="text-gray-600 leading-relaxed mb-8">Bombas sumergibles de acero inoxidable para aguas sucias</p>
                  </div>
                </div>
                <div class="mt-auto">
                  <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/bombas-sumergibles-de-acero-inoxidable-para-aguas-sucias-gx40') }}" class="text-white bg-[#043e81] font-roboto font-medium text-lg px-8 py-3 rounded-md inline-block text-center transition-all w-auto">
                    <span class="flex items-center justify-center">
                      <span class="mr-2 order-5 flex-grow-0">
                        <i class="fas fa-plus" aria-hidden="true"></i>
                      </span>
                      <span class="order-10 flex-grow-1 block">MÁS INFORMACIÓN</span>
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="w-full md:w-1/3 flex-auto flex-shrink flex-col p-5">
              <div class="w-full flex flex-col h-full">
                <div class="w-full flex mb-5 overflow-hidden group">
                  <div class="transition-all">
                    <div class="relative z-10 overflow-hidden m-0 text-center">
                      <picture>
                        <source type="image/webp" srcset="/img/Bombas-sumergibles-para-aguas-sucias-gqs.jpg.webp 300w, /img/Bombas-sumergibles-para-aguas-sucias-gqs-184x300.jpg.webp 184w" sizes="(max-width: 300px) 100vw, 300px" />
                        <img width="300" height="490" src="/img/Bombas-sumergibles-para-aguas-sucias-gqs.jpg" alt="Bombas sumergibles para aguas sucias" srcset="/img/Bombas-sumergibles-para-aguas-sucias-gqs.jpg 300w, /img/Bombas-sumergibles-para-aguas-sucias-gqs-184x300.jpg 184w" class="w-full max-w-lg h-auto mx-auto transition-transform duration-300 transform group-hover:scale-105" />
                      </picture>
                      <div class="absolute top-0 left-0 w-full h-full p-4 text-left">
                        <h3 class="text-[#043e81] text-lg leading-snug mt-4 mb-4 font-semibold font-roboto relative overflow-hidden p-2 bg-transparent"></h3>
                      </div>
                      <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/bombas-sumergibles-para-aguas-sucias-gqs-gqv') }}" class="absolute top-0 left-0 w-full h-full z-20 text-transparent bg-transparent"></a>
                    </div>
                  </div>
                </div>
                <div class="w-full flex mb-5">
                  <div class="transition-all">
                    <div>
                      <div class="absolute text-gray-500 font-roboto font-semibold w-full select-none"></div>
                    </div>
                    <h2 class="text-2xl leading-tight m-0 font-semibold font-open-sans text-left">
                      <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/bombas-sumergibles-para-aguas-sucias-gqs-gqv') }}" class="text-blue-500">
                        <div class="inline-block relative">
                          <div class="inline-flex text-[#043e81] border-none">
                            GQS, GQV
                          </div>
                        </div>
                      </a>
                    </h2>
                  </div>
                </div>
                <div class="w-full flex">
                  <div class="transition-all">
                    <p class="text-gray-600 leading-relaxed mb-8">Bombas sumergibles para aguas sucias.</p>
                  </div>
                </div>
                <div class="mt-auto">
                  <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/bombas-sumergibles-para-aguas-sucias-gqs-gqv') }}" class="text-white bg-[#043e81] font-roboto font-medium text-lg px-8 py-3 rounded-md inline-block text-center transition-all w-auto">
                    <span class="flex items-center justify-center">
                      <span class="mr-2 order-5 flex-grow-0">
                        <i class="fas fa-plus" aria-hidden="true"></i>
                      </span>
                      <span class="order-10 flex-grow-1 block">MÁS INFORMACIÓN</span>
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="relative flex-auto flex-shrink flex-col w-full">
          <div class="flex w-full max-w-7xl mx-auto flex-col md:flex-row">
            <div class="w-full md:w-1/3 flex-auto flex-shrink flex-col p-5">
              <div class="w-full flex flex-col h-full">
                <div class="w-full flex mb-5 overflow-hidden group">
                  <div class="transition-all">
                    <div class="relative z-10 overflow-hidden m-0 text-center">
                      <picture>
                        <source type="image/webp" srcset="/img/Bombas-sumergibles-para-aguas-sucias-gm50.jpg.webp 300w, /img/Bombas-sumergibles-para-aguas-sucias-gm50-184x300.jpg.webp 184w" sizes="(max-width: 300px) 100vw, 300px" />
                        <img width="300" height="490" src="/img/Bombas-sumergibles-para-aguas-sucias-gm50.jpg" alt="Bombas sumergibles para aguas sucias gm50" srcset="/img/Bombas-sumergibles-para-aguas-sucias-gm50.jpg 300w, /img/Bombas-sumergibles-para-aguas-sucias-gm50-184x300.jpg 184w" class="w-full max-w-lg h-auto mx-auto transition-transform duration-300 transform group-hover:scale-105" />
                      </picture>
                      <div class="absolute top-0 left-0 w-full h-full p-4 text-left">
                        <h3 class="text-[#043e81] text-lg leading-snug mt-4 mb-4 font-semibold font-roboto relative overflow-hidden p-2 bg-transparent"></h3>
                      </div>
                      <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/bombas-sumergibles-para-aguas-sucias-gm-50') }}" class="absolute top-0 left-0 w-full h-full z-20 text-transparent bg-transparent"></a>
                    </div>
                  </div>
                </div>
                <div class="w-full flex mb-5">
                  <div class="transition-all">
                    <div>
                      <div class="absolute text-gray-500 font-roboto font-semibold w-full select-none"></div>
                    </div>
                    <h2 class="text-2xl leading-tight m-0 font-semibold font-open-sans text-left">
                      <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/bombas-sumergibles-para-aguas-sucias-gm-50') }}" class="text-blue-500">
                        <div class="inline-block relative">
                          <div class="inline-flex text-[#043e81] border-none">
                            GM 50
                          </div>
                        </div>
                      </a>
                    </h2>
                  </div>
                </div>
                <div class="w-full flex">
                  <div class="transition-all">
                    <p class="text-gray-600 leading-relaxed mb-8">Bombas sumergibles para aguas sucias</p>
                  </div>
                </div>
                <div class="mt-auto">
                  <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/bombas-sumergibles-para-aguas-sucias-gm-50') }}" class="text-white bg-[#043e81] font-roboto font-medium text-lg px-8 py-3 rounded-md inline-block text-center transition-all w-auto">
                    <span class="flex items-center justify-center">
                      <span class="mr-2 order-5 flex-grow-0">
                        <i class="fas fa-plus" aria-hidden="true"></i>
                      </span>
                      <span class="order-10 flex-grow-1 block">MÁS INFORMACIÓN</span>
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="w-full md:w-1/3 flex-auto flex-shrink flex-col p-5">
              <div class="w-full flex flex-col h-full">
                <div class="w-full flex mb-5 overflow-hidden group">
                  <div class="transition-all">
                    <div class="relative z-10 overflow-hidden m-0 text-center">
                      <picture>
                        <source type="image/webp" srcset="/img/Estacion-automatica-de-elevacion-de-aguas-sucias-.jpg.webp 300w, /img/Estacion-automatica-de-elevacion-de-aguas-sucias--184x300.jpg.webp 184w" sizes="(max-width: 300px) 100vw, 300px" />
                        <img width="300" height="490" src="/img/Estacion-automatica-de-elevacion-de-aguas-sucias-.jpg" alt="Estación automática de elevación de aguas sucias" srcset="/img/Estacion-automatica-de-elevacion-de-aguas-sucias-.jpg 300w, /img/Estacion-automatica-de-elevacion-de-aguas-sucias--184x300.jpg 184w" class="w-full max-w-lg h-auto mx-auto transition-transform duration-300 transform group-hover:scale-105" />
                      </picture>
                      <div class="absolute top-0 left-0 w-full h-full p-4 text-left">
                        <h3 class="text-[#043e81] text-lg leading-snug mt-4 mb-4 font-semibold font-roboto relative overflow-hidden p-2 bg-transparent"></h3>
                      </div>
                      <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/geotrit-geoclean-geocomp') }}" class="absolute top-0 left-0 w-full h-full z-20 text-transparent bg-transparent"></a>
                    </div>
                  </div>
                </div>
                <div class="w-full flex mb-5">
                  <div class="transition-all">
                    <div>
                      <div class="absolute text-gray-500 font-roboto font-semibold w-full select-none"></div>
                    </div>
                    <h2 class="text-2xl leading-tight m-0 font-semibold font-open-sans text-left">
                      <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/geotrit-geoclean-geocomp') }}" class="text-blue-500">
                        <div class="inline-block relative">
                          <div class="inline-flex text-[#043e81] border-none">
                            GEOTRIT-GEOCLEAN-GEOCOMP
                          </div>
                        </div>
                      </a>
                    </h2>
                  </div>
                </div>
                <div class="w-full flex">
                  <div class="transition-all">
                    <p class="text-gray-600 leading-relaxed mb-8">Estación automática de elevación de aguas sucias</p>
                  </div>
                </div>
                <div class="mt-auto">
                  <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/geotrit-geoclean-geocomp') }}" class="text-white bg-[#043e81] font-roboto font-medium text-lg px-8 py-3 rounded-md inline-block text-center transition-all w-auto">
                    <span class="flex items-center justify-center">
                      <span class="mr-2 order-5 flex-grow-0">
                        <i class="fas fa-plus" aria-hidden="true"></i>
                      </span>
                      <span class="order-10 flex-grow-1 block">MÁS INFORMACIÓN</span>
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="w-full md:w-1/3 flex-auto flex-shrink flex-col p-5">
              <div class="w-full flex flex-col h-full">
                <div class="w-full flex mb-5 overflow-hidden group">
                  <div class="transition-all">
                    <div class="relative z-10 overflow-hidden m-0 text-center">
                      <picture>
                        <source type="image/webp" srcset="/img/Estacion-automatica-de-recogida-y-elevacion-de-aguas-sucias-geo-.jpg.webp 300w, /img/Estacion-automatica-de-recogida-y-elevacion-de-aguas-sucias-geo--184x300.jpg.webp 184w" sizes="(max-width: 300px) 100vw, 300px" />
                        <img width="300" height="490" src="/img/Estacion-automatica-de-recogida-y-elevacion-de-aguas-sucias-geo-.jpg" alt="Estacion automatica de recogida y elevacion de aguas sucias geo" srcset="/img/Estacion-automatica-de-recogida-y-elevacion-de-aguas-sucias-geo-.jpg 300w, /img/Estacion-automatica-de-recogida-y-elevacion-de-aguas-sucias-geo--184x300.jpg 184w" class="w-full max-w-lg h-auto mx-auto transition-transform duration-300 transform group-hover:scale-105" />
                      </picture>
                      <div class="absolute top-0 left-0 w-full h-full p-4 text-left">
                        <h3 class="text-[#043e81] text-lg leading-snug mt-4 mb-4 font-semibold font-roboto relative overflow-hidden p-2 bg-transparent"></h3>
                      </div>
                      <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/geo-estacion-automatica-de-recogida-y-elevacion-de-aguas-sucias/') }}" class="absolute top-0 left-0 w-full h-full z-20 text-transparent bg-transparent"></a>
                    </div>
                  </div>
                </div>
                <div class="w-full flex mb-5">
                  <div class="transition-all">
                    <div>
                      <div class="absolute text-gray-500 font-roboto font-semibold w-full select-none"></div>
                    </div>
                    <h2 class="text-2xl leading-tight m-0 font-semibold font-open-sans text-left">
                      <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/geo-estacion-automatica-de-recogida-y-elevacion-de-aguas-sucias/') }}" class="text-blue-500">
                        <div class="inline-block relative">
                          <div class="inline-flex text-[#043e81] border-none">
                            GEO
                          </div>
                        </div>
                      </a>
                    </h2>
                  </div>
                </div>
                <div class="w-full flex">
                  <div class="transition-all">
                    <p class="text-gray-600 leading-relaxed mb-8">Estación automática de recogida y elevación de aguas sucias.</p>
                  </div>
                </div>
                <div class="mt-auto">
                  <a href="{{ url('/bombas/bombas-centrifugas-calpeda/bombas-para-obra-civil-y-urbanistica/bombas-drenaje-y-tratamiento-de-aguas/geo-estacion-automatica-de-recogida-y-elevacion-de-aguas-sucias/') }}" class="text-white bg-[#043e81] font-roboto font-medium text-lg px-8 py-3 rounded-md inline-block text-center transition-all w-auto">
                    <span class="flex items-center justify-center">
                      <span class="mr-2 order-5 flex-grow-0">
                        <i class="fas fa-plus" aria-hidden="true"></i>
                      </span>
                      <span class="order-10 flex-grow-1 block">MÁS INFORMACIÓN</span>
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
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
  <h2 class="text-[41px] text-center font-semibold mb-4">¿Necesitas más información?</h2>
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
