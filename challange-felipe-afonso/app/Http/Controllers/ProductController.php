<?php

namespace challange\Http\Controllers;

use Illuminate\Support\Facades\DB;
use challange\Category;
use challange\Product;
use challange\Http\Requests\ProdutoRequest;
use Request;

class ProductController extends Controller
{
    public function lista()
    {
        $produtos = Product::all();
            return view('product.listagem', ['produtos' => $produtos]) ;
    }
    public function mostra($id)
    {
        $produto = Product::find($id);

        if (view()->exists('product.detalhes')) {
            if (empty($produto)) {
                return "Esse produto não existe";
            } else {
                return view('product.detalhes')->withp($produto) ;
            }
        }
    }

    public function remove($id)
    {
        $produto = Product::find($id);
        $produto->delete();
        return redirect('/produtos');
    }

    public function edita($id)
    {
        $produto=Product::find($id);
        if (view()->exists('product.editar')) {
            return view('product.editar')->withp($produto);
        }
    }

    public function editar()
    {
        $id   = Request::input('id');
        $params = Request::all();
        $produto = Product::find($id);
        $produto->update($params);

        return redirect()
  ->action('ProductController@lista')
  ->withInput(Request::only('nome', 'valor'));
    }

    public function novo()
    {
        if (view()->exists('product.formulario')) {
            return view('product.formulario')->with('categorias', Category::all());
        }
    }

    public function adiciona(ProdutoRequest $request)
    {
        $params=$request->all();
        $produto=new Product($params);
        $produto->save();

        return redirect()
->action('ProductController@lista')
->withInput(Request::only('name'));
    }
}
