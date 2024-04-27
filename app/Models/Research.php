<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    use HasFactory;

    protected $fillable = [
        'researchtitle',
        'researchername',
        'instructer',
        'otherresearchers',
        'researchdate',
        'issue',
        'volume',
        'pages',
        'puburl',
        'description',
        'researchimage',
        'rate',
        'status'
    ];
}
