<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table = 'subcategory';
    protected $fillable = ['sub_category_name', 'category_id'];
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    // product and subcategory relation many to many
    public function products()
    {
        return $this->belongsToMany('App\Product');
    }
    //attribute and subcategroy many to many relation
    public function attributes()
    {
        return $this->belongsToMany('App\Attribute', 'subcategory_attributes');
    }
}
