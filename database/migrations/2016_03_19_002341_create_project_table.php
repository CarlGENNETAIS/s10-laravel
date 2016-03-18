<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table){
        $table->increments('id');
        $table->integer('user_id')->unsigned()->index()->nullable();
        $table->string('name_project');
        $table->string('name_client_command');
        $table->string('location_command')->nullable();
        $table->string('email_command');
        $table->string('phone_command');
        $table->string('name_client_monitor');
        $table->string('location_monitor')->nullable();
        $table->string('email_monitor');
        $table->string('phone_monitor');
        $table->longText('identity_fiche');
        $table->integer('project_type');
        $table->longText('context')->nullable();
        $table->longText('application_project');
        $table->longText('objective_project');
        $table->longText('constraint')->nullable();
        $table->timeStamps();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
