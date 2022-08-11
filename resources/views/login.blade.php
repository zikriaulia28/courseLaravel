@extends('Layout/isGuest')

@section('content')
    <div>
        <h1 class="font-bold text-center p-5 text-2xl">Welcome Back :)</h1>
        <div class="flex justify-center">
            <form class="flex flex-col justify-center bg-white rounded shadow-lg shadow-cyan-500/50 p-10" method="POST" action={{route('login_action')}}>
                <i>{{ session()->get('success') }}</i>
                @csrf
                <label class="font-semibold text-xs" for="usernameField">Username</label>
                <input class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded" name="username" type="text">
                <label class="font-semibold text-xs mt-3" for="passwordField">Password</label>
                <input class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded" name="password" type="password">
                <button type="submit" class="flex items-center justify-center h-12 px-6 w-64 bg-blue-600 mt-8 rounded font-semibold text-sm text-blue-100 hover:bg-blue-700">Login</button>
                <div class="flex mt-6 justify-center text-xs">
                    <a class="text-blue-400 hover:text-blue-500" href="register">Sign Up</a>
                </div>
            </form>
        </div>
    </div>

@endsection
