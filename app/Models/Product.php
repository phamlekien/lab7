<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $attributes = [
        'price' => 0,
        'category_id' => 1,
        ///'deleted_at' => null,
        // 'created_at' => null,
        // 'updated_at' => null,
    ];
    public $fillable = ['id', 'name', 'price', 'category_id'];
    use HasFactory;
    public function __construct() {

    }

    public function category() {

        return $this->belongsTo(category::class, 'category_id');
    }
}
