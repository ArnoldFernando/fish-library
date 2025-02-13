<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vegetables extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'name',
        'duration',
        'description',
        'best_time_to_plant',
        'best_time_to_harvest',
    ];
}
