<?php $comments->load('user'); ?>
@foreach($comments as $comment)
{{--Affichage des commentaires--}}
<h5 class="text-capitalize"><i class="fa fa-user fa-2x"></i> {{ $comment->username }}</h5>
  <p>
    {{ $comment->content }}

    {{--Suppression des commentaires par auteur--}}
    @if(($comment->canEdit(Auth::user())))
    <small style="margin-left:10px">
      <a class="text-danger"
      href="{{ action('CommentsController@destroy', $comment)}}"
      data-method="DELETE"><i class="fa fa-trash"></i> Supprimer</a>
    </small>
    @endif

  </p>
  @endforeach