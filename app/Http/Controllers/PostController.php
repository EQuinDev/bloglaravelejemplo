<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->orderBy('id', 'desc')->get();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all(); // Obtener todas las categorías para el formulario
        return view('posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'content' => 'required|string',
        ]);

        Post::create([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'content' => $request->content,
            'is_active' => true, // Ajusta según tu lógica de negocio
        ]);

        return redirect('/posts')->with('success', 'Post creado exitosamente');
    }

    public function show($post)
    {
        $post = Post::with('category')->findOrFail($post);
        return view('posts.show', compact('post'));
    }

    public function edit($post)
    {
        $post = Post::with('category')->findOrFail($post);
        $categories = Category::all(); // Para la edición también necesitas las categorías
        return view('posts.edit', compact('post', 'categories'));
    }

    public function update(Request $request, $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'content' => 'required|string',
        ]);

        $post = Post::findOrFail($post);
        $post->update([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'content' => $request->content,
        ]);

        return redirect("/posts/{$post->id}")->with('success', 'Post actualizado exitosamente');
    }

    public function destroy($post)
    {
        $post = Post::findOrFail($post);
        $post->delete();

        return redirect('/posts')->with('success', 'Post eliminado exitosamente');
    }
}
