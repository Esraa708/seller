<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // protected $fillable = ['name'];
    protected $table = 'category';
    public function products()
    {
        return $this->belongsToMany('App\Product');
    }
    public function subCategories()
    {
        return $this->hasMany('App\SubCategory');
    }
}