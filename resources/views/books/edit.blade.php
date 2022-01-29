@extends('main-layout')
@section('main-content')
    <div class="w-75">
        <form action="{{ route('book.update', $book->id) }}" method="POST">
            @csrf @method('PATCH')
            <label for="title" class="form-label mt-4">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="{{ $book->title }}">
            <label for=" author" class="form-label mt-4">Author</label>
            <input type="text" class="form-control" name="author" id="author" placeholder="{{ $book->author }}">
            <label for="description" class="form-label mt-4">Description</label>
            <textarea type="text" class="form-control" name="description" id="description"
                placeholder="{{ $book->description }}" rows="5"></textarea>
            <label for="author" class="form-label mt-4">Price</label>
            <input type="number" class="form-control" name="price" id="price" placeholder="{{ $book->price }}">
            <button class="mt-4 btn btn-primary" type="submit">
                Modifica il libro
            </button>
        </form>
    </div>
@endsection
