<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('users', function ($table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('name');
            $table->string('password');
            $table->string('avatar', 255)->nullable();
            $table->boolean('is_admin');
            $table->timestamps();
            $table->softDeletes();

            $table->rememberToken();

            $table->index('email');
            $table->index('is_admin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('users');
    }
}
