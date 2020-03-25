<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatingIndependentTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //creating independent tables
        Schema::create('officials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('name');
            $table->string('role');
            $table->string('url');
            $table->timestamps();
        });

        Schema::create('downloads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->string('url');
            $table->timestamps();
        });

        Schema::create('universities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 128);
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
        //
        Schema::dropIfExists('officials');
        Schema::dropIfExists('downloads');
        Schema::dropIfExists('universities');
    }
}
