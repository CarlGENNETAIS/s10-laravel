@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>Soumettre un projet</h2></div>

                    <div class="panel-body">
                        {!! Form::open(array('action' => 'ProjectController@store', 'method'  =>  'post')) !!}
                        {!! Form::token() !!}
                            {!! Form::label('Nom du projet') !!}
                            {!! Form::text('name_project', null, ['class'    =>  'form-control']) !!}<br /><br />

                            {{--Partie client commanditaire du projet--}}
                            {!! Form::label("Nom du client commanditaire") !!}
                            {!! Form::text('name_client_command', null, ['class'    =>  'form-control']) !!}<br /><br />
                            {!! Form::label('Adresse du commanditaire') !!}
                            {!! Form::text('location_command', null, ['class'   =>  'form-control']) !!}<br /><br />
                            {!! Form::label('Email du commanditaire') !!}
                            {!! Form::text('email_command', null, ['class'   =>  'form-control']) !!}<br /><br />
                            {!! Form::label('Téléphone du commanditaire') !!}
                            {!! Form::text('phone_command', null, ['class'   =>  'form-control']) !!}<br /><br />
                            {{--Partie client suiveur de projet--}}
                            {!! Form::label("Nom du client suiveur") !!}
                            {!! Form::text('name_client_monitor', null, ['class'    =>  'form-control']) !!}<br /><br />
                            {!! Form::label('Adresse du suiveur') !!}
                            {!! Form::text('location_monitor', null, ['class'   =>  'form-control']) !!}<br /><br />
                            {!! Form::label('Email du suiveur') !!}
                            {!! Form::text('email_monitor', null, ['class'   =>  'form-control']) !!}<br /><br />
                            {!! Form::label('Téléphone du suiveur') !!}
                            {!! Form::text('phone_monitor', null, ['class'   =>  'form-control']) !!}<br /><br />

                            {{--Partie de description du projet--}}
                            {!! Form::label('Fiche Identité') !!}
                            {!! Form::textarea('identity_fiche', null, ['class'   =>  'form-control']) !!}<br /><br />

                            {{--CheckBox Part--}}
                            {!! Form::label('Type du projet') !!}<br/>
                            {!! Form::checkbox('project_type', 1, null, ['class'   =>  'yield']) !!} Site Internet<br/>
                            {!! Form::checkbox('project_type', 2, null, ['class'   =>  'yield']) !!} 3D<br/>
                            {!! Form::checkbox('project_type', 3, null, ['class'   =>  'yield']) !!} Animation 2D<br/>
                            {!! Form::checkbox('project_type', 4, null, ['class'   =>  'yield']) !!} Installation multimédia<br/>
                            {!! Form::checkbox('project_type', 5, null, ['class'   =>  'yield']) !!} Jeu vidéo<br/>
                            {!! Form::checkbox('project_type', 6, null, ['class'   =>  'yield']) !!} DVD<br/>
                            {!! Form::checkbox('project_type', 7, null, ['class'   =>  'yield']) !!} Print<br/>
                            {!! Form::checkbox('project_type', 8, null, ['class'   =>  'yield']) !!} CD-Rom<br/>
                            {!! Form::checkbox('project_type', 9, null, ['class'   =>  'yield']) !!} Evènement<br/>
                            {!! Form::checkbox('project_type', 10, null, ['class'   =>  'yield']) !!}Autre<br/><br/>

                            {{--Retour description du projet--}}
                            {!! Form::label('Contexte de la demande') !!}
                            {!! Form::textarea('context', null, ['class'   =>  'form-control']) !!}<br /><br />
                            {!! Form::label('Votre demande') !!}
                            {!! Form::textarea('application_project', null, ['class'   =>  'form-control']) !!}<br /><br />
                            {!! Form::label('Vos objectifs') !!}
                            {!! Form::textarea('objective_project', null, ['class'   =>  'form-control']) !!}<br /><br />
                            {!! Form::label('Contraintes particulières et informations complémentaires') !!}
                            {!! Form::textarea('constraint', null, ['class'   =>  'form-control']) !!}<br /><br />

                            {!! Form::submit('Soumettre le projet à la validation', ['class'    =>  'btn btn-warning btn-lg btn-block']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection