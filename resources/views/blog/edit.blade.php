@extends('layouts.master')

@section('title', 'Cobain laravel')

@section('content')
    <a class="text-center text-capitalize"><h1>Edit Page</h1></a><br>
    
    <form action="/blog/{{$blog->id}}" method="post">
        <a><strong>Tittle :</strong></a><br>
        <input class="form-control" type="text" name="title" value="{{$blog->title}}"> <br>
        <a><strong>Description :</strong></a><br>
        <textarea class="form-control" name="description" rows="8" cols="40">{{$blog->description}}</textarea> <br>
        
        <input class="btn btn-primary" type="submit" name="submit" value="Update">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PUT">
    </form>

@endsection
