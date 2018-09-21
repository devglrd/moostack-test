@extends('app')


@section('css')
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md d-flex justify-content-center align-items-center flex-column">
                <H1>Vos compétences <strong>{{ Auth::user()->name }}</strong></H1>
                <div class="row justify-content-center align-items-center mt-3">
                    <div class="col-md-12">
                        <span>Vos compétences</span>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nom de la compètences</th>
                                <th scope="col">Date de création</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(Auth::user()->getSkills as $a => $skill)
                                <tr>
                                    <th scope="row">{{ $a + 1}}</th>
                                    <td>{{ $skill->name }}</td>
                                    <td>{{ $skill->created_at }}</td>
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