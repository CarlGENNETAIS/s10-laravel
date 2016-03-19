<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


//Control du profile
class ProfileController extends Controller
{
    public function getProfile(){
        $user=Auth::user();
        return view('profile')->with(array("user"=>$user));
    }

    public function editProfile(){

        $user=Auth::user();
        return view('editProfile')->with(array("user"=>$user));
    }

}
