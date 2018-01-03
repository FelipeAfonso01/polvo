<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnQtdProduct extends Migration
{
  public function up()
  {
      Schema::table('products', function($table){
        $table->string('qtd','5');
      });
  }


  public function down()
  {
    Schema::table('products', function($table){
      $table->DropColoumn('qtd');
    });
  }
}
