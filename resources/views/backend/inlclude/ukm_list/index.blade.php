@extends('backend.pages.app')
@section('page_name','UKM')
@section('content')
    <a href="{{route('ukmlist.create')}}" class="btn btn-primary">Create</a>
    <table class="table table-bottom">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama UKM</th>
            <th scope="col">Jumlah Anggota</th>
            <th scope="col">Nama Ketua</th>
            <th scope="col">Foto UKM</th>
            <th scope="col">Action</th>
          </tr>
        </thead>

        <tbody>
            <?php $i=1 ?>
            @forelse ($items as $item)
            <tr>
                <th scope="row">{{$i++}}</th>
                <td>{{$item->nama_ukm}}</td>
                <td>{{$item->anggota}}</td>
                <td>{{$item->ketua}}</td>
                <td><img src="{{url('public/Image/'.$item->image_ukm)}}" alt="" width="200"></td>
                <td>
                    <a href="{{ route('ukmlist.edit', $item->id) }}" class="btn btn-info">
                        <i class="fa fa-pencil-alt"></i>
                    </a>
                    <form action="{{ route('ukmlist.destroy', $item->id) }}" method="post" class="d-inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>

                </td>
            </tr>
            @empty
            <td colspan="5" class="text-center">
                Data Kosong
            </td>
            @endforelse


        </tbody>
      </table>
      {{ $items->links() }}
@endsection