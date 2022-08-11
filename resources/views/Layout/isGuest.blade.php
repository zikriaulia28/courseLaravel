<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deacourse Laravel</title>
    <link rel="stylesheet" href="style.css">
    @vite('resources/css/app.css')
</head>

<body>
    @include('Layout.navbar')
    @yield('content')

    <footer class="absolute bottom-0 left-0 w-full flex flex-col items-center justify-center px-6 py-4 bg-white sm:flex-row">
        <p class=" py-2 text-gray-800  sm:py-0">&copy; Deacourse-Laravel Made With ❤</p>
        </div>
    </footer>
    {{-- <footer>

    </footer> --}}
</body>

</html>
