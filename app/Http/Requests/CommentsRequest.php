<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Contracts\Auth\Guard;

class CommentsRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Guard $auth)
    {
        $rules = [
            'post_id'   => 'required|exists:posts,id',
            'content'   => 'required|min:3'
        ];
        if($auth->guest()){
            $rules['email'] = 'required|email';
            $rules['username'] = 'required|min:3';
        }
        return $rules;
    }
}
