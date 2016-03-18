@extends('layouts.app')

@section('content')


    <!-- Affichage des articles-->
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <a href="{{ URL::previous() }}"><button class="btn btn-primary"><i class="glyphicon glyphicon-chevron-left"></i> Retour</button></a><br /><br />
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>Article n°{!! $id !!}</h2></div>

                    <div class="panel-body">

                        @if($post)
                            <h3>{!! $post->title !!}</h3>
                            <p>{!! $post->description !!}</p>
                            @elseif(empty($post))
                            <div class="alert alert-danger" role="alert">
                                <p>L'article n'existe pas</p>
                            </div>
                        @endif

                    </div>
                </div>
                @if(Auth::check() && Auth::user()->isAdmin())
                <a href="{!! $post->id !!}/edit" style="display:inline-block;"><button class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Éditer l'article</button></a>
                {!! Form::open (array(
                'method'=>'delete',
                'route' =>['articles.destroy',$post->id],
                'style'  =>  'display:inline-block;'
                )) !!}
                {!! Form::button('<i class="glyphicon glyphicon-minus"></i> Supprimer l\'article', ['type' => 'submit', 'class' =>  'btn btn-primary']) !!}
                {!! Form::close() !!}
                @endif
            </div>
        </div>

       {{-- Partie commentaires--}}
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2>Commentaires</h2>
                @include('comments.index', ['comments' => $post->comments])
                @include('comments.form')
            </div>
        </div>
    </div>
@endsection