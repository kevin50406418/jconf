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
            $table->string('username')->unique();
            $table->string('password');
            $table->string('email')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('user_org');
            $table->string('user_title');
            $table->string('user_postaddr');
            $table->string('user_country');
            $table->text('user_research');
            $table->boolean('user_sysop');
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
        Schema::drop('users');
    }
}
