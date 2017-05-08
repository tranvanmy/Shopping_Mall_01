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
            $table->string('name');
            $table->string('full_name');
            $table->string('auth_key');
            $table->string('email');
            $table->string('password');
            $table->integer('phone')->unsigned();
            $table->string('address');
            $table->integer('level')->unsigned();
            $table->integer('status')->unsigned();
            $table->string('striper_id');
            $table->string('card_brand');
            $table->string('card_last_four');
            $table->string('facebook_id');
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
