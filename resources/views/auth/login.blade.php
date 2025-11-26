@extends('layouts.app')

@section('title', 'Login - RateFlux')

@section('content')
<main class="container py-5">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6 col-lg-5">
                <div class="card-custom p-4">
                    <div class="text-center mb-4">
                        <h2 class="fw-bold">
                            Welcome Back to <span class="gradient-text">RateFlux</span>
                        </h2>
                        <p class="text-soft mt-2">Sign in to your account</p>
                    </div>

                    <form action="{{ route('login') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label text-dark fw-medium">Email</label>
                            <input type="email" name="email" class="form-control" 
                                   placeholder="Enter your email" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-dark fw-medium">Password</label>
                            <input type="password" name="password" class="form-control" 
                                   placeholder="Enter your password" required>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember">
                                <label class="form-check-label text-soft small" for="remember">
                                    Remember me
                                </label>
                            </div>
                            <a href="#" class="text-decoration-none small gradient-text">Forgot password?</a>
                        </div>

                        <button class="btn btn-primary-custom w-100 py-2 fw-semibold">
                            <i class="fas fa-sign-in-alt me-2"></i>Login
                        </button>

                        <div class="text-center mt-4">
                            <p class="text-soft mb-0">
                                Don't have an account?
                                <a href="{{ route('register') }}" class="text-decoration-none fw-medium gradient-text">Register here</a>
                            </p>
                        </div>

                        <div class="mt-4 pt-3 border-top">
                            <div class="text-center">
                                <p class="text-soft small mb-3">Or sign in with</p>
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
