@extends('layouts.app')
@section('title', 'Bombas centrifugas Calpeda ® para Industria y Agricultura')
@section('description', 'Bombas Centrifugas Calpeda ® de aspiración axial, en cantiliver, sumergibles para el tratamiento de aguas, sumergibles de pozo profundo, presurizadoras | BSH')



@section('contenido')


<section class="relative box-border w-[1423px]  bg-[#f2f2f2] transition-all duration-300 lg:pt-[100px] lg:pl-[100px]">
    <div class="max-w-[1190px] flex mx-auto relative">
        <div class="w-full flex box-border">
            <div class="w-full flex relative min-h-[1px] box-border">
                <div class="w-full flex relative box-border">
                    <div class="w-full flex flex-wrap content-start p-[10px] box-border">
                        
                        <!-- Heading Widget -->
                        <div class="w-full relative mb-[20px] box-border">
                            <div class="transition-all duration-300 box-border">
                                <h1 class="text-[35px] leading-[44.5px] font-semibold text-[#666666] mb-0 text-left font-['Open_Sans']">
                                    <span class="inline-block relative z-10">
                                        <span class="font-roboto font-extrabold text-[#043e81] text-[36px] inline-flex">
                                            Kits O-Rings
                                        </span>
                                    </span>
                                </h1>
                            </div>
                        </div>
                        
                        <!-- Text Widget -->
                        <div class="w-full relative mb-[20px] box-border">
                            <div class="transition-all duration-300 box-border">
                                <p class="text-[#666666] leading-[27px] mb-[32px] text-justify font-roboto">
                                    La forma práctica y económica de garantizar existencias en su taller de este componente básico en las medidas, materiales y durezas más comunes.
                                </p>
                            </div>
                        </div>
                        
                        <!-- Button Widget -->
                        <div class="w-full relative mb-[20px] box-border">
                            <div class="transition-all duration-300 box-border">
                                <a href="#contacto" role="button" class="inline-block bg-[#610001] text-white text-center font-roboto font-extrabold text-[15px] py-[12px] px-[24px] rounded-[3px] transition-all duration-300">
                                    <span class="flex justify-center">
                                        <span class="ml-[5px]"><i aria-hidden="true" class="fas fa-arrow-right"></i></span>
                                        <span class="block">Conozca nuestras líneas de productos</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Spacer Widget -->
                        <div class="w-full relative box-border">
                            <div class="transition-all duration-300 box-border">
                                <div class="h-[28px] box-border"></div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="inline-flex text-[43px] font-semibold text-[#333333] border-none font-roboto lg:pt-[100px] lg:pl-[100px]">
    Aplicaciones.
</div>



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