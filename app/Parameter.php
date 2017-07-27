<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
    protected $fillable = ['name', 'parameters', 'product_id'];
    public $timestamps = false;
    public function Product() {
    	return $this->belongsTo('App\Product');
    }

}
