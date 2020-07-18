<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colors extends Model
{
    protected $table = 'colors';
    protected $fillable = ['name'];
    //color attribute many to many relationship
    public function attributes()
    {
        return $this->belongsToMany('App\Attribute', 'attribute_value', 'color_id', 'attribute_id')->withPivot('value');
    }
}
