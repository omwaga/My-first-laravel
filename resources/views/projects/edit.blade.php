@extends('layouts.app')

@section('title', 'Edit')

@section('content')
 <h1 class="title">Edit Project</h1>

 <form method="POST" action="/projects/{{ $project->id}}" style="margin-bottom: 1em;">
 	@method('PATCH')
 	@csrf
    
    <div class="field">
      <label class="label" for="title">Project Title:<br></label>
      <input type="text" name="title" class="input" placeholder="Project Title" value="{{$project->title}}"><br>
    </div>

    <div class="field">
      <label class="label" for="description">Description:<br></label>
      <textarea name="description" class="textarea" >{{$project->description}}</textarea> <br><br>
    </div>

    <div class="field">
    	<div class="control">
         <button type="submit" class="button is-link">Update Project</button> 
        </div>
    </div>

 </form>

 <form method="POST" action="/projects/{{ $project->id}}">
 	@method('DELETE')
 	@csrf
    <div class="field">
    	<div class="control">
          <button type="submit" class="button is-danger">Delete Project</button> 
        </div>
    </div>
 </form>

@endsection
