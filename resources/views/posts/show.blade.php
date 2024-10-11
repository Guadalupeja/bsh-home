@extends('layouts.app')

@section('contenido')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-3xl mx-auto bg-white rounded-lg overflow-hidden shadow-lg">
        @if($post->image)
            <img src="{{ asset('images/'.$post->image) }}" alt="{{ $post->title }}" class="w-full h-[350px] object-cover">
        @endif
        <div class="p-6">
            <h1 class="text-4xl font-bold mb-4">{{ $post->title }}</h1>
            <div class="flex items-center text-gray-500 text-sm mb-6">
                <svg class="h-5 w-5 mr-1" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M6 2a2 2 0 00-2 2v2H3a1 1 0 100 2h1v6H3a1 1 0 100 2h1v2a2 2 0 002 2h8a2 2 0 002-2v-2h1a1 1 0 100-2h-1V8h1a1 1 0 100-2h-1V4a2 2 0 00-2-2H6zM6 4h8v2H6V4zm8 12H6v-6h8v6z"/>
                </svg>
                <span>{{ $post->created_at->format('d M, Y') }}</span>
                <span class="mx-2">|</span>
                <span>Publicado por <strong>{{ $post->user->name }}</strong></span>
            </div>
            <div class="prose max-w-none text-gray-800">
                {!! nl2br(e($post->content)) !!}
            </div>
            <!-- Sección de botones (Editar, Eliminar) para el autor del post -->
            @can('update', $post)
            <div class="mt-6 flex">
                <a href="{{ route('posts.edit', $post->id) }}" class="mr-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    Editar
                </a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600" onclick="return confirm('¿Estás seguro de que deseas eliminar este post?')">
                        Eliminar
                    </button>
                </form>
            </div>
            @endcan
        </div>
    </div>
</div>
@endsection

