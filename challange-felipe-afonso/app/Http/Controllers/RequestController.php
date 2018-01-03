<?php

namespace challange\Http\Controllers;

use Illuminate\Http\Request;
use challange\Product;
use challange\Pedido;

class RequestController extends Controller
{
    public function novo(){
      $produtos = Product::all();
      return view('request.novo', ['produtos' => $produtos]) ;
    }

    public function adiciona(Request $request){
      $quantidade  = $request->qtd;
      $id  = $request->produtos;
      $produto_pedido=Product::find($id);
      $price = $produto_pedido->price;
      $total = $quantidade * $price;
      $product = $produto_pedido->id;
      $_token = $request->_token;
      $date = date('Y-m-d');
      $params= compact(['_token', 'total', 'product','date']);
      $produto=new Pedido($params);
      $produto->save();

      return redirect()
    ->action('RequestController@resumo', $id);
      }

      public function resumo($id){
        $pedido = Pedido::find($id);
        $nome_produto = $pedido->product;
        $produto = Product::find($nome_produto);
        return view('request.resumo', ['pedido' => $pedido, 'produto' => $produto]) ;
      }
}
