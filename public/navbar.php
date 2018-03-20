
<!DOCTYPE html>

<html>
    <head>
    <title>Inicio</title>
<link REL="stylesheet" TYPE="text/css" HREF="/inmobiliaria/public/stylesheets/navbar.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
    <style>
        
        </style>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
        
 </head>
    
<body>
<div class="header" id="Header">
<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#"><h1>Donokasa</h1></a>
  <div class="center">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Contacto <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Noticias
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">ultimas</a>
          <a class="dropdown-item" href="#">mas visto</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Todas</a>
        </div>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Novedades
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Pisos</a>
          <a class="dropdown-item" href="#">Locales</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Ofertas</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
      <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Busqueda</button>
    </form>
    <ul class="navbar-nav right">
        
    <li class="nav-item dropdown active" id="offUser">
            
            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuario</a>
            <div class="dropdown-menu">
            <form method="post" action="/inmobiliaria/">
            <button class="dropdown-item" id="Reset" Style="display:none;">Volver</button>
            <button class="dropdown-item" id="Register" >Registrarse</button>
            <button class="dropdown-item" id="Login" >Entrar</button>
            <input type="text" name="e" class="dropdown-item " id="Email" placeholder="Email address" required pattern='^[^@]+@[^@]+\.[^@]{2,3}$' minlength="8" maxlength="40" required Style="display:none;">
            <input type="text" name="u" class="dropdown-item " id="Username" Style="display:none;" placeholder="Username" required pattern="[A-z0-9À-ž]{3,15}$" minlength="3" maxlength="15">
            <input type="password" name="p" class="dropdown-item " id="Password" Style="display:none;" placeholder="Password" required pattern="(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{8,40}" minlength="8" maxlength="40" required>
            <input type="hidden" name="key" value="userLog" required>
            <input type="submit" class="dropdown-item " id="Submit" Style="display:none;">
            </form>
            </div> 
        
      </li>
        
        <li class="nav-item dropdown active" id="onUser">
            
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Mi usuario
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="">Administrar cuenta</a>
          <a class="dropdown-item" href="#">Ver favoritos</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Salir</a>
        </div>
            
      </li>
        
        <li class="nav-item dropdown active" id="adminUser">
            
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Zona Admin
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/inmobiliaria/views/addnoticeform.php">Administrar Inmuebles</a>
          <a class="dropdown-item" href="#">Administrar Noticias</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Administrar Usuarios</a>
        </div>
            
      </li>
        
     </ul>
      
      </div>
  </div>
</nav>
    </div>