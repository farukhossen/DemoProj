@extends('layouts.app')
 
@section('title', 'New Post')
 

 
@section('content')
<ul class="list-group">
@foreach($students as $student)
    <li class="list-group-item">
        Name: {{$student->name}} &npsp; id: {{$student->id}} 
        <a href="/delete/{{$student->id}}">Delete</a>
        <a href="/edit/{{$student->id}}">Update</a>
    </li>     
 @endforeach
  
 <a href="/new">Create new student</a>
  
</ul>
@endsection