@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Validation des projets</h2>
            @if(Session::has('message'))
            <div class="alert alert-info">
                {{Session::get('message')}}
            </div>
            @endif

            <div class="panel panel-default">
                <div class="panel-heading"><h4><i class="fa fa-btn fa-balance-scale"></i>Projets en attente de validation</h4></div>
                <div class="panel-body">
                    <div class="list-group">
                        @foreach($projects as $project)
                        @if($project->validated == false)
                        <div class="list-group-item">
                            <div class="row">
                                <div class="col-md-8">
                                    <a href="projects/{!! $project->id !!}">
                                        <h4>{!! $project->name_project !!}
                                            <small> - {!! $project->name_client_command !!}</small>
                                        </h4></a>
                                    </div>
                                    {{--*/ $id = $project->id /*--}}
                                    <div class="col-md-2">
                                        {!! Form::open(array('url'  =>  route('admin.update', $id), 'method'  =>  'PUT')) !!}
                                        {!! Form::hidden('validated', '1') !!}
                                        {!! Form::submit('Valider', ['class'    =>  'btn btn-lg btn-success btn-lg btn-block']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                    <div class="col-md-2"> 
                                        {!! Form::open(array('url'  =>  route('admin.update', $id), 'method'  =>  'PUT')) !!}
                                        {!! Form::hidden('validated', '-1') !!}
                                        {!! Form::submit('Refuser', ['class'    =>  'btn btn-warning btn-lg btn-block']) !!}
                                        {!! Form::close() !!}
                                        <br/>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading"><h4><i class="fa fa-btn fa-check"></i>Projets validés</h4></div>

                    <div class="panel-body">
                        <div class="list-group">
                            @foreach($projects as $project)
                            @if($project->validated == "1")
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-md-8">
                                        <a href="projects/{!! $project->id !!}">
                                            <h4>{!! $project->name_project !!}
                                                <small> - {!! $project->name_client_command !!}</small>
                                            </h4></a>
                                        </div>
                                        {{--*/ $id = $project->id /*--}}
                                        <div class="col-md-2">
                                            {!! Form::open(array('url'  =>  route('admin.update', $id), 'method'  =>  'PUT')) !!}
                                            {!! Form::hidden('validated', '1') !!}
                                            {!! Form::submit('Validé', ['class'    =>  'btn btn-lg btn-success btn-lg btn-block', 'disabled' => 'disabled']) !!}
                                            {!! Form::close() !!}
                                        </div>
                                        <div class="col-md-2"> 
                                            {!! Form::open(array('url'  =>  route('admin.update', $id), 'method'  =>  'PUT')) !!}
                                            {!! Form::hidden('validated', '-1') !!}
                                            {!! Form::submit('Refuser', ['class'    =>  'btn btn-warning btn-lg btn-block']) !!}
                                            {!! Form::close() !!}
                                            <br/>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading"><h4><i class="fa fa-btn fa-times"></i>Projets refusés</h4></div>

                        <div class="panel-body">
                            <div class="list-group">
                                @foreach($projects as $project)
                                @if($project->validated == "-1")
                                <div class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <a href="projects/{!! $project->id !!}">
                                                <h4>{!! $project->name_project !!}
                                                    <small> - {!! $project->name_client_command !!}</small>
                                                </h4></a>
                                            </div>
                                            {{--*/ $id = $project->id /*--}}
                                            <div class="col-md-2">
                                                {!! Form::open(array('url'  =>  route('admin.update', $id), 'method'  =>  'PUT')) !!}
                                                {!! Form::hidden('validated', '1') !!}
                                                {!! Form::submit('Valider', ['class'    =>  'btn btn-lg btn-success btn-lg btn-block']) !!}
                                                {!! Form::close() !!}
                                            </div>
                                            <div class="col-md-2">
                                                {!! Form::open(array('url'  =>  route('admin.destroy', $id), 'method'  =>  'delete')) !!}
                                                {!! Form::submit('Suppr.', ['class'    =>  'btn btn-danger btn-lg btn-block']) !!}
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </div>

                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection