<x-app-layout>

    <H1>Aquí se mostrarán todos los posts</H1>

    <a href="/laravel/blog/public/posts/create">
        Nuevo post
    </a>

    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="/laravel/blog/public/posts/{{$post->id}}">
                    {{ $post -> title }}
                </a>
            </li>
        @endforeach


    </ul>


</x-app-layout>
