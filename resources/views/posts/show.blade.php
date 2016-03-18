@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('errors.message')
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $post->title }} | Créer le : {{ $post->created_at }} </div>

                <div class="panel-body">
                    {{ $post->content }}
                    
                </div>
                <div class="panel-footer" style="text-align: center;">
                @if(Auth::check() && (Auth::user()->id == $post->user_id || Auth::user()->isAdmin))

                  {!! Form::model($post, array(
                    'route' => array('post.destroy', $post->id),
                    'method' => 'DELETE')) 
                    !!}

                    {!! Form::submit('Supprimer', ['class' => 'btn btn-danger']) !!}

                    <a class="btn btn-default" href="{{ route('post.edit', $post->id) }}">
                        Modifier
                    </a>
                    @endif

                    <a class="btn btn-default" href="{{ route('post.index') }}">
                        Retour
                    </a>
                    {!! Form::close() !!}
                </div>

                <div class="panel-body">
                    <h3>Commentaires</h3>
                    <hr>
                    @foreach($post->comments as $comment)
                    <p><br>
                        <strong>{{ $comment->user->name }}</strong>
                    <br>
                    {{ $comment->comment }}
                    </p>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>
@endsection