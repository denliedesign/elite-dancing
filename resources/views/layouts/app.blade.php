<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('description', 'Quality Education with Excellent Teachers')">
    <title>@yield('title', 'Elite Dance Academy | League City, TX')</title>

    <!-- Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Crimson+Text&family=Nunito&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Staatliches&family=Syne&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Crimson+Text&family=Nunito&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
    </style>

    <!-- Style -->
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Scripts -->
    <script src="/js/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
@include('_nav')
@if(session()->has('message'))
    <div class="alert alert-success" role="alert">
        <strong>Success</strong> {{ session()->get('message') }}
    </div>
@endif
@yield('content')
@include('_footer')

<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
