<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">   
<link rel="stylesheet" href="../view/css/Estilo.css">    
<title>Menu siete y medio</title>    
</head>
<body>
<div class="centrado">

<div class="titulo">
<h1><?PHP 
    
echo Titulo($personaje1); 
    
?></h1>
    </div>
<div class="informacion">
<h2><?PHP 
    
echo Info($personaje1); 
    
?>
</h2>
    </div>
<div class="hub">
  
    <p class="vidas">Vidas: <?PHP print_r (Vida($personaje1)); ?></p>
    
    <p class="nombre">Jugador: <?PHP print_r (Nombre($personaje1)); ?></p>
    
    <p class="puntuacion">Puntuacíon: <?PHP print_r (Puntuacion($personaje1)); ?></p>
    
    <p class="valor"><?PHP?></p>
  
  <div id="menu">
 
    
    
    
      <form method="get" action="controller.php">
      <input style="display:none" name="metodo" value="JugarDos">
     <input type=submit value="Jugar contra otro jugador"></form>
    
      <form method="get" action="controller.php">
      <input style="display:none" name="metodo" value="JugarIA">
      <input type=submit value="Jugar contra la maquina"></form>
    
      <form method="get" action="controller.php">
      <input style="display:none" name="metodo" value="VerRecords">
      <input type=submit value="Ver records"></form>
     
     
      <form method="get" action="../index.php">
      <input type=submit value="Menu"></form>
      
      
      <form method="get" action="controller.php">
      <input style="display:none" name="metodo" value="Baraja">
      <input type=submit value="Desordenar Baraja"></form>
      
      <form method="get" action="controller.php">
      <input style="display:none" name="metodo" value="VerCartas">
      <input type=submit value="Ver Baraja"></form>
      
      <form method="get" action="controller.php">
      <input style="display:none" name="metodo" value="SacarCarta">
      <input type=submit value="Pedir Carta"></form>
      
      <form method="get" action="controller.php">
      <input style="display:none" name="metodo" value="PasarTurno">
      <input type=submit value="Pasar Turno"></form>
  
</div>
  
   
   <div class="baraja">
 <h3><?PHP 
    
//echo Carta($personaje1); 
    
?></h3>
    </div>   
   
    </div>   

   
    </div>

</body>
</html>