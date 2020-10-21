@extends('layout')

@section('title','Portfolio')

@section('content')
    <h1>Portfolio</h1>

    <ul>
        @forelse($portfolio as $portfolioitem)
            <li>{{ $portfolioitem['title']}} : <strong> {{$portfolioitem['description'] }} </strong>  {{$portfolioitem['created_at'] }}</li>


        @empty
            <li>No hay proyectos para mostrar</li>

        @endforelse



    </ul>

@endsection

