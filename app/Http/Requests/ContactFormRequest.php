<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContactFormRequest extends Request
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
    public function rules()
    {
        return [
            'name' => 'required|min:1',
            'email' => 'required|min:1',
            'content' => 'required|min:1'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nom requis',
            'name.min' => 'Veuillez remplir la case Nom, s\'il-vous-plaît',
            'email.required' => 'E-mail requis',
            'email.min' => 'Veuillez remplir la case Email, s\'il-vous-plaît',
            'content.required' => 'Message requis',
            'content.min' => 'Veuillez remplir la case Message, s\'il-vous-plaît'
        ];
    }
}
