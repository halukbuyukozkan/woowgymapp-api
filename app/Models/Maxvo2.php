<?php

namespace App\Models;

use App\Observers\Maxvo2Observer;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\UserController;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Maxvo2 extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'max_vo2',
        'score',
    ];

    protected static function boot()
    {
        parent::boot();

        static::observe(Maxvo2Observer::class);


        static::saved(function (Maxvo2 $maxvo2) {
            $userController = new UserController;
            $userController->updatePhysicalPerformanceScore($maxvo2->user);
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
