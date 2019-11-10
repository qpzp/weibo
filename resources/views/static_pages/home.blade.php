@extends('layouts.default')
@section('content')
  <div class="jumbotron">
    <h1>黄志斌</h1>
    <p class="lead">欢迎来到我的超市</p>
    <p>这将是我人生新的开始、颤抖吧</p>
    <p>
      <a href="{{route('signup')}}" class="btn btn-lg btn-success" role="button">现在加入</a>
    </p>
  </div>
@stop
