<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacilitatorsurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facilitatorsurveys', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->integer('user_id');
          $table->timestamps();
          $table->string('objectives');
          $table->string('explain');
          $table->string('describe');
          $table->string('list');
          $table->string('materials');
          $table->string('prepare');
          $table->string('delivery');
          $table->string('modules');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facilitatorsurveys');
    }
}
