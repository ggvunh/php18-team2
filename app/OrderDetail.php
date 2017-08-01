<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
	 protected $table = 'order_details';
    protected $fillable = ['quantity', 'price', 'order_id', 'product_id',];
    public $timestamps = false;
    public function Order(){
  		return $this->belongsTo('App\Order');
    }
}