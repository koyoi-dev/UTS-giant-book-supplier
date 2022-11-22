@extends("layouts.app")

@section("title", "Home Page")

@section("content")
    <div class="container py-4">
        <h1 class="fw-bold display-4 mb-4">Book List</h1>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 g-3">
            @forelse($books as $book)
                <div class="col">
                    <div class="card pt-2">
                        <div class="card-img-top"
                             style="width: 100%; height: 250px; background-position: center; background-repeat: no-repeat; background-size: contain; background-image: url('{{ $book->image }}')"></div>
                        <div class="card-body">
                            <h5 class="card-title font-base text-truncate">{{ $book->title }}</h5>
                            <p>{{ $book->author }}</p>
                            <a href="{{ route('book.show', $book->id) }}" class="btn btn-sm btn-secondary">Details</a>
                        </div>
                    </div>
                </div>
            @empty
                <p>Empty...</p>
            @endforelse
        </div>
    </div>
@endsection
