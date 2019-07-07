@extends('layouts.app')

@section('content')

<div style="display: flex; align-items: center;">
	<h1 style="margin-right: auto;">My Projects</h1>
	<a href="/projects/create">New Project</a>
</div>

<ul>
  @foreach ($projects as $project)
   <a href="/projects/{{$project->id}}">
    <li>{{$project ->title}}</li>
   </a>
  @endforeach
</ul>

@endsection