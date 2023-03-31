<?php

namespace App\Observers;

use App\Models\LungCapacity;

class LungcapacityObserver
{
    public function created(LungCapacity $lungCapacity)
    {
        
        // fev değeri 0 ile 49 arasında ise score değeri 1 arttırılır
        if ($lungCapacity->fev >= 0 && $lungCapacity->fev <= 49) {
            $lungCapacity->score = $lungCapacity->score + 1;
            $lungCapacity->fev_score = $lungCapacity->fev_score + 1;
        }

        // fev değeri 50 ile 74 arasında ise score değeri 2 arttırılır
        if ($lungCapacity->fev >= 50 && $lungCapacity->fev <= 74) {
            $lungCapacity->score = $lungCapacity->score + 2;
            $lungCapacity->fev_score = $lungCapacity->fev_score + 2;
        }

        // fev değeri 75 ile 99 arasında ise score değeri 3 arttırılır
        if ($lungCapacity->fev >= 75 && $lungCapacity->fev <= 99) {
            $lungCapacity->score = $lungCapacity->score + 3;
            $lungCapacity->fev_score = $lungCapacity->fev_score + 3;
        }

        // fev değeri 100 ile 200 arasında ise score değeri 5 arttırılır
        if ($lungCapacity->fev >= 100 && $lungCapacity->fev <= 200) {
            $lungCapacity->score = $lungCapacity->score + 5;
            $lungCapacity->fev_score = $lungCapacity->fev_score + 5;
        }

        // fev 1 değeri 0 ile 49 arasında ise score değeri 1 arttırılır
        if ($lungCapacity->fev1 >= 0 && $lungCapacity->fev1 <= 49) {
            $lungCapacity->score = $lungCapacity->score + 1;
            $lungCapacity->fev1_score = $lungCapacity->fev1_score + 1;
        }

        // fev 1 değeri 50 ile 74 arasında ise score değeri 2 arttırılır
        if ($lungCapacity->fev1 >= 50 && $lungCapacity->fev1 <= 74) {
            $lungCapacity->score = $lungCapacity->score + 2;
            $lungCapacity->fev1_score = $lungCapacity->fev1_score + 2;
        }

        // fev 1 değeri 75 ile 99 arasında ise score değeri 3 arttırılır

        if ($lungCapacity->fev1 >= 75 && $lungCapacity->fev1 <= 99) {
            $lungCapacity->score = $lungCapacity->score + 3;
            $lungCapacity->fev1_score = $lungCapacity->fev1_score + 3;
        }

        // fev 1 değeri 100 ile 200 arasında ise score değeri 5 arttırılır

        if ($lungCapacity->fev1 >= 100 && $lungCapacity->fev1 <= 200) {
            $lungCapacity->score = $lungCapacity->score + 5;
            $lungCapacity->fev1_score = $lungCapacity->fev1_score + 5;
        }

        // pef değeri 0 ile 49 arasında ise score değeri 1 arttırılır
        if ($lungCapacity->pef >= 0 && $lungCapacity->pef <= 49) {
            $lungCapacity->score = $lungCapacity->score + 1;
            $lungCapacity->pef_score = $lungCapacity->pef_score + 1;
        }

        // pef değeri 50 ile 74 arasında ise score değeri 2 arttırılır
        if ($lungCapacity->pef >= 50 && $lungCapacity->pef <= 74) {
            $lungCapacity->score = $lungCapacity->score + 2;
            $lungCapacity->pef_score = $lungCapacity->pef_score + 2;
        }

        // pef değeri 75 ile 99 arasında ise score değeri 3 arttırılır
        if ($lungCapacity->pef >= 75 && $lungCapacity->pef <= 99) {
            $lungCapacity->score = $lungCapacity->score + 3;
            $lungCapacity->pef_score = $lungCapacity->pef_score + 3;
        }

        // pef değeri 100 ile 200 arasında ise score değeri 5 arttırılır
        if ($lungCapacity->pef >= 100 && $lungCapacity->pef <= 200) {
            $lungCapacity->score = $lungCapacity->score + 5;
            $lungCapacity->pef_score = $lungCapacity->pef_score + 5;
        }

        $lungCapacity->save();
    }
}
