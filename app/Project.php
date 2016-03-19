<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable =['name_project', 'name_client_command', 'location_command', 'email_command', 'phone_command', 'name_client_monitor', 'location_monitor', 'email_monitor', 'phone_monitor', 'identity_fiche', 'project_type', 'context', 'application_project', 'objective_project', 'constraint', 'validated'];
}
