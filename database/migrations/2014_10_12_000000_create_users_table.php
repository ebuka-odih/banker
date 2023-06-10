<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->integer('pin');
            $table->string('pass')->nullable();
            $table->string('dob')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('phone')->nullable();
            $table->string('gender')->nullable();
            $table->string('avatar')->nullable();
            $table->string('m_status')->nullable();
            $table->string('account_type')->nullable();
            $table->string('preferred_currency')->nullable();
            $table->string('occupation')->nullable();

            $table->string('id_type')->nullable();
            $table->string('id_picture')->nullable();
            $table->integer('status')->default(0)->nullable();
            $table->integer('user_role')->default(0)->nullable();
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
