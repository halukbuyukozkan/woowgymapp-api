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
                }elseif($strength->claw_grip_strength_right_hand >= 26 && $strength->claw_grip_strength_right_hand <= 50){
                    $strength->claw_grip_strength_right_hand_score = 2;
                }elseif($strength->claw_grip_strength_right_hand >= 51 && $strength->claw_grip_strength_right_hand <= 100){
                    $strength->claw_grip_strength_right_hand_score = 3;
                }

                if($strength->claw_grip_strength_left_hand >= 0 && $strength->claw_grip_strength_left_hand <= 25){
                    $strength->claw_grip_strength_left_hand_score = 1;
                }elseif($strength->claw_grip_strength_left_hand >= 26 && $strength->claw_grip_strength_left_hand <= 50){
                    $strength->claw_grip_strength_left_hand_score = 2;
                }elseif($strength->claw_grip_strength_left_hand >= 51 && $strength->claw_grip_strength_left_hand <= 100){
                    $strength->claw_grip_strength_left_hand_score = 3;
                }

                // WALL SQUAT START
                if($strength->wall_squat >= 0 && $strength->wall_squat <= 45){
                    $strength->wall_squat_score = 1;
                }elseif($strength->wall_squat >= 46 && $strength->wall_squat <= 70){
                    $strength->wall_squat_score = 2;
                }elseif($strength->wall_squat >= 71 && $strength->wall_squat <= 120){
                    $strength->wall_squat_score = 3;
                }elseif($strength->wall_squat >= 121 && $strength->wall_squat <= 180){
                    $strength->wall_squat_score = 4;
                }elseif($strength->wall_squat >= 181){
                    $strength->wall_squat_score = 6;
                }
                // WALL SQUAT END

                // PLANK START
                if($strength->plank_test >= 0 && $strength->plank_test <= 30){
                    $strength->plank_test_score = 1;
                }elseif($strength->plank_test >= 31 && $strength->plank_test <= 45){
                    $strength->plank_test_score = 2;
                }elseif($strength->plank_test >= 46 && $strength->plank_test <= 90){
                    $strength->plank_test_score = 3;
                }elseif($strength->plank_test >= 91 && $strength->plank_test <= 120){
                    $strength->plank_test_score = 4;
                }elseif($strength->plank_test >= 121){
                    $strength->plank_test_score = 5;
                }
                // PLANK END

            }elseif($age >= 21 && $age <= 30){
                if($strength->claw_grip_strength_right_hand >= 0 && $strength->claw_grip_strength_right_hand <= 23){
                    $strength->claw_grip_strength_right_hand_score = 1;
                }elseif($strength->claw_grip_strength_right_hand >= 24 && $strength->claw_grip_strength_right_hand <= 48){
                    $strength->claw_grip_strength_right_hand_score = 2;
                }elseif($strength->claw_grip_strength_right_hand >= 49 && $strength->claw_grip_strength_right_hand <= 100){
                    $strength->claw_grip_strength_right_hand_score = 3;
                }

                if($strength->claw_grip_strength_left_hand >= 0 && $strength->claw_grip_strength_left_hand <= 23){
                    $strength->claw_grip_strength_left_hand_score = 1;
                }elseif($strength->claw_grip_strength_left_hand >= 24 && $strength->claw_grip_strength_left_hand <= 48){
                    $strength->claw_grip_strength_left_hand_score = 2;
                }elseif($strength->claw_grip_strength_left_hand >= 49 && $strength->claw_grip_strength_left_hand <= 100){
                    $strength->claw_grip_strength_left_hand_score = 3;
                }

                // WALL SQUAT START
                if($strength->wall_squat >= 0 && $strength->wall_squat <= 40){
                    $strength->wall_squat_score = 1;
                }elseif($strength->wall_squat >= 41 && $strength->wall_squat <= 65){
                    $strength->wall_squat_score = 2;
                }elseif($strength->wall_squat >= 66 && $strength->wall_squat <= 110){
                    $strength->wall_squat_score = 3;
                }elseif($strength->wall_squat >= 111 && $strength->wall_squat <= 170){
                    $strength->wall_squat_score = 4;
                }elseif($strength->wall_squat >= 171){
                    $strength->wall_squat_score = 6;
                }
                // WALL SQUAT END

                // PLANK START
                if($strength->plank_test >= 0 && $strength->plank_test <= 25){
                    $strength->plank_test_score = 1;
                }elseif($strength->plank_test >= 26 && $strength->plank_test <= 40){
                    $strength->plank_test_score = 2;
                }elseif($strength->plank_test >= 41 && $strength->plank_test <= 80){
                    $strength->plank_test_score = 3;
                }elseif($strength->plank_test >= 81 && $strength->plank_test <= 110){
                    $strength->plank_test_score = 4;
                }elseif($strength->plank_test >= 111){
                    $strength->plank_test_score = 5;
                }
                // PLANK END

            }elseif($age >= 31 && $age <= 40){
                if($strength->claw_grip_strength_right_hand >= 0 && $strength->claw_grip_strength_right_hand <= 21){
                    $strength->claw_grip_strength_right_hand_score = 1;
                }elseif($strength->claw_grip_strength_right_hand >= 22 && $strength->claw_grip_strength_right_hand <= 46){
                    $strength->claw_grip_strength_right_hand_score = 2;
                }elseif($strength->claw_grip_strength_right_hand >= 47 && $strength->claw_grip_strength_right_hand <= 100){
                    $strength->claw_grip_strength_right_hand_score = 3;
                }

                if($strength->claw_grip_strength_left_hand >= 0 && $strength->claw_grip_strength_left_hand <= 21){
                    $strength->claw_grip_strength_left_hand_score = 1;
                }elseif($strength->claw_grip_strength_left_hand >= 22 && $strength->claw_grip_strength_left_hand <= 46){
                    $strength->claw_grip_strength_left_hand_score = 2;
                }elseif($strength->claw_grip_strength_left_hand >= 47 && $strength->claw_grip_strength_left_hand <= 100){
                    $strength->claw_grip_strength_left_hand_score = 3;
                }

                // WALL SQUAT START
                if($strength->wall_squat >= 0 && $strength->wall_squat <= 35){
                    $strength->wall_squat_score = 1;
                }elseif($strength->wall_squat >= 36 && $strength->wall_squat <= 60){
                    $strength->wall_squat_score = 2;
                }elseif($strength->wall_squat >= 61 && $strength->wall_squat <= 100){
                    $strength->wall_squat_score = 3;
                }elseif($strength->wall_squat >= 101 && $strength->wall_squat <= 160){
                    $strength->wall_squat_score = 4;
                }elseif($strength->wall_squat >= 161){
                    $strength->wall_squat_score = 6;
                }
                // WALL SQUAT END

                // PLANK START
                if($strength->plank_test >= 0 && $strength->plank_test <= 20){
                    $strength->plank_test_score = 1;
                }elseif($strength->plank_test >= 21 && $strength->plank_test <= 35){
                    $strength->plank_test_score = 2;
                }elseif($strength->plank_test >= 36 && $strength->plank_test <= 70){
                    $strength->plank_test_score = 3;
                }elseif($strength->plank_test >= 71 && $strength->plank_test <= 100){
                    $strength->plank_test_score = 4;
                }elseif($strength->plank_test >= 101){
                    $strength->plank_test_score = 5;
                }
                // PLANK END

            }elseif($age >= 41 && $age <= 50){
                if($strength->claw_grip_strength_right_hand >= 0 && $strength->claw_grip_strength_right_hand <= 19){
                    $strength->claw_grip_strength_right_hand_score = 1;
                }elseif($strength->claw_grip_strength_right_hand >= 20 && $strength->claw_grip_strength_right_hand <= 41){
                    $strength->claw_grip_strength_right_hand_score = 2;
                }elseif($strength->claw_grip_strength_right_hand >= 42 && $strength->claw_grip_strength_right_hand <= 100){
                    $strength->claw_grip_strength_right_hand_score = 3;
                }

                if($strength->claw_grip_strength_left_hand >= 0 && $strength->claw_grip_strength_left_hand <= 19){
                    $strength->claw_grip_strength_left_hand_score = 1;
                }elseif($strength->claw_grip_strength_left_hand >= 20 && $strength->claw_grip_strength_left_hand <= 41){
                    $strength->claw_grip_strength_left_hand_score = 2;
                }elseif($strength->claw_grip_strength_left_hand >= 42 && $strength->claw_grip_strength_left_hand <= 100){
                    $strength->claw_grip_strength_left_hand_score = 3;
                }

                // WALL SQUAT START
                if($strength->wall_squat >= 0 && $strength->wall_squat <= 30){
                    $strength->wall_squat_score = 1;
                }elseif($strength->wall_squat >= 31 && $strength->wall_squat <= 55){
                    $strength->wall_squat_score = 2;
                }elseif($strength->wall_squat >= 56 && $strength->wall_squat <= 90){
                    $strength->wall_squat_score = 3;
                }elseif($strength->wall_squat >= 91 && $strength->wall_squat <= 150){
                    $strength->wall_squat_score = 4;
                }elseif($strength->wall_squat >= 151){
                    $strength->wall_squat_score = 6;
                }
                // WALL SQUAT END

                // PLANK START
                if($strength->plank_test >= 0 && $strength->plank_test <= 15){
                    $strength->plank_test_score = 1;
                }elseif($strength->plank_test >= 16 && $strength->plank_test <= 30){
                    $strength->plank_test_score = 2;
                }elseif($strength->plank_test >= 31 && $strength->plank_test <= 60){
                    $strength->plank_test_score = 3;
                }elseif($strength->plank_test >= 61 && $strength->plank_test <= 90){
                    $strength->plank_test_score = 4;
                }elseif($strength->plank_test >= 91){
                    $strength->plank_test_score = 5;
                }
                // PLANK END

            }elseif($age >= 51 && $age <= 60){
                if($strength->claw_grip_strength_right_hand >= 0 && $strength->claw_grip_strength_right_hand <= 17){
                    $strength->claw_grip_strength_right_hand_score = 1;
                }elseif($strength->claw_grip_strength_right_hand >= 18 && $strength->claw_grip_strength_right_hand <= 34){
                    $strength->claw_grip_strength_right_hand_score = 2;
                }elseif($strength->claw_grip_strength_right_hand >= 35 && $strength->claw_grip_strength_right_hand <= 100){
                    $strength->claw_grip_strength_right_hand_score = 3;
                }

                if($strength->claw_grip_strength_left_hand >= 0 && $strength->claw_grip_strength_left_hand <= 17){
                    $strength->claw_grip_strength_left_hand_score = 1;
                }elseif($strength->claw_grip_strength_left_hand >= 18 && $strength->claw_grip_strength_left_hand <= 34){
                    $strength->claw_grip_strength_left_hand_score = 2;
                }elseif($strength->claw_grip_strength_left_hand >= 35 && $strength->claw_grip_strength_left_hand <= 100){
                    $strength->claw_grip_strength_left_hand_score = 3;
                }

                // WALL SQUAT START
                if($strength->wall_squat >= 0 && $strength->wall_squat <= 25){
                    $strength->wall_squat_score = 1;
                }elseif($strength->wall_squat >= 26 && $strength->wall_squat <= 50){
                    $strength->wall_squat_score = 2;
                }elseif($strength->wall_squat >= 51 && $strength->wall_squat <= 80){
                    $strength->wall_squat_score = 3;
                }elseif($strength->wall_squat >= 81 && $strength->wall_squat <= 140){
                    $strength->wall_squat_score = 4;
                }elseif($strength->wall_squat >= 141){
                    $strength->wall_squat_score = 6;
                }
                // WALL SQUAT END

            }elseif($age >= 61){
                if($strength->claw_grip_strength_right_hand >= 0 && $strength->claw_grip_strength_right_hand <= 13){
                    $strength->claw_grip_strength_right_hand_score = 1;
                }elseif($strength->claw_grip_strength_right_hand >= 14 && $strength->claw_grip_strength_right_hand <= 30){
                    $strength->claw_grip_strength_right_hand_score = 2;
                }elseif($strength->claw_grip_strength_right_hand >= 31 && $strength->claw_grip_strength_right_hand <= 100){
                    $strength->claw_grip_strength_right_hand_score = 3;
                }

                if($strength->claw_grip_strength_left_hand >= 0 && $strength->claw_grip_strength_left_hand <= 13){
                    $strength->claw_grip_strength_left_hand_score = 1;
                }elseif($strength->claw_grip_strength_left_hand >= 14 && $strength->claw_grip_strength_left_hand <= 30){
                    $strength->claw_grip_strength_left_hand_score = 2;
                }elseif($strength->claw_grip_strength_left_hand >= 31 && $strength->claw_grip_strength_left_hand <= 100){
                    $strength->claw_grip_strength_left_hand_score = 3;
                }

                // WALL SQUAT START
                if($strength->wall_squat >= 0 && $strength->wall_squat <= 20){
                    $strength->wall_squat_score = 1;
                }elseif($strength->wall_squat >= 21 && $strength->wall_squat <= 45){
                    $strength->wall_squat_score = 2;
                }elseif($strength->wall_squat >= 46 && $strength->wall_squat <= 70){
                    $strength->wall_squat_score = 3;
                }elseif($strength->wall_squat >= 71 && $strength->wall_squat <= 130){
                    $strength->wall_squat_score = 4;
                }elseif($strength->wall_squat >= 131){
                    $strength->wall_squat_score = 6;
                }
                // WALL SQUAT END

            }
        }elseif($gender = 'female'){
            if($age >= 0 && $age <= 20){
                if($strength->claw_grip_strength_right_hand >= 0 && $strength->claw_grip_strength_right_hand <= 20){
                    $strength->claw_grip_strength_right_hand_score = 1;
                }elseif($strength->claw_grip_strength_right_hand >= 21 && $strength->claw_grip_strength_right_hand <= 39){
                    $strength->claw_grip_strength_right_hand_score = 2;
                }elseif($strength->claw_grip_strength_right_hand >= 40 && $strength->claw_grip_strength_right_hand <= 100){
                    $strength->claw_grip_strength_right_hand_score = 3;
                }

                if($strength->claw_grip_strength_left_hand >= 0 && $strength->claw_grip_strength_left_hand <= 20){
                    $strength->claw_grip_strength_left_hand_score = 1;
                }elseif($strength->claw_grip_strength_left_hand >= 21 && $strength->claw_grip_strength_left_hand <= 39){
                    $strength->claw_grip_strength_left_hand_score = 2;
                }elseif($strength->claw_grip_strength_left_hand >= 40 && $strength->claw_grip_strength_left_hand <= 100){
                    $strength->claw_grip_strength_left_hand_score = 3;
                }

                // WALL SQUAT START
                if($strength->wall_squat >= 0 && $strength->wall_squat <= 30){
                    $strength->wall_squat_score = 1;
                }elseif($strength->wall_squat >= 31 && $strength->wall_squat <= 45){
                    $strength->wall_squat_score = 2;
                }elseif($strength->wall_squat >= 46 && $strength->wall_squat <= 90){
                    $strength->wall_squat_score = 3;
                }elseif($strength->wall_squat >= 91 && $strength->wall_squat <= 120){
                    $strength->wall_squat_score = 4;
                }elseif($strength->wall_squat >= 121){
                    $strength->wall_squat_score = 6;
                }
                // WALL SQUAT END

            }elseif($age >= 21 && $age <= 30){
                if($strength->claw_grip_strength_right_hand >= 0 && $strength->claw_grip_strength_right_hand <= 19){
                    $strength->claw_grip_strength_right_hand_score = 1;
                }elseif($strength->claw_grip_strength_right_hand >= 20 && $strength->claw_grip_strength_right_hand <= 37){
                    $strength->claw_grip_strength_right_hand_score = 2;
                }elseif($strength->claw_grip_strength_right_hand >= 38 && $strength->claw_grip_strength_right_hand <= 100){
                    $strength->claw_grip_strength_right_hand_score = 3;
                }

                if($strength->claw_grip_strength_left_hand >= 0 && $strength->claw_grip_strength_left_hand <= 19){
                    $strength->claw_grip_strength_left_hand_score = 1;
                }elseif($strength->claw_grip_strength_left_hand >= 20 && $strength->claw_grip_strength_left_hand <= 37){
                    $strength->claw_grip_strength_left_hand_score = 2;
                }elseif($strength->claw_grip_strength_left_hand >= 38 && $strength->claw_grip_strength_left_hand <= 100){
                    $strength->claw_grip_strength_left_hand_score = 3;
                }

                // WALL SQUAT START
                if($strength->wall_squat >= 0 && $strength->wall_squat <= 25){
                    $strength->wall_squat_score = 1;
                }elseif($strength->wall_squat >= 26 && $strength->wall_squat <= 40){
                    $strength->wall_squat_score = 2;
                }elseif($strength->wall_squat >= 41 && $strength->wall_squat <= 80){
                    $strength->wall_squat_score = 3;
                }elseif($strength->wall_squat >= 81 && $strength->wall_squat <= 110){
                    $strength->wall_squat_score = 4;
                }elseif($strength->wall_squat >= 111){
                    $strength->wall_squat_score = 6;
                }
                // WALL SQUAT END

            }elseif($age >= 31 && $age <= 40){
                if($strength->claw_grip_strength_right_hand >= 0 && $strength->claw_grip_strength_right_hand <= 18){
                    $strength->claw_grip_strength_right_hand_score = 1;
                }elseif($strength->claw_grip_strength_right_hand >= 19 && $strength->claw_grip_strength_right_hand <= 35){
                    $strength->claw_grip_strength_right_hand_score = 2;
                }elseif($strength->claw_grip_strength_right_hand >= 36 && $strength->claw_grip_strength_right_hand <= 100){
                    $strength->claw_grip_strength_right_hand_score = 3;
                }

                if($strength->claw_grip_strength_left_hand >= 0 && $strength->claw_grip_strength_left_hand <= 18){
                    $strength->claw_grip_strength_left_hand_score = 1;
                }elseif($strength->claw_grip_strength_left_hand >= 19 && $strength->claw_grip_strength_left_hand <= 35){
                    $strength->claw_grip_strength_left_hand_score = 2;
                }elseif($strength->claw_grip_strength_left_hand >= 36 && $strength->claw_grip_strength_left_hand <= 100){
                    $strength->claw_grip_strength_left_hand_score = 3;
                }

                // WALL SQUAT START
                if($strength->wall_squat >= 0 && $strength->wall_squat <= 20){
                    $strength->wall_squat_score = 1;
                }elseif($strength->wall_squat >= 21 && $strength->wall_squat <= 35){
                    $strength->wall_squat_score = 2;
                }elseif($strength->wall_squat >= 36 && $strength->wall_squat <= 70){
                    $strength->wall_squat_score = 3;
                }elseif($strength->wall_squat >= 71 && $strength->wall_squat <= 100){
                    $strength->wall_squat_score = 4;
                }elseif($strength->wall_squat >= 101){
                    $strength->wall_squat_score = 6;
                }
                // WALL SQUAT END

            }elseif($age >= 41 && $age <= 50){
                if($strength->claw_grip_strength_right_hand >= 0 && $strength->claw_grip_strength_right_hand <= 14){
                    $strength->claw_grip_strength_right_hand_score = 1;
                }elseif($strength->claw_grip_strength_right_hand >= 15 && $strength->claw_grip_strength_right_hand <= 30){
                    $strength->claw_grip_strength_right_hand_score = 2;
                }elseif($strength->claw_grip_strength_right_hand >= 31 && $strength->claw_grip_strength_right_hand <= 100){
                    $strength->claw_grip_strength_right_hand_score = 3;
                }

                if($strength->claw_grip_strength_left_hand >= 0 && $strength->claw_grip_strength_left_hand <= 14){
                    $strength->claw_grip_strength_left_hand_score = 1;
                }elseif($strength->claw_grip_strength_left_hand >= 15 && $strength->claw_grip_strength_left_hand <= 30){
                    $strength->claw_grip_strength_left_hand_score = 2;
                }elseif($strength->claw_grip_strength_left_hand >= 31 && $strength->claw_grip_strength_left_hand <= 100){
                    $strength->claw_grip_strength_left_hand_score = 3;
                }

                // WALL SQUAT START
                if($strength->wall_squat >= 0 && $strength->wall_squat <= 15){
                    $strength->wall_squat_score = 1;
                }elseif($strength->wall_squat >= 16 && $strength->wall_squat <= 30){
                    $strength->wall_squat_score = 2;
                }elseif($strength->wall_squat >= 31 && $strength->wall_squat <= 60){
                    $strength->wall_squat_score = 3;
                }elseif($strength->wall_squat >= 61 && $strength->wall_squat <= 90){
                    $strength->wall_squat_score = 4;
                }elseif($strength->wall_squat >= 91){
                    $strength->wall_squat_score = 6;
                }
                // WALL SQUAT END

            }elseif($age >= 51 && $age <= 60){
                if($strength->claw_grip_strength_right_hand >= 0 && $strength->claw_grip_strength_right_hand <= 11){
                    $strength->claw_grip_strength_right_hand_score = 1;
                }elseif($strength->claw_grip_strength_right_hand >= 12 && $strength->claw_grip_strength_right_hand <= 27){
                    $strength->claw_grip_strength_right_hand_score = 2;
                }elseif($strength->claw_grip_strength_right_hand >= 28 && $strength->claw_grip_strength_right_hand <= 100){
                    $strength->claw_grip_strength_right_hand_score = 3;
                }

                if($strength->claw_grip_strength_left_hand >= 0 && $strength->claw_grip_strength_left_hand <= 11){
                    $strength->claw_grip_strength_left_hand_score = 1;
                }elseif($strength->claw_grip_strength_left_hand >= 12 && $strength->claw_grip_strength_left_hand <= 27){
                    $strength->claw_grip_strength_left_hand_score = 2;
                }elseif($strength->claw_grip_strength_left_hand >= 28 && $strength->claw_grip_strength_left_hand <= 100){
                    $strength->claw_grip_strength_left_hand_score = 3;
                }

                // WALL SQUAT START
                if($strength->wall_squat >= 0 && $strength->wall_squat <= 10){
                    $strength->wall_squat_score = 1;
                }elseif($strength->wall_squat >= 11 && $strength->wall_squat <= 25){
                    $strength->wall_squat_score = 2;
                }elseif($strength->wall_squat >= 26 && $strength->wall_squat <= 55){
                    $strength->wall_squat_score = 3;
                }elseif($strength->wall_squat >= 56 && $strength->wall_squat <= 85){
                    $strength->wall_squat_score = 4;
                }elseif($strength->wall_squat >= 86){
                    $strength->wall_squat_score = 6;
                }
                // WALL SQUAT END

            }elseif($age >= 61){
                if($strength->claw_grip_strength_right_hand >= 0 && $strength->claw_grip_strength_right_hand <= 10){
                    $strength->claw_grip_strength_right_hand_score = 1;
                }elseif($strength->claw_grip_strength_right_hand >= 11 && $strength->claw_grip_strength_right_hand <= 26){
                    $strength->claw_grip_strength_right_hand_score = 2;
                }elseif($strength->claw_grip_strength_right_hand >= 27 && $strength->claw_grip_strength_right_hand <= 100){
                    $strength->claw_grip_strength_right_hand_score = 3;
                }

                if($strength->claw_grip_strength_left_hand >= 0 && $strength->claw_grip_strength_left_hand <= 10){
                    $strength->claw_grip_strength_left_hand_score = 1;
                }elseif($strength->claw_grip_strength_left_hand >= 11 && $strength->claw_grip_strength_left_hand <= 26){
                    $strength->claw_grip_strength_left_hand_score = 2;
                }elseif($strength->claw_grip_strength_left_hand >= 27 && $strength->claw_grip_strength_left_hand <= 100){
                    $strength->claw_grip_strength_left_hand_score = 3;
                }

                // WALL SQUAT START
                if($strength->wall_squat >= 0 && $strength->wall_squat <= 10){
                    $strength->wall_squat_score = 1;
                }elseif($strength->wall_squat >= 11 && $strength->wall_squat <= 25){
                    $strength->wall_squat_score = 2;
                }elseif($strength->wall_squat >= 26 && $strength->wall_squat <= 50){
                    $strength->wall_squat_score = 3;
                }elseif($strength->wall_squat >= 51 && $strength->wall_squat <= 80){
                    $strength->wall_squat_score = 4;
                }elseif($strength->wall_squat >= 81){
                    $strength->wall_squat_score = 6;
                }
                // WALL SQUAT END

            }
        }



        $strength->save();
    }
}
