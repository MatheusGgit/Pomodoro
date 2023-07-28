@extends('components.layout')
@section('content')
    <div class="configMenu">
        <a href="/index"><span>Voltar</span></a>
        <h3>Editar</h3>
        <div class="divEdit">
            <label for="configMenuText">Nome</label>
            <form action="/index/edit">
                <input type="text" class="configMenuText">
                <button>Concluir</button>
            </form>
        </div>
    </div>
@endsection
