<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Str; // Asegúrate de importar la clase Str



class PostController extends Controller
{
    use AuthorizesRequests;
    // Mostrar todos los posts
    public function index()
    {
        $posts = Post::latest()->paginate(10);
       // dd($posts); // Depurar

        return view('posts.index', compact('posts'));
    }

    // Mostrar formulario de creación
    public function create()
    {
        return view('posts.create');
    }

    // Guardar nuevo post
    public function store(Request $request)
    {
        // Validación
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',

        ]);
    
        // Crear y Guardar el Post
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->user_id = auth()->id();
        $post->slug = Str::slug($request->title);



            // Manejar la subida de la imagen
    if ($request->hasFile('image')) {
        $imageName = time().'_'.$request->image->getClientOriginalName();
        $request->image->move(public_path('images'), $imageName);
        $post->image = $imageName;
    }

        $post->save();
    
        // Redireccionar con Mensaje de Éxito
        return redirect()->route('posts.index')->with('success', 'Post creado exitosamente.');
        $post->slug = Post::generateSlug($request->title);

    }
    

    // Mostrar un post específico
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('posts.show', compact('post'));
    }
    

    // Mostrar formulario de edición
    public function edit(Post $post)
    {
        $this->authorize('update', $post);

        return view('posts.edit', compact('post'));
    }

    // Actualizar un post existente
    public function update(Request $request, Post $post)
{
    $this->authorize('update', $post);

    // Validación de los campos
    $request->validate([
        'title' => 'required|max:255',
        'content' => 'required',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
    ]);

    // Actualizar los campos 'title' y 'content'
    $post->title = $request->title;
    $post->content = $request->content;

    // Generar y asignar el nuevo 'slug'
    $post->slug = Post::generateSlug($request->title);

    // Manejar la subida de la imagen
    if ($request->hasFile('image')) {
        // Eliminar la imagen anterior si existe
        if ($post->image && file_exists(public_path('images/'.$post->image))) {
            unlink(public_path('images/'.$post->image));
        }

        // Guardar la nueva imagen
        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);
        $post->image = $imageName;
    }

    // Guardar los cambios en el modelo
    $post->save();

    return redirect()->route('posts.index')->with('success', 'Post actualizado exitosamente.');
}


    // Eliminar un post
    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);

        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post eliminado exitosamente.');
    }
}
