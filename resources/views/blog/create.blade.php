@extends('layouts.master')

@section('title', 'Cobain laravel')

@section('content')
    {{--@if(count($errors) >0)--}}
        {{--<ul>--}}
            {{--@foreach($errors->all() as $error)--}}
                {{--<li>{{$error}}</li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
    {{----}}
    {{--@endif--}}


    <a class="text-center text-capitalize"><h1>Create Page</h1></a><br>
    
    <form action="/blog" method="post">
        <a><strong>Tittle :</strong></a><br>
        <input class="form-control" type="text" name="title" value="{{ old('title') }}" placeholder="Title"> <br>
        
        @if($errors->has('title'))
            <p> {{$errors->first('title')}}</p>
        @endif
    
        <a><strong>Description :</strong></a><br>
        <textarea class="form-control" name="description" rows="8" cols="40" placeholder="Description">{{ old('description') }}</textarea> <br>
    
        @if($errors->has('description'))
            <p> {{$errors->first('description')}}</p>
        @endif
        
        <input class="btn btn-primary" type="submit" name="submit" value="Create">
        {{csrf_field()}}
    </form>

@endsection
