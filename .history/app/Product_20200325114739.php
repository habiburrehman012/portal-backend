<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $attribute = [
        'created_at' => date('Y-m-d H:i:s')
    ];
}
