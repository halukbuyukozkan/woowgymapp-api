<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parq extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'chronic_illness',
        'tension',
        'cardiovascular',
        'chest_pain',
        'spinal_cord_discomfort',
        'anatomical_discomfort',
        'operation',
        'diabetes',
        'medicine',
        'supplements',
        'smoke',
        'addiction',
        'allergy',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
