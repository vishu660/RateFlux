@extends('layouts.app')

@section('title', 'Register - RateFlux')

@section('content')
<div class="container d-flex justify-content-center mt-5">
    <div class="card p-4 shadow-lg" style="width: 450px; background: #0d0f14; border: 1px solid #222;">

        <h2 class="text-light text-center mb-4 fw-bold">
            Create Your <span class="text-warning">RateFlux</span> Account
        </h2>

        <form action="{{ route('register') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="text-secondary mb-1">Full Name</label>
                <input type="text" name="name" class="form-control bg-dark text-light border-secondary"
                       placeholder="Enter name" required>
            </div>

            <div class="mb-3">
                <label class="text-secondary mb-1">Email</label>
                <input type="email" name="email" class="form-control bg-dark text-light border-secondary"
                       placeholder="Enter email" required>
            </div>

            <div class="mb-3">
                <label class="text-secondary mb-1">Password</label>
                <input type="password" name="password" class="form-control bg-dark text-light border-secondary"
                       placeholder="Create password" required>
            </div>

            <div class="mb-3">
                <label class="text-secondary mb-1">Confirm Password</label>
                <input type="password" name="password_confirmation" 
                       class="form-control bg-dark text-light border-secondary"
                       placeholder="Confirm password" required>
            </div>

            <button class="btn w-100 mt-3" style="background:#7D2AE8; color:white;">
                Create Account
            </button>

            <p class="text-center text-secondary mt-3">
                Already have an account?
                <a href="{{ route('login') }}" class="text-warning">Login</a>
            </p>

        </form>
    </div>
</div>
@endsection
