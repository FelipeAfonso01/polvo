@extends('layout.principal')

@section('conteudo')

  <form action="/categorias/editar/" method="POST">
    <input  type="hidden" value="{{ csrf_token() }}" name="_token" />
    <input  type="hidden" value="{{ $c->id }}" name="id" />

    <div class="form-group">
      <label>Nome</label>
      <input class="form-control" name="name" value="{{ $c->name }}" />
    </div>
    <button class="btn btn-primary" type="submit">Alterar</button>
  </form>


@endsection
