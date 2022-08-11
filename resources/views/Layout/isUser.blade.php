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
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto gap-4">
                        <a class="nav-link mt-2 " href="/">Home</a>
                        <a class="nav-link mt-2" href="/dashboard">Article</a>
                        <div>
                            <form method="POST" action={{ route('dashboard_logout') }} class="py-2">
                                @csrf
                                <input class="form-control" name="token" type="hidden" value={{ $users->token }} />
                                <button class="btn btn-danger">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        {{-- <nav class="d-flex nav-link">
                <a href="/">HOME</a>
            </nav>
            <nav>
                <a href="/dashboard/article">ARTICLE</a>
            </nav> --}}
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
