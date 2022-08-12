<nav class="bg-white shadow ">
    <div class="container px-6 py-4 mx-auto md:flex md:justify-between md:items-center relative">
        <div class="flex items-center">
            <div>
                <a class="text-2xl font-bold text-gray-800 transition-colors duration-200 transform lg:text-3xl hover:text-gray-700 "
                    href="#">CuyBlog</a>
            </div>
            <div>
                <a href="{{ route('home') }}"
                    class="text-gray-800 transition-colors duration-200 transform  border-b-2 border-blue-500 mx-1.5 sm:mx-6">
                    Home
                </a>
                <a class="text-gray-800 transition-colors duration-200 transform  border-b-2 border-blue-500 mx-1.5 sm:mx-6" href="/dashboard">Article</a>
            </div>
            <div class="absolute right-0 bg-teal-400 px-4 m-2 rounded hover:bg-teal-600">
                <form method="POST" action={{ route('dashboard_logout') }} class="py-2">
                    @csrf
                    <input class="form-control" name="token" type="hidden" value={{ $users->token }} />
                    <button class="btn btn-danger">Logout</button>
                </form>
            </div>
        </div>
    </div>
</nav>
