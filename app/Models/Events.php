<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Events extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'events';
    
    protected $fillable = [
        'id','event','createdAt','name'
    ];

    protected $casts = [
        'createdAt' => 'datetime',
    ];
}
