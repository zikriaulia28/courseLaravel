@extends('Layout/isGuest')

@section('content')
    <div>
        <h1 class="font-bold text-center p-5 text-2xl">Welcome Back :)</h1>
        <div class="flex justify-center ">
            <form
                class="flex flex-col justify-center  bg-white rounded shadow-lg shadow-slate-400 p-10 lg:w-1/3 md:w-2/3  w-full mx-5 md:mx-0 "
                method="POST" action={{ route('login_action') }}>
                @if (session('error'))
                    <div class="w-full capitalize text-white bg-red-500 my-2 p-3 rounded-xl">
                        <div class=" flex items-center justify-start ">
                            <div class="flex">
                                <svg viewBox="0 0 40 40" class="w-6 h-6 fill-current">
                                    <path
                                        d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z">
                                    </path>
                                </svg>
                                <p class="mx-3 italic">{{ session('error') }}.</p>
                            </div>
                        </div>
                    </div>
                @endif
                @if (session()->get('success'))
                    <div class="w-full capitalize text-white bg-emerald-500 my-2 p-3 rounded-xl">
                        <div class=" flex items-center justify-start  ">
                            <div class="flex">
                                <svg viewBox="0 0 40 40" class="w-6 h-6 fill-current">
                                    <path
                                        d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z">
                                    </path>
                                </svg>
                                <p class="mx-3 italic">{{ session()->get('success') }}.</p>
                            </div>
                        </div>
                    </div>
                @endif
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
                    class="flex items-center justify-center h-12 px-6 w-full bg-blue-600 mt-8 rounded font-semibold text-sm text-blue-100 hover:bg-blue-700">Login</button>
                <div class="flex mt-6 justify-center text-xs">
                    <a class="text-blue-400 hover:text-blue-500" href="register">Sign Up</a>
                </div>
            </form>
        </div>
    </div>
@endsection
