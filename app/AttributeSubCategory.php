<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class AttributeSubCategory extends Pivot
{
    protected $table = 'subcategory_attributes';
    // protected $fillable = ['product_id', 'attribute_id', 'value'];




    public $incrementing = true;
}
