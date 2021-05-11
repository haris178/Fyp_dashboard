<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Products extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'products';
    
    protected $fillable = [
        'sku', 'name','description','price','categories','group_id','in_stock','image_url','url'
    ];
}
