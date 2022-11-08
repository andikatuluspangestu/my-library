<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
  <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
    
    <span class="fs-4">My-Library v.1.0</span>
  </a>

  <ul class="nav nav-pills">
    @if (Auth::user()->role_id == 1)
        {{-- menu untuk role admin --}}
        <li class="nav-item"><a href="/dashboard" class="nav-link active" aria-current="page">Dashboard</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Books</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Categories</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Users</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Rent Log</a></li>
        <li class="nav-item"><a href="/logout" class="btn btn-outline-primary me-2">Log out</a></li>
    @else
        {{-- menu untuk role client --}}
        <li class="nav-item"><a href="/profile" class="nav-link">Profile</a></li>
        <li class="nav-item"><a href="/logout" class="btn btn-outline-primary me-2">Log out</a></li>
    @endif
  </ul>
</header>