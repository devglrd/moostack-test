@extends('app')


@section('css')
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md d-flex justify-content-center align-items-center flex-column">
                <H1>Vos document <strong>{{ Auth::user()->name }}</strong></H1>
                <div class="row justify-content-center align-items-center mt-3">
                    <div class="col-md-12">
                        <span>Vos évaluations</span>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Fichier</th>
                                <th scope="col">Type</th>
                                <th scope="col">Date de création</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(Auth::user()->getFiles as $a => $file)
                                <tr>
                                    <th scope="row">{{ $a + 1}}</th>
                                    <td><a href="{{ asset($file->$file) }}">{{ asset($file->file) }}</a></td>
                                    <td>{{ $file->type }}</td>
                                    <td>{{ $file->created_at }}</td>
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