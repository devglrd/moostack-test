@extends('app')


@section('css')
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md d-flex justify-content-center align-items-center flex-column">
                <H1>Votre book <strong>{{ Auth::user()->name }}</strong></H1>
                <div class="row justify-content-center align-items-center mt-3">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">#id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Age</th>
                                <th scope="col">Pays</th>
                                <th scope="col">Date de création</th>
                            </tr>
                            </thead>
                            <tbody>
                            
                            <tr>
                                <th scope="row">{{ Auth::user()->id }}</th>
                                <td>{{ Auth::user()->name }}</td>
                                <td>{{ Auth::user()->email }}}</td>
                                <td>{{ Auth::user()->age }}</td>
                                <td>{{ Auth::user()->country }}</td>
                                <td>{{ Auth::user()->created_at }}</td>
                            </tr>
                            
                            </tbody>
                        </table>
                    </div>
                </div>
                {{--<div class="row justify-content-center align-items-start mt-3 w-100">--}}
                    {{--<div class="col-md-6">--}}
                        {{--<span>Vos évenemnts</span>--}}
                        {{--<table class="table table-bordered">--}}
                            {{--<thead>--}}
                            {{--<tr>--}}
                                {{--<th scope="col">#</th>--}}
                                {{--<th scope="col">Nom</th>--}}
                                {{--<th scope="col">Description</th>--}}
                                {{--<th scope="col">Date de l'èvenemnts</th>--}}
                                {{--<th scope="col">Date de création</th>--}}
                            {{--</tr>--}}
                            {{--</thead>--}}
                            {{--<tbody>--}}
                            {{--@foreach(Auth::user()->getEvents as $a => $event)--}}
                                {{--<tr>--}}
                                    {{--<th scope="row">{{ $a }}</th>--}}
                                    {{--<td>{{ $event->name }}</td>--}}
                                    {{--<td>{{ substr($event->content, 0, 10)}}</td>--}}
                                    {{--<td>{{ $event->date }}</td>--}}
                                    {{--<td>{{ $event->created_at }}</td>--}}
                                {{--</tr>--}}
                            {{--@endforeach--}}
                            {{--</tbody>--}}
                        {{--</table>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-6">--}}
                        {{--<span>Vos évaluations</span>--}}
                        {{--<table class="table table-bordered">--}}
                            {{--<thead>--}}
                            {{--<tr>--}}
                                {{--<th scope="col">#</th>--}}
                                {{--<th scope="col">Nom</th>--}}
                                {{--<th scope="col">Description</th>--}}
                                {{--<th scope="col">Notes</th>--}}
                                {{--<th scope="col">Date de création</th>--}}
                            {{--</tr>--}}
                            {{--</thead>--}}
                            {{--<tbody>--}}
                            {{--@foreach(Auth::user()->getNotes as $a => $note)--}}
                                {{--<tr>--}}
                                    {{--<th scope="row">{{ $a }}</th>--}}
                                    {{--<td>{{ $note->name }}</td>--}}
                                    {{--<td>{{ substr($note->content, 0, 10)}}</td>--}}
                                    {{--<td>{{ $note->note }}</td>--}}
                                    {{--<td>{{ $note->created_at }}</td>--}}
                                {{--</tr>--}}
                            {{--@endforeach--}}
                            {{--</tbody>--}}
                        {{--</table>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        
        </div>
    </div>
@stop

@section('js')
@stop