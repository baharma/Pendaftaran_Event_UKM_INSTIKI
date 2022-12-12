@extends('backend.pages.app')
@section('page_name','cloud')
@section('content')
<div class="card shadow-sm p-5">
    <form action="{{route('CloudController.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="ketua" class="form-label">Nama Title Cloud</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="mb-3">
            <label for="JumlahAnggota" class="form-label">image</label>
            <input type="file" class="form-control dropify" name="image" placeholder="Image" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection