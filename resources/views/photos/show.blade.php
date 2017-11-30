@extends('layouts.app')

@section('content')
  <h3>{{$ye->title}}</h3>
  <p>{{$ye->description}}</p>
  <a href="/albums/{{$ye->album_id}}" class="button">Back To Gallery</a>
  <hr>
  <img src="/storage/photos/{{$ye->album_id}}/{{$ye->photo}}" alt="{{$ye->title}}">
  <br>
  <br>
  {{Form::open(['action'=>['PhotosController@destroy', $ye->id],'method'=>'POST'])}}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete Photo',['class'=>'button alert'])}}
  {{Form::close()}}
  <hr>
  <small>Size: {{$ye->size}}</small>
@endsection
