<?php

namespace App\Observers;

use App\Models\Strength;

class StrengthObserver
{
    public function created(Strength $strength)
    {
        $user = $strength->user;
        $age = $user->generals->last()->age;
        $gender = $user->generals->last()->gender;

        if($gender == 'male'){
            if($age >= 0 && $age <= 20){
                if($strength->claw_grip_strength_right_hand >= 0 && $strength->claw_grip_strength_right_hand <= 25){
                    $strength->claw_grip_strength_right_hand_score = 1;
                    $strength->score += 1;
                }elseif($strength->claw_grip_strength_right_hand >= 26 && $strength->claw_grip_strength_right_hand <= 50){
                    $strength->claw_grip_strength_right_hand_score = 2;
                    $strength->score += 2;
                }elseif($strength->claw_grip_strength_right_hand >= 51 && $strength->claw_grip_strength_right_hand <= 100){
                    $strength->claw_grip_strength_right_hand_score = 3;
                    $strength->score += 3;
                }

                if($strength->claw_grip_strength_left_hand >= 0 && $strength->claw_grip_strength_left_hand <= 25){
                    $strength->claw_grip_strength_left_hand_score = 1;
                    $strength->score += 1;
                }elseif($strength->claw_grip_strength_left_hand >= 26 && $strength->claw_grip_strength_left_hand <= 50){
                    $strength->claw_grip_strength_left_hand_score = 2;
                    $strength->score += 2;
                }elseif($strength->claw_grip_strength_left_hand >= 51 && $strength->claw_grip_strength_left_hand <= 100){
                    $strength->claw_grip_strength_left_hand_score = 3;
                    $strength->score += 3;
                }

                // WALL SQUAT START
                if($strength->wall_squat >= 0 && $strength->wall_squat <= 45){
                    $strength->wall_squat_score = 1;
                    $strength->score += 1;
                }elseif($strength->wall_squat >= 46 && $strength->wall_squat <= 70){
                    $strength->wall_squat_score = 2;
                    $strength->score += 2;
                }elseif($strength->wall_squat >= 71 && $strength->wall_squat <= 120){
                    $strength->wall_squat_score = 3;
                    $strength->score += 3;
                }elseif($strength->wall_squat >= 121 && $strength->wall_squat <= 180){
                    $strength->wall_squat_score = 4;
                    $strength->score += 4;
                }elseif($strength->wall_squat >= 181){
                    $strength->wall_squat_score = 6;
                    $strength->score += 6;
                }
                // WALL SQUAT END

                // PLANK START
                if($strength->plank_test >= 0 && $strength->plank_test <= 30){
                    $strength->plank_test_score = 1;
                    $strength->score += 1;
                }elseif($strength->plank_test >= 31 && $strength->plank_test <= 45){
                    $strength->plank_test_score = 2;
                    $strength->score += 2;
                }elseif($strength->plank_test >= 46 && $strength->plank_test <= 90){
                    $strength->plank_test_score = 3;
                    $strength->score += 3;
                }elseif($strength->plank_test >= 91 && $strength->plank_test <= 120){
                    $strength->plank_test_score = 4;
                    $strength->score += 4;
                }elseif($strength->plank_test >= 121){
                    $strength->plank_test_score = 5;
                    $strength->score += 5;
                }
                // PLANK END

            }elseif($age >= 21 && $age <= 30){
                if($strength->claw_grip_strength_right_hand >= 0 && $strength->claw_grip_strength_right_hand <= 23){
                    $strength->claw_grip_strength_right_hand_score = 1;
                    $strength->score += 1;
                }elseif($strength->claw_grip_strength_right_hand >= 24 && $strength->claw_grip_strength_right_hand <= 48){
                    $strength->claw_grip_strength_right_hand_score = 2;
                    $strength->score += 2;
                }elseif($strength->claw_grip_strength_right_hand >= 49 && $strength->claw_grip_strength_right_hand <= 100){
                    $strength->claw_grip_strength_right_hand_score = 3;
                    $strength->score += 3;
                }

                if($strength->claw_grip_strength_left_hand >= 0 && $strength->claw_grip_strength_left_hand <= 23){
                    $strength->claw_grip_strength_left_hand_score = 1;
                    $strength->score += 1;
                }elseif($strength->claw_grip_strength_left_hand >= 24 && $strength->claw_grip_strength_left_hand <= 48){
                    $strength->claw_grip_strength_left_hand_score = 2;
                    $strength->score += 2;
                }elseif($strength->claw_grip_strength_left_hand >= 49 && $strength->claw_grip_strength_left_hand <= 100){
                    $strength->claw_grip_strength_left_hand_score = 3;
                    $strength->score += 3;
                }

                // WALL SQUAT START
                if($strength->wall_squat >= 0 && $strength->wall_squat <= 40){
                    $strength->wall_squat_score = 1;
                    $strength->score += 1;
                }elseif($strength->wall_squat >= 41 && $strength->wall_squat <= 65){
                    $strength->wall_squat_score = 2;
                    $strength->score += 2;
                }elseif($strength->wall_squat >= 66 && $strength->wall_squat <= 110){
                    $strength->wall_squat_score = 3;
                    $strength->score += 3;
                }elseif($strength->wall_squat >= 111 && $strength->wall_squat <= 170){
                    $strength->wall_squat_score = 4;
                    $strength->score += 4;
                }elseif($strength->wall_squat >= 171){
                    $strength->wall_squat_score = 6;
                    $strength->score += 6;
                }
                // WALL SQUAT END

                // PLANK START
                if($strength->plank_test >= 0 && $strength->plank_test <= 25){
                    $strength->plank_test_score = 1;
                    $strength->score += 1;
                }elseif($strength->plank_test >= 26 && $strength->plank_test <= 40){
                    $strength->plank_test_score = 2;
                    $strength->score += 2;
                }elseif($strength->plank_test >= 41 && $strength->plank_test <= 80){
                    $strength->plank_test_score = 3;
                    $strength->score += 3;
                }elseif($strength->plank_test >= 81 && $strength->plank_test <= 110){
                    $strength->plank_test_score = 4;
                    $strength->score += 4;
                }elseif($strength->plank_test >= 111){
                    $strength->plank_test_score = 5;
                    $strength->score += 5;
                }
                // PLANK END

            }elseif($age >= 31 && $age <= 40){
                if($strength->claw_grip_strength_right_hand >= 0 && $strength->claw_grip_strength_right_hand <= 21){
                    $strength->claw_grip_strength_right_hand_score = 1;
                    $strength->score += 1;
                }elseif($strength->claw_grip_strength_right_hand >= 22 && $strength->claw_grip_strength_right_hand <= 46){
                    $strength->claw_grip_strength_right_hand_score = 2;
                    $strength->score += 2;
                }elseif($strength->claw_grip_strength_right_hand >= 47 && $strength->claw_grip_strength_right_hand <= 100){
                    $strength->claw_grip_strength_right_hand_score = 3;
                    $strength->score += 3;
                }

                if($strength->claw_grip_strength_left_hand >= 0 && $strength->claw_grip_strength_left_hand <= 21){
                    $strength->claw_grip_strength_left_hand_score = 1;
                    $strength->score += 1;
                }elseif($strength->claw_grip_strength_left_hand >= 22 && $strength->claw_grip_strength_left_hand <= 46){
                    $strength->claw_grip_strength_left_hand_score = 2;
                    $strength->score += 2;
                }elseif($strength->claw_grip_strength_left_hand >= 47 && $strength->claw_grip_strength_left_hand <= 100){
                    $strength->claw_grip_strength_left_hand_score = 3;
                    $strength->score += 3;
                }

                // WALL SQUAT START
                if($strength->wall_squat >= 0 && $strength->wall_squat <= 35){
                    $strength->wall_squat_score = 1;
                    $strength->score += 1;
                }elseif($strength->wall_squat >= 36 && $strength->wall_squat <= 60){
                    $strength->wall_squat_score = 2;
                    $strength->score += 2;
                }elseif($strength->wall_squat >= 61 && $strength->wall_squat <= 100){
                    $strength->wall_squat_score = 3;
                    $strength->score += 3;
                }elseif($strength->wall_squat >= 101 && $strength->wall_squat <= 160){
                    $strength->wall_squat_score = 4;
                    $strength->score += 4;
                }elseif($strength->wall_squat >= 161){
                    $strength->wall_squat_score = 6;
                    $strength->score += 6;
                }
                // WALL SQUAT END

                // PLANK START
                if($strength->plank_test >= 0 && $strength->plank_test <= 20){
                    $strength->plank_test_score = 1;
                    $strength->score += 1;
                }elseif($strength->plank_test >= 21 && $strength->plank_test <= 35){
                    $strength->plank_test_score = 2;
                    $strength->score += 2;
                }elseif($strength->plank_test >= 36 && $strength->plank_test <= 70){
                    $strength->plank_test_score = 3;
                    $strength->score += 3;
                }elseif($strength->plank_test >= 71 && $strength->plank_test <= 100){
                    $strength->plank_test_score = 4;
                    $strength->score += 4;
                }elseif($strength->plank_test >= 101){
                    $strength->plank_test_score = 5;
                    $strength->score += 5;
                }
                // PLANK END

            }elseif($age >= 41 && $age <= 50){
                if($strength->claw_grip_strength_right_hand >= 0 && $strength->claw_grip_strength_right_hand <= 19){
                    $strength->claw_grip_strength_right_hand_score = 1;
                    $strength->score += 1;
                }elseif($strength->claw_grip_strength_right_hand >= 20 && $strength->claw_grip_strength_right_hand <= 41){
                    $strength->claw_grip_strength_right_hand_score = 2;
                    $strength->score += 2;
                }elseif($strength->claw_grip_strength_right_hand >= 42 && $strength->claw_grip_strength_right_hand <= 100){
                    $strength->claw_grip_strength_right_hand_score = 3;
                    $strength->score += 3;
                }

                if($strength->claw_grip_strength_left_hand >= 0 && $strength->claw_grip_strength_left_hand <= 19){
                    $strength->claw_grip_strength_left_hand_score = 1;
                    $strength->score += 1;
                }elseif($strength->claw_grip_strength_left_hand >= 20 && $strength->claw_grip_strength_left_hand <= 41){
                    $strength->claw_grip_strength_left_hand_score = 2;
                    $strength->score += 2;
                }elseif($strength->claw_grip_strength_left_hand >= 42 && $strength->claw_grip_strength_left_hand <= 100){
                    $strength->claw_grip_strength_left_hand_score = 3;
                    $strength->score += 3;
                }

                // WALL SQUAT START
                if($strength->wall_squat >= 0 && $strength->wall_squat <= 30){
                    $strength->wall_squat_score = 1;
                    $strength->score += 1;
                }elseif($strength->wall_squat >= 31 && $strength->wall_squat <= 55){
                    $strength->wall_squat_score = 2;
                    $strength->score += 2;
                }elseif($strength->wall_squat >= 56 && $strength->wall_squat <= 90){
                    $strength->wall_squat_score = 3;
                    $strength->score += 3;
                }elseif($strength->wall_squat >= 91 && $strength->wall_squat <= 150){
                    $strength->wall_squat_score = 4;
                    $strength->score += 4;
                }elseif($strength->wall_squat >= 151){
                    $strength->wall_squat_score = 6;
                    $strength->score += 6;
                }
                // WALL SQUAT END

                // PLANK START
                if($strength->plank_test >= 0 && $strength->plank_test <= 15){
                    $strength->plank_test_score = 1;
                    $strength->score += 1;
                }elseif($strength->plank_test >= 16 && $strength->plank_test <= 30){
                    $strength->plank_test_score = 2;
                    $strength->score += 2;
                }elseif($strength->plank_test >= 31 && $strength->plank_test <= 60){
                    $strength->plank_test_score = 3;
                    $strength->score += 3;
                }elseif($strength->plank_test >= 61 && $strength->plank_test <= 90){
                    $strength->plank_test_score = 4;
                    $strength->score += 4;
                }elseif($strength->plank_test >= 91){
                    $strength->plank_test_score = 5;
                    $strength->score += 5;
                }
                // PLANK END

            }elseif($age >= 51 && $age < 60){
                if($strength->claw_grip_strength_right_hand >= 0 && $strength->claw_grip_strength_right_hand <= 17){
                    $strength->claw_grip_strength_right_hand_score = 1;
                    $strength->score += 1;
                }elseif($strength->claw_grip_strength_right_hand >= 18 && $strength->claw_grip_strength_right_hand <= 34){
                    $strength->claw_grip_strength_right_hand_score = 2;
                    $strength->score += 2;
                }elseif($strength->claw_grip_strength_right_hand >= 35 && $strength->claw_grip_strength_right_hand <= 100){
                    $strength->claw_grip_strength_right_hand_score = 3;
                    $strength->score += 3;
                }

                if($strength->claw_grip_strength_left_hand >= 0 && $strength->claw_grip_strength_left_hand <= 17){
                    $strength->claw_grip_strength_left_hand_score = 1;
                    $strength->score += 1;
                }elseif($strength->claw_grip_strength_left_hand >= 18 && $strength->claw_grip_strength_left_hand <= 34){
                    $strength->claw_grip_strength_left_hand_score = 2;
                    $strength->score += 2;
                }elseif($strength->claw_grip_strength_left_hand >= 35 && $strength->claw_grip_strength_left_hand <= 100){
                    $strength->claw_grip_strength_left_hand_score = 3;
                    $strength->score += 3;
                }

                // WALL SQUAT START
                if($strength->wall_squat >= 0 && $strength->wall_squat <= 25){
                    $strength->wall_squat_score = 1;
                    $strength->score += 1;
                }elseif($strength->wall_squat >= 26 && $strength->wall_squat <= 50){
                    $strength->wall_squat_score = 2;
                    $strength->score += 2;
                }elseif($strength->wall_squat >= 51 && $strength->wall_squat <= 80){
                    $strength->wall_squat_score = 3;
                    $strength->score += 3;
                }elseif($strength->wall_squat >= 81 && $strength->wall_squat <= 140){
                    $strength->wall_squat_score = 4;
                    $strength->score += 4;
                }elseif($strength->wall_squat >= 141){
                    $strength->wall_squat_score = 6;
                    $strength->score += 6;
                }
                // WALL SQUAT END

                // PLANK START
                if($strength->plank_test >= 0 && $strength->plank_test <= 10){
                    $strength->plank_test_score = 1;
                    $strength->score += 1;
                }elseif($strength->plank_test >= 11 && $strength->plank_test <= 25){
                    $strength->plank_test_score = 2;
                    $strength->score += 2;
                }elseif($strength->plank_test >= 26 && $strength->plank_test <= 55){
                    $strength->plank_test_score = 3;
                    $strength->score += 3;
                }elseif($strength->plank_test >= 56 && $strength->plank_test <= 80){
                    $strength->plank_test_score = 4;
                    $strength->score += 4;
                }elseif($strength->plank_test >= 81){
                    $strength->plank_test_score = 5;
                    $strength->score += 5;
                }
                // PLANK END

            }elseif($age >= 60){
                if($strength->claw_grip_strength_right_hand >= 0 && $strength->claw_grip_strength_right_hand <= 13){
                    $strength->claw_grip_strength_right_hand_score = 1;
                    $strength->score += 1;
                }elseif($strength->claw_grip_strength_right_hand >= 14 && $strength->claw_grip_strength_right_hand <= 30){
                    $strength->claw_grip_strength_right_hand_score = 2;
                    $strength->score += 2;
                }elseif($strength->claw_grip_strength_right_hand >= 31 && $strength->claw_grip_strength_right_hand <= 100){
                    $strength->claw_grip_strength_right_hand_score = 3;
                    $strength->score += 3;
                }

                if($strength->claw_grip_strength_left_hand >= 0 && $strength->claw_grip_strength_left_hand <= 13){
                    $strength->claw_grip_strength_left_hand_score = 1;
                    $strength->score += 1;  
                }elseif($strength->claw_grip_strength_left_hand >= 14 && $strength->claw_grip_strength_left_hand <= 30){
                    $strength->claw_grip_strength_left_hand_score = 2;
                    $strength->score += 2;
                }elseif($strength->claw_grip_strength_left_hand >= 31 && $strength->claw_grip_strength_left_hand <= 100){
                    $strength->claw_grip_strength_left_hand_score = 3;
                    $strength->score += 3;
                }

                // WALL SQUAT START
                if($strength->wall_squat >= 0 && $strength->wall_squat <= 20){
                    $strength->wall_squat_score = 1;
                    $strength->score += 1;
                }elseif($strength->wall_squat >= 21 && $strength->wall_squat <= 45){
                    $strength->wall_squat_score = 2;
                    $strength->score += 2;
                }elseif($strength->wall_squat >= 46 && $strength->wall_squat <= 70){
                    $strength->wall_squat_score = 3;
                    $strength->score += 3;
                }elseif($strength->wall_squat >= 71 && $strength->wall_squat <= 130){
                    $strength->wall_squat_score = 4;
                    $strength->score += 4;
                }elseif($strength->wall_squat >= 131){
                    $strength->wall_squat_score = 6;
                    $strength->score += 6;
                }
                // WALL SQUAT END

                // PLANK START
                if($strength->plank_test >= 0 && $strength->plank_test <= 10){
                    $strength->plank_test_score = 1;
                    $strength->score += 1;
                }elseif($strength->plank_test >= 11 && $strength->plank_test <= 25){
                    $strength->plank_test_score = 2;
                    $strength->score += 2;
                }elseif($strength->plank_test >= 26 && $strength->plank_test <= 50){
                    $strength->plank_test_score = 3;
                    $strength->score += 3;
                }elseif($strength->plank_test >= 51 && $strength->plank_test <= 80){
                    $strength->plank_test_score = 4;
                    $strength->score += 4;
                }elseif($strength->plank_test >= 81){
                    $strength->plank_test_score = 5;
                    $strength->score += 5;
                }
                // PLANK END

            }
        }elseif($gender = 'female'){
            if($age >= 0 && $age <= 20){
                if($strength->claw_grip_strength_right_hand >= 0 && $strength->claw_grip_strength_right_hand <= 20){
                    $strength->claw_grip_strength_right_hand_score = 1;
                    $strength->score += 1;
                }elseif($strength->claw_grip_strength_right_hand >= 21 && $strength->claw_grip_strength_right_hand <= 39){
                    $strength->claw_grip_strength_right_hand_score = 2;
                    $strength->score += 2;
                }elseif($strength->claw_grip_strength_right_hand >= 40 && $strength->claw_grip_strength_right_hand <= 100){
                    $strength->claw_grip_strength_right_hand_score = 3;
                    $strength->score += 3;
                }

                if($strength->claw_grip_strength_left_hand >= 0 && $strength->claw_grip_strength_left_hand <= 20){
                    $strength->claw_grip_strength_left_hand_score = 1;
                    $strength->score += 1;
                }elseif($strength->claw_grip_strength_left_hand >= 21 && $strength->claw_grip_strength_left_hand <= 39){
                    $strength->claw_grip_strength_left_hand_score = 2;
                    $strength->score += 2;
                }elseif($strength->claw_grip_strength_left_hand >= 40 && $strength->claw_grip_strength_left_hand <= 100){
                    $strength->claw_grip_strength_left_hand_score = 3;
                    $strength->score += 3;
                }

                // WALL SQUAT START
                if($strength->wall_squat >= 0 && $strength->wall_squat <= 30){
                    $strength->wall_squat_score = 1;
                    $strength->score += 1;
                }elseif($strength->wall_squat >= 31 && $strength->wall_squat <= 45){
                    $strength->wall_squat_score = 2;
                    $strength->score += 2;
                }elseif($strength->wall_squat >= 46 && $strength->wall_squat <= 90){
                    $strength->wall_squat_score = 3;
                    $strength->score += 3;
                }elseif($strength->wall_squat >= 91 && $strength->wall_squat <= 120){
                    $strength->wall_squat_score = 4;
                    $strength->score += 4;
                }elseif($strength->wall_squat >= 121){
                    $strength->wall_squat_score = 6;
                    $strength->score += 6;
                }
                // WALL SQUAT END

                // PLANK START
                if($strength->plank_test >= 0 && $strength->plank_test <= 20){
                    $strength->plank_test_score = 1;
                    $strength->score += 1;
                }elseif($strength->plank_test >= 21 && $strength->plank_test <= 35){
                    $strength->plank_test_score = 2;
                    $strength->score += 2;
                }elseif($strength->plank_test >= 36 && $strength->plank_test <= 50){
                    $strength->plank_test_score = 3;
                    $strength->score += 3;
                }elseif($strength->plank_test >= 51 && $strength->plank_test <= 90){
                    $strength->plank_test_score = 4;
                    $strength->score += 4;
                }elseif($strength->plank_test >= 91){
                    $strength->plank_test_score = 5;
                    $strength->score += 5;
                }
                // PLANK END

            }elseif($age >= 21 && $age <= 30){
                if($strength->claw_grip_strength_right_hand >= 0 && $strength->claw_grip_strength_right_hand <= 19){
                    $strength->claw_grip_strength_right_hand_score = 1;
                    $strength->score += 1;
                }elseif($strength->claw_grip_strength_right_hand >= 20 && $strength->claw_grip_strength_right_hand <= 37){
                    $strength->claw_grip_strength_right_hand_score = 2;
                    $strength->score += 2;
                }elseif($strength->claw_grip_strength_right_hand >= 38 && $strength->claw_grip_strength_right_hand <= 100){
                    $strength->claw_grip_strength_right_hand_score = 3;
                    $strength->score += 3;
                }

                if($strength->claw_grip_strength_left_hand >= 0 && $strength->claw_grip_strength_left_hand <= 19){
                    $strength->claw_grip_strength_left_hand_score = 1;
                    $strength->score += 1;
                }elseif($strength->claw_grip_strength_left_hand >= 20 && $strength->claw_grip_strength_left_hand <= 37){
                    $strength->claw_grip_strength_left_hand_score = 2;
                    $strength->score += 2;
                }elseif($strength->claw_grip_strength_left_hand >= 38 && $strength->claw_grip_strength_left_hand <= 100){
                    $strength->claw_grip_strength_left_hand_score = 3;
                    $strength->score += 3;
                }

                // WALL SQUAT START
                if($strength->wall_squat >= 0 && $strength->wall_squat <= 25){
                    $strength->wall_squat_score = 1;
                    $strength->score += 1;
                }elseif($strength->wall_squat >= 26 && $strength->wall_squat <= 40){
                    $strength->wall_squat_score = 2;
                    $strength->score += 2;
                }elseif($strength->wall_squat >= 41 && $strength->wall_squat <= 80){
                    $strength->wall_squat_score = 3;
                    $strength->score += 3;
                }elseif($strength->wall_squat >= 81 && $strength->wall_squat <= 110){
                    $strength->wall_squat_score = 4;
                    $strength->score += 4;
                }elseif($strength->wall_squat >= 111){
                    $strength->wall_squat_score = 6;
                    $strength->score += 6;
                }
                // WALL SQUAT END

                // PLANK START
                if($strength->plank_test >= 0 && $strength->plank_test <= 18){
                    $strength->plank_test_score = 1;
                    $strength->score += 1;
                }elseif($strength->plank_test >= 19 && $strength->plank_test <= 33){
                    $strength->plank_test_score = 2;
                    $strength->score += 2;  
                }elseif($strength->plank_test >= 34 && $strength->plank_test <= 47){
                    $strength->plank_test_score = 3;
                    $strength->score += 3;
                }elseif($strength->plank_test >= 48 && $strength->plank_test <= 87){
                    $strength->plank_test_score = 4;
                    $strength->score += 4;
                }elseif($strength->plank_test >= 88){
                    $strength->plank_test_score = 5;
                    $strength->score += 5;
                }
                // PLANK END

            }elseif($age >= 31 && $age <= 40){
                if($strength->claw_grip_strength_right_hand >= 0 && $strength->claw_grip_strength_right_hand <= 18){
                    $strength->claw_grip_strength_right_hand_score = 1;
                    $strength->score += 1;
                }elseif($strength->claw_grip_strength_right_hand >= 19 && $strength->claw_grip_strength_right_hand <= 35){
                    $strength->claw_grip_strength_right_hand_score = 2;
                    $strength->score += 2;
                }elseif($strength->claw_grip_strength_right_hand >= 36 && $strength->claw_grip_strength_right_hand <= 100){
                    $strength->claw_grip_strength_right_hand_score = 3;
                    $strength->score += 3;
                }

                if($strength->claw_grip_strength_left_hand >= 0 && $strength->claw_grip_strength_left_hand <= 18){
                    $strength->claw_grip_strength_left_hand_score = 1;
                    $strength->score += 1;
                }elseif($strength->claw_grip_strength_left_hand >= 19 && $strength->claw_grip_strength_left_hand <= 35){
                    $strength->claw_grip_strength_left_hand_score = 2;
                    $strength->score += 2;
                }elseif($strength->claw_grip_strength_left_hand >= 36 && $strength->claw_grip_strength_left_hand <= 100){
                    $strength->claw_grip_strength_left_hand_score = 3;
                    $strength->score += 3;
                }

                // WALL SQUAT START
                if($strength->wall_squat >= 0 && $strength->wall_squat <= 20){
                    $strength->wall_squat_score = 1;
                    $strength->score += 1;
                }elseif($strength->wall_squat >= 21 && $strength->wall_squat <= 35){
                    $strength->wall_squat_score = 2;
                    $strength->score += 2;
                }elseif($strength->wall_squat >= 36 && $strength->wall_squat <= 70){
                    $strength->wall_squat_score = 3;
                    $strength->score += 3;
                }elseif($strength->wall_squat >= 71 && $strength->wall_squat <= 100){
                    $strength->wall_squat_score = 4;
                    $strength->score += 4;
                }elseif($strength->wall_squat >= 101){
                    $strength->wall_squat_score = 6;
                    $strength->score += 6;
                }
                // WALL SQUAT END

                // PLANK START
                if($strength->plank_test >= 0 && $strength->plank_test <= 15){
                    $strength->plank_test_score = 1;
                    $strength->score += 1;
                }elseif($strength->plank_test >= 16 && $strength->plank_test <= 30){
                    $strength->plank_test_score = 2;
                    $strength->score += 2;
                }elseif($strength->plank_test >= 31 && $strength->plank_test <= 44){
                    $strength->plank_test_score = 3;
                    $strength->score += 3;
                }elseif($strength->plank_test >= 45 && $strength->plank_test <= 83){
                    $strength->plank_test_score = 4;
                    $strength->score += 4;
                }elseif($strength->plank_test >= 84){
                    $strength->plank_test_score = 5;
                    $strength->score += 5;
                }
                // PLANK END

            }elseif($age >= 41 && $age <= 50){
                if($strength->claw_grip_strength_right_hand >= 0 && $strength->claw_grip_strength_right_hand <= 14){
                    $strength->claw_grip_strength_right_hand_score = 1;
                    $strength->score += 1;
                }elseif($strength->claw_grip_strength_right_hand >= 15 && $strength->claw_grip_strength_right_hand <= 30){
                    $strength->claw_grip_strength_right_hand_score = 2;
                    $strength->score += 2;
                }elseif($strength->claw_grip_strength_right_hand >= 31 && $strength->claw_grip_strength_right_hand <= 100){
                    $strength->claw_grip_strength_right_hand_score = 3;
                    $strength->score += 3;
                }

                if($strength->claw_grip_strength_left_hand >= 0 && $strength->claw_grip_strength_left_hand <= 14){
                    $strength->claw_grip_strength_left_hand_score = 1;
                    $strength->score += 1;
                }elseif($strength->claw_grip_strength_left_hand >= 15 && $strength->claw_grip_strength_left_hand <= 30){
                    $strength->claw_grip_strength_left_hand_score = 2;
                    $strength->score += 2;
                }elseif($strength->claw_grip_strength_left_hand >= 31 && $strength->claw_grip_strength_left_hand <= 100){
                    $strength->claw_grip_strength_left_hand_score = 3;
                    $strength->score += 3;
                }

                // WALL SQUAT START
                if($strength->wall_squat >= 0 && $strength->wall_squat <= 15){
                    $strength->wall_squat_score = 1;
                    $strength->score += 1;
                }elseif($strength->wall_squat >= 16 && $strength->wall_squat <= 30){
                    $strength->wall_squat_score = 2;
                    $strength->score += 2;
                }elseif($strength->wall_squat >= 31 && $strength->wall_squat <= 60){
                    $strength->wall_squat_score = 3;
                    $strength->score += 3;
                }elseif($strength->wall_squat >= 61 && $strength->wall_squat <= 90){
                    $strength->wall_squat_score = 4;
                    $strength->score += 4;
                }elseif($strength->wall_squat >= 91){
                    $strength->wall_squat_score = 6;
                    $strength->score += 6;
                }
                // WALL SQUAT END

                // PLANK START
                if($strength->plank_test >= 0 && $strength->plank_test <= 12){
                    $strength->plank_test_score = 1;
                    $strength->score += 1;
                }elseif($strength->plank_test >= 13 && $strength->plank_test <= 27){
                    $strength->plank_test_score = 2;
                    $strength->score += 2;
                }elseif($strength->plank_test >= 28 && $strength->plank_test <= 41){
                    $strength->plank_test_score = 3;
                    $strength->score += 3;
                }elseif($strength->plank_test >= 42 && $strength->plank_test <= 78){
                    $strength->plank_test_score = 4;
                    $strength->score += 4;
                }elseif($strength->plank_test >= 79){
                    $strength->plank_test_score = 5;
                    $strength->score += 5;
                }
                // PLANK END

            }elseif($age >= 51 && $age <= 60){
                if($strength->claw_grip_strength_right_hand >= 0 && $strength->claw_grip_strength_right_hand <= 11){
                    $strength->claw_grip_strength_right_hand_score = 1;
                    $strength->score += 1;
                }elseif($strength->claw_grip_strength_right_hand >= 12 && $strength->claw_grip_strength_right_hand <= 27){
                    $strength->claw_grip_strength_right_hand_score = 2;
                    $strength->score += 2;
                }elseif($strength->claw_grip_strength_right_hand >= 28 && $strength->claw_grip_strength_right_hand <= 100){
                    $strength->claw_grip_strength_right_hand_score = 3;
                    $strength->score += 3;
                }

                if($strength->claw_grip_strength_left_hand >= 0 && $strength->claw_grip_strength_left_hand <= 11){
                    $strength->claw_grip_strength_left_hand_score = 1;
                    $strength->score += 1;
                }elseif($strength->claw_grip_strength_left_hand >= 12 && $strength->claw_grip_strength_left_hand <= 27){
                    $strength->claw_grip_strength_left_hand_score = 2;
                    $strength->score += 2;
                }elseif($strength->claw_grip_strength_left_hand >= 28 && $strength->claw_grip_strength_left_hand <= 100){
                    $strength->claw_grip_strength_left_hand_score = 3;
                    $strength->score += 3;
                }

                // WALL SQUAT START
                if($strength->wall_squat >= 0 && $strength->wall_squat <= 10){
                    $strength->wall_squat_score = 1;
                    $strength->score += 1;
                }elseif($strength->wall_squat >= 11 && $strength->wall_squat <= 25){
                    $strength->wall_squat_score = 2;
                    $strength->score += 2;
                }elseif($strength->wall_squat >= 26 && $strength->wall_squat <= 55){
                    $strength->wall_squat_score = 3;
                    $strength->score += 3;
                }elseif($strength->wall_squat >= 56 && $strength->wall_squat <= 85){
                    $strength->wall_squat_score = 4;
                    $strength->score += 4;
                }elseif($strength->wall_squat >= 86){
                    $strength->wall_squat_score = 6;
                    $strength->score += 6;
                }
                // WALL SQUAT END

                // PLANK START
                if($strength->plank_test >= 0 && $strength->plank_test <= 8){
                    $strength->plank_test_score = 1;
                    $strength->score += 1;
                }elseif($strength->plank_test >= 9 && $strength->plank_test <= 23){
                    $strength->plank_test_score = 2;
                    $strength->score += 2;
                }elseif($strength->plank_test >= 24 && $strength->plank_test <= 37){
                    $strength->plank_test_score = 3;
                    $strength->score += 3;
                }elseif($strength->plank_test >= 38 && $strength->plank_test <= 70){
                    $strength->plank_test_score = 4;
                    $strength->score += 4;
                }elseif($strength->plank_test >= 71){
                    $strength->plank_test_score = 5;
                    $strength->score += 5;
                }
                // PLANK END

            }elseif($age >= 61){
                if($strength->claw_grip_strength_right_hand >= 0 && $strength->claw_grip_strength_right_hand <= 10){
                    $strength->claw_grip_strength_right_hand_score = 1;
                    $strength->score += 1;
                }elseif($strength->claw_grip_strength_right_hand >= 11 && $strength->claw_grip_strength_right_hand <= 26){
                    $strength->claw_grip_strength_right_hand_score = 2;
                    $strength->score += 2;
                }elseif($strength->claw_grip_strength_right_hand >= 27 && $strength->claw_grip_strength_right_hand <= 100){
                    $strength->claw_grip_strength_right_hand_score = 3;
                    $strength->score += 3;
                }

                if($strength->claw_grip_strength_left_hand >= 0 && $strength->claw_grip_strength_left_hand <= 10){
                    $strength->claw_grip_strength_left_hand_score = 1;
                    $strength->score += 1;
                }elseif($strength->claw_grip_strength_left_hand >= 11 && $strength->claw_grip_strength_left_hand <= 26){
                    $strength->claw_grip_strength_left_hand_score = 2;
                    $strength->score += 2;
                }elseif($strength->claw_grip_strength_left_hand >= 27 && $strength->claw_grip_strength_left_hand <= 100){
                    $strength->claw_grip_strength_left_hand_score = 3;
                    $strength->score += 3;
                }

                // WALL SQUAT START
                if($strength->wall_squat >= 0 && $strength->wall_squat <= 10){
                    $strength->wall_squat_score = 1;
                    $strength->score += 1;
                }elseif($strength->wall_squat >= 11 && $strength->wall_squat <= 25){
                    $strength->wall_squat_score = 2;
                    $strength->score += 2;
                }elseif($strength->wall_squat >= 26 && $strength->wall_squat <= 50){
                    $strength->wall_squat_score = 3;
                    $strength->score += 3;
                }elseif($strength->wall_squat >= 51 && $strength->wall_squat <= 80){
                    $strength->wall_squat_score = 4;
                    $strength->score += 4;
                }elseif($strength->wall_squat >= 81){
                    $strength->wall_squat_score = 6;
                    $strength->score += 6;
                }
                // WALL SQUAT END

                // PLANK START
                if($strength->plank_test >= 0 && $strength->plank_test <= 8){
                    $strength->plank_test_score = 1;
                    $strength->score += 1;
                }elseif($strength->plank_test >= 9 && $strength->plank_test <= 23){
                    $strength->plank_test_score = 2;
                    $strength->score += 2;
                }elseif($strength->plank_test >= 24 && $strength->plank_test <= 32){
                    $strength->plank_test_score = 3;
                    $strength->score += 3;
                }elseif($strength->plank_test >= 33 && $strength->plank_test <= 60){
                    $strength->plank_test_score = 4;
                    $strength->score += 4;
                }elseif($strength->plank_test >= 61){
                    $strength->plank_test_score = 5;
                    $strength->score += 5;
                }
                // PLANK END

            }

        }



        // ***************** PUSH UP - SIT UP TEST START *****************


        if($gender == 'male'){
            if($age >= 0 && $age <= 29){

                //PUSH UP TEST START
                if($strength->push_up_test >= 0 && $strength->push_up_test <= 18){
                    $strength->push_up_test_score = 1;
                    $strength->score += 1;
                }elseif($strength->push_up_test >= 19 && $strength->push_up_test <= 28){
                    $strength->push_up_test_score = 2;
                    $strength->score += 2;
                }elseif($strength->push_up_test >= 29 && $strength->push_up_test <= 35){
                    $strength->push_up_test_score = 3;
                    $strength->score += 3;
                }elseif($strength->push_up_test >= 36 && $strength->push_up_test <= 50){
                    $strength->push_up_test_score = 5;
                    $strength->score += 5;
                }elseif($strength->push_up_test >= 51){
                    $strength->push_up_test_score = 7;
                    $strength->score += 7;
                }
                //PUSH UP TEST END

                //SIT UP TEST START
                if($strength->sit_up_test >= 0 && $strength->sit_up_test <= 25){
                    $strength->sit_up_test_score = 1;
                    $strength->score += 1;
                }elseif($strength->sit_up_test >= 26 && $strength->sit_up_test <= 34){
                    $strength->sit_up_test_score = 2;
                    $strength->score += 2;
                }elseif($strength->sit_up_test >= 35 && $strength->sit_up_test <= 38){
                    $strength->sit_up_test_score = 3;
                    $strength->score += 3;
                }elseif($strength->sit_up_test >= 39 && $strength->sit_up_test <= 48){
                    $strength->sit_up_test_score = 4;
                    $strength->score += 4;
                }elseif($strength->sit_up_test >= 49){
                    $strength->sit_up_test_score = 6;
                    $strength->score += 6;
                }
                //SIT UP TEST END

            }elseif($age >= 30 && $age <= 39){

                //PUSH UP TEST START
                if($strength->push_up_test >= 0 && $strength->push_up_test <= 15){
                    $strength->push_up_test_score = 1;
                    $strength->score += 1;
                }elseif($strength->push_up_test >= 16 && $strength->push_up_test <= 25){
                    $strength->push_up_test_score = 2;
                    $strength->score += 2;
                }elseif($strength->push_up_test >= 26 && $strength->push_up_test <= 32){
                    $strength->push_up_test_score = 3;
                    $strength->score += 3;
                }elseif($strength->push_up_test >= 33 && $strength->push_up_test <= 47){
                    $strength->push_up_test_score = 5;
                    $strength->score += 5;
                }elseif($strength->push_up_test >= 48){
                    $strength->push_up_test_score = 7;
                    $strength->score += 7;
                }
                //PUSH UP TEST END

                //SIT UP TEST START
                if($strength->sit_up_test >= 0 && $strength->sit_up_test <= 22){
                    $strength->sit_up_test_score = 1;
                    $strength->score += 1;
                }elseif($strength->sit_up_test >= 23 && $strength->sit_up_test <= 30){
                    $strength->sit_up_test_score = 2;
                    $strength->score += 2;
                }elseif($strength->sit_up_test >= 31 && $strength->sit_up_test <= 34){
                    $strength->sit_up_test_score = 3;
                    $strength->score += 3;
                }elseif($strength->sit_up_test >= 35 && $strength->sit_up_test <= 44){
                    $strength->sit_up_test_score = 4;
                    $strength->score += 4;
                }elseif($strength->sit_up_test >= 45){
                    $strength->sit_up_test_score = 6;
                    $strength->score += 6;
                }
                //SIT UP TEST END
                

            }elseif($age >= 40 && $age <= 49){

                //PUSH UP TEST START
                if($strength->push_up_test >= 0 && $strength->push_up_test <= 13){
                    $strength->push_up_test_score = 1;
                    $strength->score += 1;
                }elseif($strength->push_up_test >= 14 && $strength->push_up_test <= 22){
                    $strength->push_up_test_score = 2;
                    $strength->score += 2;
                }elseif($strength->push_up_test >= 23 && $strength->push_up_test <= 29){
                    $strength->push_up_test_score = 3;
                    $strength->score += 3;
                }elseif($strength->push_up_test >= 30 && $strength->push_up_test <= 44){
                    $strength->push_up_test_score = 5;
                    $strength->score += 5;
                }elseif($strength->push_up_test >= 45){
                    $strength->push_up_test_score = 7;
                    $strength->score += 7;
                }
                //PUSH UP TEST END
                //SIT UP TEST START
                if($strength->sit_up_test >= 0 && $strength->sit_up_test <= 17){
                    $strength->sit_up_test_score = 1;
                    $strength->score += 1;
                }elseif($strength->sit_up_test >= 18 && $strength->sit_up_test <= 26){
                    $strength->sit_up_test_score = 2;
                    $strength->score += 2;
                }elseif($strength->sit_up_test >= 27 && $strength->sit_up_test <= 29){
                    $strength->sit_up_test_score = 3;
                    $strength->score += 3;
                }elseif($strength->sit_up_test >= 30 && $strength->sit_up_test <= 40){
                    $strength->sit_up_test_score = 4;
                    $strength->score += 4;
                }elseif($strength->sit_up_test >= 41){
                    $strength->sit_up_test_score = 6;
                    $strength->score += 6;
                }
                //SIT UP TEST END

            }elseif($age >= 50 && $age <= 59){
                //PUSH UP TEST START
                if($strength->push_up_test >= 0 && $strength->push_up_test <= 9){
                    $strength->push_up_test_score = 1;
                    $strength->score += 1;
                }elseif($strength->push_up_test >= 10 && $strength->push_up_test <= 18){
                    $strength->push_up_test_score = 2;
                    $strength->score += 2;
                }elseif($strength->push_up_test >= 19 && $strength->push_up_test <= 25){
                    $strength->push_up_test_score = 3;
                    $strength->score += 3;
                }elseif($strength->push_up_test >= 26 && $strength->push_up_test <= 40){
                    $strength->push_up_test_score = 5;
                    $strength->score += 5;
                }elseif($strength->push_up_test >= 41){
                    $strength->push_up_test_score = 7;
                    $strength->score += 7;
                }
                //PUSH UP TEST END
                //SIT UP TEST START
                if($strength->sit_up_test >= 0 && $strength->sit_up_test <= 13){
                    $strength->sit_up_test_score = 1;
                    $strength->score += 1;
                }elseif($strength->sit_up_test >= 14 && $strength->sit_up_test <= 21){
                    $strength->sit_up_test_score = 2;
                    $strength->score += 2;    
                }elseif($strength->sit_up_test >= 22 && $strength->sit_up_test <= 24){
                    $strength->sit_up_test_score = 3;
                    $strength->score += 3;
                }elseif($strength->sit_up_test >= 25 && $strength->sit_up_test <= 34){
                    $strength->sit_up_test_score = 4;
                    $strength->score += 4;
                }elseif($strength->sit_up_test >= 35){
                    $strength->sit_up_test_score = 6;
                    $strength->score += 6;
                }
                //SIT UP TEST END

            }elseif($age >= 60){
                //PUSH UP TEST START
                if($strength->push_up_test >= 0 && $strength->push_up_test <= 4){
                    $strength->push_up_test_score = 1;
                    $strength->score += 1;
                }elseif($strength->push_up_test >= 5 && $strength->push_up_test <= 13){
                    $strength->push_up_test_score = 2;
                    $strength->score += 2;
                }elseif($strength->push_up_test >= 14 && $strength->push_up_test <= 20){
                    $strength->push_up_test_score = 3;
                    $strength->score += 3;
                }elseif($strength->push_up_test >= 21 && $strength->push_up_test <= 35){
                    $strength->push_up_test_score = 5;
                    $strength->score += 5;
                }elseif($strength->push_up_test >= 36){
                    $strength->push_up_test_score = 7;
                    $strength->score += 7;
                }
                //PUSH UP TEST END
                //SIT UP TEST START
                if($strength->sit_up_test >= 0 && $strength->sit_up_test <= 9){
                    $strength->sit_up_test_score = 1;
                    $strength->score += 1;
                }elseif($strength->sit_up_test >= 10 && $strength->sit_up_test <= 16){
                    $strength->sit_up_test_score = 2;
                    $strength->score += 2;
                }elseif($strength->sit_up_test >= 17 && $strength->sit_up_test <= 20){
                    $strength->sit_up_test_score = 3;
                    $strength->score += 3;
                }elseif($strength->sit_up_test >= 21 && $strength->sit_up_test <= 30){
                    $strength->sit_up_test_score = 4;
                    $strength->score += 4;
                }elseif($strength->sit_up_test >= 31){
                    $strength->sit_up_test_score = 6;
                    $strength->score += 6;
                }
                //SIT UP TEST END
            }
        }elseif($gender == 'female'){
            if($age >= 0 && $age <= 29){

                //PUSH UP TEST START
                if($strength->push_up_test >= 0 && $strength->push_up_test <= 10){
                    $strength->push_up_test_score = 1;
                    $strength->score += 1;
                }elseif($strength->push_up_test >= 11 && $strength->push_up_test <= 20){
                    $strength->push_up_test_score = 2;
                    $strength->score += 2;
                }elseif($strength->push_up_test >= 21 && $strength->push_up_test <= 33){
                    $strength->push_up_test_score = 3;
                    $strength->score += 3;
                }elseif($strength->push_up_test >= 34 && $strength->push_up_test <= 48){
                    $strength->push_up_test_score = 5;
                    $strength->score += 5;
                }elseif($strength->push_up_test >= 49){
                    $strength->push_up_test_score = 7;
                    $strength->score += 7;
                }
                //PUSH UP TEST END
                //SIT UP TEST START
                if($strength->sit_up_test >= 0 && $strength->sit_up_test <= 18){
                    $strength->sit_up_test_score = 1;
                    $strength->score += 1;
                }elseif($strength->sit_up_test >= 19 && $strength->sit_up_test <= 28){
                    $strength->sit_up_test_score = 2;
                    $strength->score += 2;
                }elseif($strength->sit_up_test >= 29 && $strength->sit_up_test <= 32){
                    $strength->sit_up_test_score = 3;
                    $strength->score += 3;
                }elseif($strength->sit_up_test >= 33 && $strength->sit_up_test <= 42){
                    $strength->sit_up_test_score = 4;
                    $strength->score += 4;
                }elseif($strength->sit_up_test >= 43){
                    $strength->sit_up_test_score = 6;
                    $strength->score += 6;
                }
                //SIT UP TEST END

            }elseif($age >= 30 && $age <= 39){

                //PUSH UP TEST START
                if($strength->push_up_test >= 0 && $strength->push_up_test <= 8){
                    $strength->push_up_test_score = 1;
                    $strength->score += 1;
                }elseif($strength->push_up_test >= 9 && $strength->push_up_test <= 15){
                    $strength->push_up_test_score = 2;
                    $strength->score += 2;    
                }elseif($strength->push_up_test >= 16 && $strength->push_up_test <= 29){
                    $strength->push_up_test_score = 3;
                    $strength->score += 3;
                }elseif($strength->push_up_test >= 30 && $strength->push_up_test <= 44){
                    $strength->push_up_test_score = 5;
                    $strength->score += 5;
                }elseif($strength->push_up_test >= 45){
                    $strength->push_up_test_score = 7;
                    $strength->score += 7;
                }
                //PUSH UP TEST END
                //SIT UP TEST START
                if($strength->sit_up_test >= 0 && $strength->sit_up_test <= 13){
                    $strength->sit_up_test_score = 1;
                    $strength->score += 1;
                }elseif($strength->sit_up_test >= 14 && $strength->sit_up_test <= 24){
                    $strength->sit_up_test_score = 2;
                    $strength->score += 2;
                }elseif($strength->sit_up_test >= 25 && $strength->sit_up_test <= 28){
                    $strength->sit_up_test_score = 3;
                    $strength->score += 3;
                }elseif($strength->sit_up_test >= 29 && $strength->sit_up_test <= 38){
                    $strength->sit_up_test_score = 4;
                    $strength->score += 4;
                }elseif($strength->sit_up_test >= 39){
                    $strength->sit_up_test_score = 6;
                    $strength->score += 6;
                }
                //SIT UP TEST END

            }elseif($age >= 40 && $age <= 49){
                //PUSH UP TEST START
                if($strength->push_up_test >= 0 && $strength->push_up_test <= 7){
                    $strength->push_up_test_score = 1;
                    $strength->score += 1;
                }elseif($strength->push_up_test >= 8 && $strength->push_up_test <= 13){
                    $strength->push_up_test_score = 2;
                    $strength->score += 2;
                }elseif($strength->push_up_test >= 14 && $strength->push_up_test <= 24){
                    $strength->push_up_test_score = 3;
                    $strength->score += 3;
                }elseif($strength->push_up_test >= 25 && $strength->push_up_test <= 40){
                    $strength->push_up_test_score = 5;
                    $strength->score += 5;
                }elseif($strength->push_up_test >= 41){
                    $strength->push_up_test_score = 7;
                    $strength->score += 7;
                }
                //PUSH UP TEST END
                //SIT UP TEST START
                if($strength->sit_up_test >= 0 && $strength->sit_up_test <= 7){
                    $strength->sit_up_test_score = 1;
                    $strength->score += 1;
                }elseif($strength->sit_up_test >= 8 && $strength->sit_up_test <= 18){
                    $strength->sit_up_test_score = 2;
                    $strength->score += 2;
                }elseif($strength->sit_up_test >= 19 && $strength->sit_up_test <= 22){
                    $strength->sit_up_test_score = 3;
                    $strength->score += 3;
                }elseif($strength->sit_up_test >= 23 && $strength->sit_up_test <= 32){
                    $strength->sit_up_test_score = 4;
                    $strength->score += 4;
                }elseif($strength->sit_up_test >= 33){
                    $strength->sit_up_test_score = 6;
                    $strength->score += 6;
                }
                //SIT UP TEST END

            }elseif($age >= 50 && $age <= 59){
                //PUSH UP TEST START
                if($strength->push_up_test >= 0 && $strength->push_up_test <= 4){
                    $strength->push_up_test_score = 1;
                    $strength->score += 1;
                }elseif($strength->push_up_test >= 5 && $strength->push_up_test <= 12){
                    $strength->push_up_test_score = 2;
                    $strength->score += 2;
                }elseif($strength->push_up_test >= 13 && $strength->push_up_test <= 18){
                    $strength->push_up_test_score = 3;
                    $strength->score += 3;
                }elseif($strength->push_up_test >= 19 && $strength->push_up_test <= 30){
                    $strength->push_up_test_score = 5;
                    $strength->score += 5;
                }elseif($strength->push_up_test >= 31){
                    $strength->push_up_test_score = 7;
                    $strength->score += 7;
                }
                //PUSH UP TEST END
                //SIT UP TEST START
                if($strength->sit_up_test >= 0 && $strength->sit_up_test <= 5){
                    $strength->sit_up_test_score = 1;
                    $strength->score += 1;
                }elseif($strength->sit_up_test >= 6 && $strength->sit_up_test <= 13){
                    $strength->sit_up_test_score = 2;
                    $strength->score += 2;
                }elseif($strength->sit_up_test >= 14 && $strength->sit_up_test <= 17){
                    $strength->sit_up_test_score = 3;
                    $strength->score += 3;    
                }elseif($strength->sit_up_test >= 18 && $strength->sit_up_test <= 26){
                    $strength->sit_up_test_score = 4;
                    $strength->score += 4;
                }elseif($strength->sit_up_test >= 27){
                    $strength->sit_up_test_score = 6;
                    $strength->score += 6;
                }

            }elseif($age >= 60){
                //PUSH UP TEST START
                if($strength->push_up_test >= 1 && $strength->push_up_test <= 2){
                    $strength->push_up_test_score = 1;
                    $strength->score += 1;
                }elseif($strength->push_up_test >= 3 && $strength->push_up_test <= 4){
                    $strength->push_up_test_score = 2;
                    $strength->score += 2;
                }elseif($strength->push_up_test >= 5 && $strength->push_up_test <= 9){
                    $strength->push_up_test_score = 3;
                    $strength->score += 3;    
                }elseif($strength->push_up_test >= 10 && $strength->push_up_test <= 14){
                    $strength->push_up_test_score = 5;
                    $strength->score += 5;
                }elseif($strength->push_up_test >= 15){
                    $strength->push_up_test_score = 7;
                    $strength->score += 7;
                }
                //PUSH UP TEST END
                //SIT UP TEST START
                if($strength->sit_up_test >= 0 && $strength->sit_up_test <= 3){
                    $strength->sit_up_test_score = 1;
                    $strength->score += 1;
                }elseif($strength->sit_up_test >= 4 && $strength->sit_up_test <= 9){
                    $strength->sit_up_test_score = 2;
                    $strength->score += 2;
                }elseif($strength->sit_up_test >= 10 && $strength->sit_up_test <= 12){
                    $strength->sit_up_test_score = 3;
                    $strength->score += 3;
                }elseif($strength->sit_up_test >= 13 && $strength->sit_up_test <= 23){
                    $strength->sit_up_test_score = 4;
                    $strength->score += 4;
                }elseif($strength->sit_up_test >= 24){
                    $strength->sit_up_test_score = 6;
                    $strength->score += 6;
                }
                //SIT UP TEST END
            }
        }

        // ***************** PUSH UP - SIT UP TEST END *****************

        $strength->save();
    }

}
