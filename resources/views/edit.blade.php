@extends('layouts.app')
 
@section('title', 'New Post')
 

 
@section('content')
    <form action="/update/{{$student->id}}" method="get">
        <div class="form-group">
            <label for="exampleInputName1">student Name</label>
            <input name="name" type="text" class="form-control" id="exampleInputName1" aria-describedby="NameHelp" placeholder="Enter Name" value="{{$student->name}}">
            <small id="NameHelp" class="form-text text-muted">We'll never share your Name with anyone else.</small>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Price</label>
            <input name="price" type="number" class="form-control" id="exampleInputPassword1" placeholder="Price" value="{{$student->price}}">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <input name="description" type="text" class="form-control" id="exampleInputPassword1" placeholder="Description" value="{{$student->description}}">
        </div>
  
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection