@extends('layouts.app')

@section('title', 'Reset Password - RateFlux')

@section('content')
<div class="container d-flex justify-content-center mt-5">

    <div class="card p-4 shadow-lg"
         style="width: 420px; background: #0d0f14; border: 1px solid #222;">

        <h2 class="text-light text-center mb-4 fw-bold">
            Create New <span class="text-warning">Password</span>
        </h2>

        <form method="POST" action="{{ route('password.store') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="mb-3">
                <label class="text-secondary mb-1">Email</label>
                <input type="email" name="email" class="form-control bg-dark text-light border-secondary"
                       value="{{ old('email', $request->email) }}" required>
            </div>

            <div class="mb-3">
                <label class="text-secondary mb-1">New Password</label>
                <input type="password" name="password" class="form-control bg-dark text-light border-secondary"
                       placeholder="New password" required>
            </div>

            <div class="mb-3">
                <label class="text-secondary mb-1">Confirm Password</label>
                <input type="password" name="password_confirmation"
                       class="form-control bg-dark text-light border-secondary"
                       placeholder="Confirm password" required>
            </div>

            <button class="btn w-100 mt-3"
                    style="background:#7D2AE8; color:white;">
                Reset Password
            </button>

        </form>
    </div>
</div>
@endsection
