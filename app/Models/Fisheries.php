<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fisheries extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'type',
        'description',
        'harvest',
    ];
}
