<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PracticeAreas extends Model
{
    use HasFactory;

    protected $table = 'practice_areas';

    protected $fillable = [
        'name',
    ];
}
