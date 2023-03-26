<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bodyfat extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'rate',
        'chest',
        'abdominal',
        'thigh',
        'biceps',
        'triceps',
        'subscapular',
        'suprailiac',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
