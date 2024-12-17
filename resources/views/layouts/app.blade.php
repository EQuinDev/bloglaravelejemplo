<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Pruebaaaa')</title>
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- fotnawesome --}}

    {{-- tipografia --}}

    @stack('css')

</head>
<body class="bg-purple-200">

    <div id="app" class="min-h-screen bg-purple-200 text-black">
        <header></header>

        @yield('content')

        <footer></footer>

    </div>

    @stack('js')
</body>
</html>
