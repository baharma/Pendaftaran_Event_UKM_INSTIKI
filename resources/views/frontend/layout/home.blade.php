@extends('frontend.pages.app')
@section('content')
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
          <a href="detail/{{$item->postID->slug}}" class="red-btn mt-5">Read More</a>
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

    @endsection