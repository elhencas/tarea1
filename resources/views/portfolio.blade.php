@extends('layout')

@section('title','Portfolio')

@section('content')
    <h1>Portfolio</h1>

    <ul>
        @forelse($projectdatos as $projectitem)
            <li>{{ $projectitem->title}} : <strong> {{$projectitem->description }} </strong>  {{$projectitem->created_at->diffForHumans() }}</li>


        @empty
            <li>No hay proyectos para mostrar</li>

        @endforelse

       <li> {{ $projectdatos->links() }} </li>


    </ul>

@endsection

