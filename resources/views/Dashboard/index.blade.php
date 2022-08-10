@extends('Layout/isUser')

@section('content')
<div class="container">
    @if (session()->has('message'))
    <div class="col-sm-6 col-md-6" id="message">
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                ×</button>
           <span class="glyphicon glyphicon-ok"></span> <strong>Success Message</strong>
            <hr class="message-inner-separator">
            <p>
                {{ session()->get('message') }}</p>
        </div>
    </div>    
    @endif
    <h3>{{ $title }}</h3>
    <hr />
    <div class="py-2">
        <form method="POST" action={{ route('article_add_action') }} >
            @csrf
            <input class="form-control mt-2" type="text" placeholder="judul" name="title" />
            <input class="form-control mt-2" type="text" placeholder="deskripsi" name="description" />
            <input class="form-control mt-2" type="text" placeholder="tag" name="tag" />
            <button class="btn btn-primary my-4" type="submit">Buat Artikel</button>
        </form>
    </div>
    <div class="row row-cols-1 row-cols-md-4 g-2">
        @foreach ($articles as $article)
        {{-- <tr>
            <td>{{ $article->id }}</td>
            <td>{{ $article->title }}</td>
            <td>{{ $article->description }}</td>
                <td>{{ $article->tag }}</td>
                <td>
                    <div>
                        <a href="{{ route('edit_action', ['title' => $article->title]) }}" class="btn btn-link" >edit</a>
                        <form method="POST" action={{ route('article_delete_action') }}>
                            @csrf
                            <input class="form-control" type="hidden" name="id" value={{ $article->id }} />
                            <button class="btn btn-link" type="submit">hapus</button>
                        </form>
                    </div>
                </td>
            </tr> --}}
        <div class="col d-flex align-items-stretch">
            <div class="card ">
                <div class="card-body position-relative">
                  <p class="card-title">{{ $article->title }}</p>
                  <hr/>
                  <p class="card-text">{{ $article->description }}</p>
                    <div class="d-flex gap-2 position-absolute bottom-0 start-50 translate-middle-x">
                        <a href="{{ route('edit_action', ['title' => $article->title]) }}" class="btn btn-primary">Edit</a>
                            <form method="POST" action={{ route('article_delete_action') }}>
                                @csrf
                                <input class="form-control" type="hidden" name="id" value={{ $article->id }} />
                                <button class="btn btn-danger" type="submit">hapus</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection