@extends('layouts.master')

@section('title', 'Cobain laravel')

@section('content')
    <br>
    <h1 class="text-center">Welcome To My Blog..</h1>
    <hr>
    @if(session('info'))
        <div class="col-md-5 alert alert-success">
            {{session('info')}}
        </div>
    @endif
    
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th width="250px">Tittle</th>
            <th>Description</th>
            <th width="200px">Action</th>
        </tr>
        
        @foreach($blogs as $blog)
            <tr>
                <td>{{ ++$i }}</td>
                <td><a href="\blog\{{$blog->id}}">{{ $blog ->title }}</a></td>
                <td>{{$blog->description}}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href=blog/{{$blog->id}}>Show</a>
                    <a class="btn btn-success btn-sm" href=blog/edit/{{$blog->id}}>Edit</a>
                    <a class="btn btn-danger btn-sm" href="blog/delete/{{$blog->id}}">Delete</a>
                    
                    {{--<form action="/blog/{{$blog->id}}" method="post">--}}
                    {{--<input class="btn btn-danger btn-sm" type="submit" name="submit" value="Delete">--}}
                    {{--{{csrf_field()}}--}}
                    {{--<input type="hidden" name="_method" value="DELETE">--}}
                    {{--</form>--}}
                
                </td>
            </tr>
        
        @endforeach
    </table>
    
    <div class="text-center">
        <ul style="display:inline-block;">
            {{$blogs->links()}}
        </ul>
    </div>

@endsection