@extends('layout')


@section('Title','Editar proyecto')


@section('content')
<h1>Editar Nuevo Proyecto</h1>

@if($errors->all())
    <ul>
        @foreach($errors->all() as $error)
        <li> {{$error}} </li>
    </ul>
@endif


<form method="POST" action="{{route('projects.store')}}">
    @csrf
    <label> Titulo del proyecto <br>
        <input type="text" name="title">
    </label>
    <br>

    <label> Descripcion del proyecto <br>
        <input type="textarea" name="description">
    </label>
    <br>

    <label> Url <br>
        <input type="text" name="url">
    </label>
    <br>

    <button> Guardar </button>

</form>

@endsection
