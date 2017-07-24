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

    public function scopeSearchByKeyword($query, $keyword, $category)
    {
        if ($keyword!='') {
            $query->where(function ($query) use ($keyword, $category) {
                $query->Where("category_id", "LIKE", "%$category%")->where("name", "LIKE","%$keyword%");
                    
            });
        }
        return $query;
    }

    public static function search($name, $category){
        if (empty($name))
        {
            $products = Product::where('category_id', '=', $category);
        }
        else
        {
            $products =Product::where('name', 'like', '%' . $name . '%' )->where('category_id', '=', $category);
        }
        return $products;
    }
}
