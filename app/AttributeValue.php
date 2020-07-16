<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;


class AttributeValue extends Pivot
{
    protected $table = 'attribute_value';
    protected $fillable = ['product_id', 'attribute_id', 'value'];




    public $incrementing = true;
}
