@extends('Layout/isGuest')

@section('content')
    <div>
        <h1 class="font-bold text-center p-5 text-2xl">Register Here :)</h1>
        <div class="flex justify-center ">
            <form
                class="flex flex-col justify-center  bg-white rounded shadow-lg shadow-slate-400 p-10 lg:w-1/3 md:w-2/3  w-full mx-5 md:mx-0 "
                method="POST" action={{ route('register_action') }}>
                @csrf
                <label class="font-semibold text-xs " for="usernameField">Username</label>
                <input
                    class="flex items-center h-12 px-4 max-w-full bg-white mt-2 rounded border border-gray-300  focus:border-sky-300 focus:outline-none focus:ring focus:ring-offset-sky-500"
                    name="username" type="text">
                <label class="font-semibold text-xs mt-3" for="passwordField">Password</label>
                <input
                    class="flex items-center h-12 px-4 max-w-full bg-white mt-2 rounded border border-gray-300  focus:border-sky-300 focus:outline-none focus:ring focus:ring-offset-sky-500"
                    name="password" type="password">
                <button type="submit"
                    class="flex items-center justify-center h-12 px-6 w-full bg-blue-600 mt-8 rounded font-semibold text-sm text-blue-100 hover:bg-blue-700">Register</button>
                <div class="flex mt-6 justify-center text-xs">
                    <a class="text-blue-400 hover:text-blue-500" href="{{ route('login_form') }}">Sign In</a>
                </div>
            </form>
        </div>
        {{-- <div class="flex justify-center">
            <form class="flex flex-col justify-center bg-white rounded shadow-lg shadow-cyan-500/50 p-10" method="POST" action={{route('register_action')}}>
                <i>{{ session()->get('success') }}</i>
                @csrf
                <label class="font-semibold text-xs" for="usernameField">Username</label>
                <input class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded" name="username" type="text">
                <label class="font-semibold text-xs mt-3" for="passwordField">Password</label>
                <input class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded" name="password" type="password">
                <button type="submit" class="flex items-center justify-center h-12 px-6 w-64 bg-blue-600 mt-8 rounded font-semibold text-sm text-blue-100 hover:bg-blue-700">Register</button>
            </form>
        </div> --}}
    </div>
@endsection
