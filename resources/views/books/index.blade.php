@extends('main-layout')

@section('main-content')
    <div class="w-75 d-flex flex-column">
        @if (session('delete'))
            <div class="allert allert-success">
                {{ session('delete') }}
            </div>
        @endif
        @forelse ($books as $book)
            <div class="row">
                <h3>
                    Title: {{ $book->title }}
                </h3>
                <h5>
                    Author: {{ $book->author }}
                </h5>
                <p>{{ $book->description }}</p>
                <span>Price: {{ $book->price }}</span>
                <div class="actions">
                    <a href="{{ route('book.show', $book->id) }}">Show</a>
                    <a href="{{ route('book.edit', $book->id) }}">Modify</a>
                    <a href="{{ route('book.destroy', $book->id) }}">Delete</a>
                </div>
            </div>
        @empty
            No books found
        @endforelse
    </div>
@endsection
