<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parq extends Model
{
    use HasFactory;

    protected $fillable = [
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
}
