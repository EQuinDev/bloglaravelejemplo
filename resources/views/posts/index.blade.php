<x-app-layout>

    @extends('layouts.app')

    <H1 class="font-bold text-3xl" >Página principal</H1>

    <a href="/laravel/blog/public/posts/create" class="bg-blue-500 text-white py-2 px-4 rounded-full inline-block hover:bg-blue-700">
        Nuevo post
    </a>

    <ul  class="list-none p-0">
        @foreach ($posts as $post)
            <li class="mb-2 p-2 bg-gray-100 rounded shadow">
                <a href="/laravel/blog/public/posts/{{$post->id}}" class="text-blue-600 hover:underline">
                    {{ $post -> title }}
                </a>
            </li>
        @endforeach


    </ul>


</x-app-layout>
