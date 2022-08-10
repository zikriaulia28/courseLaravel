@extends('Layout/isUser' )
@section('content')
    <h1>sadasd</h1>
    <div class="py-2">
        <form method="POST" action={{ route('update_action', ['id' => $update->id])}} >
            @csrf
            @method('put')
            <input class="form-control mt-2" type="text" placeholder="judul" name="title" value={{$update->title }} />
            <input class="form-control mt-2" type="text" placeholder="deskripsi" name="description" value={{$update->description }} />
            <input class="form-control mt-2" type="text" placeholder="tag" name="tag"  value={{$update->tag }} />
            <button class="btn btn-primary my-4" type="submit">Update Artikel</button>
        </form>
    </div>
@endsection