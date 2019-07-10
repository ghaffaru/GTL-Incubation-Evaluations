<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->timestamps();
            $table->integer('rating');
            $table->integer('inspire');
            $table->string('best_part');
            $table->string('worst');
            $table->string('interesting');
            $table->string('relevant');
            $table->string('inspiring');
            $table->string('satisfy');
            $table->string('problem');
            $table->integer('food');
            $table->string('food_selection');
            $table->string('changes');
            $table->string('thoughts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surveys');
    }
}
