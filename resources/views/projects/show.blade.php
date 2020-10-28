@extends('layout')

@section('title',$projectitems->title)

@section('content')
  <h1> {{$projectitems->title}} </h1>
  <p>  {{$projectitems->description }} </p>
  <p>  {{$projectitems->created_at->diffForhumans() }} </p>

@endsection
