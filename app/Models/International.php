<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class International extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'firstname',
        'lastname',
        'email',
        'country',
        'department',
        'faculty',
        'university',
        'profileurl',
        'image',
        'rate',
        'status'
    ];
}
