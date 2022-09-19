<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
<div class="d-flex bg-danger">
    <h5 class="mx-5">Contact Us</h5>
    @auth
        <form action="/logout" method="POST" class="ms-auto">
         @csrf
            <button type="submit" class="btn btn-outline-danger">Logout</button>
        </form>
    <a href="/login" class="nav-link text-dark"><i class="bi bi-chart4"></i>Chart</a>
        @else
    <a href="/login" class="nav-link text-dark ms-auto"><i class="bi bi-person"></i>Sign In</a>
    @endauth
</div>
<nav class="navbar-expand-lg navbar-light bg-light shadow mt-1">
    <div class="container-fluid">
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav" aria-label="Toggle navigation" aria-expanded="false" aria-controls="nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav">
            <h3 class="navbar-brand mx-5">
                Mystore
            </h3>
            <ul class="navbar nav me-auto">
                <li class="nav-item"><a href="/home" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="/profile" class="nav-link">Profile</a></li>
            </ul> 
            <div class="d-flex">
                <input type="text" class="form-control">
                <span class="btn btn-outline-success">Cari</span>
            </div>
        </div>
    </div>
</nav>
@yield('konten')
<footer class="text-primary text-center ">&copy;sihab Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, aut explicabo? Exercitationem itaque vel, optio ea officiis suscipit assumenda eaque.</footer>
    <script src="js/bootstrap.js"></script>