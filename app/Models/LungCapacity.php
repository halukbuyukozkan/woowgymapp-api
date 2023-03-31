<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LungCapacity extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'fev1',
        'fvc',
        'pef',
        'score'
    ];
}
