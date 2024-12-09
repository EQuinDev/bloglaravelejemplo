<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use PHPUnit\Framework\Attributes\PostCondition;

use function Pest\Laravel\post;

Route::get('/', HomeController:: class);
Route::get('/posts', [PostController:: class, 'index']);
Route::get('/posts/create', [PostController:: class, 'create']);

Route::post('/posts', [PostController::class, 'store']);

Route::get('/posts/{post}',[PostController:: class, 'show']);



// Route::get('/posts/{post}/{category}', function ($post, $category) {
//     return "Aquí se mostrará el post {$post} de la gategoría {$category}";
// });

Route::get('prueba', function(){

    // Crear nuevo post
        //   $post = new Post;

        //   $post->title = 'Título DE pruebA 4';
        //   $post->content = 'Contenido de prueba 4';
        //   $post->categoria = 'Categoría de prueba 4';


           //$post->save();

           //return $post;

         $post = Post::find(1);
         //return $post->created_at->format('d/m/Y');
        dd($post->is_active);






    // ACTUALIZAR UN POST
    // $post = Post::where('title', 'Título de prueba 1')
    //             ->first();

    // $post->categoria = 'Desarrollo web';
    // $post->save();


    // return $post;

    /*  // LISTAR TODOS LOS POST
    $posts = Post::orderBy('id','desc')
            ->select('id', 'title', 'categoria')
            ->take(2)
            ->get();

    return $posts;

    */

    // $post = Post::find(1);
    // $post->delete();

    // return "Eliminado de manera correcta";

});
