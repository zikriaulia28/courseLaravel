@extends('Layout/isUser' )
@section('content')
    <div class="flex justify-center my-10">
        <div class="block rounded-lg shadow-lg w-2/4 text-center bg-gray-100">
            <div class="py-3 px-6 border-b border-gray-300">
                <h3 class="text-xl font-bold">Edit Article</h3>
            </div>
            <div class="p-6">
                    <form method="POST" action={{ route('update_action', ['id' => $update->id])}} >
                        @csrf
                        @method('put')
                        <input type="text" name="title" value={{$update->title }} class="form-control block w-full mb-5 px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none " placeholder="Judul" />
                        <textarea type="text" name="description" value={{$update->description }} class="form-control block w-full mb-5 px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none " placeholder="Description"> </textarea>
                        <input type="text" name="tag" value={{$update->tag }} class="form-control block w-full mb-5 px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none " placeholder="Tag" />
                        <button type="submit" class=" inline-block px-6 py-2.5 bg-teal-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-teal-700 hover:shadow-lg focus:bg-teal-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Update Artikel</button>
                    </form>
            </div>
        </div>
    </div>
@endsection
