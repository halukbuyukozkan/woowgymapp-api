<?php

namespace App\Observers;

use App\Models\Strength;

class StrengthObserver
{
    public function created(Strength $strength)
    {
        $user = $strength->user;
        $age = $user->generals->last()->age;

        
    }
}
