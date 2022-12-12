@extends('backend.pages.app')
@section('page_name','UKM-Create')
@section('content')
<div class="card shadow-sm p-5">
    <form action="{{route('thumnail.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="namaukm" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="JumlahAnggota" class="form-label">description</label>
            <input type="text" name="description" class="form-control">
        </div>
        <div class="mb-3">
            <label for="ketua" class="form-label">Nama Ketua</label>
            <input type="text" name="ketua" class="form-control">
        </div>
        <div class="mb-3">
            <label for="title">Nama Post Title</label>
            <select name="id_post" required class="form-control">
                <option value="">Pilih Nama UKM</option>
                @foreach($items as $item)
                    <option value="{{ $item->id }}">
                        {{ $item->title_post}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="ketua" class="form-label">Date</label>
            <input type="date" name="date" class="form-control">
        </div>
        <div class="mb-3">
            <label for="JumlahAnggota" class="form-label">image</label>
            <input type="file" class="form-control dropify" name="image" placeholder="Image" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection