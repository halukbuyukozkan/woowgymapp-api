<?php

namespace App\Observers;

use App\Models\Flexibility;

class FlexibilityObserver
{
    public function created(Flexibility $flexibility)
    {
        $user = $flexibility->user;
        $age = $user->generals->last()->age;
        $gender = $user->generals->last()->gender;

        if($gender == 'male'){
            if($age >= 0 && $age <= 20){

                if($flexibility->flexibility >= -50 && $flexibility->flexibility <= 0){
                    $flexibility->score += 1;
                }elseif($flexibility->flexibility >= 1 && $flexibility->flexibility <= 9){
                    $flexibility->score += 3;
                }elseif($flexibility->flexibility >= 10 && $flexibility->flexibility <= 14){
                    $flexibility->score += 5;
                }elseif($flexibility->flexibility >= 15 && $flexibility->flexibility <= 19){
                    $flexibility->score += 7;
                }elseif($flexibility->flexibility >= 20){
                    $flexibility->score += 10;
                }

            }elseif($age >= 21 && $age <= 30){

                if($flexibility->flexibility >= -50 && $flexibility->flexibility <= -1){
                    $flexibility->score += 1;
                }elseif($flexibility->flexibility >= 0 && $flexibility->flexibility <= 8){
                    $flexibility->score += 3;
                }elseif($flexibility->flexibility >= 9 && $flexibility->flexibility <= 13){
                    $flexibility->score += 5;
                }elseif($flexibility->flexibility >= 14 && $flexibility->flexibility <= 18){
                    $flexibility->score += 7;
                }elseif($flexibility->flexibility >= 19){
                    $flexibility->score += 10;
                }

            }elseif($age >= 31 && $age <= 40){
                    
                if($flexibility->flexibility >= -50 && $flexibility->flexibility <= -2){
                    $flexibility->score += 1;
                }elseif($flexibility->flexibility >= -1 && $flexibility->flexibility <= 7){
                    $flexibility->score += 3;
                }elseif($flexibility->flexibility >= 8 && $flexibility->flexibility <= 12){
                    $flexibility->score += 5;
                }elseif($flexibility->flexibility >= 13 && $flexibility->flexibility <= 17){
                    $flexibility->score += 7;
                }elseif($flexibility->flexibility >= 18){
                    $flexibility->score += 10;
                }

            }elseif($age >= 41 && $age <= 50){

                if($flexibility->flexibility >= -50 && $flexibility->flexibility <= -3){
                    $flexibility->score += 1;
                }elseif($flexibility->flexibility >= -2 && $flexibility->flexibility <= 6){
                    $flexibility->score += 3;
                }elseif($flexibility->flexibility >= 7 && $flexibility->flexibility <= 11){
                    $flexibility->score += 5;
                }elseif($flexibility->flexibility >= 12 && $flexibility->flexibility <= 16){
                    $flexibility->score += 7;
                }elseif($flexibility->flexibility >= 17){
                    $flexibility->score += 10;
                }


            }elseif($age >= 51 && $age < 60){
                
                if($flexibility->flexibility >= -50 && $flexibility->flexibility <= -4){
                    $flexibility->score += 1;
                }elseif($flexibility->flexibility >= -3 && $flexibility->flexibility <= 5){
                    $flexibility->score += 3;
                }elseif($flexibility->flexibility >= 6 && $flexibility->flexibility <= 10){
                    $flexibility->score += 5;
                }elseif($flexibility->flexibility >= 11 && $flexibility->flexibility <= 15){
                    $flexibility->score += 7;
                }elseif($flexibility->flexibility >= 16){
                    $flexibility->score += 10;
                }

            }elseif($age >= 60){

                if($flexibility->flexibility >= -50 && $flexibility->flexibility <= -5){
                    $flexibility->score += 1;
                }elseif($flexibility->flexibility >= -4 && $flexibility->flexibility <= 4){
                    $flexibility->score += 3;
                }elseif($flexibility->flexibility >= 5 && $flexibility->flexibility <= 9){
                    $flexibility->score += 5;
                }elseif($flexibility->flexibility >= 10 && $flexibility->flexibility <= 14){
                    $flexibility->score += 7;
                }elseif($flexibility->flexibility >= 15){
                    $flexibility->score += 10;
                }

            }
        }elseif($gender == 'female'){
            if($age >= 0 && $age <= 20){

                if($flexibility->flexibility >= -50 && $flexibility->flexibility <= -5){
                    $flexibility->score += 1;
                }elseif($flexibility->flexibility >= -4 && $flexibility->flexibility <= 9){
                    $flexibility->score += 3;
                }elseif($flexibility->flexibility >= 10 && $flexibility->flexibility <= 14){
                    $flexibility->score += 5;
                }elseif($flexibility->flexibility >= 15 && $flexibility->flexibility <= 19){
                    $flexibility->score += 7;
                }elseif($flexibility->flexibility >= 20){
                    $flexibility->score += 10;
                }


            }elseif($age >= 21 && $age <= 30){

                if($flexibility->flexibility >= -50 && $flexibility->flexibility <= -4){
                    $flexibility->score += 1;
                }elseif($flexibility->flexibility >= -3 && $flexibility->flexibility <= 8){
                    $flexibility->score += 3;
                }elseif($flexibility->flexibility >= 9 && $flexibility->flexibility <= 13){
                    $flexibility->score += 5;
                }elseif($flexibility->flexibility >= 14 && $flexibility->flexibility <= 18){
                    $flexibility->score += 7;
                }elseif($flexibility->flexibility >= 19){
                    $flexibility->score += 10;
                }

            }elseif($age >= 31 && $age <= 40){

                if($flexibility->flexibility >= -50 && $flexibility->flexibility <= -3){
                    $flexibility->score += 1;
                }elseif($flexibility->flexibility >= -2 && $flexibility->flexibility <= 7){
                    $flexibility->score += 3;
                }elseif($flexibility->flexibility >= 8 && $flexibility->flexibility <= 12){
                    $flexibility->score += 5;
                }elseif($flexibility->flexibility >= 13 && $flexibility->flexibility <= 17){
                    $flexibility->score += 7;
                }elseif($flexibility->flexibility >= 18){
                    $flexibility->score += 10;
                }

            }elseif($age >= 41 && $age <= 50){

                if($flexibility->flexibility >= -50 && $flexibility->flexibility <= -2){
                    $flexibility->score += 1;
                }elseif($flexibility->flexibility >= -1 && $flexibility->flexibility <= 10){
                    $flexibility->score += 3;
                }elseif($flexibility->flexibility >= 7 && $flexibility->flexibility <= 11){
                    $flexibility->score += 5;
                }elseif($flexibility->flexibility >= 12 && $flexibility->flexibility <= 16){
                    $flexibility->score += 7;
                }elseif($flexibility->flexibility >= 17){
                    $flexibility->score += 10;
                }

            }elseif($age >= 51 && $age < 60){

                if($flexibility->flexibility >= -50 && $flexibility->flexibility <= -1){
                    $flexibility->score += 1;
                }elseif($flexibility->flexibility >= 0 && $flexibility->flexibility <= 5){
                    $flexibility->score += 3;
                }elseif($flexibility->flexibility >= 6 && $flexibility->flexibility <= 10){
                    $flexibility->score += 5;
                }elseif($flexibility->flexibility >= 11 && $flexibility->flexibility <= 15){
                    $flexibility->score += 7;
                }elseif($flexibility->flexibility >= 16){
                    $flexibility->score += 10;
                }


            }elseif($age >= 60){

                if($flexibility->flexibility >= -50 && $flexibility->flexibility <= 0){
                    $flexibility->score += 1;
                }elseif($flexibility->flexibility >= 1 && $flexibility->flexibility <= 4){
                    $flexibility->score += 3;
                }elseif($flexibility->flexibility >= 5 && $flexibility->flexibility <= 9){
                    $flexibility->score += 5;
                }elseif($flexibility->flexibility >= 10 && $flexibility->flexibility <= 14){
                    $flexibility->score += 7;
                }elseif($flexibility->flexibility >= 15){
                    $flexibility->score += 10;
                }

            }
        }



        $flexibility->save();
    }
}
