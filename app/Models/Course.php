<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'coursetitle',
        'coursename',
        'faculty',
        'department',
        'university',
        'duration',
        'deliverymethod',
        'coursefee',
        'nextintake',
        'eligibility01',
        'eligibility02',
        'eligibility03',
        'eligibility04',
        'eligibility05',
        'eligibility06',
        'applyonlineurl',
        'weburl',
        'moredetailsurl',
        'telephone',
        'coordinator',
        'email',
        'status',
        'rank',
        'description',
        'image',
    ];
}
            