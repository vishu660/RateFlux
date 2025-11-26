@extends('layouts.app')

@section('title', 'RateFlux - Discover Reviews')

@section('content')

@include('home.hero')
@include('home.trending')
@include('home.featured-products')
@include('home.top-stores')
@include('home.features')
@include('home.testimonials')

@endsection
