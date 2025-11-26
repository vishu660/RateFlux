@extends('layouts.app')

@section('title', 'User Dashboard - RateFlux')

@section('content')

 <main class="container py-5">
        <!-- Dashboard Header -->
        <div class="row align-items-center mb-5">
            <div class="col-md-8">
                <h1 class="fw-bold gradient-text mb-2">Welcome Back, Sarah! 👋</h1>
                <p class="text-soft lead">Your account overview & activity summary</p>
            </div>
            <div class="col-md-4 text-md-end">
                <div class="d-flex align-items-center justify-content-md-end">
                    <div class="user-avatar me-3">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5 class="mb-0 fw-semibold">Sarah Johnson</h5>
                        <small class="text-soft">Premium Member</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="row mb-5">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card-custom dashboard-card text-center">
                    <div class="icon-box primary">
                        <i class="fas fa-star"></i>
                    </div>
                    <h3 class="stat-number">24</h3>
                    <p class="stat-label">Reviews Written</p>
                    <div class="progress mt-2">
                        <div class="progress-bar" style="width: 80%"></div>
                    </div>
                    <small class="text-soft">Top 15% Reviewer</small>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card-custom dashboard-card text-center">
                    <div class="icon-box success">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3 class="stat-number">18</h3>
                    <p class="stat-label">Favorites Saved</p>
                    <div class="progress mt-2">
                        <div class="progress-bar" style="width: 60%"></div>
                    </div>
                    <small class="text-soft">12 products, 6 stores</small>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card-custom dashboard-card text-center">
                    <div class="icon-box info">
                        <i class="fas fa-comment-dots"></i>
                    </div>
                    <h3 class="stat-number">47</h3>
                    <p class="stat-label">Helpful Votes</p>
                    <div class="progress mt-2">
                        <div class="progress-bar" style="width: 90%"></div>
                    </div>
                    <small class="text-soft">Community Leader</small>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card-custom dashboard-card text-center">
                    <div class="icon-box warning">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3 class="stat-number">3</h3>
                    <p class="stat-label">Badges Earned</p>
                    <div class="progress mt-2">
                        <div class="progress-bar" style="width: 30%"></div>
                    </div>
                    <small class="text-soft">Expert Reviewer</small>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Recent Reviews Section -->
            <div class="col-lg-8 mb-4">
                <div class="card-custom p-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="fw-bold mb-0">Your Recent Reviews</h3>
                        <a href="#" class="text-decoration-none gradient-text fw-medium">
                            View All <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>

                    <!-- Review 1 -->
                    <div class="review-item mb-4">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="flex-grow-1">
                                <h5 class="fw-semibold mb-1">UltraBook Pro M2</h5>
                                <div class="stars mb-2">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                    <span class="rating-value ms-2">4.3</span>
                                </div>
                                <p class="text-soft mb-2">
                                    A powerful laptop with smooth performance and excellent battery life. Perfect for work and creative tasks.
                                </p>
                                <div class="d-flex align-items-center">
                                    <span class="badge verified-badge me-2">
                                        <i class="fas fa-check-circle me-1"></i>Verified Purchase
                                    </span>
                                    <small class="text-soft">2 days ago</small>
                                </div>
                            </div>
                            <div class="review-actions">
                                <button class="btn btn-sm btn-outline-secondary">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <hr class="border-light">

                    <!-- Review 2 -->
                    <div class="review-item mb-4">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="flex-grow-1">
                                <h5 class="fw-semibold mb-1">SmartPhone X Pro</h5>
                                <div class="stars mb-2">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span class="rating-value ms-2">3.0</span>
                                </div>
                                <p class="text-soft mb-2">
                                    Decent phone with good camera quality, but battery life could be better. Gets warm during heavy usage.
                                </p>
                                <div class="d-flex align-items-center">
                                    <span class="badge verified-badge me-2">
                                        <i class="fas fa-check-circle me-1"></i>Verified Purchase
                                    </span>
                                    <small class="text-soft">1 week ago</small>
                                </div>
                            </div>
                            <div class="review-actions">
                                <button class="btn btn-sm btn-outline-secondary">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <hr class="border-light">

                    <!-- Review 3 -->
                    <div class="review-item">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="flex-grow-1">
                                <h5 class="fw-semibold mb-1">AudioMax Pro 3</h5>
                                <div class="stars mb-2">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="rating-value ms-2">5.0</span>
                                </div>
                                <p class="text-soft mb-2">
                                    Amazing sound quality and comfort! Noise cancellation works perfectly. Best headphones I've owned.
                                </p>
                                <div class="d-flex align-items-center">
                                    <span class="badge verified-badge me-2">
                                        <i class="fas fa-check-circle me-1"></i>Verified Purchase
                                    </span>
                                    <small class="text-soft">2 weeks ago</small>
                                </div>
                            </div>
                            <div class="review-actions">
                                <button class="btn btn-sm btn-outline-secondary">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Quick Actions -->
                <div class="card-custom p-4 mb-4">
                    <h4 class="fw-bold mb-3">Quick Actions</h4>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary-custom">
                            <i class="fas fa-pen me-2"></i>Write a Review
                        </button>
                        <button class="btn btn-outline-secondary">
                            <i class="fas fa-heart me-2"></i>View Favorites
                        </button>
                        <button class="btn btn-outline-secondary">
                            <i class="fas fa-cog me-2"></i>Account Settings
                        </button>
                    </div>
                </div>

                <!-- Badges Earned -->
                <div class="card-custom p-4">
                    <h4 class="fw-bold mb-3">Your Badges</h4>
                    <div class="badges-grid">
                        <div class="badge-item text-center">
                            <div class="badge-icon expert">
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="badge-name">Expert Reviewer</span>
                        </div>
                        <div class="badge-item text-center">
                            <div class="badge-icon helpful">
                                <i class="fas fa-thumbs-up"></i>
                            </div>
                            <span class="badge-name">Helpful</span>
                        </div>
                        <div class="badge-item text-center">
                            <div class="badge-icon verified">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="badge-name">Verified</span>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <a href="#" class="text-decoration-none gradient-text small fw-medium">
                            View All Badges
                        </a>
                    </div>
                </div>

                <!-- Community Stats -->
                <div class="card-custom p-4 mt-4">
                    <h4 class="fw-bold mb-3">Community Impact</h4>
                    <div class="community-stats">
                        <div class="stat-item d-flex justify-content-between mb-2">
                            <span class="text-soft">Reviews Read</span>
                            <span class="fw-semibold">1,247</span>
                        </div>
                        <div class="stat-item d-flex justify-content-between mb-2">
                            <span class="text-soft">Helpful Marks</span>
                            <span class="fw-semibold">89%</span>
                        </div>
                        <div class="stat-item d-flex justify-content-between mb-2">
                            <span class="text-soft">Response Rate</span>
                            <span class="fw-semibold">95%</span>
                        </div>
                        <div class="stat-item d-flex justify-content-between">
                            <span class="text-soft">Member Since</span>
                            <span class="fw-semibold">Jan 2023</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card-custom p-4">
                    <h4 class="fw-bold mb-3">Recent Activity</h4>
                    <div class="activity-timeline">
                        <div class="activity-item">
                            <div class="activity-icon">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="activity-content">
                                <p class="mb-1">You reviewed <strong>PhotoShot 4K Pro</strong></p>
                                <small class="text-soft">2 hours ago</small>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon">
                                <i class="fas fa-heart"></i>
                            </div>
                            <div class="activity-content">
                                <p class="mb-1">You favorited <strong>TechHaven Store</strong></p>
                                <small class="text-soft">1 day ago</small>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon">
                                <i class="fas fa-comment"></i>
                            </div>
                            <div class="activity-content">
                                <p class="mb-1">You received 5 helpful votes on your review</p>
                                <small class="text-soft">2 days ago</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
