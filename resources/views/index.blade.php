@extends('layouts.index')
@section('title', '- Home')
@section('header')
  <header class="masthead" style="background-image: url({{asset('img/home-bg.jpg')}})">
      <div class="container position-relative px-4 px-lg-5">
          <div class="row gx-4 gx-lg-5 justify-content-center">
              <div class="col-md-10 col-lg-8 col-xl-7">
                  <div class="site-heading">
                      <h1>Thougts on Code</h1>
                      <span class="subheading">A Short and Sweet</span>
                  </div>
              </div>
          </div>
      </div>
  </header>
@stop
@section('content')
<div class="row gx-4 gx-lg-5 justify-content-center">
    <div class="col-md-10 col-lg-8 col-xl-7">
        <!-- Post preview-->
        @foreach($posts as $post)
        @include('partials.post',['post'=>$post])
            @endforeach
            {{$posts->links()}}
    </div>
</div>
@stop
