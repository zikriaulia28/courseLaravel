<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deacourse Laravel</title>
    <link rel="stylesheet" href="style.css">
    @vite('resources/css/app.css')
</head>
<body>
            <header>
                <nav class="bg-gray-200 shadow shadow-gray-300 w-100 px-8 md:px-auto">
                    <div class="md:h-16 h-28 mx-auto md:px-4 container flex items-center justify-between flex-wrap md:flex-nowrap">
                        <!-- Logo -->
                        <div class="text-indigo-500 md:order-1 flex align-items-center gap-2">
                            <h1 class="font-bold text-xl">Cuy Blog</h1>
                        </div>
                        <div class="text-gray-500 order-3 w-full md:w-auto md:order-2">
                            <ul class="flex font-semibold justify-between">
                                <!-- Active Link = text-indigo-500
                                Inactive Link = hover:text-indigo-500 -->
                                <li class="md:px-4 md:py-2 text-indigo-500"><a href="#">Home</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                {{-- <nav><a href="/">HOME</a></nav> --}}
            </header>
            {{-- our content --}}
            <main>
                <div class="container px-8 ">
                    @yield('content')
                </div>
            </main>
            {{-- end our content --}}
            <footer>
                &copy; Deacourse-Laravel Made With ❤
            </footer>
</body>
</html>
