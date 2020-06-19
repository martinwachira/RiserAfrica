<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_details', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id');
            $table->text('projectName');
            $table->bigInteger('typeOfProjectId')->unsigned()->nullable();

            // ! setting the forein key to typeOfProject.
            $table->foreign('typeOfProjectId')->references('id')->on('type_of_projects');

            $table->bigInteger('projectDemographicId')->unsigned()->nullable();            
            // ! setting the foreign key to project_demographics
            $table->foreign('projectDemographicId')->references('id')->on('project_demographics');

            $table->longText('projectDetails')->nullable();
            
            $table->bigInteger('typeOfAssistanceRequiredId')->unsigned();

            // ! setting the foreign key to type_of_assistances
            $table->foreign('typeOfAssistanceRequiredId')->references('id')->on('type_of_assistances');

            $table->bigInteger('projectProposerId')->unsigned();

            // ! setting the foreign key to type_of_assistances
            $table->foreign('projectProposerId')->references('id')->on('project_proposers');

            $table->text('financialBreakDownDocumentLocation')->nullable();
            $table->text('businessCaseDocumentLocation')->nullable();
            $table->boolean('asistanceRequiredToRefineDocuments')->nullable();
            $table->boolean('approved')->nullable();
            $table->bigInteger('approvedById')->unsigned()->nullable();

            // ! setting the foreign key to type_of_assistances
            $table->foreign('approvedById')->references('id')->on('users');

            $table->dateTime('approvedAt')->nullable();            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_details');
    }
}
