@extends('backend.pages.app')
@section('page_name','Post Event')
@section('content')
<a href="{{route('postevent.create')}}" class="btn btn-primary">Create</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">title_post</th>
        <th scope="col">description</th>
        <th scope="col">image</th>
        <th scope="col">user_post</th>
        <th scope="col">id_ukm</th>
      </tr>
    </thead>
    <tbody>
        <?php $i=1 ?>
        @forelse ($items as $item)
        <tr>
            <th scope="row">{{$i++}}</th>
            <td>{{$item->title_post}}</td>
            <td>{{$item->description}}</td>
            <td>{{$item->image}}</td>
            <td>{{$item->user_post}}</td>
            <td>{{$item->ukm_list->nama_ukm}}</td>
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