<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class EditProfileController extends Controller
{
    // Edition du Profile
    public function editPro(Request $request)
    {
        /*return response()->view('editProfile', array_merge([
            'user' =>  Put::find($user),
            'id'    =>  $user,
            'name' =>$user,
            'email'=>$user
        ]));*/

        return view('profile')->with(array("user"=>$user));
    }


    // LE PROFIL QUI MARCHE <3
    public function updatePro(Request $request)
    {

        $user = Auth::user();
        $user->name=$request-> name;
        $user->email=$request-> email;
        $user->password=$request-> password;


        $user->update($request->all());

        return redirect(route('profile'));
    }

}
