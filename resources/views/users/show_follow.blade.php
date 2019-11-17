@extends('layouts.default')
@section('title',$title)
@section('content')
  <div class="offset-md-2 col-md-8">
    <h2 class="mb-4 text-center">{{$title}}</h2>

    <div class="list-group list-group-flush mb-3">
      @foreach($users as $user)
        <div class="list-group-item">
          <img src="{{$user->gravatar()}}" alt="{{$user->name}}" width="32" class="mr-3">
          <a href="{{route('users.show',$user)}}">
            {{$user->name}}
          </a>
        </div>
      @endforeach
    </div>
    {!! $users->render() !!}
  </div>
@stop
