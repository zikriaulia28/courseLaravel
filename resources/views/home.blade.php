@extends('Layout/isGuest')
@section('content')
    <h3 class="text-center text-3xl font-bold my-5 font-serif">{{ $title }}</h3>
    <div class="flex flex-col flex-wrap justify-items-stretch items-center gap-3 p-4 ">
        @foreach ($articles as $article)
            <a href="{{ route('article_detail', ['id' => $article->id]) }}"
                class="md:w-3/4 lg:px-10 py-4 px-5 bg-white rounded-lg shadow-md hover:text-white hover:scale-105 hover:transition-all hover:bg-blue-500 hover:my-2 hover:md:my-0">
                <div class="flex items-center justify-between">
                    <span class="text-sm font-light   ">{{ date('F j, Y', strtotime($article->created_at)) }}</span>
                    <p
                        class="px-3 py-1 text-sm font-bold text-gray-100 transition-colors duration-200 transform bg-gray-600 rounded  ">
                        {{ $article->tag }}</p>
                </div>
                <div class="mt-2 ">
                    <p class="text-2xl font-bold   ">
                        {{ $article->title }}</p>
                    <p class="mt-2   ">{{ $article->description }}</p>
                </div>
            </a>
        @endforeach
    </div>


    <div class="flex justify-center items-center">
        <a @if ($meta['prevPage']) href="{{ $meta['prevPage'] }}" @endif
            class="px-4 py-2 mx-1   capitalize bg-white rounded-md  <?= $meta['prevPage'] ? 'text-gray-700 hover:bg-blue-500 hover:text-white ' : 'text-gray-500 cursor-not-allowed disabled' ?> ">
            <div class="flex items-center -mx-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-1" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                </svg>

                <span class="mx-1">
                    previous
                </span>
            </div>
        </a>

        <?php $i = 1; ?>
        @foreach ($test as $item)
            <a href="{{ $item }}"
                class="hidden px-4 py-2 mx-1  transition-colors duration-200 transform  <?= $meta['currentPage'] === $i ? 'bg-blue-500 text-white' : 'bg-white text-gray-700' ?> hover:bg-blue-500 hover:text-white rounded-md sm:inline ">
                <?= $i++ ?>
            </a>
        @endforeach


        <a @if ($meta['nextPage']) href="{{ $meta['nextPage'] }}" @endif
            class="px-4 py-2 mx-1  transition-colors duration-200 transform bg-white rounded-md  <?= $meta['nextPage'] ? 'text-gray-700 hover:bg-blue-500 hover:text-white ' : 'text-gray-500 cursor-not-allowed disabled' ?> ">
            <div class="flex items-center -mx-1">
                <span class="mx-1">
                    Next
                </span>

                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-1" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </div>
        </a>
    </div>
@endsection
