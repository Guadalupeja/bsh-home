<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>@yield('title', 'BSH Principal')</title> <!-- Título dinámico -->

           <!-- Descripción meta dinámica -->
    <meta name="description" content="@yield('description', 'Descripción por defecto')">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" async>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link rel="icon" href="{{ asset('img/favicon-1.png') }}" type="image/x-icon" />

        @yield('structured-data') <!-- Sección para datos estructurados -->

    </head>
    <body>
<!-- Sección de contacto -->
<section class="hidden md:block bg-gray-200 transition duration-300 ease-in-out border border-transparent rounded">
    <div class="max-w-7xl mx-auto relative flex">
        <div class="w-1/5 min-h-0 flex">
            <div class="p-4 flex w-auto">
                <div class="transition-all duration-300 ease-in-out flex items-center">
                    <i class="text-gray-400"></i>
                    <i class="fa-solid fa-envelope text-gray-400"></i>
                    <div class="pl-1">
                        <a href="mailto:bsh@bombasellos.com.mx" class="text-gray-400 hover:text-gray-600 transition duration-300 ease-in-out">bsh@bombasellos.com.mx</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/6">
            <div class="p-4 flex w-auto">
                <div class="transition-all duration-300 ease-in-out flex items-center">
                    <i class="text-gray-400"></i>
                    <i class="fa-solid fa-phone text-gray-400"></i>
                    <div class="pl-1">
                        <a href="Tel://55 575 21715" class="text-gray-400 hover:text-gray-600 transition duration-300 ease-in-out">55 575 21715</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/6">
            <div class="p-4 flex w-auto">
                <div class="transition-all duration-300 ease-in-out flex items-center">
                    <i class="text-gray-400"></i>
                    <i class="fa-solid fa-phone text-gray-400"></i>
                    <div class="pl-1">
                        <a href="Tel://222 227 3866" class="text-gray-400 hover:text-gray-600 transition duration-300 ease-in-out">222 227 3866</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/6">
            <div class="p-4 flex w-auto">
                <div class="transition-all duration-300 ease-in-out flex items-center">
                    <i class="text-gray-400"></i>
                    <i class="icon fa fa-whatsapp text-gray-400"></i>
                    <div class="pl-1">
                        <a href="https://api.whatsapp.com/send?phone=5218332395885&amp;text=Hola%20me%20gustar%C3%ADa%20m%C3%A1s%20informaci%C3%B3n%20acerca%20de%20" class="text-gray-400 hover:text-gray-600 transition duration-300 ease-in-out">833 239 5885</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/6">
            <div class="p-4 flex w-auto">
                <div class="transition-all duration-300 ease-in-out flex items-center">
                    <i class="text-gray-400"></i>
                    <i class="icon fa fa-whatsapp text-gray-400"></i>
                    <div class="pl-1">
                        <a href="https://api.whatsapp.com/send?phone=5218332462205&amp;text=Hola%20me%20gustar%C3%ADa%20m%C3%A1s%20informaci%C3%B3n%20acerca%20de%20" class="text-gray-400 hover:text-gray-600 transition duration-300 ease-in-out">833 2462205</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/6">
            <div class="p-4 flex w-auto">
                <div class="transition-all duration-300 ease-in-out flex items-center">
                    <a href="https://www.facebook.com/Bombas-Sellos-y-Hules-Industriales-SA-de-CV-116434456400428" target="_blank" class="inline-flex items-center justify-center text-gray-400 hover:text-gray-600 transition duration-300 ease-in-out no-underline ml-10">
                        <span class="sr-only">Facebook</span>
                        <i class="text-gray-400"></i>
                        <i class="fa-brands fa-facebook text-gray-400"></i>
                    </a>
                    <a href="https://www.linkedin.com/company/bombas-sellos-y-hules-industriales" target="_blank" class="inline-flex items-center justify-center text-gray-400 hover:text-gray-600 transition duration-300 ease-in-out no-underline ml-4">
                        <span class="sr-only">Linkedin-square</span>
                        <i class="text-gray-400"></i>
                        <i class="fa-brands fa-linkedin text-gray-400"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

        


        


        <section class="transition-all bg-white" data-id="ababfc0" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="max-w-7xl mx-auto px-4 md:px-0 py-4">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="w-full md:w-1/5 mb-4 md:mb-0 md:mr-4">
                        <a href="https://bombasellos.com.mx/">
                            <img src="{{ asset('img/log-bsh-final-01.png')}}" alt="Bombas centrifugas, Sellos hidráulicos, hules industriales – BSH" class="max-w-full h-auto">
                        </a>
                    </div>
                    <div class="w-full md:w-4/5 flex flex-col md:flex-row md:justify-end items-center">
                        <button id="menu-toggle" class="block md:hidden focus:outline-none mb-4 md:mb-0" aria-label="Toggle navigation menu">
                            <span class="flex flex-col">
                                <span class="w-6 h-px bg-gray-600 mb-1 transition-all duration-300"></span>
                                <span class="w-6 h-px bg-gray-600 mb-1 transition-all duration-300"></span>
                                <span class="w-6 h-px bg-gray-600 mb-1 transition-all duration-300"></span>
                            </span>
                        </button>
                        <div id="menu-items" class="font-sans bg-gray-900 w-full items-center flex flex-col md:ml-6 hidden md:block md:bg-white">
                            <a href="https://bombasellos.com.mx/" class="text-blue-500 text-xs px-3 py-2 hover:text-blue-700">INICIO</a>
                            <a href="https://bombasellos.com.mx/sellos-hidraulicos" class="text-blue-500 text-xs px-3 py-2 hover:text-blue-700">SELLOS HIDRÁULICOS</a>
                            <a href="https://bombasellos.com.mx:/bombas" class="text-blue-500 text-xs px-3 py-2 hover:text-blue-700">BOMBAS</a>
                            <a href="https://bombasellos.com.mx:/plasticos-de-ingeneria/" class="text-blue-500 text-xs px-3 py-2 hover:text-blue-700">MATERIALES</a>
                            <a href="https://bombasellos.com.mx:/servicios-mantenimiento-y-asesoria-industrial/" class="text-blue-500 text-xs px-3 py-2 hover:text-blue-700">SERVICIOS</a>
                            <a href="https://bombasellos.com.mx:/blog-bsh/" class="text-blue-500 text-xs px-3 py-2 hover:text-blue-700">MEDIA/TOOLS</a>
                            <a href="https://bombasellos.com.mx:/somos-bsh/" class="text-blue-500 text-xs px-3 py-2 hover:text-blue-700">NOSOTROS</a>
                            <a href="https://bombasellos.com.mx:/contacto/" class="text-blue-500 text-xs  px-3 py-2 hover:text-blue-700">CONTACTO</a>
                            <a href="https://bombasellos.com.mx/blog/" class="text-blue-500 text-sm  px-3 py-2 hover:text-blue-700">BLOG</a>
                            <a href="https://bombasellos.com.mx/preguntas-frecuentes/" class="text-blue-500 text-xs px-3 py-2 hover:text-blue-700">FAQ´S</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   
        
        
