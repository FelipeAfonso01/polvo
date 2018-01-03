<?php

namespace challange;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
  protected $table = 'requests';
  protected $fillable = array('produtos','qtd','total','date','product');

  public function produtos(){
    return $this->hasMany('challange\Product');
  }
}
