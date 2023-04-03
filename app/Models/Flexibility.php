<?php

namespace App\Models;

use App\Observers\FlexibilityObserver;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\UserController;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Flexibility extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'flexibility',
        'score',
    ];

    protected static function boot()
    {
        parent::boot();

        static::observe(FlexibilityObserver::class);


        static::saved(function (Flexibility $flexibility) {
            $userController = new UserController;
            $userController->updatePhysicalPerformanceScore($flexibility->user);
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
