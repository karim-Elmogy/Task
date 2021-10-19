@extends('comment.layout')
@section('content')

<div class="container" style="margin-top:150px ;">
<a href="{{route('comments.index')}}" class="btn btn-primary mb-5" role="button">Home</a>
  <div class="alert alert-primary"  role="alert">
    <label for="exampleFormControlInput1">Name : {{$comment->name}}</label>
  </div>

  <div class="alert alert-primary"  role="alert">
    <label for="exampleFormControlInput1">Title : {{$comment->title}}</label>
  </div>


  <div class="alert alert-primary"  role="alert">
    <label for="exampleFormControlTextarea1">Details : {{$comment->details}}</label>
  </div>



</div>


@endsection