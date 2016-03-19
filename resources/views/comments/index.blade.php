<?php $comments->load('user'); ?>
@foreach($comments as $comment)
{{--Affichage des commentaires--}}
<h4 class="text-capitalize"><i class="fa fa-user fa-2x"></i> {{ $comment->username }}</h4>
<p>
  {{ $comment->content }}

  {{--Suppression des commentaires par auteur--}}
  @if (Auth::check())
  @if(($comment->canEdit(Auth::user())) || (Auth::user()->isAdmin()))
  <small style="margin-left:10px">
    <a class="text-danger"
    href="{{ action('CommentsController@destroy', $comment)}}"
    data-method="DELETE"><i class="fa fa-trash"></i> Supprimer</a>
  </small>
  @endif
  @endif

</p>
@endforeach