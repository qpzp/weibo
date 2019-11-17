@extends('layouts.default')
@section('content')
  @if(Auth::check())
    <div class="row">
      <div class="col-md-8">
        <section class="status_form">
          @include('shared._status_form')
        </section>
        <h4>微博列表</h4>
        <hr>
        @include('shared._feed')
      </div>
      <aside class="col-md-4">
        <section class="user_info">
          @include('shared._user_info',['user'=>Auth::user()])
        </section>
        <section class="stats mt-2">
          @include('shared._stats',['user'=>Auth::user()])
        </section>
      </aside>
    </div>
  @else
    <div class="jumbotron">
      <h1>黄志斌</h1>
      <p class="lead">欢迎来到我的超市</p>
      <p>这将是我人生新的开始、颤抖吧</p>
      <p>
        <a href="{{route('signup')}}" class="btn btn-lg btn-success" role="button">现在加入</a>
      </p>
    </div>
  @endif
@stop