<!--Barra guinda-->
<section class="hidden md:block font-roboto left-0 box-border transition duration-300 ease-in-out border border-transparent rounded mb-4 bg-red-900 h-48.11px">
    <div class="py-3.5 flex justify-center">
        <div class="flex">
            <ul class="flex justify-center">
                <li class="pr-15 text-sm">
                    <a title="TURCITE®B SLYDWAY® y WAYLOCK®" href="https://bombasellos.com.mx:/plasticos-de-ingeneria/turcite-b-slydway/" class="text-white uppercase">TURCITE®B SLYDWAY® y WAYLOCK®</a>
                </li>
                <li class="pr-15 text-sm px-4">
                    <a title="JUNTAS DE EXPANSIÓN" href="https://juntasflexibles.com/" class="text-white uppercase">JUNTAS DE EXPANSIÓN</a>
                </li>
                <li class="pr-15 text-sm px-4">
                    <a title="BOMBAS NEUMÁTICAS WILDEN®" href="https://bombasellos.com.mx/bombas/bombas-neumaticas/" class="text-white uppercase">BOMBAS NEUMÁTICAS WILDEN®</a>
                </li>
                <li class="text-sm px-4">
                    <a title="AMPLIFICADORES MAXIMATOR℗" href="https://bombasdealtapresion.com.mx/" class="text-white uppercase">AMPLIFICADORES MAXIMATOR℗</a>
                </li>
            </ul>
        </div>
    </div>
