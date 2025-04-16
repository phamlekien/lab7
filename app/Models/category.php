<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class category extends Model
{
    use SoftDeletes;
    
    //
    public function __construct() {

    }

    public function products() {

        return $this->hasMany(Product::class);
    }
}
