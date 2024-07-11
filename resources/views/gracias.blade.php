@extends('layouts.app')

@section('title', 'Gracias - BSH')
@section('description', 'Muchas Gracias')

@section('contenido')
<section class="w-full bg-gray-800">
    <div class="container mx-auto py-16">
        <div class="max-w-3xl mx-auto text-center text-white">
            <h2 class="text-3xl font-semibold mb-8">¡Muchas gracias!</h2>
            <p class="text-lg mb-8">En breve uno de nuestros especialistas lo contactará para ayudarlo en lo que requiere.</p>
            <a href="/" class="inline-block bg-orange-500 text-white py-3 px-6 rounded-full text-lg transition duration-300 hover:bg-orange-600">Regresar al inicio</a>
        </div>
    </div>
</section>




@endsection