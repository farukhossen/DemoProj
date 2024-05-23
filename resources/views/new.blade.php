@extends('layouts.app')
 
@section('title', 'New Post')
 

 
@section('content')
    <form>
        <div class="form-group">
            <label for="exampleInputname1">Name </label>
            <input type="text" class="form-control" id="exampleInputname1" aria-describedby="nameHelp" placeholder="Enter Name">
            <small id="nameHelp" class="form-text text-muted">We'll never share your Name with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputage1">Age</label>
            <input type="age" class="form-control" id="exampleInputage1" placeholder="age">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection