<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IllnessParq extends Model
{
    use HasFactory;

    protected $fillable = [
        'illness_id',
        'parq_id',
    ];

    protected $table = 'illness_parq';
}
