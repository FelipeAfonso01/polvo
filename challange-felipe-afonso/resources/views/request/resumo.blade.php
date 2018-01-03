@extends('layout.principal')

@section('conteudo')
    <div class="container">
      <h1>Resumo de seu Pedido </h1>
      <ul>
        <li>
          <b>Produto:</b> {{$produto->name}}
        </li>
        <li>
          <b>Preço do Produto:</b> {{$produto->price}}
        </li>

       <li>
         <b>Preço Total da Compra:</b> R$  {{$pedido->total}}
       </li>
       <li>
         <b>Data da Compra:</b> {{$pedido->date}}
       </li>
 </ul>
    </div>
    @stop
