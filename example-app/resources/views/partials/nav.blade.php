<!-- resources/views/partials/nav.blade.php -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">MySite</a>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item"><a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a></li>
      <li class="nav-item"><a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{ url('/about') }}">About</a></li>
      <li class="nav-item"><a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="{{ url('/contact') }}">Contact</a></li>
      <li class="nav-item">
        <a class="nav-link {{ request()->is('jobs*') ? 'active' : '' }}" href="{{ route('jobs.index') }}">Jobs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ request()->is('products*') ? 'active' : '' }}" href="{{ route('products.index') }}">Products</a>
      </li>
    </ul>
  </div>
</nav>
