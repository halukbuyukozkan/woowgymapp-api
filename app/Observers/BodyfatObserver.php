<?php

namespace App\Observers;

use App\Models\Bodyfat;

class BodyfatObserver
{
    public function created(Bodyfat $bodyfat)
    {
        $bodyfatAttributes = $bodyfat->getAttributes();
        unset(
            $bodyfatAttributes['id'], 
            $bodyfatAttributes['created_at'], 
            $bodyfatAttributes['user_id'], 
            $bodyfatAttributes['updated_at']
        );

        $sum = array_sum($bodyfatAttributes);

        $user = $bodyfat->user;

        if($user->generals->last()->gender == 'male'){
            $bodyfat->rate = (0.29288*$sum) - (0.0005*$sum*$sum) + (0.15845*1) - 5.76377;
        }
        else
            $bodyfat->rate = (0.41563*$sum) - (0.00112*$sum*$sum) + (0.03661*26) + 4.03653;

        $bodyfat->save();
    }

    public function updated(Bodyfat $bodyfat)
    {
        //
    }
}
