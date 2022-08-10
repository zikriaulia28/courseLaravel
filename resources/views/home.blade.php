@extends('Layout/isGuest')

@section('content')
    <h3 class="text-center text-lg font-bold">{{$title}}</h3>
    <div class="mt-10">

            {{-- <div>
                <h3><a href="/article/{{ $article->id }}">{{$article->title}}</a></h3>
            </div>
            <hr/> --}}
            {{-- <div class="container">
                <div class="row">
                    @foreach ($articles as $article)
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                              <h3 class="card-text"><a href="/article/{{ $article->id }}">{{$article->title}}</a></h3>
                              <p class="card-text"><a href="/article/{{ $article->id }}">{{$article->description}}</a></p>
                              <p class="card-text"><a href="/article/{{ $article->id }}">{{$article->tag}}</a></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div> --}}

            <!-- component -->
            @foreach ($articles as $article)
            <div class="bg-gray-100 grid-responsive">
                <div class="container mx-auto p-9 bg-white max-w-sm rounded-2xl overflow-hidden shadow-xl hover:shadow-2xl transition duration-300">
                <div class="grid">
                    <div>
                        <h3 class="font-bold"><a href="/article/{{ $article->id }}">{{$article->title}}</a></h3>
                        <p><a href="/article/{{ $article->id }}">{{$article->description}}</a></p>
                        <p><a href="/article/{{ $article->id }}">{{$article->tag}}</a></p>
                    </div>
                    <div>
                    </div>
                </div>
                </div>
            </div>
            @endforeach


    </div>
@endsection
