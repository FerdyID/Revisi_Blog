@extends('layouts.master')

@section('title', 'Cobain laravel')

@section('content')
    <br>
    <div class="card content-wrapper">
        <div class="content-article">
            @if(session('info'))
                <div class="col-md-5 alert alert-success">
                    {{session('info')}}
                </div>
            @endif
            
            <div>
                <strong><h3>{{$blog->title}}</h3></strong>
                <hr>
            </div>
            <div class="card-body">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;
                    {!! $blog->description !!}
                </p>
            </div>
            
            <div class="text-left col-sm">
                <a class="btn btn-primary" href="/blog">Back</a>
                {{--<a class="btn btn-primary" href="edit/{{$blog->id}}">Edit</a>--}}
            </div>
        </div>
    </div>

@endsection


