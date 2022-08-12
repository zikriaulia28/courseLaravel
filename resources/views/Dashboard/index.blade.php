@extends('Layout/isUser')

@section('content')
<div class="container">
    <h3 class="text-center text-3xl font-bold my-5 font-serif">{{ $title }}</h3>
    <div class="py-2">
        @if (session()->has('message'))
        <div class="container">
            @include('Layout.toast')
        </div>
        @endif
        <div class="flex justify-center my-10">
            <div class="block rounded-lg shadow-lg w-2/4 text-center bg-gray-100">
                <div class="py-3 px-6 border-b border-gray-300">
                    <h3 class="text-xl font-bold">Add Article</h3>
                </div>
                <div class="p-6">
                        <form method="POST" action={{ route('article_add_action') }} >
                            @csrf
                            <input type="text" name="title" class="form-control block w-full mb-5 px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none " placeholder="Judul" />
                            <textarea type="text" name="description" class="form-control block w-full mb-5 px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none " placeholder="Description"></textarea>
                            <input type="text" name="tag" class="form-control block w-full mb-5 px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none " placeholder="Tag" />
                            <button type="submit" class=" inline-block px-6 py-2.5 bg-teal-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-teal-700 hover:shadow-lg focus:bg-teal-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Buat Artikel</button>
                        </form>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-wrap justify-center items-center gap-3 p-4 ">
        @foreach ($articles as $article)
            <a href="{{ route('article_detail', ['id' => $article->id]) }}"
                class="md:w-3/4 lg:px-10 py-4 px-5 bg-white rounded-lg shadow-md hover:text-white hover:scale-105 hover:transition-all hover:bg-blue-500 hover:my-2 hover:md:my-0">
                <div>
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-light   ">{{ date('F j, Y', strtotime($article->created_at)) }}</span>
                        <p
                            class="px-3 py-1 text-sm font-bold text-gray-100 transition-colors duration-200 transform bg-gray-600 rounded  ">
                            {{ $article->tag }}</p>
                    </div>
                    <div class="mt-2">
                        <p class="text-2xl font-bold">{{ $article->title }}</p>
                        <p class="mt-2   ">{{ $article->description }}</p>
                    </div>
                </div>
            </a>
            <div class="flex flex-col gap-4">
                <a href="{{ route('edit_action', ['title' => $article->title]) }}" class="bg-red-500 text-center rounded px-4 py-2">Edit</a>
                <form method="POST" action={{ route('article_delete_action') }}>
                    @csrf
                    <input class="form-control" type="hidden" name="id" value={{ $article->id }} />
                    <button type="submit" class="bg-green-500 rounded px-4 py-2">Delete</button>
                </form>
            </div>
        @endforeach
    </div>
</div>
@endsection
