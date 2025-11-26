@extends('layouts.app')

@section('title',' RateFlux')

@section('content')
 <main class="container py-5">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Home</a></li>
                <li class="breadcrumb-item"><a href="/stores" class="text-decoration-none">Stores</a></li>
                <li class="breadcrumb-item active" aria-current="page">TechHaven</li>
            </ol>
        </nav>

        <!-- Store Header -->
        <div class="text-center mb-5">
            <div class="store-header-content">
                <div class="store-icon-large mx-auto mb-4">
                    <i class="fas fa-laptop"></i>
                </div>
                
                <div class="store-badge premium mb-3">⭐ Premium Store</div>
                
                <h1 class="fw-bold mb-3">TechHaven</h1>

                <div class="store-rating-summary mb-3">
                    <div class="rating-display d-inline-block me-3">
                        <div class="stars fs-4">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="rating-value fw-bold">4.7</span>
                        <span class="review-count text-soft">(1,247 reviews)</span>
                    </div>
                    <span class="badge verified-badge fs-6">
                        <i class="fas fa-check-circle me-1"></i>Verified Store
                    </span>
                </div>

                <p class="text-soft lead mb-4 mx-auto" style="max-width: 600px;">
                    Your premier destination for cutting-edge electronics, gadgets, and tech accessories. 
                    We bring you the latest technology with premium quality and exceptional customer service.
                </p>

                <!-- Store Stats -->
                <div class="store-stats row justify-content-center mb-4">
                    <div class="col-auto">
                        <div class="stat-box">
                            <div class="stat-number">5,280+</div>
                            <div class="stat-label">Products</div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="stat-box">
                            <div class="stat-number">98%</div>
                            <div class="stat-label">Satisfaction</div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="stat-box">
                            <div class="stat-number">2018</div>
                            <div class="stat-label">Established</div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="stat-box">
                            <div class="stat-number">4.7/5</div>
                            <div class="stat-label">Rating</div>
                        </div>
                    </div>
                </div>

                <!-- Store Actions -->
                <div class="store-actions d-flex justify-content-center gap-3 flex-wrap">
                    <button class="btn btn-primary-custom">
                        <i class="fas fa-shopping-bag me-2"></i>Visit Store
                    </button>
                    <button class="btn btn-outline-secondary">
                        <i class="fas fa-heart me-2"></i>Follow Store
                    </button>
                    <button class="btn btn-outline-secondary">
                        <i class="fas fa-share-alt me-2"></i>Share
                    </button>
                    <button class="btn btn-outline-secondary">
                        <i class="fas fa-flag me-2"></i>Report
                    </button>
                </div>
            </div>
        </div>

        <!-- Store Details Tabs -->
        <div class="row">
            <div class="col-12">
                <div class="card-custom">
                    <ul class="nav nav-tabs" id="storeTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="products-tab" data-bs-toggle="tab" data-bs-target="#products" type="button" role="tab">
                                <i class="fas fa-box me-2"></i>Products
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab">
                                <i class="fas fa-star me-2"></i>Reviews
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button" role="tab">
                                <i class="fas fa-info-circle me-2"></i>About
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="policies-tab" data-bs-toggle="tab" data-bs-target="#policies" type="button" role="tab">
                                <i class="fas fa-shield-alt me-2"></i>Policies
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content p-4" id="storeTabsContent">
                        <!-- Products Tab -->
                        <div class="tab-pane fade show active" id="products" role="tabpanel">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h4 class="fw-bold mb-0">Featured Products</h4>
                                <div class="d-flex gap-2">
                                    <select class="form-select styled-input-sm">
                                        <option>Sort by: Popular</option>
                                        <option>Price: Low to High</option>
                                        <option>Price: High to Low</option>
                                        <option>Highest Rated</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Product 1 -->
                                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                                    <div class="card-custom product-card">
                                        <div class="product-badge trending">🔥 Trending</div>
                                        <div class="product-img">
                                            <i class="fas fa-laptop"></i>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-title">UltraBook Pro M2</h5>
                                            <p class="product-category">Laptops • Electronics</p>
                                            
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
                                            
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="price">$1,299</span>
                                                <button class="btn btn-primary-custom btn-sm">
                                                    <i class="fas fa-eye me-1"></i>View
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Product 2 -->
                                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                                    <div class="card-custom product-card">
                                        <div class="product-badge top-rated">⭐ Top Rated</div>
                                        <div class="product-img">
                                            <i class="fas fa-mobile-alt"></i>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-title">SmartPhone X Pro</h5>
                                            <p class="product-category">Mobile • Electronics</p>
                                            
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
                                            
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="price">$899</span>
                                                <button class="btn btn-primary-custom btn-sm">
                                                    <i class="fas fa-eye me-1"></i>View
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Product 3 -->
                                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                                    <div class="card-custom product-card">
                                        <div class="product-img">
                                            <i class="fas fa-headphones"></i>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-title">AudioMax Pro 3</h5>
                                            <p class="product-category">Audio • Electronics</p>
                                            
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
                                            
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="price">$249</span>
                                                <button class="btn btn-primary-custom btn-sm">
                                                    <i class="fas fa-eye me-1"></i>View
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Product 4 -->
                                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                                    <div class="card-custom product-card">
                                        <div class="product-badge new">🆕 New</div>
                                        <div class="product-img">
                                            <i class="fas fa-camera"></i>
                                        </div>
                                        <div class="product-info">
                                            <h5 class="product-title">PhotoShot 4K Pro</h5>
                                            <p class="product-category">Camera • Electronics</p>
                                            
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
                                            
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="price">$599</span>
                                                <button class="btn btn-primary-custom btn-sm">
                                                    <i class="fas fa-eye me-1"></i>View
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Load More Products -->
                            <div class="text-center mt-4">
                                <button class="btn btn-outline-secondary">
                                    <i class="fas fa-sync me-2"></i>Load More Products
                                </button>
                            </div>
                        </div>

                        <!-- Reviews Tab -->
                        <div class="tab-pane fade" id="reviews" role="tabpanel">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h4 class="fw-bold mb-0">Store Reviews</h4>
                                <button class="btn btn-primary-custom btn-sm">
                                    <i class="fas fa-pen me-2"></i>Write Review
                                </button>
                            </div>

                            <!-- Review Summary -->
                            <div class="review-summary card-custom p-4 mb-4">
                                <div class="row align-items-center">
                                    <div class="col-md-4 text-center">
                                        <div class="overall-rating">
                                            <h1 class="fw-bold gradient-text mb-1">4.7</h1>
                                            <div class="stars mb-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                            <p class="text-soft mb-0">1,247 verified reviews</p>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="rating-bars">
                                            <div class="rating-bar d-flex align-items-center mb-2">
                                                <span class="stars me-2">5★</span>
                                                <div class="progress flex-grow-1 me-2">
                                                    <div class="progress-bar" style="width: 65%"></div>
                                                </div>
                                                <span class="text-soft">65%</span>
                                            </div>
                                            <div class="rating-bar d-flex align-items-center mb-2">
                                                <span class="stars me-2">4★</span>
                                                <div class="progress flex-grow-1 me-2">
                                                    <div class="progress-bar" style="width: 22%"></div>
                                                </div>
                                                <span class="text-soft">22%</span>
                                            </div>
                                            <div class="rating-bar d-flex align-items-center mb-2">
                                                <span class="stars me-2">3★</span>
                                                <div class="progress flex-grow-1 me-2">
                                                    <div class="progress-bar" style="width: 8%"></div>
                                                </div>
                                                <span class="text-soft">8%</span>
                                            </div>
                                            <div class="rating-bar d-flex align-items-center mb-2">
                                                <span class="stars me-2">2★</span>
                                                <div class="progress flex-grow-1 me-2">
                                                    <div class="progress-bar" style="width: 3%"></div>
                                                </div>
                                                <span class="text-soft">3%</span>
                                            </div>
                                            <div class="rating-bar d-flex align-items-center">
                                                <span class="stars me-2">1★</span>
                                                <div class="progress flex-grow-1 me-2">
                                                    <div class="progress-bar" style="width: 2%"></div>
                                                </div>
                                                <span class="text-soft">2%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Review Filters -->
                            <div class="review-filters mb-4">
                                <div class="d-flex flex-wrap gap-2">
                                    <span class="filter-chip active">All Reviews</span>
                                    <span class="filter-chip">⭐ 5 Star</span>
                                    <span class="filter-chip">📸 With Photos</span>
                                    <span class="filter-chip">✅ Verified Purchase</span>
                                    <span class="filter-chip">🆕 Recent</span>
                                </div>
                            </div>

                            <!-- Review List -->
                            <div class="review-list">
                                <!-- Review 1 -->
                                <div class="review-item card-custom p-4 mb-3">
                                    <div class="review-header d-flex justify-content-between align-items-start mb-3">
                                        <div class="d-flex align-items-center">
                                            <div class="author-avatar">
                                                SJ
                                            </div>
                                            <div class="ms-3">
                                                <h6 class="fw-bold mb-0">Sarah Johnson</h6>
                                                <div class="d-flex align-items-center">
                                                    <span class="badge verified-badge me-2">
                                                        <i class="fas fa-check-circle me-1"></i>Verified Buyer
                                                    </span>
                                                    <small class="text-soft">2 days ago</small>
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
                                        </div>
                                    </div>
                                    <h6 class="fw-semibold mb-2">Excellent store with premium products! 🛍️</h6>
                                    <p class="review-text mb-3">
                                        TechHaven has become my go-to store for all electronics needs. 
                                        Their product quality is exceptional, shipping is fast, and customer service is outstanding. 
                                        Highly recommended for anyone looking for reliable tech products!
                                    </p>
                                    <div class="review-footer d-flex justify-content-between align-items-center">
                                        <div class="helpful-section">
                                            <button class="btn btn-sm btn-outline-secondary">
                                                <i class="fas fa-thumbs-up me-1"></i>Helpful (42)
                                            </button>
                                        </div>
                                        <div class="review-product">
                                            <small class="text-soft">
                                                <i class="fas fa-box me-1"></i>Purchased: UltraBook Pro M2
                                            </small>
                                        </div>
                                    </div>
                                </div>

                                <!-- Review 2 -->
                                <div class="review-item card-custom p-4 mb-3">
                                    <div class="review-header d-flex justify-content-between align-items-start mb-3">
                                        <div class="d-flex align-items-center">
                                            <div class="author-avatar">
                                                MC
                                            </div>
                                            <div class="ms-3">
                                                <h6 class="fw-bold mb-0">Mike Chen</h6>
                                                <div class="d-flex align-items-center">
                                                    <span class="badge verified-badge me-2">
                                                        <i class="fas fa-check-circle me-1"></i>Verified Buyer
                                                    </span>
                                                    <small class="text-soft">1 week ago</small>
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
                                        </div>
                                    </div>
                                    <h6 class="fw-semibold mb-2">Great products, good service</h6>
                                    <p class="review-text mb-3">
                                        Bought multiple products from TechHaven. Quality is consistently good and prices are competitive. 
                                        Only reason for 4 stars is that shipping can be slightly delayed during peak seasons. 
                                        Otherwise, excellent store!
                                    </p>
                                    <div class="review-footer d-flex justify-content-between align-items-center">
                                        <div class="helpful-section">
                                            <button class="btn btn-sm btn-outline-secondary">
                                                <i class="fas fa-thumbs-up me-1"></i>Helpful (28)
                                            </button>
                                        </div>
                                        <div class="review-product">
                                            <small class="text-soft">
                                                <i class="fas fa-box me-1"></i>Purchased: SmartPhone X Pro
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Load More Reviews -->
                            <div class="text-center mt-4">
                                <button class="btn btn-outline-secondary">
                                    <i class="fas fa-sync me-2"></i>Load More Reviews
                                </button>
                            </div>
                        </div>

                        <!-- About Tab -->
                        <div class="tab-pane fade" id="about" role="tabpanel">
                            <h4 class="fw-bold mb-4">About TechHaven</h4>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="about-content">
                                        <p class="mb-4">
                                            Founded in 2018, TechHaven has established itself as a premier destination for technology enthusiasts 
                                            and professionals alike. We are committed to bringing you the latest and most innovative electronics 
                                            products with uncompromising quality and exceptional customer service.
                                        </p>
                                        
                                        <h5 class="fw-bold mb-3">Our Mission</h5>
                                        <p class="mb-4">
                                            To make cutting-edge technology accessible to everyone while maintaining the highest standards 
                                            of quality, reliability, and customer satisfaction.
                                        </p>

                                        <h5 class="fw-bold mb-3">Why Choose TechHaven?</h5>
                                        <ul class="feature-list mb-4">
                                            <li><i class="fas fa-check text-success me-2"></i>Curated selection of premium tech products</li>
                                            <li><i class="fas fa-check text-success me-2"></i>Rigorous quality control and testing</li>
                                            <li><i class="fas fa-check text-success me-2"></i>Fast and reliable shipping</li>
                                            <li><i class="fas fa-check text-success me-2"></i>Expert customer support</li>
                                            <li><i class="fas fa-check text-success me-2"></i>Competitive pricing and regular deals</li>
                                        </ul>

                                        <h5 class="fw-bold mb-3">Store Information</h5>
                                        <div class="store-info">
                                            <div class="info-item d-flex mb-2">
                                                <span class="fw-medium me-3" style="min-width: 120px;">Established:</span>
                                                <span>2018</span>
                                            </div>
                                            <div class="info-item d-flex mb-2">
                                                <span class="fw-medium me-3" style="min-width: 120px;">Category:</span>
                                                <span>Electronics & Gadgets</span>
                                            </div>
                                            <div class="info-item d-flex mb-2">
                                                <span class="fw-medium me-3" style="min-width: 120px;">Location:</span>
                                                <span>San Francisco, CA</span>
                                            </div>
                                            <div class="info-item d-flex mb-2">
                                                <span class="fw-medium me-3" style="min-width: 120px;">Website:</span>
                                                <a href="#" class="text-decoration-none gradient-text">www.techhaven.com</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card-custom p-4">
                                        <h5 class="fw-bold mb-3">Store Performance</h5>
                                        <div class="performance-stats">
                                            <div class="performance-item d-flex justify-content-between mb-3">
                                                <span>Response Rate</span>
                                                <span class="fw-bold text-success">98%</span>
                                            </div>
                                            <div class="performance-item d-flex justify-content-between mb-3">
                                                <span>Shipping Time</span>
                                                <span class="fw-bold">2-3 Days</span>
                                            </div>
                                            <div class="performance-item d-flex justify-content-between mb-3">
                                                <span>Return Rate</span>
                                                <span class="fw-bold text-success">2.1%</span>
                                            </div>
                                            <div class="performance-item d-flex justify-content-between">
                                                <span>Customer Satisfaction</span>
                                                <span class="fw-bold text-success">98%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Policies Tab -->
                        <div class="tab-pane fade" id="policies" role="tabpanel">
                            <h4 class="fw-bold mb-4">Store Policies</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="policy-section mb-4">
                                        <h5 class="fw-bold mb-3">📦 Shipping Policy</h5>
                                        <ul class="feature-list">
                                            <li><i class="fas fa-shipping-fast text-primary me-2"></i>Free shipping on orders over $50</li>
                                            <li><i class="fas fa-clock text-primary me-2"></i>2-3 business day processing time</li>
                                            <li><i class="fas fa-truck text-primary me-2"></i>Express shipping available</li>
                                            <li><i class="fas fa-globe text-primary me-2"></i>International shipping available</li>
                                        </ul>
                                    </div>

                                    <div class="policy-section mb-4">
                                        <h5 class="fw-bold mb-3">🔄 Return Policy</h5>
                                        <ul class="feature-list">
                                            <li><i class="fas fa-undo text-success me-2"></i>30-day return window</li>
                                            <li><i class="fas fa-box text-success me-2"></i>Items must be in original condition</li>
                                            <li><i class="fas fa-receipt text-success me-2"></i>Original receipt required</li>
                                            <li><i class="fas fa-sync text-success me-2"></i>Free returns for defective items</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="policy-section mb-4">
                                        <h5 class="fw-bold mb-3">💰 Payment Methods</h5>
                                        <div class="payment-methods d-flex flex-wrap gap-2 mb-3">
                                            <span class="payment-method">💳 Credit Card</span>
                                            <span class="payment-method">🏦 Debit Card</span>
                                            <span class="payment-method">📱 PayPal</span>
                                            <span class="payment-method">🍎 Apple Pay</span>
                                            <span class="payment-method">Ⓜ️ MasterCard</span>
                                            <span class="payment-method">💳 Visa</span>
                                        </div>
                                    </div>

                                    <div class="policy-section">
                                        <h5 class="fw-bold mb-3">🛡️ Warranty & Support</h5>
                                        <ul class="feature-list">
                                            <li><i class="fas fa-shield-alt text-warning me-2"></i>1-year manufacturer warranty</li>
                                            <li><i class="fas fa-headset text-warning me-2"></i>24/7 customer support</li>
                                            <li><i class="fas fa-tools text-warning me-2"></i>Free technical support</li>
                                            <li><i class="fas fa-calendar text-warning me-2"></i>Extended warranty available</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        // Enhanced JavaScript for better interactions
document.addEventListener('DOMContentLoaded', function() {
    // Set current year in footer
    document.getElementById('current-year').textContent = new Date().getFullYear();
    
    // Filter chips functionality
    document.querySelectorAll('.filter-chip').forEach(chip => {
        chip.addEventListener('click', function() {
            this.classList.toggle('active');
        });
    });
    
    // Add smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Add loading animation for buttons
    document.querySelectorAll('.btn').forEach(button => {
        button.addEventListener('click', function() {
            if (this.classList.contains('btn-primary-custom') || 
                this.classList.contains('btn-outline-secondary')) {
                
                const originalText = this.innerHTML;
                this.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Loading...';
                this.disabled = true;
                
                // Reset after 2 seconds (simulate loading)
                setTimeout(() => {
                    this.innerHTML = originalText;
                    this.disabled = false;
                }, 2000);
            }
        });
    });
    
    // Add intersection observer for animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
            }
        });
    }, observerOptions);
    
    // Observe elements for animation
    document.querySelectorAll('.product-card, .review-item, .policy-section').forEach(el => {
        observer.observe(el);
    });
});
    </script>
@endsection
