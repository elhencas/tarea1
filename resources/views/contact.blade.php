@extends('layout')

@section('title')
    Contact
@endsection

@section('content')
    <h1>Contact</h1>
    @foreach ($errors->all() as $error)
            <p> {{ $error }} </p>
    @endforeach


    <form method="post" action="{{ route('contact') }} ">
        @csrf
        <input name="name" placeholder="Nombre..." value="henry"> <br>
        <input name="email" placeholder="Email..." value="nada@nada.com"> <br>
        <input name="subject" placeholder="Asunto..." value="asunto"> <br>
        <textarea name="content" placeholder="Mensaje..." value="mensaje"> </textarea>
        <button> Enviar </button>
   </form>

@endsection
