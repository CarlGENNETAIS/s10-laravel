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
            'name_project'          => 'required',   
            'name_client_command'   => 'required',  
            'email_command'         => 'required', 
            'phone_command'         => 'required',
            'name_client_monitor'   => 'required',
            'email_monitor'         => 'required',
            'phone_monitor'         => 'required',  
            'identity_fiche'        => 'required', 
            'project_type'          => 'required',
            'objective_project'     => 'required', 
            'application_project'   => 'required',

        ];
    }

    public function messages()
    {
        return [
            'name.required'                 => 'Veuillez remplir un nom',

            'name_client_command.required'  => 'Veuillez remplir un nom de client',

            'email_command.required'        => 'Veuillez remplir un email client',

            'phone_command.required'        => 'Veuillez remplir un numéro tel client',

            'name_client_monitor.required'  => 'Veuillez remplir un suiveur',

            'email_monitor.required'        => 'Veuillez remplir un email suiveur',

            'phone_monitor.required'        => 'Veuillez remplir un num tel suiveur',

            'project_type.required'         => 'Veuillez cocher un type de projet',

            'identity_fiche.required'       => 'Veuillez remplir la fiche d\'identite',

            'application_project.required'  => 'Veuillez remplir une demande',

            'objective_project.required'    => 'Veuillez remplir des objectifs'
        ];
    }
}
