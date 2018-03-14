<?php?>
<!DOCTYPE html>
<html>
    <head><title>Menu</title></head>
<body>
    <h1>Bienvenido <?PHP 
 print $_SESSION['Jugador'];
?></h1>
<div id="menu">
  <ul>
    <li><a href="/poo/src/controller/Controller.php?metodo=SYM" >Siete y medio</a></li>
    <li><a href="/poo/src/controller/Controller.php?metodo=SYM">Juego 2</a></li>
    <li><a href="/poo/src/controller/Controller.php?metodo=SYM">Juego 3</a></li>
    <li><a href="/poo/src/controller/Controller.php?metodo=CerrarSesion">Cerrar sesion</a></li>
  </ul>
</div>
</body>
</html>