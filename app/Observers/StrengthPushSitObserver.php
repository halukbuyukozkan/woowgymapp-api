<?php

namespace App\Observers;

use App\Models\Strength;

class StrengthPushSitObserver
{
    public function created(Strength $strength)
    {
        $user = $strength->user;
        $age = $user->generals->last()->age;
        $gender = $user->generals->last()->gender;

        if($gender == 'male'){
            if($age >= 0 && $age <= 29){

                //PUSH UP TEST START
                if($strength->push_up_test >= 0 && $strength->push_up_test <= 18){
                    $strength->push_up_test_score = 1;
                }elseif($strength->push_up_test >= 19 && $strength->push_up_test <= 28){
                    $strength->push_up_test_score = 2;
                }elseif($strength->push_up_test >= 29 && $strength->push_up_test <= 35){
                    $strength->push_up_test_score = 3;
                }elseif($strength->push_up_test >= 36 && $strength->push_up_test <= 50){
                    $strength->push_up_test_score = 5;
                }elseif($strength->push_up_test >= 51){
                    $strength->push_up_test_score = 7;
                }
                //PUSH UP TEST END

                //SIT UP TEST START
                if($strength->sit_up_test >= 0 && $strength->sit_up_test <= 25){
                    $strength->sit_up_test_score = 1;
                }elseif($strength->sit_up_test >= 26 && $strength->sit_up_test <= 34){
                    $strength->sit_up_test_score = 2;
                }elseif($strength->sit_up_test >= 35 && $strength->sit_up_test <= 38){
                    $strength->sit_up_test_score = 3;
                }elseif($strength->sit_up_test >= 39 && $strength->sit_up_test <= 48){
                    $strength->sit_up_test_score = 4;
                }elseif($strength->sit_up_test >= 49){
                    $strength->sit_up_test_score = 6;
                }
                //SIT UP TEST END

            }elseif($age >= 30 && $age <= 39){

                //PUSH UP TEST START
                if($strength->push_up_test >= 0 && $strength->push_up_test <= 15){
                    $strength->push_up_test_score = 1;
                }elseif($strength->push_up_test >= 16 && $strength->push_up_test <= 25){
                    $strength->push_up_test_score = 2;
                }elseif($strength->push_up_test >= 26 && $strength->push_up_test <= 32){
                    $strength->push_up_test_score = 3;
                }elseif($strength->push_up_test >= 33 && $strength->push_up_test <= 47){
                    $strength->push_up_test_score = 5;
                }elseif($strength->push_up_test >= 48){
                    $strength->push_up_test_score = 7;
                }
                //PUSH UP TEST END

                //SIT UP TEST START
                if($strength->sit_up_test >= 0 && $strength->sit_up_test <= 22){
                    $strength->sit_up_test_score = 1;
                }elseif($strength->sit_up_test >= 23 && $strength->sit_up_test <= 30){
                    $strength->sit_up_test_score = 2;
                }elseif($strength->sit_up_test >= 31 && $strength->sit_up_test <= 34){
                    $strength->sit_up_test_score = 3;
                }elseif($strength->sit_up_test >= 35 && $strength->sit_up_test <= 44){
                    $strength->sit_up_test_score = 4;
                }elseif($strength->sit_up_test >= 45){
                    $strength->sit_up_test_score = 6;
                }
                //SIT UP TEST END
                

            }elseif($age >= 40 && $age <= 49){

                //PUSH UP TEST START
                if($strength->push_up_test >= 0 && $strength->push_up_test <= 13){
                    $strength->push_up_test_score = 1;
                }elseif($strength->push_up_test >= 14 && $strength->push_up_test <= 22){
                    $strength->push_up_test_score = 2;
                }elseif($strength->push_up_test >= 23 && $strength->push_up_test <= 29){
                    $strength->push_up_test_score = 3;
                }elseif($strength->push_up_test >= 30 && $strength->push_up_test <= 44){
                    $strength->push_up_test_score = 5;
                }elseif($strength->push_up_test >= 45){
                    $strength->push_up_test_score = 7;
                }
                //PUSH UP TEST END
                //SIT UP TEST START
                if($strength->sit_up_test >= 0 && $strength->sit_up_test <= 17){
                    $strength->sit_up_test_score = 1;
                }elseif($strength->sit_up_test >= 18 && $strength->sit_up_test <= 26){
                    $strength->sit_up_test_score = 2;
                }elseif($strength->sit_up_test >= 27 && $strength->sit_up_test <= 29){
                    $strength->sit_up_test_score = 3;
                }elseif($strength->sit_up_test >= 30 && $strength->sit_up_test <= 40){
                    $strength->sit_up_test_score = 4;
                }elseif($strength->sit_up_test >= 41){
                    $strength->sit_up_test_score = 6;
                }
                //SIT UP TEST END

            }elseif($age >= 50 && $age <= 59){
                //PUSH UP TEST START
                if($strength->push_up_test >= 0 && $strength->push_up_test <= 9){
                    $strength->push_up_test_score = 1;
                }elseif($strength->push_up_test >= 10 && $strength->push_up_test <= 18){
                    $strength->push_up_test_score = 2;
                }elseif($strength->push_up_test >= 19 && $strength->push_up_test <= 25){
                    $strength->push_up_test_score = 3;
                }elseif($strength->push_up_test >= 26 && $strength->push_up_test <= 40){
                    $strength->push_up_test_score = 5;
                }elseif($strength->push_up_test >= 41){
                    $strength->push_up_test_score = 7;
                }
                //PUSH UP TEST END
                //SIT UP TEST START
                if($strength->sit_up_test >= 0 && $strength->sit_up_test <= 13){
                    $strength->sit_up_test_score = 1;
                }elseif($strength->sit_up_test >= 14 && $strength->sit_up_test <= 21){
                    $strength->sit_up_test_score = 2;
                }elseif($strength->sit_up_test >= 22 && $strength->sit_up_test <= 24){
                    $strength->sit_up_test_score = 3;
                }elseif($strength->sit_up_test >= 25 && $strength->sit_up_test <= 34){
                    $strength->sit_up_test_score = 4;
                }elseif($strength->sit_up_test >= 35){
                    $strength->sit_up_test_score = 6;
                }
                //SIT UP TEST END

            }elseif($age >= 60){
                //PUSH UP TEST START
                if($strength->push_up_test >= 0 && $strength->push_up_test <= 4){
                    $strength->push_up_test_score = 1;
                }elseif($strength->push_up_test >= 5 && $strength->push_up_test <= 13){
                    $strength->push_up_test_score = 2;
                }elseif($strength->push_up_test >= 14 && $strength->push_up_test <= 20){
                    $strength->push_up_test_score = 3;
                }elseif($strength->push_up_test >= 21 && $strength->push_up_test <= 35){
                    $strength->push_up_test_score = 5;
                }elseif($strength->push_up_test >= 36){
                    $strength->push_up_test_score = 7;
                }
                //PUSH UP TEST END
                //SIT UP TEST START
                if($strength->sit_up_test >= 0 && $strength->sit_up_test <= 9){
                    $strength->sit_up_test_score = 1;
                }elseif($strength->sit_up_test >= 10 && $strength->sit_up_test <= 16){
                    $strength->sit_up_test_score = 2;
                }elseif($strength->sit_up_test >= 17 && $strength->sit_up_test <= 20){
                    $strength->sit_up_test_score = 3;
                }elseif($strength->sit_up_test >= 21 && $strength->sit_up_test <= 30){
                    $strength->sit_up_test_score = 4;
                }elseif($strength->sit_up_test >= 31){
                    $strength->sit_up_test_score = 6;
                }
                //SIT UP TEST END
            }
        }elseif($gender == 'female'){
            if($age >= 0 && $age <= 29){

                //PUSH UP TEST START
                if($strength->push_up_test >= 0 && $strength->push_up_test <= 10){
                    $strength->push_up_test_score = 1;
                }elseif($strength->push_up_test >= 11 && $strength->push_up_test <= 20){
                    $strength->push_up_test_score = 2;
                }elseif($strength->push_up_test >= 21 && $strength->push_up_test <= 33){
                    $strength->push_up_test_score = 3;
                }elseif($strength->push_up_test >= 34 && $strength->push_up_test <= 48){
                    $strength->push_up_test_score = 5;
                }elseif($strength->push_up_test >= 49){
                    $strength->push_up_test_score = 7;
                }
                //PUSH UP TEST END
                //SIT UP TEST START
                if($strength->sit_up_test >= 0 && $strength->sit_up_test <= 18){
                    $strength->sit_up_test_score = 1;
                }elseif($strength->sit_up_test >= 19 && $strength->sit_up_test <= 28){
                    $strength->sit_up_test_score = 2;
                }elseif($strength->sit_up_test >= 29 && $strength->sit_up_test <= 32){
                    $strength->sit_up_test_score = 3;
                }elseif($strength->sit_up_test >= 33 && $strength->sit_up_test <= 42){
                    $strength->sit_up_test_score = 4;
                }elseif($strength->sit_up_test >= 43){
                    $strength->sit_up_test_score = 6;
                }
                //SIT UP TEST END

            }elseif($age >= 30 && $age <= 39){

                //PUSH UP TEST START
                if($strength->push_up_test >= 0 && $strength->push_up_test <= 8){
                    $strength->push_up_test_score = 1;
                }elseif($strength->push_up_test >= 9 && $strength->push_up_test <= 15){
                    $strength->push_up_test_score = 2;
                }elseif($strength->push_up_test >= 16 && $strength->push_up_test <= 29){
                    $strength->push_up_test_score = 3;
                }elseif($strength->push_up_test >= 30 && $strength->push_up_test <= 44){
                    $strength->push_up_test_score = 5;
                }elseif($strength->push_up_test >= 45){
                    $strength->push_up_test_score = 7;
                }
                //PUSH UP TEST END
                //SIT UP TEST START
                if($strength->sit_up_test >= 0 && $strength->sit_up_test <= 13){
                    $strength->sit_up_test_score = 1;
                }elseif($strength->sit_up_test >= 14 && $strength->sit_up_test <= 24){
                    $strength->sit_up_test_score = 2;
                }elseif($strength->sit_up_test >= 25 && $strength->sit_up_test <= 28){
                    $strength->sit_up_test_score = 3;
                }elseif($strength->sit_up_test >= 29 && $strength->sit_up_test <= 38){
                    $strength->sit_up_test_score = 4;
                }elseif($strength->sit_up_test >= 39){
                    $strength->sit_up_test_score = 6;
                }
                //SIT UP TEST END

            }elseif($age >= 40 && $age <= 49){
                //PUSH UP TEST START
                if($strength->push_up_test >= 0 && $strength->push_up_test <= 7){
                    $strength->push_up_test_score = 1;
                }elseif($strength->push_up_test >= 8 && $strength->push_up_test <= 13){
                    $strength->push_up_test_score = 2;
                }elseif($strength->push_up_test >= 14 && $strength->push_up_test <= 24){
                    $strength->push_up_test_score = 3;
                }elseif($strength->push_up_test >= 25 && $strength->push_up_test <= 40){
                    $strength->push_up_test_score = 5;
                }elseif($strength->push_up_test >= 41){
                    $strength->push_up_test_score = 7;
                }
                //PUSH UP TEST END
                //SIT UP TEST START
                if($strength->sit_up_test >= 0 && $strength->sit_up_test <= 7){
                    $strength->sit_up_test_score = 1;
                }elseif($strength->sit_up_test >= 8 && $strength->sit_up_test <= 18){
                    $strength->sit_up_test_score = 2;
                }elseif($strength->sit_up_test >= 19 && $strength->sit_up_test <= 22){
                    $strength->sit_up_test_score = 3;
                }elseif($strength->sit_up_test >= 23 && $strength->sit_up_test <= 32){
                    $strength->sit_up_test_score = 4;
                }elseif($strength->sit_up_test >= 33){
                    $strength->sit_up_test_score = 6;
                }
                //SIT UP TEST END

            }elseif($age >= 50 && $age <= 59){
                //PUSH UP TEST START
                if($strength->push_up_test >= 0 && $strength->push_up_test <= 4){
                    $strength->push_up_test_score = 1;
                }elseif($strength->push_up_test >= 5 && $strength->push_up_test <= 12){
                    $strength->push_up_test_score = 2;
                }elseif($strength->push_up_test >= 13 && $strength->push_up_test <= 18){
                    $strength->push_up_test_score = 3;
                }elseif($strength->push_up_test >= 19 && $strength->push_up_test <= 30){
                    $strength->push_up_test_score = 5;
                }elseif($strength->push_up_test >= 31){
                    $strength->push_up_test_score = 7;
                }
                //PUSH UP TEST END
                //SIT UP TEST START
                if($strength->sit_up_test >= 0 && $strength->sit_up_test <= 5){
                    $strength->sit_up_test_score = 1;
                }elseif($strength->sit_up_test >= 6 && $strength->sit_up_test <= 13){
                    $strength->sit_up_test_score = 2;
                }elseif($strength->sit_up_test >= 14 && $strength->sit_up_test <= 17){
                    $strength->sit_up_test_score = 3;
                }elseif($strength->sit_up_test >= 18 && $strength->sit_up_test <= 26){
                    $strength->sit_up_test_score = 4;
                }elseif($strength->sit_up_test >= 27){
                    $strength->sit_up_test_score = 6;
                }

            }elseif($age >= 60){
                //PUSH UP TEST START
                if($strength->push_up_test >= 1 && $strength->push_up_test <= 2){
                    $strength->push_up_test_score = 1;
                }elseif($strength->push_up_test >= 3 && $strength->push_up_test <= 4){
                    $strength->push_up_test_score = 2;
                }elseif($strength->push_up_test >= 5 && $strength->push_up_test <= 9){
                    $strength->push_up_test_score = 3;
                }elseif($strength->push_up_test >= 10 && $strength->push_up_test <= 14){
                    $strength->push_up_test_score = 5;
                }elseif($strength->push_up_test >= 15){
                    $strength->push_up_test_score = 7;
                }
                //PUSH UP TEST END
                //SIT UP TEST START
                if($strength->sit_up_test >= 0 && $strength->sit_up_test <= 3){
                    $strength->sit_up_test_score = 1;
                }elseif($strength->sit_up_test >= 4 && $strength->sit_up_test <= 9){
                    $strength->sit_up_test_score = 2;
                }elseif($strength->sit_up_test >= 10 && $strength->sit_up_test <= 12){
                    $strength->sit_up_test_score = 3;
                }elseif($strength->sit_up_test >= 13 && $strength->sit_up_test <= 23){
                    $strength->sit_up_test_score = 4;
                }elseif($strength->sit_up_test >= 24){
                    $strength->sit_up_test_score = 6;
                }
                //SIT UP TEST END
            }
        }



        $strength->save();
    }
}
