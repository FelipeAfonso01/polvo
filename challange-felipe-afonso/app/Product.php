<?php

namespace challange;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

  public $timestamps=false;

  protected $fillable = array('sku','name','description','price','category_id','qtd');

   protected $guarded = ['id'];

   public function categoria(){
     return $this->belongsTo('challange\Category');
   }
}
