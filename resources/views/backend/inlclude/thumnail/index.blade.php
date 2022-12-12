@extends('backend.pages.app')
@section('page_name','Thumnail')
@section('content')
<a href="{{route('thumnail.create')}}" class="btn btn-primary">Create</a>
<table class="table table-bottom">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Title Post</th>
        <th scope="col">Date</th>
        <th scope="col">Image</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
        <?php $i=1 ?>
        @forelse ($items as $item)
        <tr>
            <th scope="row">{{$i++}}</th>
            <td>{{$item->title}}</td>
            <td>{{$item->description}}</td>
            <td>{{$item->postID->title_post}}</td>
            <td>{{$item->date}}</td>
            <td><img src="{{url('public/Image/'.$item->image)}}" alt="" width="200"></td>
            <td>
                <a href="{{ route('thumnail.edit', $item->id) }}" class="btn btn-info">
                    <i class="fa fa-pencil-alt"></i>
                </a>
                <form action="{{ route('thumnail.destroy', $item->id) }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger">
                        <i class="fa fa-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
        @empty
        <td colspan="7" class="text-center">
            Data Kosong
        </td>
        @endforelse


    </tbody>
  </table>
  {{ $items->links() }}
@endsection