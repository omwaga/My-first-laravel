@extends('layout')

@section('content')
  <h1>Create a new Project</h1>

  <form method="POST" action="/projects">
  	{{@csrf_field()}}
  Project Title:<br>
  <input type="text" name="title" placeholder="Project Title"><br>
  Description:<br>
  <textarea name="description" placeholder="Project Description"></textarea> <br><br>
  <input type="submit" value="Create Project">
 </form>

@endsection