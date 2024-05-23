

@extends('layouts.app')
 
@section('title', 'Page Title')
 

 
@section('content')
    <h1>Hello World</h1>
    <table border="1">
    @foreach($posts as $post)
        <tr>
        <td>{{$post->title}}</td>
        <td>{{$post->content}}</td>
        </tr>       
    @endforeach
    </table>
@endsection