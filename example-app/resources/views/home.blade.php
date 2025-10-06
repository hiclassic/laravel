@extends('layouts.app')

@section('title', 'Home')

@section('content')
    @extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="row">
    <div class="col-md-10 offset-md-1">
        <!-- Welcome Banner -->
        <div class="bg-light p-5 rounded shadow-sm mb-4">
            <h1 class="display-5">Welcome to <span class="text-primary">MyBlog</span>!</h1>
            <p class="lead">Your daily dose of tech insights, tutorials, personal growth tips, and much more.</p>
            <a href="{{ url('/about') }}" class="btn btn-primary btn-lg mt-3">Learn More About Us</a>
        </div>

        <!-- Latest Blog Posts (example cards) -->
        <h2 class="mb-4">Latest Posts</h2>
        <div class="row">
            <!-- Post 1 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Post Thumbnail">
                    <div class="card-body">
                        <h5 class="card-title">Getting Started with Laravel</h5>
                        <p class="card-text">A beginner-friendly guide to building your first Laravel application.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
                    </div>
                </div>
            </div>
            <!-- Post 2 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Post Thumbnail">
                    <div class="card-body">
                        <h5 class="card-title">Design Trends in 2025</h5>
                        <p class="card-text">Explore the latest UI/UX design principles shaping the web.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
                    </div>
                </div>
            </div>
            <!-- Post 3 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Post Thumbnail">
                    <div class="card-body">
                        <h5 class="card-title">10 Tools Every Developer Needs</h5>
                        <p class="card-text">Boost your productivity with these essential tools and extensions.</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Featured Categories -->
        <h3 class="mt-5">Explore by Category</h3>
        <div class="d-flex flex-wrap gap-3 mt-3">
            <a href="#" class="btn btn-outline-secondary">Laravel</a>
            <a href="#" class="btn btn-outline-secondary">Web Design</a>
            <a href="#" class="btn btn-outline-secondary">Productivity</a>
            <a href="#" class="btn btn-outline-secondary">Personal Growth</a>
            <a href="#" class="btn btn-outline-secondary">Freelancing</a>
        </div>

        <!-- Newsletter CTA -->
        <div class="bg-dark text-white p-4 rounded mt-5">
            <h4>Stay Updated!</h4>
            <p>Subscribe to our newsletter to get the latest posts delivered straight to your inbox.</p>
            <form class="row g-2">
                <div class="col-md-9">
                    <input type="email" class="form-control" placeholder="Enter your email">
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-warning w-100">Subscribe</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
