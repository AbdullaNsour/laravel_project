<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            // $table->integer('user_id');//  add F-key for user table
            $table->foreignId('user_id')->references('id')->on('users');
            // $table->string('pincode')->nullable();
            $table->string('status_message')->nullable();
            // $table->string('payment_id')->nullable();
            // $table->foreign('table_id');
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
        Schema::dropIfExists('orders'); 
    }
};
