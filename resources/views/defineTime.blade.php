@extends('components.layout')
@section('content')
    <div class="chooseTimeMenu">
        <h2>Selecione o tempo que deseja</h2>
        <div class="btnSelection">
            <form>
                <button class="chooseTimeBtn" formaction="/index/c/5"><span>5m</span></button>
                <button class="chooseTimeBtn" formaction="/index/c/10"><span>10m</span></button>
                <button class="chooseTimeBtn" formaction="/index/c/15"><span>15m</span></button>
                <button class="chooseTimeBtn" formaction="/index/c/20"><span>20m</span></button>
            </form>
        </div>
    </div>
@endsection
