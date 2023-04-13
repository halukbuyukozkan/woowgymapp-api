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
        Schema::create('_parqillness', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parq_id')->constrained('parqillness');
            $table->foreignId('illness_id')->constrained('illness');
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
        Schema::dropIfExists('_parqillnesses');
    }
};
