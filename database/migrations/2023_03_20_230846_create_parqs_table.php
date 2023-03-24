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
        Schema::create('parqs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('chronic_illness');
            $table->string('tension');
            $table->string('cardiovascular');
            $table->string('chest_pain');
            $table->string('spinal_cord_discomfort');
            $table->string('anatomical_discomfort');
            $table->string('operation');
            $table->string('diabetes');
            $table->string('medicine');
            $table->string('supplements');
            $table->string('smoke');
            $table->string('addiction');
            $table->string('allergy');
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
        Schema::dropIfExists('parqs');
    }
};
