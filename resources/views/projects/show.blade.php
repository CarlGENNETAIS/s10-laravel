@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                {{--Retour arrière--}}
                <a href="{{ URL::previous() }}"><button class="btn btn-primary"><i class="glyphicon glyphicon-chevron-left"></i> Retour</button></a><br /><br />

                <div class="panel panel-default">
                    <div class="panel-heading"><h2>Projet n°{!! $id !!}</h2></div>

                    <div class="panel-body">
                        @if($project)
                            {{--Include d'affichage du projet--}}
                            @include('projects/tabbody')
                        @elseif(empty($project))
                            <div class="alert alert-danger" role="alert">
                                <p>Le projet n'existe pas</p>
                            </div>
                        @endif
                    </div>
                </div>

                @if(Auth::check() && Auth::user()->isAdmin())
                {{--Bouton d'édition du projet--}}
                <a href="{!! $project->id !!}/edit" style="display:inline-block;"><button class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Éditer le projet</button></a>

                {{--Bouton de suppression des projets--}}
                {!! Form::open (array(
                'method'=>'delete',
                'route' =>['projects.destroy',$project->id],
                'style'  =>  'display:inline-block;'
                )) !!}
                {!! Form::button('<i class="glyphicon glyphicon-minus"></i> Supprimer le projet', ['type' => 'submit', 'class' =>  'btn btn-primary']) !!}
                @endif

            </div>
        </div>
    </div>
@endsection