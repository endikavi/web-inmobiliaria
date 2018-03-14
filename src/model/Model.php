<?PHP 


//sin salidas a pantalla,usar return
         
function Info($personaje){
    
return $personaje->MuestraInfo();
    
}

function Titulo($personaje){
    
return $personaje->MuestraTitulo();
    
}

function Vida($personaje){
    
return $personaje->MuestraVida();
    
}

function puntuacion($personaje){
    
return $personaje->MuestraPuntos();
    
}

function Nombre($personaje){
    
return $personaje->MuestraNombre();
    
}

function Carta(){
    
     
  $Baraja = (JuegoSieteMedio::DesordenarBaraja($_SESSION['Baraja']));
   $_SESSION['Baraja'] = $Baraja;
};   

function VerBaraja(){
  for ($i = 1; $i <= 40; $i++) {
    print $_SESSION['Baraja'][key($_SESSION['Baraja'])]."<br>";
      next($_SESSION['Baraja']);
};
reset($_SESSION['Baraja']);
}
function Sacar(){
   $_SESSION['JugadorValor'] = 0;
  for ($i = $_SESSION['Key2']; $i <= $_SESSION['Key']; $i++) {
    $TempCarta = $_SESSION['Baraja'][key($_SESSION['Baraja'])];
    $_SESSION['JugadorValor'] = ($_SESSION['JugadorValor'] + $_SESSION['BarajaValor'][$TempCarta]);
    print $TempCarta."  Valor total: ".$_SESSION['JugadorValor']."<br>";
     next($_SESSION['Baraja']);};
    $_SESSION['Key'] = ($_SESSION['Key'] + 1);
    
    
}

function PasarJugador(){
  $_SESSION['Key2'] = $_SESSION['Key'];
    /*for ($i = $_SESSION['Key']; $i <= $_SESSION['Key2']; $i++) {
    $TempCarta = $_SESSION['Baraja'][key($_SESSION['Baraja'])];
    $_SESSION['JugadorValor'] = ($_SESSION['IAValor'] + $_SESSION['BarajaValor'][$TempCarta]);
    print $TempCarta."  Valor total: ".$_SESSION['JugadorValor']."<br>";
     next($_SESSION['Baraja']);};
    $_SESSION['Key2'] = ($_SESSION['Key2'] + 1);*/
    $_SESSION['JugadorValor'] = 0;
}


?>