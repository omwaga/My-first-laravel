@extends('layouts.app')

@section('content')
  <h1 class="title">Create a new Project</h1>

  <form method="POST" action="/projects">
  	{{@csrf_field()}}
  	<div class="field">
     Project Title:<br>
     <input type="text" name="title" class="input" placeholder="Project Title" required="" value="{{old('title')}}"><br>
    </div>

    <div class="field">
     Description:<br>
     <textarea name="description" placeholder="Project Description" class="textarea" required="">{{old('description')}}</textarea> <br><br>
    </div>

    <div class="field">
    	<div class="control">
          <button type="submit" class="button is-link">Create Project</button> 
        </div>
    </div>

@include('errors')

 </form>

@endsection