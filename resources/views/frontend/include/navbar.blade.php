<header class="shadow-sm p-3 mb-5 bg-body rounded">
    <nav class="navbar navbar-expand-lg container ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="{{asset('pendaftran_ukm/img/Horizontal-Logo.png')}}" alt="" width="200">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 gelasio-bold">
              <li class="nav-item p-4">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item p-4">
                <a class="nav-link" href="#">Regristrasi Instiki</a>
              </li>
   
              <li class="nav-item p-4">
                <a class="nav-link " href="#">About Us</a>
              </li>
              <li class="nav-item p-4">
                <a class="nav-link" href="#">Reset & Inovasi</a>
              </li>
            </ul>
            <div class="d-flex" role="search">
              @guest
              <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                  <a href="{{route('logins')}}" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                  <a href="{{route('register')}}" class="nav-link">Register</a>
                </li>
              </ul>
              @else
       
              <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{Auth::user()->name}}
                </a>
              
                <ul class="dropdown-menu">
                  <li>
                    <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <button type="submit" class="dropdown-item">Logout</button>
                  </form>
                  </li>
                </ul>
              </div>
              @endguest
            </div>
          </div>
        </div>
      </nav>
</header>