<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\CommentsRequest;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;

use App\Http\Requests;

class CommentsController extends Controller
{
    public function store(CommentsRequest $request, Guard $auth){
        $data = $request->only('username', 'email', 'content', 'post_id');
        if($auth->user()){
            $data['user_id'] = $auth->user()->id;
        }
        Comment::create($data);
        return redirect()->back();
    }

    public function destroy($id, Guard $auth){
        $comment = Comment::findOrFail($id);
        if(!$comment->canEdit($auth->user())){
            return redirect()->back();
        }
        $comment->delete();
        return redirect()->back();
    }
}
