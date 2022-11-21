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
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
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
