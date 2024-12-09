<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 | Show</title>
</head>
<body>

    <a href="/laravel/blog/public/posts/">Volver a posts</a>

    <H1>Título: {{ $post -> title }} </H1>
    <p>
        <b>Categoría:</b> {{ $post -> category }}
    </p>

    <p>
        {{ $post -> content }}
    </p>

    <a href="/laravel/blog/public/posts/{{$post -> id}}/edit">
        Editar post
    </a>

    <form action="/laravel/blog/public/posts/{{$post -> id}}" method="POST">

        @csrf
        @method('DELETE')

        <button type="submit">
            Eliminar post
        </button>
    </form>

</body>
</html>
