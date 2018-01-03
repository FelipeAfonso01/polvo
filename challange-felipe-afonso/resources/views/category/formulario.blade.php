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
  <form action="/categorias/adiciona" method="POST">
    <input  type="hidden" value="{{ csrf_token() }}" name="_token" />
    <div class="form-group">
      <label>Nome</label>
      <input class="form-control" name="name" value="{{ old('name') }}"/>
    </div>
    <button class="btn btn-primary" type="submit">Adicionar</button>
  </form>


@endsection
