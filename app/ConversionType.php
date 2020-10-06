<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConversionType extends Model
{
    public function data(){
       {
           return $this->hasMany('App\Data', 'conversion_type', 'id');
       } 
    }
}
