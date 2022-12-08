@extends('backend.pages.app')
@section('page_name','UKM-Update')
@section('content')
<div class="card shadow-sm p-5">
    <form action="{{route('ukmlist.update',$item->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="namaukm" class="form-label">Nama UKM</label>
            <input type="text" name="nama_ukm" class="form-control" value="{{$item->nama_ukm}}" >
        </div>
        <div class="mb-3">
            <label for="JumlahAnggota" class="form-label">Jumlah Anggota</label>
            <input type="text" name="anggota" class="form-control" value="{{$item->anggota}}">
        </div>
        <div class="mb-3">
            <label for="ketua" class="form-label">Nama Ketua</label>
            <input type="text" name="ketua" class="form-control" value="{{$item->ketua}}">
        </div>
        <div class="mb-3">
            <label for="JumlahAnggota" class="form-label">Image UKM</label>
            <input type="file" class="form-control dropify" name="image_ukm" placeholder="Image" >
            <div id="emailHelp" class="form-text">jika tidak ingin di ganti tidak perlu di tambahkan</div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection