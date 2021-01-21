{{-- <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('homepage') }}">
                Homepage
                <span class="sr-only">(current)</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('products.index') }}">
                Prodotti
            </a>
        </li>
    </ul>
</div> --}}

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-md-center">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('homepage') }}">
                    Homepage
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('products.index') }}">
                    Products
                </a>
            </li>
        </ul>
    </div>
</nav>
