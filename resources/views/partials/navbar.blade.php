<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">GBS</span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Route::is("home") ? "active" : "" }}"
                       href="{{ route("home") }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <span class="nav-link dropdown-toggle {{  Route::is("category.show") ? "active" : "" }}"
                          role="button" data-bs-toggle="dropdown">
                        Category
                    </span>
                    <ul class="dropdown-menu rounded-1 p-2 shadow" style="min-width: 220px;">
                        @forelse($categories as $category)
                            <li>
                                <a class="dropdown-item rounded-2"
                                   href="{{ route("category.show", $category->id) }}">{{ $category->name }}</a></li>
                        @empty
                        @endforelse
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Publisher</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is("contact") ? "active" : "" }}"
                       href="{{ route("contact")}}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
