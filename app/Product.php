<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'images', 'active', 'category_id', 'brand_id', 'quantity', 'detail'];

    public $timestamps = false;
    public function category() {
      return $this->belongsTo('App\Category');
    }

    public function Brand() {
      return $this->belongsTo('App\Brand');
    }
}
