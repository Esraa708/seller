<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;
    // protected $fillable = ['name','price','brand', 'description','sku', 'countery',
    //     'quantity', 'price', 'basic_color'];
    protected $guarded = [];
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
    //product imgs relationship
    public function imgs()
    {
        return $this->hasMany('App\ProductImg');
    }
    // product and subcategory relation many to many
    public function subCategory()
    {
        return $this->belongsToMany('App\SubCategory');
    }
    //product attribute many to many relationship
    public function attributes()
    {
        return $this->belongsToMany('App\Product', 'attribute_value', 'product_id','attribute_id');
    }
}
