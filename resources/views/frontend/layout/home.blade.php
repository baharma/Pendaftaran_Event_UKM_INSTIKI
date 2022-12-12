<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('pendaftran_ukm/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('pendaftran_ukm/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('pendaftran_ukm/style/main.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gelasio:ital,wght@0,400;0,700;1,400&family=Silkscreen&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
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
    <div class="content-header ">
        <div class="image-instiki">
        </div>
        <div class="content-ukm   container row shadow-sm ">
            <div class="about about-instiki col p-3 card no-radius ">
                <img src="{{asset('pendaftran_ukm/img/DSC04125-scaled.jpg')}}" alt="" width="auto">
                <div class="body-card">
                    <h1 class="gelasio-bold">Welcome to Our <br> <span>College INSTIKI</span></h1>
                    <p class="gelasio-regular">Lorem Ipsum is simply dummy tet 
                        of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown 
                        printer took a galley of type and scrambled it to make a type specimen book. It has
                        </p>
                    <a href="#" class="gelasio-regular">Read More</a>
                </div>
            </div>
            <div class="about about-ukm col p-3 card no-radius content-red">
                <h1 class="gelasio-bold color-white">Regristrasi <span>UKM</span></h1>
                <div class="dist-tas ms-4 color-white">
                    <p class="date">Januari 04, 2022</p>
                    <h2 class="p-0">Sinbun Bunkai UKM</h2>
                    <p class="desc">
                      t is a long established fact that a reader will be distracted 
                      by the readable content of a page

                    </p>
                    <a href="#">Read More</a>
                </div>
                <div class="dist-tas ms-4 color-white">
                  <p class="date">Januari 04, 2022</p>
                  <h2 class="p-0">Sinbun Bunkai UKM</h2>
                  <p class="desc">
                    t is a long established fact that a reader will be distracted 
                    by the readable content of a page

                  </p>
                  <a href="#">Read More</a>
              </div>
              <a href="" class="btn-border-yellow ms-auto mt-auto">Check More UKM</a>
            </div>
        </div>
    </div>

    <div class="slide-cut">
      <h1 class="red gelasio-bold italic">Our event Campus</h1>
    </div>

    <div class="container main-content row shadow-sm">
      <div class="col-8 ">
        @forelse($items as $item)
        <div class="body-card-body card no-radius p-3">
          <h1 class="gelasio-bold">{{$item->title}}</h1>
          <p class="date">{{$item->date}}</p>
  
          <p class="decs">
            {{$item->description}}
           </p>
          <img src="{{url('public/Image/'.$item->image)}}" alt="" height="400px">
          <a href="detail/{{$item->id_post}}" class="red-btn mt-5">Read More</a>
        </div>
        @empty
        <div class="body-card-body card no-radius p-3">
          <h1 class="gelasio-bold">Belum ada Post</h1>
        </div>
        @endforelse
     
      </div>
      {{ $items->links() }}
      <div class="col card no-radius ms-auto sub" >
        <h1>Get More Update</h1>
        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
          suffered alteration in some form, by injected humour, or randomised words which don't
          look even slightly believable. If you are going
         </p>


         <div class="mb-3">

          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
         
          <a href="" class="btn btn-danger">Subcribe Now</a>
        </div>
      </div>
    </div>
    <footer class="text-center text-lg-start bg-light text-muted mt-5 ">
      <!-- Section: Social media -->
      <div class="container">
      <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
          <span>Get connected with us on social networks:</span>
        </div>
        <!-- Left -->
    
        <!-- Right -->
        <div>
          <a href="https://www.linkedin.com/in/aditya-darma-7404771b5/" class="me-4 text-reset">
            <i class="fab fa-linkedin"></i>
          </a>
          <a href="https://github.com/baharma" class="me-4 text-reset">
            <i class="fab fa-github"></i>
          </a>
        </div>
        <!-- Right -->
      </section>
      <!-- Section: Social media -->
    
      <!-- Section: Links  -->
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold mb-4">
                <i class="fas fa-gem me-3"></i>Company name
              </h6>
              <p>
                  Project ini akan terus di update sekarang adalah v.1 
              </p>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
              <p><i class="fas fa-home me-3"></i> Denpasar Bali</p>
              <p>
                <i class="fas fa-envelope me-3"></i>
                bagusaditya1899@gmail.com
              </p>
              <p><i class="fas fa-phone me-3"></i> + 62 812 4686 9049</p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->
  </div>
      <!-- Copyright -->
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2021 Copyright:
        <a class="text-reset fw-bold" href="#">bagusaditya1899@gmail.com</a>
      </div>
      <!-- Copyright -->
    </footer>
    
    <script src="{{asset('pendaftran_ukm/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('pendaftran_ukm/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>