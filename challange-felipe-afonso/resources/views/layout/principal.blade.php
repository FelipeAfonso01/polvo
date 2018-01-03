<!DOCTYPE html>
  <head>
    <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">
        <link href="/css/app.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="/js/bootstrap.js"></script>
        <script src="/js/app.js"></script>
        <link href="/css/custom.css" rel="stylesheet">
        <title>PHP Challange</title>
    </head>
    <body>
      <div class="container">

      <nav class="navbar navbar-default">
        <div class="container-fluid">

        <div class="navbar-header">
          <a class="navbar-brand" href="/produtos">PHP Challange</a>
        </div>

        <ul class="nav navbar-nav navbar-right">
  <li>
      <a href="{{action('ProductController@lista')}}">
          Listagem
      </a>
  </li>
  <li>
      <a href="{{action('ProductController@novo')}}">
          Novo Produto
      </a>
  </li>
  <li>
      <a href="/categorias">
          Categorias
      </a>
  </li>
  <li>
      <a href="/pedidos">
          Pedido
      </a>
  </li>
  @if (!Auth::guest())
     <li>
       <a href="#">{{ Auth::user()->name }}</a>
     </li>
      <li>
         <a href="/logout">Logout</a>
       </li>

   @endif


</ul>

        </div>
      </nav>

        @yield('conteudo')

      <footer class="footer">
          <p>© Felipe Afonso</p>
      </footer>

      </div>
      <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
    </body>
    </html>
