@extends('layouts.app')

@section('title', 'Reviews - RateFlux')

@section('content')

 <main class="container py-5">
        <!-- Page Header -->
        <div class="text-center mb-5">
            <h1 class="section-title">User Reviews</h1>
            <p class="text-soft lead">
                Read honest feedback and experiences from real customers
            </p>
        </div>

        <!-- Stats Overview -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="card-custom p-4 stats-card">
                    <div class="row text-center">
                        <div class="col-md-3">
                            <h3 class="fw-bold gradient-text mb-1">12,847</h3>
                            <p class="text-soft mb-0">Total Reviews</p>
                        </div>
                        <div class="col-md-3">
                            <h3 class="fw-bold gradient-text mb-1">4.7/5</h3>
                            <p class="text-soft mb-0">Average Rating</p>
                        </div>
                        <div class="col-md-3">
                            <h3 class="fw-bold gradient-text mb-1">89%</h3>
                            <p class="text-soft mb-0">Positive Reviews</p>
                        </div>
                        <div class="col-md-3">
                            <h3 class="fw-bold gradient-text mb-1">4,231</h3>
                            <p class="text-soft mb-0">Verified Buyers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filters Section -->
        <div class="row mb-4">
            <div class="col-md-3">
                <select class="form-select styled-input">
                    <option value="">Sort by: Latest</option>
                    <option value="">Highest Rated</option>
                    <option value="">Lowest Rated</option>
                    <option value="">Most Helpful</option>
                </select>
            </div>

            <div class="col-md-3">
                <select class="form-select styled-input">
                    <option value="">All Products</option>
                    <option>UltraBook Pro</option>
                    <option>SmartPhone X</option>
                    <option>AudioMax Pro</option>
                    <option>PhotoShot 4K</option>
                    <option>SmartWatch Pro</option>
                </select>
            </div>

            <div class="col-md-3">
                <select class="form-select styled-input">
                    <option value="">All Ratings</option>
                    <option>⭐️⭐️⭐️⭐️⭐️ 5 Stars</option>
                    <option>⭐️⭐️⭐️⭐️ 4 Stars</option>
                    <option>⭐️⭐️⭐️ 3 Stars</option>
                    <option>⭐️⭐️ 2 Stars</option>
                    <option>⭐️ 1 Star</option>
                </select>
            </div>

            <div class="col-md-3">
                <div class="search-box position-relative">
                    <i class="fas fa-search"></i>
                    <input type="text" class="form-control" placeholder="Search reviews...">
                </div>
            </div>
        </div>

        <!-- Quick Filter Chips -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex flex-wrap gap-2">
                    <span class="filter-chip active">All Reviews</span>
                    <span class="filter-chip">⭐️ 5 Star</span>
                    <span class="filter-chip">💬 With Comments</span>
                    <span class="filter-chip">📸 With Photos</span>
                    <span class="filter-chip">✅ Verified Purchase</span>
                    <span class="filter-chip">🆕 Recent</span>
                </div>
            </div>
        </div>

        <!-- Review List -->
        <div class="row">
            <!-- Review 1 -->
            <div class="col-md-12 mb-4">
                <div class="card-custom p-4 review-card">
                    <div class="review-header">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="d-flex align-items-center">
                                <div class="author-avatar premium">
                                    <i class="fas fa-crown"></i>
                                </div>
                                <div class="ms-3">
                                    <h5 class="mb-0 fw-bold">Sarah Johnson</h5>
                                    <div class="d-flex align-items-center">
                                        <span class="badge verified-badge">
                                            <i class="fas fa-check-circle me-1"></i>Verified Buyer
                                        </span>
                                        <small class="text-soft ms-2">· 2 days ago</small>
                                    </div>
                                </div>
                            </div>
                            <div class="rating-display">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-text">Excellent</span>
                            </div>
                        </div>
                    </div>

                    <div class="review-body mt-3">
                        <h6 class="review-title fw-semibold">Absolutely love this laptop! 💻</h6>
                        <p class="review-text mt-2">
                            The UltraBook Pro has exceeded all my expectations. The build quality feels premium, 
                            battery life easily lasts through my workday, and the performance is buttery smooth 
                            even with multiple applications running. The display is stunning and the keyboard 
                            is perfect for long typing sessions. Worth every penny!
                        </p>
                        
                        <div class="review-images mt-3">
                            <div class="row g-2">
                                <div class="col-auto">
                                    <div class="review-image-preview">
                                        <i class="fas fa-image"></i>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="review-image-preview">
                                        <i class="fas fa-image"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="review-footer mt-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="product-info">
                                <i class="fas fa-box text-soft me-2"></i>
                                <span class="product-name fw-medium">UltraBook Pro M2</span>
                                <span class="product-price text-soft ms-2">$1,299</span>
                            </div>
                            <div class="review-actions">
                                <button class="btn btn-sm btn-outline-secondary me-2">
                                    <i class="fas fa-thumbs-up me-1"></i>Helpful (24)
                                </button>
                                <button class="btn btn-sm btn-outline-secondary">
                                    <i class="fas fa-comment me-1"></i>Reply
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Review 2 -->
            <div class="col-md-12 mb-4">
                <div class="card-custom p-4 review-card">
                    <div class="review-header">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="d-flex align-items-center">
                                <div class="author-avatar">
                                    MJ
                                </div>
                                <div class="ms-3">
                                    <h5 class="mb-0 fw-bold">Mike Chen</h5>
                                    <div class="d-flex align-items-center">
                                        <span class="badge verified-badge">
                                            <i class="fas fa-check-circle me-1"></i>Verified Buyer
                                        </span>
                                        <small class="text-soft ms-2">· 1 week ago</small>
                                    </div>
                                </div>
                            </div>
                            <div class="rating-display">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <span class="rating-text">Very Good</span>
                            </div>
                        </div>
                    </div>

                    <div class="review-body mt-3">
                        <h6 class="review-title fw-semibold">Great phone with minor issues 📱</h6>
                        <p class="review-text mt-2">
                            The SmartPhone X Pro is fantastic overall. Camera quality is exceptional, 
                            battery lasts all day, and the 5G speeds are incredible. My only complaint 
                            is that it gets slightly warm during heavy gaming sessions. The display is 
                            vibrant and the build quality feels premium. Would recommend!
                        </p>
                        
                        <div class="pros-cons mt-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="pros">
                                        <span class="fw-medium text-success">
                                            <i class="fas fa-plus-circle me-1"></i>Pros
                                        </span>
                                        <ul class="mt-1 mb-0 ps-3">
                                            <li>Excellent camera</li>
                                            <li>Fast performance</li>
                                            <li>Great battery life</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="cons">
                                        <span class="fw-medium text-danger">
                                            <i class="fas fa-minus-circle me-1"></i>Cons
                                        </span>
                                        <ul class="mt-1 mb-0 ps-3">
                                            <li>Gets warm during gaming</li>
                                            <li>Pricey</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="review-footer mt-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="product-info">
                                <i class="fas fa-box text-soft me-2"></i>
                                <span class="product-name fw-medium">SmartPhone X Pro</span>
                                <span class="product-price text-soft ms-2">$899</span>
                            </div>
                            <div class="review-actions">
                                <button class="btn btn-sm btn-outline-secondary me-2">
                                    <i class="fas fa-thumbs-up me-1"></i>Helpful (18)
                                </button>
                                <button class="btn btn-sm btn-outline-secondary">
                                    <i class="fas fa-comment me-1"></i>Reply
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Review 3 -->
            <div class="col-md-12 mb-4">
                <div class="card-custom p-4 review-card">
                    <div class="review-header">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="d-flex align-items-center">
                                <div class="author-avatar">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="ms-3">
                                    <h5 class="mb-0 fw-bold">Alex Rodriguez</h5>
                                    <div class="d-flex align-items-center">
                                        <small class="text-soft">· 2 weeks ago</small>
                                    </div>
                                </div>
                            </div>
                            <div class="rating-display">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <span class="rating-text">Good</span>
                            </div>
                        </div>
                    </div>

                    <div class="review-body mt-3">
                        <h6 class="review-title fw-semibold">Solid headphones with great sound 🎧</h6>
                        <p class="review-text mt-2">
                            The AudioMax Pro 3 delivers excellent sound quality with deep bass and clear highs. 
                            Noise cancellation works well for office environments. Comfortable for long wear, 
                            though they might feel tight for people with larger heads. Battery life is as advertised. 
                            Good value for money.
                        </p>
                    </div>

                    <div class="review-footer mt-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="product-info">
                                <i class="fas fa-box text-soft me-2"></i>
                                <span class="product-name fw-medium">AudioMax Pro 3</span>
                                <span class="product-price text-soft ms-2">$249</span>
                            </div>
                            <div class="review-actions">
                                <button class="btn btn-sm btn-outline-secondary me-2">
                                    <i class="fas fa-thumbs-up me-1"></i>Helpful (9)
                                </button>
                                <button class="btn btn-sm btn-outline-secondary">
                                    <i class="fas fa-comment me-1"></i>Reply
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Review 4 -->
            <div class="col-md-12 mb-4">
                <div class="card-custom p-4 review-card">
                    <div class="review-header">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="d-flex align-items-center">
                                <div class="author-avatar expert">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="ms-3">
                                    <h5 class="mb-0 fw-bold">TechExpert Emma</h5>
                                    <div class="d-flex align-items-center">
                                        <span class="badge expert-badge">
                                            <i class="fas fa-award me-1"></i>Top Reviewer
                                        </span>
                                        <small class="text-soft ms-2">· 3 weeks ago</small>
                                    </div>
                                </div>
                            </div>
                            <div class="rating-display">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-text">Outstanding</span>
                            </div>
                        </div>
                    </div>

                    <div class="review-body mt-3">
                        <h6 class="review-title fw-semibold">Professional-grade camera for enthusiasts 📸</h6>
                        <p class="review-text mt-2">
                            As a photography enthusiast, I'm thoroughly impressed with the PhotoShot 4K Pro. 
                            The image quality rivals professional cameras at this price point. 4K video is crisp, 
                            low-light performance is excellent, and the build quality feels durable. The learning 
                            curve is steep for beginners, but for those willing to learn, this camera is a gem.
                        </p>
                        
                        <div class="review-images mt-3">
                            <div class="row g-2">
                                <div class="col-auto">
                                    <div class="review-image-preview">
                                        <i class="fas fa-image"></i>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="review-image-preview">
                                        <i class="fas fa-image"></i>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="review-image-preview">
                                        <i class="fas fa-image"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="review-footer mt-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="product-info">
                                <i class="fas fa-box text-soft me-2"></i>
                                <span class="product-name fw-medium">PhotoShot 4K Pro</span>
                                <span class="product-price text-soft ms-2">$599</span>
                            </div>
                            <div class="review-actions">
                                <button class="btn btn-sm btn-outline-secondary me-2">
                                    <i class="fas fa-thumbs-up me-1"></i>Helpful (42)
                                </button>
                                <button class="btn btn-sm btn-outline-secondary">
                                    <i class="fas fa-comment me-1"></i>Reply
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="row mt-5">
            <div class="col-12">
                <nav aria-label="Review pagination">
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

        <!-- Write Review CTA -->
        <div class="text-center mt-5">
            <div class="card-custom p-5 text-center">
                <h3 class="fw-bold mb-3">Share Your Experience</h3>
                <p class="text-soft mb-4">
                    Help others make better decisions by sharing your honest reviews
                </p>
                <button class="btn btn-primary-custom btn-lg">
                    <i class="fas fa-pen me-2"></i> Write a Review
                </button>
            </div>
        </div>
    </main>

@endsection
