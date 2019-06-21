@extends('layout')

@section('content')

<ul>
  @foreach ($projects as $project)
   <a href="/projects/{{$project->id}}">
    <li>{{$project ->title}}</li>
   </a>
  @endforeach
</ul>

@endsection