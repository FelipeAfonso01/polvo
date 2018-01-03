<?php

namespace challange\Http\Controllers;

use Request;
use challange\Category;
use challange\Http\Requests\CategoriaRequest;

class CategoryController extends Controller
{
  public function lista(){
      $categorias = Category::all();
    return view('category.listagem')->withc($categorias);
  }

  public function edita($id){
        $categoria=Category::find($id);
        return view('category.edita')->withc($categoria);
    }

    public function editar(){
      $id   = Request::input('id');
     $params = Request::all();
    $categoria=Category::find($id);
    $categoria->update($params);

      return redirect()
      ->action('CategoryController@lista')
      ->withInput(Request::only('name'));

    }

    public function novo(){
        return view('category.formulario');
    }

    public function adiciona(CategoriaRequest $request){
      $params=$request->all();
      $categoria=new Category($params);
      $categoria->save();

    return redirect()
    ->action('CategoryController@lista')
    ->withInput(Request::only('nome'));
  }

  public function remove($id){
      $categoria = Category::find($id);
      $categoria->delete();
      return redirect('/categorias');
  }
}
