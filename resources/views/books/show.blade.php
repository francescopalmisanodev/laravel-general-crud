<div class="w-75 d-flex flex-column">
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
            <button>Modify</button>
            <button>Delete</button>
        </div>
    </div>
</div>
