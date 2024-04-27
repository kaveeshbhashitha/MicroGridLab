<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordinator extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'firstname',
        'lastname',
        'email',
        'code',
        'telephone',
        'department',
        'faculty',
        'university',
        'profileurl',
        'image',
        'status'
    ];
}
