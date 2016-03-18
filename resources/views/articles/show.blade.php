@extends('layouts.app')

@section('content')


    <!-- Affichage des articles-->
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <a href="{{ url('/articles') }}"><button class="btn btn-primary"><i class="glyphicon glyphicon-chevron-left"></i> Retour</button></a>
                 @if(Auth::check() && Auth::user()->isAdmin())
                <a href="{!! $post->id !!}/edit" style="display:inline-block;"><button class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i> Éditer l'article</button></a>
                {!! Form::open (array(
                'method'=>'delete',
                'route' =>['articles.destroy',$post->id],
                'style'  =>  'display:inline-block;'
                )) !!}
                {!! Form::button('<i class="glyphicon glyphicon-trash"></i> Supprimer l\'article', ['type' => 'submit', 'class' =>  'btn btn-danger']) !!}
                {!! Form::close() !!}
                @endif
                <br /><br />
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>{!! $post->title !!}</h2></div>

                    <div class="panel-body">

                        @if($post)
                            <p><i>Article n°{!! $id !!} publié le : {!! $post->created_at !!}</i></p>
                            <p class="text-justify">{!! $post->description !!}</p>
                            @elseif(empty($post))
                            <div class="alert alert-danger" role="alert">
                                <p>L'article n'existe pas</p>
                            </div>
                        @endif

                    </div>
                </div>
                
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