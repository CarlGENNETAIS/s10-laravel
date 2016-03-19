@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Soumettre un nouveau projet</h3>
                </div>
                <div class="panel-body">
                 <!-- Affichage des erreurs de validation -->
                 @if($errors)
                 <br />
                 <ul style="list-style: none;">
                    @foreach($errors->all() as $error)
                    <li style="color:red;">/!\ {{$error}}</li>
                    @endforeach
                </ul>
                @endif

                <!-- Affichage du message de succès -->
                @if(Session::has('message'))
                <div class="alert alert-info">
                    {{Session::get('message')}}
                </div>
                @endif

                <div class="form-horizontal">
                    {!! Form::open(array('action' => 'ProjectController@store', 'method'  =>  'post')) !!}
                    {!! Form::token() !!}

                    <h3 class="col-md-6 col-md-offset-4">Titre du projet</h3>
                    <div class="form-group">
                        <label class="col-md-4 control-label">
                            {!! Form::label('Nom du projet') !!}
                        </label>
                        <div class="col-md-6">
                            {!! Form::text('name_project', null, ['class'    =>  'form-control']) !!}<br /><br />
                        </div>
                    </div>

                    <h3 class="col-md-6 col-md-offset-4">Commanditaire du projet</h3>
                    <div class="form-group">
                        <label class="col-md-4 control-label">
                            {!! Form::label("Nom") !!}
                        </label>
                        <div class="col-md-6">
                            {!! Form::text('name_client_command', null, ['class'    =>  'form-control']) !!}<br /><br />
                        </div>
                        <label class="col-md-4 control-label">
                            {!! Form::label('Adresse') !!}
                        </label>
                        <div class="col-md-6">
                            {!! Form::text('location_command', null, ['class'   =>  'form-control']) !!}<br /><br />
                        </div>
                        <label class="col-md-4 control-label">
                            {!! Form::label('Email') !!}
                        </label>
                        <div class="col-md-6">
                            {!! Form::text('email_command', null, ['class'   =>  'form-control']) !!}<br /><br />
                        </div>
                        <label class="col-md-4 control-label">
                            {!! Form::label('Téléphone') !!}
                        </label>
                        <div class="col-md-6">
                            {!! Form::text('phone_command', null, ['class'   =>  'form-control']) !!}<br /><br />
                        </div>
                    </div>

                    <h3 class="col-md-6 col-md-offset-4">Suiveur du projet</h3>
                    <div class="form-group">
                        <label class="col-md-4 control-label">
                            {!! Form::label("Nom du client suiveur") !!}
                        </label>
                        <div class="col-md-6">
                            {!! Form::text('name_client_monitor', null, ['class'    =>  'form-control']) !!}<br /><br />
                        </div>
                        <label class="col-md-4 control-label">
                            {!! Form::label('Adresse du suiveur') !!}
                        </label>
                        <div class="col-md-6">
                            {!! Form::text('location_monitor', null, ['class'   =>  'form-control']) !!}<br /><br />
                        </div>
                        <label class="col-md-4 control-label">
                            {!! Form::label('Email du suiveur') !!}
                        </label>
                        <div class="col-md-6">
                            {!! Form::text('email_monitor', null, ['class'   =>  'form-control']) !!}<br /><br />
                        </div>
                        <label class="col-md-4 control-label">
                            {!! Form::label('Téléphone du suiveur') !!}
                        </label>
                        <div class="col-md-6">
                            {!! Form::text('phone_monitor', null, ['class'   =>  'form-control']) !!}<br /><br />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">
                        </label>
                        <div class="col-md-6">
                        </div>
                    </div>
                    <h3 class="col-md-6 col-md-offset-4">Description du projet</h3>
                    <div class="form-group">
                        <label class="col-md-4 control-label">
                            {!! Form::label('Fiche Identité') !!}
                        </label>
                        <div class="col-md-6">
                            {!! Form::textarea('identity_fiche', null, ['class'   =>  'form-control']) !!}<br /><br />
                        </div>
                        <label class="col-md-4 control-label">
                            {!! Form::label('Type du projet') !!}<br/>
                        </label>
                        <div class="col-md-6">
                            {!! Form::radio('project_type', 1, null) !!} Site Internet<br/>
                            {!! Form::radio('project_type', 2, null) !!} 3D<br/>
                            {!! Form::radio('project_type', 3, null) !!} Animation 2D<br/>
                            {!! Form::radio('project_type', 4, null) !!} Installation multimédia<br/>
                            {!! Form::radio('project_type', 5, null) !!} Jeu vidéo<br/>
                            {!! Form::radio('project_type', 6, null) !!} DVD<br/>
                            {!! Form::radio('project_type', 7, null) !!} Print<br/>
                            {!! Form::radio('project_type', 8, null) !!} CD-Rom<br/>
                            {!! Form::radio('project_type', 9, null) !!} Evènement<br/>
                            {!! Form::radio('project_type', 10, null) !!}Autre<br/><br/>
                        </div>
                        <label class="col-md-4 control-label">
                            {!! Form::label('Contexte de la demande') !!}
                        </label>
                        <div class="col-md-6">
                            {!! Form::textarea('context', null, ['class'   =>  'form-control']) !!}<br /><br />
                        </div>
                        <label class="col-md-4 control-label">
                            {!! Form::label('Votre demande') !!} <br/>
                            <small>(Formulez précisemment votre demande en décrivant le projet tel que vous le voyez)</small>
                        </label>
                        <div class="col-md-6">
                            {!! Form::textarea('application_project', null, ['class'   =>  'form-control']) !!}<br /><br />
                        </div>
                        <label class="col-md-4 control-label">
                            {!! Form::label('Vos objectifs') !!}<br/>
                            <small>Quelles sont vos attentes ?</small>
                        </label>
                        <div class="col-md-6">
                            {!! Form::textarea('objective_project', null, ['class'   =>  'form-control']) !!}<br /><br />
                        </div>
                        <label class="col-md-4 control-label">
                            {!! Form::label('Contraintes particulières et informations complémentaires') !!}
                        </label>
                        <div class="col-md-6">
                            {!! Form::textarea('constraint', null, ['class'   =>  'form-control']) !!}<br /><br />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            {!! Form::submit('Soumettre le projet à la validation', ['class'    =>  'btn btn-warning btn-lg btn-block']) !!}
                        </div>
                    </div>
                        {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection