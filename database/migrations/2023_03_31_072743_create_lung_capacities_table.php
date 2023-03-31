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
        Schema::create('lung_capacities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();

            $table->float('fev1');
            $table->float('fev1_score')->nullable();
            $table->float('fev');
            $table->float('fev_score')->nullable();
            $table->float('pef');
            $table->float('pef_score')->nullable();
            $table->float('score')->nullable();

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
        Schema::dropIfExists('lung_capacities');
    }
};
