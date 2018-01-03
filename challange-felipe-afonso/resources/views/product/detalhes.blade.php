@extends('layout.principal')

@section('conteudo')
    <div class="container">
      <h1>Detalhe do Produto: {{ $p->name}} </h1>
      <ul>
   <li>
     <b>Preço:</b> R$  {{$p->price}}
   </li>
   <li>
     <b>Descrição:</b>  {{$p->description or 'não tem descrição'}}
   </li>
   <li>
     <b>Quantidade em estoque:</b>  {{$p->qtd}}
   </li>
 </ul>
    </div>
    @stop
