@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <a href="{{ URL::previous() }}"><button class="btn btn-primary"><i class="glyphicon glyphicon-chevron-left"></i> Retour</button></a><br /><br />
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>Éditer l'article n°{!! $id !!}</h2></div>

                    <div class="panel-body">
                        {!! Form::open(array('url'  =>  route('articles.update', $id), 'method'  =>  'put')) !!}
                        {{ csrf_field() }}
                        {!! Form::label('Titre') !!}
                        {!! Form::text('title', $post->title, ['class'    =>  'form-control']) !!}<br /><br />
                        {!! Form::label("Contenu de l'article") !!}
                        {!! Form::textarea('description', $post->description, ['class'    =>  'form-control']) !!}<br /><br />
                        {!! Form::submit('Modifier', ['class'    =>  'btn btn-primary btn-lg btn-block']) !!}
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