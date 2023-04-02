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
        Schema::create('strengths', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            $table->integer('claw_grip_strength_right_hand');
            $table->integer('claw_grip_strength_right_hand_score')->nullable();
            $table->integer('claw_grip_strength_left_hand');
            $table->integer('claw_grip_strength_left_hand_score')->nullable();
            $table->integer('push_up_test');
            $table->integer('push_up_test_score')->nullable();
            $table->integer('wall_squat');
            $table->integer('wall_squat_score')->nullable();
            $table->integer('sit_up_test');
            $table->integer('sit_up_test_score')->nullable();
            $table->integer('plank_test');
            $table->integer('plank_test_score')->nullable();
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
        Schema::dropIfExists('strengths');
    }
};
