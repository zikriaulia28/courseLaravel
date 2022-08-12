<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin - Deacourse Laravel</title>
    @vite('resources/css/app.css')
</head>

<body>
    <header>
        @include('Layout.navbarUser')
    </header>
    {{-- our content --}}
    @yield('content')
    {{-- end our content --}}

    <footer class=" w-full flex flex-col items-center justify-center px-6 py-4 bg-white sm:flex-row">
        <p class=" py-2 text-gray-800  sm:py-0">&copy; Deacourse-Laravel Made With ❤</p>
        </div>
    </footer>
    <script src="main.js"></script>
</body>

</html>
