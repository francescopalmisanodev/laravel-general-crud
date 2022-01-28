@extends('main-layout')

@section('main-content')
    <div class="w-75 d-flex flex-column">
        @forelse ($books as $book)
            <div class="row">
                <h3>
                    Title: {{ $books->title }}
                </h3>
                <h5>
                    Author: {{ $books->author }}
                </h5>
                <p>{{ $books->description }}</p>
                <span>Price: {{ $books->price }}</span>
                <div class="actions">
                    <button>Show</button>
                    <button>Modify</button>
                    <button>Delete</button>
                </div>
            </div>
        @empty
            No books found
        @endforelse
    </div>
@endsection
