@extends('layouts.app')

@section('title', 'Top Stores - RateFlux')

@section('content')

   <main class="container py-5">
        <!-- Page Header -->
        <div class="text-center mb-5">
            <h1 class="section-title">Top Rated Stores</h1>
            <p class="text-soft lead">
                Discover trusted stores with authentic customer reviews and ratings
            </p>
        </div>

        <!-- Search + Filter Section -->
        <div class="row mb-5">
            <div class="col-md-6">
                <div class="search-box position-relative">
                    <i class="fas fa-search"></i>
                    <input type="text" class="form-control" placeholder="Search stores by name, category...">
                </div>
            </div>
            
            <div class="col-md-3">
                <select class="form-select styled-input">
                    <option value="">All Categories</option>
                    <option value="electronics">Electronics</option>
                    <option value="fashion">Fashion</option>
                    <option value="home">Home & Kitchen</option>
                    <option value="beauty">Beauty</option>
                    <option value="sports">Sports</option>
                </select>
            </div>
            
            <div class="col-md-3">
                <select class="form-select styled-input">
                    <option value="rating">Sort by: Highest Rated</option>
                    <option value="reviews">Most Reviewed</option>
                    <option value="newest">Newest Stores</option>
                    <option value="popular">Most Popular</option>
                </select>
            </div>
        </div>

        <!-- Stats Bar -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card-custom p-3">
                    <div class="row text-center">
                        <div class="col-md-3">
                            <h4 class="fw-bold gradient-text mb-1">1,250+</h4>
                            <p class="text-soft mb-0">Stores Listed</p>
                        </div>
                        <div class="col-md-3">
                            <h4 class="fw-bold gradient-text mb-1">45K+</h4>
                            <p class="text-soft mb-0">Customer Reviews</p>
                        </div>
                        <div class="col-md-3">
                            <h4 class="fw-bold gradient-text mb-1">4.7/5</h4>
                            <p class="text-soft mb-0">Average Rating</p>
                        </div>
                        <div class="col-md-3">
                            <h4 class="fw-bold gradient-text mb-1">98%</h4>
                            <p class="text-soft mb-0">Satisfaction Rate</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Store Grid -->
        <div class="row">
            <!-- Store Cards -->
            <div class="col-xl-4 col-lg-6 mb-4">
                <div class="card-custom store-card">
                    <div class="store-badge">🔥 Trending</div>
                    <div class="store-icon">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <h3 class="store-name">TechHaven</h3>
                    <div class="store-rating">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="rating-value ms-2">4.7</span>
                        <span class="review-count">(1.2K reviews)</span>
                    </div>
                    <p class="text-soft mb-2">
                        <i class="fas fa-tag me-1"></i>Electronics & Gadgets
                    </p>
                    <p class="store-description">
                        Your one-stop shop for latest tech gadgets, laptops, and accessories with premium quality.
                    </p>
                    <div class="store-features">
                        <span class="feature-badge">🚚 Free Shipping</span>
                        <span class="feature-badge">⭐ Premium</span>
                    </div>
                    <button class="btn btn-primary-custom mt-3 w-100">
                        <i class="fas fa-store me-2"></i>Visit Store
                    </button>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 mb-4">
                <div class="card-custom store-card">
                    <div class="store-badge">⭐ Top Rated</div>
                    <div class="store-icon">
                        <i class="fas fa-tshirt"></i>
                    </div>
                    <h3 class="store-name">FashionHub</h3>
                    <div class="store-rating">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="rating-value ms-2">5.0</span>
                        <span class="review-count">(890 reviews)</span>
                    </div>
                    <p class="text-soft mb-2">
                        <i class="fas fa-tag me-1"></i>Fashion & Clothing
                    </p>
                    <p class="store-description">
                        Trendy fashion clothing for all ages. Latest styles with premium quality fabrics.
                    </p>
                    <div class="store-features">
                        <span class="feature-badge">🎁 30-Day Returns</span>
                        <span class="feature-badge">⭐ Premium</span>
                    </div>
                    <button class="btn btn-primary-custom mt-3 w-100">
                        <i class="fas fa-store me-2"></i>Visit Store
                    </button>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 mb-4">
                <div class="card-custom store-card">
                    <div class="store-badge">🆕 New</div>
                    <div class="store-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <h3 class="store-name">HomeEssentials</h3>
                    <div class="store-rating">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <span class="rating-value ms-2">4.2</span>
                        <span class="review-count">(456 reviews)</span>
                    </div>
                    <p class="text-soft mb-2">
                        <i class="fas fa-tag me-1"></i>Home & Kitchen
                    </p>
                    <p class="store-description">
                        Quality home essentials and kitchenware to make your living space comfortable and stylish.
                    </p>
                    <div class="store-features">
                        <span class="feature-badge">🚚 Free Shipping</span>
                        <span class="feature-badge">⚡ Fast Delivery</span>
                    </div>
                    <button class="btn btn-primary-custom mt-3 w-100">
                        <i class="fas fa-store me-2"></i>Visit Store
                    </button>
                </div>
            </div>

            <!-- More store cards... -->
            <div class="col-xl-4 col-lg-6 mb-4">
                <div class="card-custom store-card">
                    <div class="store-icon">
                        <i class="fas fa-dumbbell"></i>
                    </div>
                    <h3 class="store-name">FitGear Pro</h3>
                    <div class="store-rating">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="rating-value ms-2">4.6</span>
                        <span class="review-count">(678 reviews)</span>
                    </div>
                    <p class="text-soft mb-2">
                        <i class="fas fa-tag me-1"></i>Sports & Fitness
                    </p>
                    <p class="store-description">
                        Professional fitness equipment and sports gear for athletes and fitness enthusiasts.
                    </p>
                    <div class="store-features">
                        <span class="feature-badge">💪 Quality Gear</span>
                        <span class="feature-badge">⚡ Fast Delivery</span>
                    </div>
                    <button class="btn btn-primary-custom mt-3 w-100">
                        <i class="fas fa-store me-2"></i>Visit Store
                    </button>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 mb-4">
                <div class="card-custom store-card">
                    <div class="store-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3 class="store-name">BeautyBloom</h3>
                    <div class="store-rating">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="rating-value ms-2">4.9</span>
                        <span class="review-count">(934 reviews)</span>
                    </div>
                    <p class="text-soft mb-2">
                        <i class="fas fa-tag me-1"></i>Beauty & Cosmetics
                    </p>
                    <p class="store-description">
                        Premium beauty products and cosmetics from top brands with cruelty-free options.
                    </p>
                    <div class="store-features">
                        <span class="feature-badge">💚 Cruelty-Free</span>
                        <span class="feature-badge">⭐ Premium</span>
                    </div>
                    <button class="btn btn-primary-custom mt-3 w-100">
                        <i class="fas fa-store me-2"></i>Visit Store
                    </button>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 mb-4">
                <div class="card-custom store-card">
                    <div class="store-badge">🔥 Trending</div>
                    <div class="store-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3 class="store-name">BookWorm</h3>
                    <div class="store-rating">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="rating-value ms-2">4.8</span>
                        <span class="review-count">(1.5K reviews)</span>
                    </div>
                    <p class="text-soft mb-2">
                        <i class="fas fa-tag me-1"></i>Books & Education
                    </p>
                    <p class="store-description">
                        Largest collection of books, educational materials, and learning resources for all ages.
                    </p>
                    <div class="store-features">
                        <span class="feature-badge">📚 Free Bookmark</span>
                        <span class="feature-badge">🎁 Gift Wrap</span>
                    </div>
                    <button class="btn btn-primary-custom mt-3 w-100">
                        <i class="fas fa-store me-2"></i>Visit Store
                    </button>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="row mt-5">
            <div class="col-12">
                <nav aria-label="Store pagination">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </main>

@endsection
