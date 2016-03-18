<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public  $guarded = ['id'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function getUsernameAttribute($username){
        $userId = $this->user_id;
        if($userId != null){
            return $this->user->name;
        }
        else{
            return $username;
        }
    }

    public function canEdit($user){
        if($user){
            if($user->id === $this->user_id){
                return true;
            }
        }
        return false;
    }
}
