@extends('components.layout')
@section('content')
    <div class="timer">
        <h1 class="text-center" id="counter"></h1>
    </div>
    <form action="/index">
        <input class="btn-parar" type="submit" value="Parar">
    </form>

    <div class="rodape">
        <form action="/index/c">
            <input class="btn-definir" value="Definir tempo" type="submit">
        </form>
    </div>
@endsection
