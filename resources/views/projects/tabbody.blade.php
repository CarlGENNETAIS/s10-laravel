<style type="text/css">
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th {
        background-color: #eee;
        font-weight: bold;
    }
    th,
    td {
        border: 0.125em solid #333;
        line-height: 1.5;
        padding: 0.75em;
        text-align: left;
    }
    /* Stack rows vertically on small screens */
    @media (max-width: 30em) {
        /* Hide column labels */
        thead tr {
            position: absolute;
            top: -9999em;
            left: -9999em;
        }
        tr {
            border: 0.125em solid #333;
            border-bottom: 0;
        }
        /* Leave a space between table rows */
        tr + tr {
            margin-top: 1.5em;
        }
        /* Get table cells to act like rows */
        tr,
        td {
            display: block;
        }
        td {
            border: none;
            border-bottom: 0.125em solid #333;
            /* Leave a space for data labels */
            padding-left: 50%;
        }
        /* Add data labels */
        td:before {
            content: attr(data-label);
            display: inline-block;
            font-weight: bold;
            line-height: 1.5;
            margin-left: -100%;
            width: 100%;
        }
    }
</style>

<div class="table-responsive">
    <table class="table-bordered">
        <tr>
            <th>Nom du projet</th>
            <th>{!! $project->name_project !!}</th>
        </tr>
        <tr>
            <td><b>Nom, Prénom et fonction du commanditaire du projet</b></td>
            <td><b>{!! $project->name_client_command !!}</b></td>
        </tr>
        <tr>
            <td><i>Adresse Postale</i></td>
            <td>{!! $project->location_command !!}</td>
        </tr>
        <tr>
            <td><i>Email</i></td>
            <td><a href="mailto:{!! $project->email_command !!}">{!! $project->email_command !!}</a></td>
        </tr>
        <tr>
            <td><i>Téléphone</i></td>
            <td>{!! $project->phone_command !!}</td>
        </tr>
        <tr>
            <td><b>Nom et fonction du contact pour le suivi du projet<br/> avec étudiants</b></td>
            <td><b>{!! $project->name_client_monitor !!}</b></td>
        </tr>
        <tr>
            <td><i>Adresse postale</i></td>
            <td>{!! $project->location_monitor !!}</td>
        </tr>
        <tr>
            <td><i>Email</i></td>
            <td><a href="mailto:{!! $project->email_monitor !!}">{!! $project->email_monitor !!}</a></td>
        </tr>
        <tr>
            <td><i>Téléphone</i></td>
            <td>{!! $project->phone_monitor !!}</td>
        </tr>
    </table>

    <br/><hr>

    <table class="table-bordered">
        <tr>
            <th>Votre fiche identite</th>
        </tr>
        <tr>
            <td>{!! $project->identity_fiche !!}</td>
        </tr>
    </table>

    <br/><hr>

    <table class="table-bordered">
        <tr>
            <th colspan="2">Type de Projet</th>
        </tr>
        <tr>
            <td>Site Internet</td>
            <p style="visibility: hidden">{{ $value = $project->project_type }}</p>
            <td>
                @if($value == 1)
                    <p class="text-center">X</p>
                @endif
            </td>
        </tr>
        <tr>
            <td>3D</td>
            <td>
                @if($value == 2)
                    <p class="text-center">X</p>
                @endif
            </td>
        </tr>
        <tr>
            <td>Animation 2D</td>
            <td>
                @if($value == 3)
                    <p class="text-center">X</p>
                @endif
            </td>
        </tr>
        <tr>
            <td>Installation Multimedia</td>
            <td>
                @if($value == 4)
                    <p class="text-center">X</p>
                @endif
            </td>
        </tr>
        <tr>
            <td>Jeu Vidéo</td>
            <td>
                @if($value == 5)
                    <p class="text-center">X</p>
                @endif
            </td>
        </tr>
        <tr>
            <td>DVD</td>
            <td>
                @if($value == 6)
                    <p class="text-center">X</p>
                @endif
            </td>
        </tr>
        <tr>
            <td>Print</td>
            <td>
                @if($value == 7)
                    <p class="text-center">X</p>
                @endif
            </td>
        </tr>
        <tr>
            <td>CD-ROM</td>
            <td>
                @if($value == 8)
                    <p class="text-center">X</p>
                @endif
            </td>
        </tr>
        <tr>
            <td>Evènement</td>
            <td>
                @if($value == 9)
                    <p class="text-center">X</p>
                @endif
            </td>
        </tr>
        <tr>
            <td>Autre</td>
            <td>
                @if($value == 10)
                    <p class="text-center">X</p>
                @endif
            </td>
        </tr>
    </table>

    <br/><hr>

    <table class="table-bordered">
        <tr>
            <th>Contexte de la demande</th>
        </tr>
        <tr>
            <td>{!! $project->context !!}</td>
        </tr>
    </table>

    <br/><hr>

    <table class="table-bordered">
        <tr>
            <th>Votre demande</th>
        </tr>
        <tr>
            <td><i>Formulez précisemment votre demande en décrivant le projet tel que vous le voyez</i></td>
        </tr>
        <tr>
            <td>{!! $project->application_project !!}</td>
        </tr>
    </table>

    <br/><hr>

    <table class="table-bordered">
        <tr>
            <th>Vos objectifs</th>
        </tr>
        <tr>
            <td><b>Quelles sont vos attentes ?</b></td>
        </tr>
        <tr>
            <td>{!! $project->objective_project !!}</td>
        </tr>
    </table>

    <br/><hr>

    <table class="table-bordered">
        <tr>
            <th>Contraintes paticulières éventuelles et informations complementaires</th>
        </tr>
        <tr>
            <td>{!! $project->constraint !!}</td>
        </tr>
    </table>


</div>