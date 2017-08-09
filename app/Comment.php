<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable =['content', 'user_id', 'created_at', 'updated_at','product_id'];
    public function Product(){
  		return $this->belongsTo('App\Product');
    }
    public function User(){
  		return $this->belongsTo('App\User');
    }
}
