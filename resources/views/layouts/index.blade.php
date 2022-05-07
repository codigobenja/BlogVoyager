<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{setting('site.title')}} @yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('css/clean-blog.css')}}" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    @include('partials.nav')
    @yield('header')
    <div class="container px-4 px-lg-5">
        @yield('content')
    </div>
    <!-- Footer-->
    @include('partials.footer')
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{asset('js/clean-blog.js')}}"></script>
</body>

</html>
