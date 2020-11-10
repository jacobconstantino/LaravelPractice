<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Userdetails2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userdetails2', function (Blueprint $table) {
            $table->id('userdetails_id2');
            $table->unsignedBigInteger('login_id2')->nullable();
            $table->foreign('login_id2')->references('login_id2')->on('login2');
            $table->string('name');
            $table->string('email');
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userdetails2');
    }
}
