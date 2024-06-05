<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postgraduate extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'firstname',
        'lastname',
        'email',
        'degree',
        'studyarea',
        'startedyear',
        'endedyear',
        'profileurl',
        'rate',
        'image',
        'status'
    ];
}
