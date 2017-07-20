<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
    protected $fillable = ['name', 'parameter', 'product_id'];

    public function Product() {
      return $this->belongsTo('App\Product');
    }
}
