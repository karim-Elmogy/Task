@extends('comment.layout')
@section('content')

<div class="container" style="margin-top:150px ;">
<form action="{{route('comments.store')}}" method="POST">
    @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Title</label>
    <input type="text" name="title" class="form-control" placeholder="Enter Title">
  </div>


  <div class="form-group">
    <label for="exampleFormControlTextarea1">Details</label>
    <textarea class="form-control" name="details" rows="3"></textarea>
  </div>

  
  <div class="form-group">
  <button type="submit" class="btn btn-primary">Create</button>
  </div>
</form>
</div>


@endsection