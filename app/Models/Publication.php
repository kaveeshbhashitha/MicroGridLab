<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    protected $fillable = [
        'pubtitle',
        'pubname',
        'pubjournal',
        'pubdate',
        'issue',
        'volume',
        'pages',
        'puburl',
        'description',
        'pubimage',
        'rate',
        'status'
    ];
}
