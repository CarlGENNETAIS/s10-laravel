@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @if(Session::has('message'))
                    <div class="alert alert-info">
                        {{Session::get('message')}}
                    </div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Contactez-nous !</h3></div>

                    <div class="panel-body">
                        {!! Form::open(array('action' => 'ContactController@store')) !!}
                        {{ csrf_field() }}
                        {!! Form::label('Votre nom') !!}
                        {!! Form::text('name', null, ['class'    =>  'form-control', 'placeholder'  =>  'Votre nom']) !!}<br /><br />
                        {!! Form::label('Votre email') !!}
                        {!! Form::text('email', null, ['class'    =>  'form-control', 'placeholder'  =>  'Votre email']) !!}<br /><br />
                        {!! Form::label("Votre message") !!}
                        {!! Form::textarea('content', null, ['class'    =>  'form-control', 'placeholder'   =>  'Votre message']) !!}<br /><br />
                        {!! Form::submit('Envoyer', ['class'    =>  'btn btn-primary btn-lg btn-block']) !!}
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