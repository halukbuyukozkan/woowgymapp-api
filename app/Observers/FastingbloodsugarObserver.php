<?php

namespace App\Observers;

use App\Models\Fastingbloodsugar;

class FastingbloodsugarObserver
{
    public function created(Fastingbloodsugar $fastingbloodsugar)
    {
        // eğer glikoz değeri 140 ile 190 arasında ise score değeri 1 arttırılır
        if ($fastingbloodsugar->glucose >= 140 && $fastingbloodsugar->glucose <= 190) {
            $fastingbloodsugar->score = $fastingbloodsugar->score + 1;
        }
        // eğer glikoz değeri 139 ile 99 arasında ise score değeri 2 arttırılır
        if ($fastingbloodsugar->glucose >= 99 && $fastingbloodsugar->glucose <= 139) {
            $fastingbloodsugar->score = $fastingbloodsugar->score + 2;
        }
        // eğer glikoz değeri 0 ile 99 arasında ise score değeri 3 arttırılır
        if ($fastingbloodsugar->glucose >= 0 && $fastingbloodsugar->glucose < 99) {
            $fastingbloodsugar->score = $fastingbloodsugar->score + 3;
        }

        $fastingbloodsugar->save();

    }
}
