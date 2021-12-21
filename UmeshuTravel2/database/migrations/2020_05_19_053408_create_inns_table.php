<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('postal');
            $table->string('address');
            $table->string('tel');
            $table->integer('code');
            $table->string('img');
            $table->integer('plan_id');
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
        Schema::dropIfExists('inns');
    }
}
