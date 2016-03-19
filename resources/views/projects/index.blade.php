@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <!-- Affichage des erreurs de validation -->
                @if($errors)
                    <br />
                    <ul style="list-style: none;">
                        @foreach($errors->all() as $error)
                            <li style="color:red;">--> {{$error}}</li>
                        @endforeach
                    </ul>
                @endif

                <!-- Affichage du message de succès -->
                @if(Session::has('message'))
                    <div class="alert alert-info">
                        {{Session::get('message')}}
                    </div>
                @endif

                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Liste des Projets</h3></div>

                    <div class="panel-body">
                        {{--Affichage de tout les projets validés--}}
                        @foreach($projects as $project)
                            @if($project->validated == 1)

                                <a href="projects/{!! $project->id !!}"><h3>{!! $project->name_project !!}<small> - Client : {!! $project->name_client_command !!}</small></h3></a>

                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection