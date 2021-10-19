
@extends('comment.layout')


@section('content')
<div class="container">
<div class="jumbotron">
  <h1 class="display-4 text-center">بسم الله الرحمن الرحيم</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">

  <a href="{{route('comments.create')}}" class="btn btn-primary mb-5" role="button">Create</a>

  <div class="container">
     @if($message = Session::get('success'))
     <div class="alert alert-primary" role="alert">
            {{$message}}
      </div>
     @endif
      
  </div>
  <table class="table text-center">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Title</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
      @php
        $i=0;
      @endphp
     @foreach($comments as $item)
     <tr>
      <th scope="row">{{++$i}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->title}}</td>
      <td>
          <div class="row">
              <div class="col-sm">
              <a class="btn btn-success" href="{{route('comments.edit',$item->id)}}">Edit</a>
              </div>
              <div class="col-sm">
              <a class="btn btn-primary" href="{{route('comments.show',$item->id)}}">Show</a>
              </div>
              <div class="col-sm">
              <form action="{{route('comments.destroy',$item->id)}}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Delete</button>
             </form>
              </div>
          </div>

      </td>
    </tr>
    
     @endforeach
  
  </tbody>
</table>
<!-- {{!! $comments->links() !!}} -->
</div>
</div>

@endsection















