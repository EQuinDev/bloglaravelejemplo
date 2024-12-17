<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 | Show</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="max-w-3xl mx-auto p-4 bg-white rounded shadow-lg mt-8">
        <a href="/laravel/blog/public/posts/" class="text-blue-600 hover:underline mb-4 inline-block">
            Volver a posts
        </a>

        <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>
        <p class="mb-4">
            <b class="text-gray-700">Categoría:</b> {{ $post->category->name }}
        </p>

        <p class="mb-6">{{ $post->content }}</p>

        <div class="flex justify-between items-center">
            <a href="/laravel/blog/public/posts/{{$post->id}}/edit" class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-700 inline-block">
                Editar post
            </a>

            <form action="/laravel/blog/public/posts/{{$post->id}}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-700">
                    Eliminar post
                </button>
            </form>
        </div>
    </div>
</body>
</html>
