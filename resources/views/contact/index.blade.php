@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if(Session::has('message'))
            <div class="alert alert-info">
                {{Session::get('message')}}
            </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Vous souhaitez nous contacter ?</h3></div>
                <div class="panel-body">
                    {!! Form::open(array('action' => 'ContactController@store')) !!}
                    {{ csrf_field() }}
                    <div class="row form-group">
                        <div class="col-md-6">
                            {!! Form::text('name', null, ['class'    =>  'form-control', 'placeholder'  =>  'Nom']) !!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::text('email', null, ['class'    =>  'form-control', 'placeholder'  =>  'Email']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::textarea('content', null, ['class'    =>  'form-control', 'placeholder'   =>  'Message']) !!}
                    </div>
                    <div class="form-group">
                    {!! Form::submit('Envoyer', ['class'    =>  'btn btn-success btn-lg btn-block']) !!}
                    </div>
                    {!! Form::close() !!}
                    @if($errors)
                    <br />
                    <ul style="list-style: none;">
                        @foreach($errors->all() as $error)
                        <li style="color:red;">--> {{$error}}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection