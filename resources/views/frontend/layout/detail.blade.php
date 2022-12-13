@extends('frontend.pages.app')
@section('content')


<div class="container shadow-sm">
    <div class="card p-2">

        <h1 class="p-1">
            {{$items->title_post}}
        </h1>


        <img src="{{url('public/Image/'.$items->image)}}" alt="" class="container-fluid" height="400">
        
        <p class="p-1">
            {{$items->description}}
        </p>
        <br>
        <p>Lokasi di laksanakan dan jadwal {{$data->title}} </p>
        <p>Lokasi       : {{$data->alamat_lokasi}}</p>
        <p>Kouta Lokasi : {{$data->kuota_lokasi}}</p>
        <p>Jadwal Acara Awal : {{$data->jadwal_mulai}}</p>
        <p>Jadwal Acara Akhir : {{$data->jadwal_berakhir}}</p>
        <p>Telp yang bisa di hubungi : {{$data->tlp}}</p>
        
        <br>
        <a href="" class="red-btn mt-5">Registrasi</a>
    </div>
</div>

@endsection