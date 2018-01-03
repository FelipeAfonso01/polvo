@extends('layout.principal')

@section('conteudo')

  @if (count($errors) > 0)
    <div class="alert alert-danger">
      <ul>
      @foreach($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
    </div>
  @endif

  <form action="/produtos/adiciona" method="POST">
    <input  type="hidden" value="{{ csrf_token() }}" name="_token" />
    <div class="form-group">
      <label>SKU</label>
      <input class="form-control" name="sku" value="{{ old('sku') }}"/>
    </div>
    <div class="form-group">
      <label>Nome</label>
      <input class="form-control" name="name" value="{{ old('name') }}"/>
    </div>
    <div class="form-group">
      <label>Preço</label>
      <input class="form-control" type="number" name="price" value="{{ old('price') }}"/>
    </div>
    <div class="form-group">
      <label>Quantidade</label>
      <input class="form-control" type="number" name="qtd"  value="{{ old('qtd') }}"/>
    </div>
    <div class="form-group">
      <label>Categoria</label>
      <select class="form-control"  name="category_id"  value="{{ old('category_id') }}">
        @foreach($categorias as $c)
        <option value="{{$c->id}}">{{$c->name}}</option>
      @endforeach
      </select>
    </div>
    <div class="form-group">
      <label>Descrição</label>
      <textarea name="description" class="form-control">{{ old('description') }}</textarea>
    </div>
    <button class="btn btn-primary" type="submit">Adicionar</button>
  </form>


@endsection
