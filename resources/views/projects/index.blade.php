@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Liste des Projets</div>

                    <div class="panel-body">
                        {{--Affichage de tout les projets disponible--}}
                        @foreach($projects as $project)

                            <a href="projects/{!! $project->id !!}"><h3>{!! $project->name_project !!}</h3></a>
                            <p><i>{!! $project->context !!}</i></p>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection