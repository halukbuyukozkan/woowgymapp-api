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
        Schema::create('illness_parq', function (Blueprint $table) {
            $table->id();
            $table->foreignId('illness_id');
            $table->foreignId('parq_id');
            $table->timestamps();

            $table->foreign('illness_id')->references('id')->on('illness')->onDelete('cascade');
            $table->foreign('parq_id')->references('id')->on('parq')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('illness_parq');
    }
};
