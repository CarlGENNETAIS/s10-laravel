
{!! Form::open(['url' => action('CommentsController@store')]) !!}
{!! Form::token() !!}

<div class="row">
    {{--Formulaire pour les utilisateurs invités--}}
    @if(Auth::guest())
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Pseudo']) !!}
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'E-Mail']) !!}
            </div>
        </div>

    {{--Formulaire pour les utilisateurs connectés--}}
    @else
        {!! Form::hidden('user_id', $post->id) !!}
    @endif

    {{--Message disponible pour tous les utilisateurs--}}
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => 'Votre commentaire']) !!}
        </div>
    </div>
    {!! Form::hidden('post_id', $id) !!}
</div>

<p class="text-right">
    {!! Form::submit('Publier', ['class'    =>  'btn btn-primary btn-lg btn-block']) !!}
</p>

{!! Form::close() !!}