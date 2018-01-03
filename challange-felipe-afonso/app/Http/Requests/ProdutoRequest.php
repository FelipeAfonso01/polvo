<?php

namespace challange\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
{
  public function authorize()
  {
      return true;
  }


  public function rules()
  {
      return [
          'name' => 'required|min:3',
          'description' => 'required|max:250',
          'price' => 'required|numeric',
          'qtd' => 'required|numeric',
          'sku' => 'required|max:50'

      ];
  }
  public function messages()
  {
      return [
          'required' => 'O campo :attribute é obrigatório.',
      ];
  }
}
