<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImg extends Model
{
    protected $table = 'product_img';
    protected $fillable = ['img', 'product_id'];
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
