@extends('layout')

@section('content')
  <h1>Create a new Project</h1>

  <form method="POST" action="/projects">
  	{{@csrf_field()}}
  Project Title:<br>
  <input type="text" name="title" placeholder="Project Title" required="" value="{{old('title')}}"><br>
  Description:<br>
  <textarea name="description" placeholder="Project Description" required="">{{old('description')}}</textarea> <br><br>
  <input type="submit" value="Create Project">

@if ($errors->any())
  <div class="notification is-danger">
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
  </div>
@endif

 </form>

@endsection