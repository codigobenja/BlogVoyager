<div class="post-preview">
    <a href="post.html">
        <h2 class="post-title">{{$post->title}}</h2>
        <h3 class="post-subtitle">{{$post->excerpt}}</h3>
    </a>
    <p class="post-meta">
        Posted by
        <a href="#!">{{$post->author->name}}</a>
        on {{$post->created_at->format('D d F, Y')}}
    </p>
</div>
<!-- Divider-->
<hr class="my-4" />
