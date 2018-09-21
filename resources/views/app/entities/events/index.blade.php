@extends('app')


@section('css')
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md d-flex justify-content-center align-items-center flex-column">
                <H1>Listes events</H1>
                
                <div class="row justify-content-center align-items-center mt-3">
                    @foreach($events as $event)
                        <div class="col-md-4 mb-4">
                            <div class="card" style="">
                                <img class="card-img-top"
                                     src="{{ $event->getFile ? asset($event->getFile->file) : "https://via.placeholder.com/450x150" }}"
                                     alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $event->name }}</h5>
                                    <p class="card-text">{{ $event->content }}</p>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Author
                                                                    : {{ $event->getUser ? $event->getUser->name : "Pas d'author"}}
                                            <br>
                                            @if(Auth::check() && $event->getUser->id === Auth::user()->id)
                                                (Vous êtes l'autheur)
                                            @endif
                                        </li>
                                    </ul>
                                </div>
                            
                            </div>
                        
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    {{ $events->links() }}
                </div>
            </div>
        </div>
    </div>

@stop

@section('js')
@stop

