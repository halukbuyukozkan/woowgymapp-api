<?php

namespace App\Observers;

use App\Models\Maxvo2;

class Maxvo2Observer
{
    public function created(Maxvo2 $maxvo2)
    {
        $user = $maxvo2->user;
        $age = $user->generals->last()->age;
        $gender = $user->generals->last()->gender;

        if($gender == 'male'){
            if($age > 15 && $age < 19){
                if($maxvo2->max_vo2 >= 0 && $maxvo2->max_vo2 <= 33){
                    $maxvo2->score += 6;
                }elseif($maxvo2->max_vo2 >= 34 && $maxvo2->max_vo2 <= 43){
                    $maxvo2->score += 8;
                }elseif($maxvo2->max_vo2 >= 44 && $maxvo2->max_vo2 <= 48){
                    $maxvo2->score += 10;
                }elseif($maxvo2->max_vo2 >= 49 && $maxvo2->max_vo2 <= 53){
                    $maxvo2->score += 12;
                }elseif($maxvo2->max_vo2 >= 54){
                    $maxvo2->score += 14;
                }
            }elseif($age > 20 && $age < 29){
                if($maxvo2->max_vo2 >= 0 && $maxvo2->max_vo2 <= 31){
                    $maxvo2->score += 6;
                }elseif($maxvo2->max_vo2 >= 32 && $maxvo2->max_vo2 <= 41){
                    $maxvo2->score += 8;
                }elseif($maxvo2->max_vo2 >= 42 && $maxvo2->max_vo2 <= 46){
                    $maxvo2->score += 10;
                }elseif($maxvo2->max_vo2 >= 47 && $maxvo2->max_vo2 <= 51){
                    $maxvo2->score += 12;
                }elseif($maxvo2->max_vo2 >= 52){
                    $maxvo2->score += 14;
                }
            }elseif($age > 30 && $age < 39){
                if($maxvo2->max_vo2 >= 0 && $maxvo2->max_vo2 <= 31){
                    $maxvo2->score += 6;
                }elseif($maxvo2->max_vo2 >= 32 && $maxvo2->max_vo2 <= 41){
                    $maxvo2->score += 8;
                }elseif($maxvo2->max_vo2 >= 42 && $maxvo2->max_vo2 <= 46){
                    $maxvo2->score += 10;
                }elseif($maxvo2->max_vo2 >= 47 && $maxvo2->max_vo2 <= 51){
                    $maxvo2->score += 12;
                }elseif($maxvo2->max_vo2 >= 52){
                    $maxvo2->score += 14;
                }
            }elseif($age > 40 && $age < 49){
                if($maxvo2->max_vo2 >= 0 && $maxvo2->max_vo2 <= 27){
                    $maxvo2->score += 6;
                }elseif($maxvo2->max_vo2 >= 28 && $maxvo2->max_vo2 <= 37){
                    $maxvo2->score += 8;
                }elseif($maxvo2->max_vo2 >= 38 && $maxvo2->max_vo2 <= 42){
                    $maxvo2->score += 10;
                }elseif($maxvo2->max_vo2 >= 43 && $maxvo2->max_vo2 <= 47){
                    $maxvo2->score += 12;
                }elseif($maxvo2->max_vo2 >= 48){
                    $maxvo2->score += 14;
                }
            }elseif($age > 50 && $age < 59){
                if($maxvo2->max_vo2 >= 0 && $maxvo2->max_vo2 <= 25){
                    $maxvo2->score += 6;
                }elseif($maxvo2->max_vo2 >= 26 && $maxvo2->max_vo2 <= 35){
                    $maxvo2->score += 8;
                }elseif($maxvo2->max_vo2 >= 36 && $maxvo2->max_vo2 <= 40){
                    $maxvo2->score += 10;
                }elseif($maxvo2->max_vo2 >= 41 && $maxvo2->max_vo2 <= 45){
                    $maxvo2->score += 12;
                }elseif($maxvo2->max_vo2 >= 46){
                    $maxvo2->score += 14;
                }
            }elseif($age > 60){
                if($maxvo2->max_vo2 >= 0 && $maxvo2->max_vo2 <= 20){
                    $maxvo2->score += 6;
                }elseif($maxvo2->max_vo2 >= 21 && $maxvo2->max_vo2 <= 30){
                    $maxvo2->score += 8;
                }elseif($maxvo2->max_vo2 >= 31 && $maxvo2->max_vo2 <= 35){
                    $maxvo2->score += 10;
                }elseif($maxvo2->max_vo2 >= 36 && $maxvo2->max_vo2 <= 40){
                    $maxvo2->score += 12;
                }elseif($maxvo2->max_vo2 >= 41){
                    $maxvo2->score += 14;
                }
            }
        }elseif($gender == 'female'){
            if($age > 15 && $age < 19){
                if($maxvo2->max_vo2 >= 0 && $maxvo2->max_vo2 <= 23){
                    $maxvo2->score += 6;
                }elseif($maxvo2->max_vo2 >= 24 && $maxvo2->max_vo2 <= 32){
                    $maxvo2->score += 8;
                }elseif($maxvo2->max_vo2 >= 33 && $maxvo2->max_vo2 <= 36){
                    $maxvo2->score += 10;
                }elseif($maxvo2->max_vo2 >= 37 && $maxvo2->max_vo2 <= 39){
                    $maxvo2->score += 12;
                }elseif($maxvo2->max_vo2 >= 40){
                    $maxvo2->score += 14;
                }
            }elseif($age > 20 && $age < 29){
                if($maxvo2->max_vo2 >= 0 && $maxvo2->max_vo2 <= 21){
                    $maxvo2->score += 6;
                }elseif($maxvo2->max_vo2 >= 22 && $maxvo2->max_vo2 <= 30){
                    $maxvo2->score += 8;
                }elseif($maxvo2->max_vo2 >= 31 && $maxvo2->max_vo2 <= 35){
                    $maxvo2->score += 10;
                }elseif($maxvo2->max_vo2 >= 36 && $maxvo2->max_vo2 <= 38){
                    $maxvo2->score += 12;
                }elseif($maxvo2->max_vo2 >= 39){
                    $maxvo2->score += 14;
                }
            }elseif($age > 30 && $age < 39){
                if($maxvo2->max_vo2 >= 0 && $maxvo2->max_vo2 <= 20){
                    $maxvo2->score += 6;
                }elseif($maxvo2->max_vo2 >= 21 && $maxvo2->max_vo2 <= 29){
                    $maxvo2->score += 8;
                }elseif($maxvo2->max_vo2 >= 30 && $maxvo2->max_vo2 <= 34){
                    $maxvo2->score += 10;
                }elseif($maxvo2->max_vo2 >= 35 && $maxvo2->max_vo2 <= 37){
                    $maxvo2->score += 12;
                }elseif($maxvo2->max_vo2 >= 38){
                    $maxvo2->score += 14;
                }
            }elseif($age > 40 && $age < 49){
                if($maxvo2->max_vo2 >= 0 && $maxvo2->max_vo2 <= 19){
                    $maxvo2->score += 6;
                }elseif($maxvo2->max_vo2 >= 20 && $maxvo2->max_vo2 <= 27){
                    $maxvo2->score += 8;
                }elseif($maxvo2->max_vo2 >= 28 && $maxvo2->max_vo2 <= 32){
                    $maxvo2->score += 10;
                }elseif($maxvo2->max_vo2 >= 33 && $maxvo2->max_vo2 <= 34){
                    $maxvo2->score += 12;
                }elseif($maxvo2->max_vo2 >= 35){
                    $maxvo2->score += 14;
                }
            }elseif($age > 50 && $age < 59){
                if($maxvo2->max_vo2 >= 0 && $maxvo2->max_vo2 <= 18){
                    $maxvo2->score += 6;
                }elseif($maxvo2->max_vo2 >= 19 && $maxvo2->max_vo2 <= 25){
                    $maxvo2->score += 8;
                }elseif($maxvo2->max_vo2 >= 26 && $maxvo2->max_vo2 <= 30){
                    $maxvo2->score += 10;
                }elseif($maxvo2->max_vo2 >= 31 && $maxvo2->max_vo2 <= 32){
                    $maxvo2->score += 12;
                }elseif($maxvo2->max_vo2 >= 33){
                    $maxvo2->score += 14;
                }
            }elseif($age > 60){
                if($maxvo2->max_vo2 >= 0 && $maxvo2->max_vo2 <= 16){
                    $maxvo2->score += 6;
                }elseif($maxvo2->max_vo2 >= 17 && $maxvo2->max_vo2 <= 23){
                    $maxvo2->score += 8;
                }elseif($maxvo2->max_vo2 >= 24 && $maxvo2->max_vo2 <= 28){
                    $maxvo2->score += 10;
                }elseif($maxvo2->max_vo2 >= 29 && $maxvo2->max_vo2 <= 30){
                    $maxvo2->score += 12;
                }elseif($maxvo2->max_vo2 >= 31){
                    $maxvo2->score += 14;
                }
            }
        }



        $maxvo2->save();
    }
}
