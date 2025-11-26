@extends('layouts.app')

@section('title', 'Forgot Password - RateFlux')

@section('content')
<div class="container d-flex justify-content-center mt-5">

    <div class="card p-4 shadow-lg"
         style="width: 420px; background: #0d0f14; border: 1px solid #222;">

        <h2 class="text-light text-center mb-4 fw-bold">
            Reset Your <span class="text-warning">Password</span>
        </h2>

        <p class="text-secondary text-center mb-4">
            Enter your email and we will send you password reset link.
        </p>

        @if (session('status'))
            <div class="alert alert-success text-center">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="mb-3">
                <label class="text-secondary mb-1">Email</label>
                <input type="email" name="email" class="form-control bg-dark text-light border-secondary"
                       placeholder="Enter your email" required>
            </div>

            <button class="btn w-100 mt-3"
                    style="background:#7D2AE8; color:white;">
                Send Reset Link
            </button>

            <p class="text-center text-secondary mt-3">
                Back to <a href="{{ route('login') }}" class="text-warning">Login</a>
            </p>
        </form>
    </div>
</div>
@endsection
