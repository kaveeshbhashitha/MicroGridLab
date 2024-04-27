<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    protected $fillable = [
        'projecttitle',
        'studentname',
        'instructer',
        'othermembers',
        'starteddate',
        'endeddate',
        'url',
        'description',
        'progress',
        'estduration',
        'client',
        'budget',
        'image',
        'rate',
        'status'
    ];
}
