

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand main-title" href="#">Stone MakeUp</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="true" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand main-title href="{{ route('home') }}">FiSO</a>

  <div class="navbar-collapse collapse show" id="navbarColor01" style="">
   <p class="navbar-text">My laravel store></p>
    <ul class="nav navbar-nav navbar-right">
     <li><a href="{{ route('cart-show') }}"><i class="fa fa-shopping-cart"></i></a></li> 
        <li><a href="#">Conocenos</a></li>
        <li><a href="#">AContacto</a></li>

     <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user"></i><span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">Iniciar sesion</a></li>
       

    </ul>
  </li>
  </ul>
  </div>

</nav>