<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $table = 'attributes';
    protected $fillable = ['name'];
    //attributeproduct many to many relation
    public function products()
    {
        return $this->belongsToMany('App\Product', 'attribute_value', 'attribute_id', 'product_id')->withPivot('value');
    }
    //attributeproduct many to many relation
    public function colors()
    {
        return $this->belongsToMany('App\Product', 'attribute_value', 'attribute_id', 'color__id')->withPivot('value');
    }
    //attribute and subcategroy many to many relation
    public function subCategories()
    {
        //table name as a second paramter
        return $this->belongsToMany('App\SubCategory', 'subcategory_attributes');
    }
}
