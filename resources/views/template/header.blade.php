<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home</title>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
</head>
<body class="">
<nav class="navbar navbar-expand-lg shadow-sm fixed-top bg-light">
    <div class="container-fluid">
      <img src="{{ asset('img/logo2.png') }}" alt="logo" class="img-fluid rounded-circle" style="width:50px;">
      <a class="navbar-brand" href="#">MyImagination</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0 align-items-center">
          <li class="nav-item dropdown me-auto">
            <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Browse
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/">Home</a></li>
              <li><a class="dropdown-item" href="/all">Semua Cerita</a></li>
              <li><a class="dropdown-item" href="/all/bookmarks">Bookmark</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/story/like">Disukai</a></li>
            </ul>
          </li>
          <li class="nav-item" style="height:50px">
               <form class="d-flex align-items-center" role="search" action="/all/search" method="post">
                @csrf
              <a href="" class="nav-link">
                <button type="submit" class="btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
                </button>
              </a>
               <input class="me-2 kolomcari bg-light" type="search" placeholder="Search" aria-label="Search" name="cari">
           </form>
          </li>
        </ul>
        
        <ul class="navbar-nav ms-auto">
          @auth
          <li class="nav-item dropdown me-auto">
            <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Write
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/story/input">Create Story</a></li>
              <li><a class="dropdown-item" href="/profile/{{ Auth::guard('web')->user()->username }}">My Stories</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown me-auto">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <img src="{{ asset('storage/'.Auth::guard('web')->user()->image) }}" class="rounded-circle" style="width: 30px; height:30px;" alt="User Image">
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right shadow p-4">
                  <div class="text-center">
                    <img src=" {{ asset('storage/'.Auth::guard('web')->user()->image) }}" alt="profile" class="rounded-circle" style="height: 50px;width: 50px">
                     <br>
                     <b>{{ Auth::guard('web')->user()->name }}</b>
                  </div>
                  
                  <div>
                    <p class="text-secondary">{{ Auth::guard('web')->user()->email }}</p>
                    <p class="text-secondary">{{ Auth::guard('web')->user()->bio }}</p>
                  </div>
              <div class="d-flex">
              <a href="/profile/{{ Auth::guard('web')->user()->username }}" class="w-50"><button class="btn bg-dark text-light w-100">View</button></a>
              <form action="/logout" method="post" class="w-50">
                <button type="submit" class="btn btn-outline-secondary">Logout</button>
              @csrf
            </form>
              </div>
            </div>
          </li>
              @else
                    <li class="nav-item mx-2"><a href="/login" class="nav-link">Login</a></li>
                    <li class="nav-item mx-2"><a href="" class="nav-link">Sign Up</a></li>
            @endauth
          
        </ul>
      </div>
    </div>
  </nav>
    @yield('content')
        <footer class="text-center border p-4 bg-light bottom">
      <div class="row row-cols-5 row-cols-lg-5" style="font-size: 10px">
        <div class="col">FOLLOW US</div>
        <div class="col"></div>
        <div class="col">CONTACT US</div>
        <div class="col">ACTION</div>
        <div class="col"> &copy;sihabudin</div>
        <div class="col"><a href="https://www.facebook.com/profile.php?id=100080367960919"><img src="../../img/fb.png" width="22px" alt=""></a><a href="https://www.instagram.com/sihab.07/"><img src="../../img/ig.png" width="30px" alt=""></a></div>
        <div class="col"></div>
        <div class="col"><a href="mailto: msihabudin@example.com"><img src="../../img/mail.png" width="25px" alt=""></a>&nbsp;<a href="https://wa.me/081394454900"><img src="../../img/wa.png" width="25px" alt=""></a></div>
        <div class="col"><a href="/" class="nav-link">Home</a><a class="nav-link" href="/profile">Profile</a><a class="nav-link" href="/all">read</a></div>
        <div class="col"></div>
      </div>
     </footer>
  <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<script src="{{ asset('plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('dist/js/demo.js') }}"></script>
<script src="{{ asset('dist/js/pages/dashboard2.js') }}"></script>
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<script>
    $(function () {
      // Summernote
      $('#summernote').summernote()
    })
</script>

</body>
</html>