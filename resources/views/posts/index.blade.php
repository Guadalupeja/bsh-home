@extends('layouts.app')

@section('contenido')
<div class="container mx-auto px-4">
    <h1 class="text-3xl font-bold mb-8 text-center">Blog</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($posts as $post)
        <div class="bg-white rounded-lg overflow-hidden shadow-lg">
            @if($post->image)
                <img src="{{ asset('images/'.$post->image) }}" alt="{{ $post->title }}" class="w-full h-48 object-cover">
            @endif
            <div class="p-6">
                <a href="{{ route('posts.show', $post->slug) }}" class="block text-xl font-semibold text-blue-600 hover:underline mb-2">
                    {{ $post->title }}
                </a>
                <p class="text-gray-700 text-base">
                    {{ Str::limit($post->content, 120) }}
                </p>
                <div class="mt-4 flex items-center text-gray-500 text-sm">
                    <svg class="h-5 w-5 mr-1" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M6 2a2 2 0 00-2 2v2H3a1 1 0 100 2h1v6H3a1 1 0 100 2h1v2a2 2 0 002 2h8a2 2 0 002-2v-2h1a1 1 0 100-2h-1V8h1a1 1 0 100-2h-1V4a2 2 0 00-2-2H6zM6 4h8v2H6V4zm8 12H6v-6h8v6z"/>
                    </svg>
                    <span>{{ $post->created_at->format('d M, Y') }}</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mt-8">
        {{ $posts->links() }}
    </div>
</div>
@endsection

