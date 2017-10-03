<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Admin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('Entry', function (Blueprint $table) {
            $table->increments('id');
            $table->string('f_name')->nullable();
            $table->string('l_name')->nullable();
            $table->string('email')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->string('location')->nullable();
            $table->string('subloacation')->nullable();
            $table->string('budget')->nullable();
            $table->string('config')->nullable();
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
         Schema::dropIfExists('Entry');
    }
}
