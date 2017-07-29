<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['date', 'status', 'address_order', 'shipping_status', 'phone', 'name_receiver', 'user_id'];
    public $timestamps = false;

    public function OrderDetail(){
  		return $this->hasMany('App\OrderDetail');
    }
}
     