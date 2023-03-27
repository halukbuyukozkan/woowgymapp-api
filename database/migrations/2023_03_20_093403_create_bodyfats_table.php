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
        Schema::create('bodyfats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->float('rate')->nullable();
            $table->float('chest')->nullable();
            $table->float('abdominal')->nullable();
            $table->float('thigh')->nullable();
            $table->float('biceps')->nullable();
            $table->float('triceps')->nullable();
            $table->float('subscapular')->nullable();
            $table->float('suprailiac')->nullable();

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
        Schema::dropIfExists('bodyfats');
    }
};
