<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProjectsRequest extends Request
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
        return[
            'name_project'          => 'required|min:3',    /*Champs requis & Minimum de trois caractère*/
            'name_client_command'   => 'required|min:3',    /*Champs requis & Minimum de trois caractère*/
            'email_command'         => 'required|email',    /*Champs requis & Format mail classique obligatoire*/
            'phone_command'         => 'required',          /*Champs requis*/
            'name_client_monitor'   => 'required|min:3',    /*Champs requis & Minimum de trois caractère*/
            'email_monitor'         => 'required|email',    /*Champs requis & Format mail classique obligatoire*/
            'phone_monitor'         => 'required',          /*Champs requis*/
            'identity_fiche'        => 'required',          /*Champs requis*/
            'project_type'          => 'required',          /*Champs requis*/
            'objective_project'     => 'required',          /*Champs requis*/
            'application_project'   => 'required',          /*Champs requis*/

        ];
    }

    public function messages()
    {
        return [
            'name.required'                 => 'Nom Obligatoire',
            'name.min'                      => 'Le nom doit faire au moins 3 caractères',

            'name_client_command.required'  => 'Nom du client commanditaire obligatoire',
            'name_client_command.min'       => 'Le nom du client commanditaire doit faire au moins 3 caractères',

            'email_command.required'        => 'Email du client commanditaire obligatoire',
            'email_command.email'           => 'Merci de respecter le format des Emails [Commanditaire]',

            'phone_command.required'        => 'Numéro de téléphone du client commanditaire obligatoire',

            'name_client_monitor.required'  => 'Nom du client suiveur obligatoire',
            'name_client_monitor.min'       => 'Le nom du client suiveur doit faire au moins 3 caractères',

            'email_monitor.required'        => 'Email du client suiveur obligatoire',
            'email_monitor.email'           => 'Merci de respecter le format des Emails [Suiveur]',

            'phone_monitor.required'        => 'Numéro de téléphone du client suiveur obligatoire',

            'project_type.required'         => 'Merci de cocher au moins un type de projet',

            'identity_fiche.required'       => 'Fiche d\'identité à remplir obligatoirement',

            'application_project.required'  => 'Merci de renseigner votre demande',

            'objective_project.required'    => 'Merci de renseigner vos objectifs'
        ];
    }
}
