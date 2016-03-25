<?php

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
            $table->boolean('userAs')->default(0);
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('telp');
            $table->string('streetMerchant');
            $table->string('cityMerchant');
            $table->string('provMerchant');
            $table->string('zipCodeMerchant');
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
