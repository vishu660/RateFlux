@extends('layouts.app')

@section('title', 'Your Profile - RateFlux')

@section('content')
 <main class="container py-5">
        <div class="row justify-content-center">
            <!-- Profile Card -->
            <div class="col-lg-8">
                <div class="card-custom p-4">
                    <div class="text-center mb-4">
                        <h2 class="fw-bold gradient-text mb-3">My Profile</h2>
                        <p class="text-soft">Manage your personal information and preferences</p>
                    </div>

                    <!-- Avatar Section -->
                    <div class="text-center mb-5">
                        <div class="position-relative d-inline-block">
                            <div class="user-avatar-large">
                                VS
                            </div>
                            <button class="btn avatar-edit-btn">
                                <i class="fas fa-camera"></i>
                            </button>
                        </div>
                        <h4 class="fw-bold mt-3 mb-1">Vishal Sain</h4>
                        <p class="text-soft mb-0">
                            <i class="fas fa-star text-warning me-1"></i>
                            Premium Member • Joined Jan 2024
                        </p>
                    </div>

                    <!-- Profile Form -->
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">First Name</label>
                                <input type="text" class="form-control" value="Vishal">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Last Name</label>
                                <input type="text" class="form-control" value="Sain">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Email Address</label>
                            <input type="email" class="form-control" value="vishal@example.com">
                            <div class="form-text">
                                <i class="fas fa-check-circle text-success me-1"></i>
                                Email verified
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Phone Number</label>
                            <div class="input-group">
                                <span class="input-group-text">+91</span>
                                <input type="tel" class="form-control" placeholder="Enter phone number">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Location</label>
                            <input type="text" class="form-control" placeholder="City, Country">
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-semibold">Bio</label>
                            <textarea class="form-control" rows="3" placeholder="Tell us about yourself...">Tech enthusiast and honest reviewer. Love sharing experiences to help others make better decisions.</textarea>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary-custom">
                                <i class="fas fa-save me-2"></i>Save Changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Sidebar Stats & Actions -->
            <div class="col-lg-4 mt-4 mt-lg-0">
                <!-- User Stats -->
                <div class="card-custom p-4 mb-4">
                    <h4 class="fw-bold mb-4 gradient-text">Your Stats</h4>
                    
                    <div class="stats-list">
                        <div class="stat-item d-flex justify-content-between align-items-center py-2">
                            <div class="d-flex align-items-center">
                                <div class="stat-icon primary">
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="fw-medium">Reviews Written</span>
                            </div>
                            <span class="fw-bold stat-value">24</span>
                        </div>

                        <div class="stat-item d-flex justify-content-between align-items-center py-2">
                            <div class="d-flex align-items-center">
                                <div class="stat-icon success">
                                    <i class="fas fa-thumbs-up"></i>
                                </div>
                                <span class="fw-medium">Helpful Votes</span>
                            </div>
                            <span class="fw-bold stat-value">47</span>
                        </div>

                        <div class="stat-item d-flex justify-content-between align-items-center py-2">
                            <div class="d-flex align-items-center">
                                <div class="stat-icon info">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <span class="fw-medium">Favorites</span>
                            </div>
                            <span class="fw-bold stat-value">18</span>
                        </div>

                        <div class="stat-item d-flex justify-content-between align-items-center py-2">
                            <div class="d-flex align-items-center">
                                <div class="stat-icon warning">
                                    <i class="fas fa-award"></i>
                                </div>
                                <span class="fw-medium">Badges Earned</span>
                            </div>
                            <span class="fw-bold stat-value">3</span>
                        </div>
                    </div>

                    <div class="progress-section mt-3">
                        <div class="d-flex justify-content-between mb-1">
                            <small class="text-soft">Profile Completion</small>
                            <small class="fw-semibold">85%</small>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" style="width: 85%"></div>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="card-custom p-4 mb-4">
                    <h4 class="fw-bold mb-3">Quick Actions</h4>
                    <div class="d-grid gap-2">
                        <button class="btn btn-outline-secondary text-start">
                            <i class="fas fa-eye me-2"></i>View Public Profile
                        </button>
                        <button class="btn btn-outline-secondary text-start">
                            <i class="fas fa-history me-2"></i>Activity History
                        </button>
                        <button class="btn btn-outline-secondary text-start">
                            <i class="fas fa-bell me-2"></i>Notification Settings
                        </button>
                        <button class="btn btn-outline-secondary text-start">
                            <i class="fas fa-shield-alt me-2"></i>Privacy Settings
                        </button>
                    </div>
                </div>

                <!-- Account Management -->
                <div class="card-custom p-4">
                    <h4 class="fw-bold mb-3">Account</h4>
                    <div class="d-grid gap-2">
                        <button class="btn btn-outline-secondary text-start">
                            <i class="fas fa-key me-2"></i>Change Password
                        </button>
                        <button class="btn btn-outline-secondary text-start">
                            <i class="fas fa-envelope me-2"></i>Email Preferences
                        </button>
                        <button class="btn btn-outline-danger text-start mt-3">
                            <i class="fas fa-sign-out-alt me-2"></i>Logout
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activity Preview -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="card-custom p-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4 class="fw-bold mb-0">Recent Activity</h4>
                        <a href="#" class="text-decoration-none gradient-text fw-medium">
                            View All <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>

                    <div class="activity-preview">
                        <div class="activity-item d-flex align-items-center py-3">
                            <div class="activity-icon success">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="activity-content ms-3">
                                <p class="mb-1 fw-medium">You reviewed <span class="text-primary">UltraBook Pro M2</span></p>
                                <small class="text-soft">2 hours ago • 4.3/5 rating</small>
                            </div>
                        </div>

                        <div class="activity-item d-flex align-items-center py-3">
                            <div class="activity-icon primary">
                                <i class="fas fa-thumbs-up"></i>
                            </div>
                            <div class="activity-content ms-3">
                                <p class="mb-1 fw-medium">Your review received 5 helpful votes</p>
                                <small class="text-soft">1 day ago • SmartPhone X Pro review</small>
                            </div>
                        </div>

                        <div class="activity-item d-flex align-items-center py-3">
                            <div class="activity-icon warning">
                                <i class="fas fa-heart"></i>
                            </div>
                            <div class="activity-content ms-3">
                                <p class="mb-1 fw-medium">You favorited <span class="text-primary">AudioMax Pro 3</span></p>
                                <small class="text-soft">3 days ago • Added to wishlist</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
