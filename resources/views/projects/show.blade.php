@extends('layout')

@section('title',$title )

<a href="{{ route('projects.edit',$project) }}"> Editar </a>

@section('content')
  <h1> {{$title}} </h1>
  <p>  {{$description }} </p>
  <p>  {{$created_at }} </p>

@endsection
