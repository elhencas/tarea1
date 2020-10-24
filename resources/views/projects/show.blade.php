@extends('layout')

@section('title',$projectdatos->title)

@section('content')
  <h1> {{$projectdatos->title}} </h1>
  <p>  {{$projectdatos->description }} </p>
  <p>  {{$projectdatos->created_at->diffForhumans() }} </p>

@endsection
