<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = "type_products";
    public function product(){
      //dường dẫn , khóa ngoại của bảng product, khóa chính của type_products
      return $this->hasMany('App\product','id_type','id');
    }
}
