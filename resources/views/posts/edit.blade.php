@extends('layouts.app')

@section('contenido')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">{{ isset($post) ? 'Editar Post' : 'Crear Nuevo Post' }}</h1>

    <form method="POST" action="{{ isset($post) ? route('posts.update', $post) : route('posts.store') }}" enctype="multipart/form-data">
        @csrf
        @if(isset($post))
            @method('PUT')
        @endif

        <div class="mb-4">
            <label class="block text-gray-700">Título</label>
            <input type="text" name="title" value="{{ old('title', $post->title ?? '') }}" class="w-full border rounded px-3 py-2">
            @error('title')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Contenido</label>
            <textarea name="content" rows="5" class="w-full border rounded px-3 py-2">{{ old('content', $post->content ?? '') }}</textarea>
            @error('content')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>


        <div class="mb-4">
            <label class="block text-gray-700">Imagen</label>
            <input type="file" name="image" class="w-full border rounded px-3 py-2">
            @error('image')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
            {{ isset($post) ? 'Actualizar' : 'Publicar' }}
        </button>
    </form>
</div>
@endsection
