@extends('layouts.app')

@section('title', 'Products - RateFlux')

@section('content')

  <main class="container py-5">
        <!-- Page Header -->
        <div class="text-center mb-5">
            <h1 class="section-title">Top Rated Products</h1>
            <p class="text-soft lead">
                Discover trending, most-reviewed & top-rated products from trusted sellers
            </p>
        </div>

        <!-- Search + Filters Section -->
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="search-box position-relative">
                    <i class="fas fa-search"></i>
                    <input type="text" class="form-control" placeholder="Search products by name, brand, category...">
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
                    <option value="popular">Sort by: Popularity</option>
                    <option value="rating">Highest Rated</option>
                    <option value="reviews">Most Reviewed</option>
                    <option value="price-low">Price - Low to High</option>
                    <option value="price-high">Price - High to Low</option>
                    <option value="newest">Newest First</option>
                </select>
            </div>
        </div>

        <!-- Quick Filter Chips -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex flex-wrap gap-2">
                    <span class="filter-chip active">All Products</span>
                    <span class="filter-chip">🔥 Trending</span>
                    <span class="filter-chip">⭐ Top Rated</span>
                    <span class="filter-chip">🆕 New Arrivals</span>
                    <span class="filter-chip">💸 On Sale</span>
                    <span class="filter-chip">🚚 Free Shipping</span>
                </div>
            </div>
        </div>

        <!-- Stats Bar -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card-custom p-3 stats-card">
                    <div class="row text-center">
                        <div class="col-md-3">
                            <h4 class="fw-bold gradient-text mb-1">5,280+</h4>
                            <p class="text-soft mb-0">Products Listed</p>
                        </div>
                        <div class="col-md-3">
                            <h4 class="fw-bold gradient-text mb-1">28K+</h4>
                            <p class="text-soft mb-0">Customer Reviews</p>
                        </div>
                        <div class="col-md-3">
                            <h4 class="fw-bold gradient-text mb-1">4.6/5</h4>
                            <p class="text-soft mb-0">Average Rating</p>
                        </div>
                        <div class="col-md-3">
                            <h4 class="fw-bold gradient-text mb-1">95%</h4>
                            <p class="text-soft mb-0">Recommended</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Grid -->
        <div class="row">
            <!-- Product Card 1 -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                <div class="card-custom product-card">
                    <div class="product-badge trending">🔥 Trending</div>
                    <div class="product-img">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">UltraBook Pro M2</h3>
                        <p class="product-category">Electronics · Laptops</p>
                        
                        <div class="rating mb-2">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="rating-value">4.7</span>
                            <span class="review-count">(1.2K)</span>
                        </div>
                        
                        <p class="product-description">
                            14" Display, 16GB RAM, 512GB SSD, Latest Processor
                        </p>
                        
                        <div class="product-features">
                            <span class="feature-tag">🚚 Free Shipping</span>
                            <span class="feature-tag">⚡ In Stock</span>
                        </div>
                        
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div>
                                <span class="price">$1,299</span>
                                <span class="original-price">$1,499</span>
                            </div>
                            <button class="btn btn-primary-custom btn-sm">
                                <i class="fas fa-eye me-1"></i>View
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                <div class="card-custom product-card">
                    <div class="product-badge top-rated">⭐ Top Rated</div>
                    <div class="product-img">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">SmartPhone X Pro</h3>
                        <p class="product-category">Electronics · Mobile</p>
                        
                        <div class="rating mb-2">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="rating-value">5.0</span>
                            <span class="review-count">(856)</span>
                        </div>
                        
                        <p class="product-description">
                            5G, 128GB Storage, Triple Camera, All-Day Battery
                        </p>
                        
                        <div class="product-features">
                            <span class="feature-tag">📱 5G Ready</span>
                            <span class="feature-tag">⚡ In Stock</span>
                        </div>
                        
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div>
                                <span class="price">$899</span>
                            </div>
                            <button class="btn btn-primary-custom btn-sm">
                                <i class="fas fa-eye me-1"></i>View
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                <div class="card-custom product-card">
                    <div class="product-badge new">🆕 New</div>
                    <div class="product-img">
                        <i class="fas fa-headphones"></i>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">AudioMax Pro 3</h3>
                        <p class="product-category">Electronics · Audio</p>
                        
                        <div class="rating mb-2">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="rating-value">4.2</span>
                            <span class="review-count">(342)</span>
                        </div>
                        
                        <p class="product-description">
                            Wireless Noise Cancelling, 30hr Battery, Premium Sound
                        </p>
                        
                        <div class="product-features">
                            <span class="feature-tag">🎧 Wireless</span>
                            <span class="feature-tag">🔇 Noise Cancel</span>
                        </div>
                        
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div>
                                <span class="price">$249</span>
                                <span class="original-price">$299</span>
                            </div>
                            <button class="btn btn-primary-custom btn-sm">
                                <i class="fas fa-eye me-1"></i>View
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 4 -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                <div class="card-custom product-card">
                    <div class="product-badge sale">💸 Sale</div>
                    <div class="product-img">
                        <i class="fas fa-camera"></i>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">PhotoShot 4K Pro</h3>
                        <p class="product-category">Electronics · Camera</p>
                        
                        <div class="rating mb-2">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="rating-value">4.8</span>
                            <span class="review-count">(567)</span>
                        </div>
                        
                        <p class="product-description">
                            4K Video, 20MP Sensor, 5x Zoom, Wi-Fi Connectivity
                        </p>
                        
                        <div class="product-features">
                            <span class="feature-tag">📸 4K Video</span>
                            <span class="feature-tag">⚡ In Stock</span>
                        </div>
                        
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div>
                                <span class="price">$599</span>
                                <span class="original-price">$799</span>
                            </div>
                            <button class="btn btn-primary-custom btn-sm">
                                <i class="fas fa-eye me-1"></i>View
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 5 -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                <div class="card-custom product-card">
                    <div class="product-img">
                        <i class="fas fa-watch"></i>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">SmartWatch Pro</h3>
                        <p class="product-category">Electronics · Wearables</p>
                        
                        <div class="rating mb-2">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="rating-value">4.1</span>
                            <span class="review-count">(289)</span>
                        </div>
                        
                        <p class="product-description">
                            Heart Rate Monitor, GPS, 7-day Battery, Water Resistant
                        </p>
                        
                        <div class="product-features">
                            <span class="feature-tag">❤️ Health Track</span>
                            <span class="feature-tag">💧 Waterproof</span>
                        </div>
                        
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div>
                                <span class="price">$199</span>
                            </div>
                            <button class="btn btn-primary-custom btn-sm">
                                <i class="fas fa-eye me-1"></i>View
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 6 -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                <div class="card-custom product-card">
                    <div class="product-badge trending">🔥 Trending</div>
                    <div class="product-img">
                        <i class="fas fa-tablet-alt"></i>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">TabPad Air</h3>
                        <p class="product-category">Electronics · Tablets</p>
                        
                        <div class="rating mb-2">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="rating-value">4.6</span>
                            <span class="review-count">(432)</span>
                        </div>
                        
                        <p class="product-description">
                            10.9" Display, 64GB Storage, Stylus Support, Thin Design
                        </p>
                        
                        <div class="product-features">
                            <span class="feature-tag">✏️ Stylus</span>
                            <span class="feature-tag">🚚 Free Shipping</span>
                        </div>
                        
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div>
                                <span class="price">$449</span>
                            </div>
                            <button class="btn btn-primary-custom btn-sm">
                                <i class="fas fa-eye me-1"></i>View
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 7 -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                <div class="card-custom product-card">
                    <div class="product-img">
                        <i class="fas fa-gamepad"></i>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">GameZone Pro</h3>
                        <p class="product-category">Electronics · Gaming</p>
                        
                        <div class="rating mb-2">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="rating-value">5.0</span>
                            <span class="review-count">(198)</span>
                        </div>
                        
                        <p class="product-description">
                            Wireless Controller, RGB Lighting, 40hr Battery Life
                        </p>
                        
                        <div class="product-features">
                            <span class="feature-tag">🎮 Wireless</span>
                            <span class="feature-tag">🌈 RGB Lights</span>
                        </div>
                        
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div>
                                <span class="price">$79</span>
                            </div>
                            <button class="btn btn-primary-custom btn-sm">
                                <i class="fas fa-eye me-1"></i>View
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 8 -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                <div class="card-custom product-card">
                    <div class="product-badge new">🆕 New</div>
                    <div class="product-img">
                        <i class="fas fa-speaker"></i>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">SoundBar Plus</h3>
                        <p class="product-category">Electronics · Audio</p>
                        
                        <div class="rating mb-2">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="rating-value">4.3</span>
                            <span class="review-count">(156)</span>
                        </div>
                        
                        <p class="product-description">
                            Dolby Atmos, 300W Output, Bluetooth 5.0, Voice Control
                        </p>
                        
                        <div class="product-features">
                            <span class="feature-tag">🔊 Dolby Atmos</span>
                            <span class="feature-tag">🎵 Bluetooth</span>
                        </div>
                        
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div>
                                <span class="price">$299</span>
                                <span class="original-price">$349</span>
                            </div>
                            <button class="btn btn-primary-custom btn-sm">
                                <i class="fas fa-eye me-1"></i>View
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="row mt-5">
            <div class="col-12">
                <nav aria-label="Product pagination">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </main>

@endsection
