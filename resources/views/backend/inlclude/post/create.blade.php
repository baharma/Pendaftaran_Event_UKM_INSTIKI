@extends('backend.pages.app')
@section('page_name','Post-Create')
@section('content')

    <form action="{{route('postevent.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card shadow-sm p-5">
        <div class="mb-3">
            <label for="namaukm" class="form-label">title_post</label>
            <input type="text" name="title_post" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="JumlahAnggota" class="form-label">description</label>
            <textarea type="text" name="description" class="form-control" cols="30" rows="10"></textarea>
       
        </div>

        <div class="mb-3">
            <label for="JumlahAnggota" class="form-label">image</label>
            <input type="file" class="form-control dropify" name="image" placeholder="Image" >
        </div>
        <div class="mb-3">
            <label for="title">Nama UKM</label>
            <select name="id_ukm" required class="form-control">
                <option value="">Pilih Nama UKM</option>
                @foreach($items as $nama_ukm)
                    <option value="{{ $nama_ukm->id }}">
                        {{ $nama_ukm->nama_ukm }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="card shadow-sm p-5 mt-4">
        <div class="mb-3">
            <label for="namaukm" class="form-label">jadwal_mulai</label>
            <input type="date" name="jadwal_mulai" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="JumlahAnggota" class="form-label">jadwal_berakhir</label>
            <input type="date" name="jadwal_berakhir" class="form-control">
        </div>
        <div class="mb-3">
            <label for="ketua" class="form-label">alamat_lokasi</label>
            <input type="text" name="alamat_lokasi" class="form-control">
        </div>
        <div class="mb-3">
            <label for="ketua" class="form-label">kuota_lokasi</label>
            <input type="text" name="kuota_lokasi" class="form-control">
        </div>
        <div class="mb-3">
            <label for="tlp" class="form-label">tlp</label>
            <input type="text" name="tlp" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>

@endsection