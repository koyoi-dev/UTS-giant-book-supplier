@extends("layouts.app")

@section("title", "Publisher | " . $publisher->name)

@section("content")
    <div class="container py-4">
        <a href="{{ url()->previous() }}" class="btn btn-secondary mb-4">
            <span class="d-flex align-items-center justify-content-center">
                <i data-feather="arrow-left" class="me-1" style="width: 16px; height: 16px"></i>
                Back
            </span>
        </a>

        <div class="p-5 bg-light rounded-3">
            <div class="container-fluid">
                <div class="d-flex">
                    <img src="{{ $publisher->image }}" alt="{{ $publisher->name }}" class="img-fluid rounded-2 me-4">
                    <div class="flex-grow-1">
                        <h1 class="display-4 fw-bold">{{ $publisher->name }}</h1>
                        <hr>
                        <ul class="list-unstyled ps-3 lh-lg mt-4">
                            <li class="d-flex text-black mb-2">
                                <span class="me-3"><i data-feather="map"></i></span> {{ $publisher->address }}
                            </li>
                            <li class="d-flex text-black mb-2"><span class="me-3"><i
                                        data-feather="phone"></i></span> {{ $publisher->phone }}
                            </li>
                            <li class="d-flex text-black"><span class="me-3"><i
                                        data-feather="mail"></i></span>{{ $publisher->email }}</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 g-3 mt-4">
            @forelse($publisher->books as $book)
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
