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
        Schema::create('task', function (Blueprint $table) {
            $table->id();
            $table->string('assignedby');
            $table->unsignedBigInteger('assignedto');
            $table->foreign('assignedto')->references('id')->on('users')->onDelete('cascade');
            $table->string('skill');
            $table->string('limit');
            $table->date('date');
            $table->string('estimatedtime');
            $table->string('title');
            $table->string('file');
            
            
     


            
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
        Schema::dropIfExists('task');
    }
};
