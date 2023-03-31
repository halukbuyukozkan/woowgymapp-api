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
        Schema::create('mobilities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->integer('overhead_squat');
            $table->integer('overhead_squat_score')->nullable();
            $table->integer('shoulder_mobility');
            $table->integer('shoulder_mobility_score')->nullable();
            $table->integer('hurdle_step');
            $table->integer('hurdle_step_score')->nullable();
            $table->integer('in_line_lunge');
            $table->integer('in_line_lunge_score')->nullable();
            $table->integer('active_straight_leg_raise');
            $table->integer('active_straight_leg_raise_score')->nullable();
            $table->integer('trunk_stability_push_up');
            $table->integer('trunk_stability_push_up_score')->nullable();
            $table->integer('rotary_stability');
            $table->integer('rotary_stability_score')->nullable();
            $table->integer('score')->nullable();
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
        Schema::dropIfExists('mobilities');
    }
};
