@extends('main-layout')
@section('main-content')
    <div class="w-75">
        <form action="{{ route('book.store') }}" method="POST">
            @csrf
            <label for="title" class="form-label mt-4">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Inserisci il titolo del libro">
            <label for="author" class="form-label mt-4">Author</label>
            <input type="text" class="form-control" name="author" id="author" placeholder="Inserisci l'autore del libro">
            <label for="description" class="form-label mt-4">Description</label>
            <textarea type="text" class="form-control" name="description" id="description"
                placeholder="Inserisci la descrizione del libro" rows="5"></textarea>
            <label for="author" class="form-label mt-4">Price</label>
            <input type="number" class="form-control" name="price" id="price" placeholder="Inserisci il prezzo del libro">
            <button class="mt-4 btn btn-primary" type="submit">
                Crea nuovo libro
            </button>
        </form>
    </div>
@endsection
