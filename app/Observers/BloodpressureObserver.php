<?php

namespace App\Observers;

use App\Models\Bloodpressure;

class BloodpressureObserver
{
    /**
     * Handle the Bloodpressure "created" event.
     *
     * @param  \App\Models\Bloodpressure  $bloodpressure
     * @return void
     */
    public function created(Bloodpressure $bloodpressure)
    {
        // kan basıncının sistolik değeri 12 veya 13 ise score değeri 1 arttırılır
        if ($bloodpressure->systolic == 12 || $bloodpressure->systolic == 13) {
            $bloodpressure->score = $bloodpressure->score + 1;
        }

        // kan basıncının diastolic değeri 8 veya 9 ise score değeri 1 arttırılır
        if ($bloodpressure->diastolic == 8 || $bloodpressure->diastolic == 9) {
            $bloodpressure->score = $bloodpressure->score + 1;
        }
        $bloodpressure->save();
    }

    /**
     * Handle the Bloodpressure "updated" event.
     *
     * @param  \App\Models\Bloodpressure  $bloodpressure
     * @return void
     */
    public function updated(Bloodpressure $bloodpressure)
    {
        //
    }

    /**
     * Handle the Bloodpressure "deleted" event.
     *
     * @param  \App\Models\Bloodpressure  $bloodpressure
     * @return void
     */
    public function deleted(Bloodpressure $bloodpressure)
    {
        //
    }

    /**
     * Handle the Bloodpressure "restored" event.
     *
     * @param  \App\Models\Bloodpressure  $bloodpressure
     * @return void
     */
    public function restored(Bloodpressure $bloodpressure)
    {
        //
    }

    /**
     * Handle the Bloodpressure "force deleted" event.
     *
     * @param  \App\Models\Bloodpressure  $bloodpressure
     * @return void
     */
    public function forceDeleted(Bloodpressure $bloodpressure)
    {
        //
    }
}
