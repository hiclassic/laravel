<!-- resources/views/partials/nav.blade.php -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">MySite</a>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
    </ul>
  </div>
</nav>
