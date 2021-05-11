<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class EventReward extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'event_reward';
    
    protected $fillable = [
        'id','userId','productId','reward'
    ];
}
