@extends('Layout/isGuest')

@section('content')
    <section class="bg-white  min-h-screen">
        <div class="container px-6 py-8 mx-auto">
            <div class="items-center lg:flex">
                <div class="lg:w-2/3">
                    <h2 class="text-4xl font-bold text-gray-900 ">{{ $article->title }}</h2>
                    <h4
                        class=" rounded-full tracking-wide uppercase text-gray-500 text-sm font-mono ml-1 px-5 py-1.5 text-[10px] text-center w-20 ">
                        {{ $article->tag }}
                    </h4>
                    <p
                        class="font-serif font-thin leading-8 mt-4 text-slate-800  lg:max-w-4xl text-lg indent-8  text-justify">
                        {{ $article->description }}
                    </p>
                </div>
            </div>
            <div class="flex my-6  lg:justify-start lg:items-end justify-center items-center">

                <a href="{{ route('home') }}"
                    class="relative inline-block px-8 py-3 text-indigo-600 border border-current rounded-full group hover:bg-indigo-600 hover:text-white">
                    <span class="text-sm font-medium transition-opacity ">
                        Back to Articles
                    </span>
                </a>
            </div>
        </div>
    </section>
@endsection
