@extends('layout')

@section('content')
  @foreach ($projects as $project)
    <li>{{$project ->title}}</li>
  @endforeach
@endsection