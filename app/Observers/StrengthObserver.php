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

            }
        }



        $strength->save();
    }
}
