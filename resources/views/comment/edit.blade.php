@extends('comment.layout')
@section('content')

<div class="container" style="margin-top:150px ;">
<form action="{{route('comments.update',$comment->id)}}" method="POST">
    @csrf
    @method('PUT')
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" name="name" value="{{$comment->name}}" class="form-control" placeholder="Enter Your Name">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Title</label>
    <input type="text" name="title" value="{{$comment->title}}" class="form-control" placeholder="Enter Title">
  </div>


  <div class="form-group">
    <label for="exampleFormControlTextarea1">Details</label>
    <textarea class="form-control"  name="details" rows="3">
    {{$comment->details}}
    </textarea>
  </div>

  
  <div class="form-group">
  <button type="submit" class="btn btn-primary">Update</button>
  </div>
</form>
</div>


@endsection