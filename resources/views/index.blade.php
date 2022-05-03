@extends('layouts.index')

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
