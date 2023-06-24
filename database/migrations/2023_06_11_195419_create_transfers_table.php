<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('domestic_transfer')->default(0)->nullable();
            $table->integer('mobile_deposit')->default(0)->nullable();
            $table->integer('wire_transfer')->default(0)->nullable();

            $table->integer('otp')->nullable();
            $table->integer('admin_otp')->nullable();
            $table->integer('status')->default(0)->nullable();

            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('account_id')->nullable();

            $table->string('sender')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('acct_name')->nullable();
            $table->string('acct_number')->nullable();
            $table->string('swift_code')->nullable();
            $table->string('country')->nullable();
            $table->text('description')->nullable();
            $table->double('amount', 11, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transfers');
    }
}
