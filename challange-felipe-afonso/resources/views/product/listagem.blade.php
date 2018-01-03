@extends('layout.principal')


@section('conteudo')


@if(empty($produtos))

<div class="alert alert-danger">
  Você não tem nenhum produto cadastrado.
</div>

@else


    <div class="container">
      <h1>Listagem de Produtos</h1>
      @if(old('name'))
          <div class="alert alert-success">
        @if(old('price'))
            <strong>Sucesso!</strong> O produto {{ old('name') }} foi alterado.
        @else
          <strong>Sucesso!</strong> O produto {{ old('name') }} foi adicionado.
        @endif
      </div>
      @endif

      <table class="table">
          @foreach($produtos as $p)
        <tr class="{{$p->qtd <=1 ? 'danger' : ''}}">
          <td>{{ $p->name}} </td>
          <td>{{ $p->price}} </td>
          <td>{{ $p->description }}</td>
          <td>{{ $p->qtd }}</td>
          <td><a href='/produtos/mostra/{{ $p->id }} ' data-toggle="tooltip" data-placement="top" title="Ver mais detalhes do {{$p->name}}!"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></td>
          <td><a href='/produtos/remove/{{ $p->id }}' data-toggle="tooltip" data-placement="top" title="Deletar o {{$p->name}}!"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
          <td><a href='/produtos/edita/{{ $p->id }}' data-toggle="tooltip" data-placement="top" title="Editar o {{$p->name}}!"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>

        </tr>
      @endforeach
      </table>
      <h4>
    <span class="label label-danger pull-right">
      Um ou menos itens no estoque
    </span>
  </h4>
    </div>

    @endif
@stop