</section>

        
        
        
        
        
        
        
        
        
        
        
      <h1>@yield('titulo')</h1>

      <hr>

      @yield('contenido')


      
    </body>
    <footer>




        <section class="bg-blue-900 font-roboto" data-id="a4a4df0" data-element_type="section">
            <div class="flex flex-wrap">
                <div class="w-full md:w-1/2 lg:w-1/3 p-4">
                    <div class="">
                        <a href="https://bombasellos.com.mx/" class="block">
                            <img src="{{ asset('img/logo-bsh-white.png.webp')}}" alt="Bombas centrifugas, Sellos hidráulicos, hules industriales – BSH" class="w-64 h-auto p-4">
                        </a>
                    </div>
                    
                    <div class="h-4"></div>
                    <div class="p-4">
                        <p class="text-white text-sm leading-[1.8] text-justify">Comercializadora que se constituye en el año 2010 con el fin de proveer equipos y refacciones para el manejo de fluidos y servicios técnicos especializados en los sectores Metal-mecánico, Minería, Oil&amp;Gas e Industria en general.</p>
                    </div>
                    <div class="h-4"></div>
                    <div class="p-4">
                        <div class="flex justify-center">

                            <a href="https://www.facebook.com/Bombas-Sellos-y-Hules-Industriales-SA-de-CV-116434456400428" target="_blank" class="inline-flex items-center justify-center text-gray-400 hover:text-gray-600 transition duration-300 ease-in-out no-underline ml-4">
                                <span class="sr-only">Facebook</span>
                                <i class="text-gray-400"></i>
                                <i class="fa-brands fa-facebook text-gray-400 text-3xl"></i>
                            </a>
                            <a href="https://www.linkedin.com/company/bombas-sellos-y-hules-industriales" target="_blank" class="inline-flex items-center justify-center text-gray-400 hover:text-gray-600 transition duration-300 ease-in-out no-underline ml-4">
                                <span class="sr-only">Linkedin-square</span>
                                <i class="text-gray-400"></i>
                                <i class="fa-brands fa-linkedin text-gray-400 text-3xl"></i>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 p-4">
                    <div class="p-4">
                        <div class="text-2xl font-semibold text-white p-4">MAPA DEL SITIO</div>
                    </div>

                    <div class="p-4">
                        <button id="toggleMenu" type="button" class="block md:hidden text-white" aria-label="Toggle navigation menu">
                            <i class="fas fa-bars"></i> <!-- Icono de menú -->
                        </button>
                        
                        <div id="menuItems" class="hidden md:block">
                            <ul class="text-white">
                                <li><a href="https://bombasellos.com.mx:/" class="text-sm">INICIO</a></li>
                                <li><a href="https://bombasellos.com.mx/sellos-hidraulicos" class="text-sm">SELLOS HIDRÁULICOS</a></li>
                                <li><a href="https://bombasellos.com.mx:/bombas" class="text-sm">BOMBAS</a></li>
                                <li><a href="https://bombasellos.com.mx:/plasticos-de-ingeneria/" class="text-sm">MATERIALES</a></li>
                                <li><a href="https://bombasellos.com.mx:/servicios-mantenimiento-y-asesoria-industrial/" class="text-sm">SERVICIOS</a></li>
                                <li><a href="https://bombasellos.com.mx:/blog-bsh/" class="text-sm">MEDIA/TOOLS</a></li>
                                <li><a href="https://bombasellos.com.mx:/somos-bsh/" class="text-sm">NOSOTROS</a></li>
                                <li><a href="https://bombasellos.com.mx:/contacto/" class="text-sm">CONTACTO</a></li>
                                <li><a href="https://bombasellos.com.mx/blog/" class="text-sm">BLOG</a></li>
                                <li><a href="https://bombasellos.com.mx/preguntas-frecuentes/" class="text-sm">FAQ´S</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="p-4">
                        <p><a href="https://bombasellos.com.mx/aviso-de-privacidad/" class="text-sm text-white">AVISO DE PRIVACIDAD</a></p>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 p-4">
                    <div class="p-4">
                        <div class="text-xl font-semibold text-white p-4">CONTACTO</div>
                    </div>
                    <div class="p-4">
                        <p class="text-white">
                            <span>-Nombre: Bombas Sellos y Hules Industriales SA de CV.</span><br>
                            <span>-Abreviado: BSH SA de CV.</span><br>
                            <span>-Dirección: Avenida 125 Oriente #226, Guadalupe Hidalgo. Puebla. C.P. 72494.</span><br>
                            <span>-Teléfonos:</span><br>
                            <span>(55)5752-1715</span><br>
                            <span>(22)2227-3866</span><br>
                            <span>(83)3246-2205</span><br>
                            <span>(83)3239-5885</span><br>
                            <span><a href="mailito:bsh@bombasellos.com.mx" class="">-Correo electrónico: bsh@bombasellos.com.mx</a></span>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="border-t border-gray-500"></div>

        <section class="bg-blue-900 py-8">
            <div class="container mx-auto flex flex-wrap">
                <div class="w-full md:w-1/2 px-4">
                    <div class="text-gray-700">
                        <p class="text-base text-gray-400">&copy; {{ date('Y') }} - All Rights Reserved. Bombas Sellos y Hules Industriales S.A. de C.V.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/2 px-4">
                    <div class="text-gray-700 text-right">
                        <p class="text-base text-white">LUN – VIE: 9.00 – 18.00&nbsp; SAB/SUN: CLOSED</p>
                    </div>
                </div>
            </div>
        </section>
        




    </footer>
</html>
