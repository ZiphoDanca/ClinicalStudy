<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tittle');
            $table->string('name');
            $table->string('surname');
            $table->string('idNumber');
            $table->string('cellphone');
            $table->string('address');
            $table->integer('role')->unsigned();
            $table->integer('gender')->unsigned();
            $table->string('email');
            $table->string('password');
            $table->foreign('role')->references('id')->on('user_roles');
            $table->foreign('gender')->references('id')->on('genders');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
