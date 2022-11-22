@extends("layouts.app")

@section("title", $book->title)

@section("content")
    <div class="container py-4">
        <a href="{{ url()->previous() }}" class="btn btn-secondary mb-4">
            <span class="d-flex align-items-center justify-content-center">
                <i data-feather="arrow-left" class="me-1" style="width: 16px; height: 16px"></i>
                Back
            </span>
        </a>

        <div class="row mt-3">
            <div class="col-md-6">
                <img src="{{ $book->image }}" alt="..." class="img-fluid rounded-1"/>
            </div>
            <div class="col mt-2">

                <div class="mb-3">
                    <span class="text-muted">Title</span>
                    <p class="mt-2 fs-3 fw-bold">
                        {{ $book->title }}
                    </p>
                </div>

                <div class="d-flex mb-3">
                    <div class="me-5">
                        <span class="text-muted">Author</span>
                        <p class="m-0 mt-2 fw-bold d-flex align-items-center justify-content-center">
                            <i data-feather="user" class="me-1" style="width: 16px; height: 16px"></i>
                            {{ $book->author }}
                        </p>
                    </div>
                    <div class="">
                        <span class="text-muted">Publisher</span>
                        <p class="m-0 mt-2 fw-bold d-flex align-items-center justify-content-center">
                            <i data-feather="printer" class="me-1" style="width: 16px; height: 16px"></i>
                            {{ $book->publisher->name }}
                        </p>
                    </div>
                </div>

                <div class="mb-3">
                    <span class="text-muted">Synopsis</span>
                    <p class="mt-2">{{ $book->synopsis }}</p>
                </div>

                <div>
                    <span class="text-muted">Categories</span>
                    <div class="mt-2 d-flex flex-wrap gap-2">
                        @forelse($book->categories as $category)
                            <span class="d-flex align-items-center badge text-bg-primary">
                                <i data-feather="tag" class="me-1" style="width: 16px; height: 16px"></i> {{ $category->name }}
                            </span>
                        @empty
                            <p>Empty...</p>
                        @endforelse
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
