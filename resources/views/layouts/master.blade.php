<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    
    <link rel="stylesheet" href="{{asset('css/master.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
    
{{--    <link href="{{asset('summernote/dist/summernote.css')}}" rel="stylesheet" />--}}
    
    {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">--}}
    {{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>--}}
    {{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>--}}
</head>
<body>
<header>
    <div class="topnav nav">
        <a class="active" href="/blog">Home</a>
        <a href="/blog/create">Create</a>
        <a href="#">About</a>
        
        {{--<a href="#">{{ Auth::user()->name }}</a>--}}
        {{--<ul class="navbar-nav ml-auto">--}}
            {{----}}
            {{--<a class="nav" href="{{ route('logout') }}"--}}
               {{--onclick="event.preventDefault();--}}
                       {{--document.getElementById('logout-form').submit();">--}}
                {{--{{ __('Logout') }}--}}
            {{--</a>--}}
            {{----}}
            {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                {{--@csrf--}}
            {{--</form>--}}
        {{--</ul>--}}
    </div>
</header>

<div class="content">
    @yield('content')
</div>

<br>
<footer>
    <p class="footer">
        &copy; Laravel & cobaaja 2018
    </p>
</footer>

<script src="{{asset('jquery/dist/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
{{--<script src="{{asset('popper.js/dist/umd/popper.min.js')}}" type="text/javascript"></script>--}}
{{--<script src="{{asset('summernote/dist/summernote.min.js')}}" type="text/javascript"></script>--}}
{{--<script type="text/javascript">--}}
    {{--$(function() {--}}
        {{--$('#summernote').summernote();--}}
        {{--$('#summernote_air').summernote({--}}
            {{--airMode: true--}}
        {{--});--}}
    {{--});--}}
{{--</script>--}}

</body>
</html>
