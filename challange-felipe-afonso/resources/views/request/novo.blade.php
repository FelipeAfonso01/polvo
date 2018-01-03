@extends('layout.principal')
@section('conteudo')
  <h1>Novo Pedido</h1>
  <form action="/pedidos/adiciona" method="POST">
    <input  type="hidden" value="{{ csrf_token() }}" name="_token" />
    <div class="form-group">
      <label>Produto</label>
      <select class="form-control"  name="produtos"  value="{{ old('produtos') }}">
        @foreach($produtos as $p)
        <option value="{{$p->id}}">{{$p->name}}</option>
      @endforeach
      </select>
    </div>
    <div class="form-group">
      <label>Quantidade</label>
      <input class="form-control" type="number" name="qtd"  value="{{ old('qtd') }}"/>
    </div>

    <button class="btn btn-primary" type="submit">Finalizar Pedido</button>
  </form>

@stop
