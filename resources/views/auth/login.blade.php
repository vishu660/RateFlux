@extends('layouts.app')

@section('title', 'Login - RateFlux')

@section('content')
<div class="container d-flex justify-content-center mt-5">
    <div class="card p-4 shadow-lg" style="width: 420px; background: #0d0f14; border: 1px solid #222;">
        
        <h2 class="text-light text-center mb-4 fw-bold">
            Welcome Back to <span class="text-warning">RateFlux</span>
        </h2>

        <form action="{{ route('login') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="text-secondary mb-1">Email</label>
                <input type="email" name="email" class="form-control bg-dark text-light border-secondary"
                       placeholder="Enter your email" required>
            </div>

            <div class="mb-3">
                <label class="text-secondary mb-1">Password</label>
                <input type="password" name="password" class="form-control bg-dark text-light border-secondary"
                       placeholder="Enter your password" required>
            </div>

            <button class="btn w-100 mt-3" style="background:#7D2AE8; color:white;">
                Login
            </button>

            <p class="text-center text-secondary mt-3">
                Don't have an account?
                <a href="{{ route('register') }}" class="text-warning">Register</a>
            </p>
        </form>

    </div>
</div>
@endsection
