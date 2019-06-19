@extends('layout')

@section('title', 'Edit')

@section('content')
 <h1>Edit Project</h1>

 <form method="POST" action="/projects/{{ $project->id}}">
 	{{method_field('PATCH')}}
  	{{@csrf_field()}}

  Project Title:<br>
  <input type="text" name="title" placeholder="Project Title" value="{{$project->title}}"><br>

  Description:<br>
  <textarea name="description" >{{$project->description}}</textarea> <br><br>

  <input type="submit" value="Update Project">
 </form>

@endsection
