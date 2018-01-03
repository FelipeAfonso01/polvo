@extends('layout.principal')


@section('conteudo')

  <h1>Listagem de Categorias</h1>
  <h4>Nova Categoria:  <a href='/categorias/novo/'><span class="sm glyphicon glyphicon-plus" aria-hidden="true"></span></a></h4>
  @if(old('name'))
      <div class="alert alert-success">
        <strong>Sucesso!</strong> A categoria {{ old('name') }} foi alterado.
      </div>
  @endif
  <table class="table">
    @foreach($c as $categoria)
      <tr>
        <td>{{$categoria->name}}</td>
        <td><a href='/categorias/remove/{{ $categoria->id }}'><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
        <td><a href='/categorias/edita/{{ $categoria->id }}'><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>

      </tr>
    @endforeach
  </table>
@stop
