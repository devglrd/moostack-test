@extends('app')


@section('css')
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md d-flex justify-content-center align-items-center flex-column">
                <H1>Vos évaluations <strong>{{ Auth::user()->name }}</strong></H1>
                <div class="row justify-content-center align-items-center mt-3">
                    <div class="col-md-12">
                        <span>Vos évaluation </span>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nom de l"évaluation</th>
                                <th scope="col">Description</th>
                                <th scope="col">Note</th>
                                <th scope="col">Date de création</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(Auth::user()->getNotes as $a => $note)
                                <tr>
                                    <th scope="row">{{ $a + 1}}</th>
                                    <td>{{ $note->name }}</td>
                                    <td>{{ $note->content }}</td>
                                    <td>{{ $note->note }}</td>
                                    <td>{{ $note->created_at }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
@stop