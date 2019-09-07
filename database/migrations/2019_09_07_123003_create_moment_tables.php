<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMomentTables extends Migration
{

    public function getConnection()
    {
//        return config('moment.database.connection') ?: config('database.default');
    }

/*
     * @return void
     */
    public function up()
    {
//        Schema::create('', function (Blueprint $table) {
//            $table->bigIncrements('id');
//            $table->timestamps();
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::dropIfExists('moment_tables');
    }
}
