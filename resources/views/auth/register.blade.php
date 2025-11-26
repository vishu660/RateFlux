@extends('layouts.app')

@section('title', 'Register - RateFlux')

@section('content')
 <main class="container py-5">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6 col-lg-5">
                <div class="card-custom p-4">
                    <div class="text-center mb-4">
                        <h2 class="fw-bold">
                            Create Your <span class="gradient-text">RateFlux</span> Account
                        </h2>
                        <p class="text-soft mt-2">Join our community of honest reviewers</p>
                    </div>

                    <form action="{{ route('register') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label text-dark fw-medium">Full Name</label>
                            <input type="text" name="name" class="form-control" 
                                   placeholder="Enter your full name" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-dark fw-medium">Email</label>
                            <input type="email" name="email" class="form-control" 
                                   placeholder="Enter your email" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-dark fw-medium">Password</label>
                            <input type="password" name="password" class="form-control" 
                                   placeholder="Create a password" required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label text-dark fw-medium">Confirm Password</label>
                            <input type="password" name="password_confirmation" 
                                   class="form-control" placeholder="Confirm your password" required>
                        </div>

                        <button class="btn btn-primary-custom w-100 py-2 fw-semibold">
                            <i class="fas fa-user-plus me-2"></i>Create Account
                        </button>

                        <div class="text-center mt-4">
                            <p class="text-soft mb-0">
                                Already have an account?
                                <a href="{{ route('login') }}" class="text-decoration-none fw-medium gradient-text">Login here</a>
                            </p>
                        </div>

                        <div class="mt-4 pt-3 border-top">
                            <div class="text-center">
                                <p class="text-soft small mb-3">Or sign up with</p>
                                <div class="d-flex gap-3 justify-content-center">
                                    <button type="button" class="btn btn-outline-secondary btn-sm">
                                        <i class="fab fa-google"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary btn-sm">
                                        <i class="fab fa-facebook-f"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary btn-sm">
                                        <i class="fab fa-twitter"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection