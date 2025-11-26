<nav class="py-3 fixed-top custom-nav">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="brand">RateFlux</div>

        <div class="d-flex align-items-center">
            <a href="{{route('home')}}" class="me-4 active">Home</a>
            <a href="{{route('stores')}}" class="me-4">Stores</a>
            <a href="{{route('products')}}" class="me-4">Products</a>
            <a href="{{route('reviews')}}" class="me-4">Reviews</a>
            <a href="/login" class="me-4">Login</a>

            <div class="search-box ms-3">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search..." class="form-control">
            </div>
        </div>
    </div>
</nav>
