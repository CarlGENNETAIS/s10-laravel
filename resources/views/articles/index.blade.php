@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Liste des articles</div>

                    <div class="panel-body">
                        @foreach($posts as $post)

                            <a href="articles/{!! $post->id !!}"><h3>{!! $post->title !!}</h3></a>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection