<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class ValidatePostRequest extends Request
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
            'title' => 'required|min:5',
            'description' => 'required|min:10'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Titre d\'article obligatoire',
            'title.min' => 'Le titre doit faire au moins 5 caractères',
            'description.required' => 'Contenu obligatoire',
            'description.min' => 'Veuillez remplir la partie contenu de l\'article s\'il-vous-plaît (>10 caractères)'
        ];
    }
}
