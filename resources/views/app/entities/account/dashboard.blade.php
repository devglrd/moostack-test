@extends('app')


@section('css')
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md d-flex justify-content-center align-items-center flex-column">
                <H1>Votre dashboard <strong>{{ Auth::user()->name }}</strong></H1>
                {{ session()->get('baerer') }}
            </div>
        </div>
    </div>
@stop

@section('js')
@stop