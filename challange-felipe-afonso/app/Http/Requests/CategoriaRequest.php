<?php

namespace challange\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriaRequest extends FormRequest
{
  public function authorize()
  {
      return true;
  }


  public function rules()
  {
      return [
          'name' => 'required|min:3'
      ];
  }
}
