<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- @stack('style') -->
    <!-- Icones - https://materializecss.com/icons.html -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style type="text/css">
        .mt-2 {
            margin-top: 1.5rem;
        }
    </style>
</head>
<body>

  <!-- Dropdown Structure -->
  <ul id='dropdown1' class='dropdown-content'>
    @foreach($categoriasMenu as $categoriaM)
    <li><a href="{{ route('site.categoria', $categoriaM->nome) }}">{{ $categoriaM->nome }}</a></li>
    @endforeach
  </ul>

  <nav class="red">
    <div class="nav-wrapper container">
      <a href="#" class="brand-logo center">Curso LARAVEL</a>
      <ul id="nav-mobile" class="leftt">
        <li><a href="{{ route('site.index') }}">Home</a></li>
        <li><a class="dropdown-trigger" data-target="dropdown1">Categorias <i class="material-icons right">expand_more</i> </a></li>
        <li><a href="">Carrinho</a></li>
      </ul>
    </div>
  </nav>

@yield('conteudo')

<footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="{{ route('site.index') }}">Home</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Carrinho</a></li>
                  <!-- <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li> -->
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<!-- @stack('script') -->
<script>
var elemDrop = document.querySelectorAll('.dropdown-trigger');

var instanceDrop = M.Dropdown.init(elemDrop, {
          coverTrigger:false,
              constrainWidth:false 
});
</script>
</body>
</html>