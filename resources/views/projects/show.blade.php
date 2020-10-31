@extends('layout')

@section('title',$title )

@section('content')
  <h1> {{$title}} </h1>
  <p>  {{$description }} </p>
  <p>  {{$created_at }} </p>

@endsection
