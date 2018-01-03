@extends('layout.principal')

@section('conteudo')

  <form action="/produtos/editar/" method="POST">
    <input  type="hidden" value="{{ csrf_token() }}" name="_token" />
    <input  type="hidden" value="{{ $p->id }}" name="id" />
    <div class="form-group">
      <label>SKU</label>
      <input class="form-control" name="sku" value="{{ $p->sku }}" />
    </div>
    <div class="form-group">
      <label>Nome</label>
      <input class="form-control" name="name" value="{{ $p->name }}" />
    </div>
    <div class="form-group">
      <label>Valor</label>
      <input class="form-control" name="price" value="{{ $p->price }}"/>
    </div>
    <div class="form-group">
      <label>Quantidade</label>
      <input class="form-control" type="number" name="qtd" value="{{ $p->qtd }}" />
    </div>
    <div class="form-group">
      <label>Descrição</label>
      <textarea name="description" class="form-control">{{ $p->description }}</textarea>
    </div>

    <button class="btn btn-primary" type="submit">Adicionar</button>
  </form>


@endsection
