@extends('layout')


@section('Title','Crear proyecto')


@section('content')
<h1>Crear Nuevo Proyecto</h1>
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
