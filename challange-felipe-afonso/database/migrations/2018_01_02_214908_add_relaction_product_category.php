<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelactionProductCategory extends Migration
{
  public function up()
  {
    Schema::table('products', function($table){
      $table->integer('category_id')->default(1);
    });
  }

  public function down()
  {
    Schema::table('products', function($table){
      $table->DropColoumn('category_id');
    });
  }
}
