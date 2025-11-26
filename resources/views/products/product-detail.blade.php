@extends('layouts.app')

@section('title', ' - RateFlux')

@section('content')
<main class="container py-5">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Home</a></li>
                <li class="breadcrumb-item"><a href="/products" class="text-decoration-none">Products</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Electronics</a></li>
                <li class="breadcrumb-item active" aria-current="page">UltraBook Pro M2</li>
            </ol>
        </nav>

        <!-- Product Header -->
        <div class="row mb-5">
            <!-- Product Images -->
            <div class="col-lg-6 mb-4">
                <div class="product-image-main card-custom p-4 text-center mb-3">
                    <div class="product-img-large">
                        <i class="fas fa-laptop"></i>
                    </div>
                </div>
                <div class="product-image-thumbnails d-flex gap-3 justify-content-center">
                    <div class="thumbnail active">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <div class="thumbnail">
                        <i class="fas fa-expand"></i>
                    </div>
                    <div class="thumbnail">
                        <i class="fas fa-camera"></i>
                    </div>
                    <div class="thumbnail">
                        <i class="fas fa-video"></i>
                    </div>
                </div>
            </div>

            <!-- Product Info -->
            <div class="col-lg-6">
                <div class="product-badge trending mb-2">🔥 Trending</div>
                <h1 class="fw-bold mb-2">UltraBook Pro M2</h1>
                <p class="text-soft mb-3">Premium Laptop • Electronics</p>

                <!-- Rating Section -->
                <div class="d-flex align-items-center mb-3">
                    <div class="rating-display me-3">
                        <div class="stars fs-5">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="rating-value fw-bold">4.7</span>
                        <span class="review-count text-soft">(1,247 reviews)</span>
                    </div>
                    <span class="badge verified-badge">
                        <i class="fas fa-check-circle me-1"></i>Verified Product
                    </span>
                </div>

                <!-- Price Section -->
                <div class="price-section mb-4">
                    <h2 class="price fw-bold">$1,299</h2>
                    <span class="original-price">$1,499</span>
                    <span class="discount-badge">Save $200</span>
                </div>

                <!-- Key Features -->
                <div class="key-features mb-4">
                    <div class="feature-tags mb-3">
                        <span class="feature-tag">🚚 Free Shipping</span>
                        <span class="feature-tag">⚡ In Stock</span>
                        <span class="feature-tag">🎁 1 Year Warranty</span>
                    </div>
                    <ul class="feature-list">
                        <li><i class="fas fa-check text-success me-2"></i>14-inch Retina Display</li>
                        <li><i class="fas fa-check text-success me-2"></i>16GB RAM, 512GB SSD</li>
                        <li><i class="fas fa-check text-success me-2"></i>Apple M2 Chip</li>
                        <li><i class="fas fa-check text-success me-2"></i>18-hour Battery Life</li>
                        <li><i class="fas fa-check text-success me-2"></i>Backlit Magic Keyboard</li>
                    </ul>
                </div>

                <!-- Action Buttons -->
                <div class="action-buttons d-flex gap-3 mb-4">
                    <button class="btn btn-primary-custom flex-fill">
                        <i class="fas fa-shopping-cart me-2"></i>Add to Cart
                    </button>
                    <button class="btn btn-outline-secondary">
                        <i class="fas fa-heart"></i>
                    </button>
                    <button class="btn btn-outline-secondary">
                        <i class="fas fa-share-alt"></i>
                    </button>
                </div>

                <!-- Quick Stats -->
                <div class="quick-stats card-custom p-3">
                    <div class="row text-center">
                        <div class="col-4">
                            <div class="stat-value">98%</div>
                            <div class="stat-label">Recommended</div>
                        </div>
                        <div class="col-4">
                            <div class="stat-value">4.7/5</div>
                            <div class="stat-label">Rating</div>
                        </div>
                        <div class="col-4">
                            <div class="stat-value">1.2K</div>
                            <div class="stat-label">Reviews</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Details Tabs -->
        <div class="row">
            <div class="col-12">
                <div class="card-custom">
                    <ul class="nav nav-tabs" id="productTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="specs-tab" data-bs-toggle="tab" data-bs-target="#specs" type="button" role="tab">
                                <i class="fas fa-list me-2"></i>Specifications
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab">
                                <i class="fas fa-star me-2"></i>Reviews
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="faq-tab" data-bs-toggle="tab" data-bs-target="#faq" type="button" role="tab">
                                <i class="fas fa-question me-2"></i>FAQ
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content p-4" id="productTabsContent">
                        <!-- Specifications Tab -->
                        <div class="tab-pane fade show active" id="specs" role="tabpanel">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="fw-bold mb-3">Technical Specifications</h5>
                                    <div class="specs-list">
                                        <div class="spec-item d-flex justify-content-between py-2 border-bottom">
                                            <span class="text-soft">Processor</span>
                                            <span class="fw-medium">Apple M2 Chip</span>
                                        </div>
                                        <div class="spec-item d-flex justify-content-between py-2 border-bottom">
                                            <span class="text-soft">Memory</span>
                                            <span class="fw-medium">16GB Unified Memory</span>
                                        </div>
                                        <div class="spec-item d-flex justify-content-between py-2 border-bottom">
                                            <span class="text-soft">Storage</span>
                                            <span class="fw-medium">512GB SSD</span>
                                        </div>
                                        <div class="spec-item d-flex justify-content-between py-2 border-bottom">
                                            <span class="text-soft">Display</span>
                                            <span class="fw-medium">14.2-inch Liquid Retina XDR</span>
                                        </div>
                                        <div class="spec-item d-flex justify-content-between py-2 border-bottom">
                                            <span class="text-soft">Battery</span>
                                            <span class="fw-medium">Up to 18 hours</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="fw-bold mb-3">Additional Features</h5>
                                    <ul class="feature-list">
                                        <li><i class="fas fa-check text-success me-2"></i>Touch ID</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Force Touch Trackpad</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Thunderbolt 4 Ports</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Wi-Fi 6</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Bluetooth 5.0</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Reviews Tab -->
                        <div class="tab-pane fade" id="reviews" role="tabpanel">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h5 class="fw-bold mb-0">Customer Reviews</h5>
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
                                                    <div class="progress-bar" style="width: 72%"></div>
                                                </div>
                                                <span class="text-soft">72%</span>
                                            </div>
                                            <div class="rating-bar d-flex align-items-center mb-2">
                                                <span class="stars me-2">4★</span>
                                                <div class="progress flex-grow-1 me-2">
                                                    <div class="progress-bar" style="width: 18%"></div>
                                                </div>
                                                <span class="text-soft">18%</span>
                                            </div>
                                            <div class="rating-bar d-flex align-items-center mb-2">
                                                <span class="stars me-2">3★</span>
                                                <div class="progress flex-grow-1 me-2">
                                                    <div class="progress-bar" style="width: 6%"></div>
                                                </div>
                                                <span class="text-soft">6%</span>
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
                                                    <div class="progress-bar" style="width: 1%"></div>
                                                </div>
                                                <span class="text-soft">1%</span>
                                            </div>
                                        </div>
                                    </div>
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
                                    <h6 class="fw-semibold mb-2">Absolutely love this laptop! 💻</h6>
                                    <p class="review-text mb-3">
                                        The UltraBook Pro has exceeded all my expectations. The build quality feels premium, 
                                        battery life easily lasts through my workday, and the performance is buttery smooth 
                                        even with multiple applications running. The display is stunning!
                                    </p>
                                    <div class="review-footer d-flex justify-content-between align-items-center">
                                        <div class="helpful-section">
                                            <button class="btn btn-sm btn-outline-secondary">
                                                <i class="fas fa-thumbs-up me-1"></i>Helpful (24)
                                            </button>
                                        </div>
                                        <div class="review-actions">
                                            <button class="btn btn-sm btn-outline-secondary">
                                                <i class="fas fa-flag"></i>
                                            </button>
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
                                    <h6 class="fw-semibold mb-2">Great for work, decent for gaming</h6>
                                    <p class="review-text mb-3">
                                        Excellent for productivity and creative work. The M2 chip handles everything I throw at it. 
                                        Only downside is it gets warm during extended gaming sessions. Overall, very satisfied!
                                    </p>
                                    <div class="review-footer d-flex justify-content-between align-items-center">
                                        <div class="helpful-section">
                                            <button class="btn btn-sm btn-outline-secondary">
                                                <i class="fas fa-thumbs-up me-1"></i>Helpful (18)
                                            </button>
                                        </div>
                                        <div class="review-actions">
                                            <button class="btn btn-sm btn-outline-secondary">
                                                <i class="fas fa-flag"></i>
                                            </button>
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

                        <!-- FAQ Tab -->
                        <div class="tab-pane fade" id="faq" role="tabpanel">
                            <h5 class="fw-bold mb-4">Frequently Asked Questions</h5>
                            <div class="accordion" id="faqAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                            What's included in the box?
                                        </button>
                                    </h2>
                                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            The UltraBook Pro M2 comes with the laptop, 67W USB-C Power Adapter, 
                                            USB-C to MagSafe 3 Cable (2m), and documentation.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                            Is the RAM upgradeable?
                                        </button>
                                    </h2>
                                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            No, the RAM is soldered onto the logic board and cannot be upgraded after purchase. 
                                            We recommend choosing the appropriate memory configuration at the time of purchase.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                            What is the warranty period?
                                        </button>
                                    </h2>
                                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            This product comes with a 1-year limited warranty and 90 days of complimentary technical support.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
