<?PHP
//Inicia sesion
session_start(); 
//Define el nombre de la sesion
if( !empty( $_GET['Jugador'] ) ) {   
$_SESSION['Jugador'] = $_GET['Jugador'];  
}

//Define las vidas del jugador
if( empty( $_SESSION['Vidas'] ) ) {
$_SESSION['Vidas'] = 5;  
}
//Define el record del jugador
if( empty( $_SESSION['Record'] ) ) {
$_SESSION['Record'] = 0;   
}

if( empty( $_SESSION['Key'] ) ) {
$_SESSION['Key'] = 1;   
}

if( empty( $_SESSION['Key2'] ) ) {
$_SESSION['Key2'] = $_SESSION['Key'];   
}

if( empty( $_SESSION['JugadorValor'] ) ) {
 $_SESSION['JugadorValor'] = 0;
}

if( empty( $_SESSION['IAValor'] ) ) {
 $_SESSION['IAValor'] = 0;
}


//Define la baraja con la que jugara el jugador
if( empty( $_SESSION['Baraja'] ) ) {   

 $_SESSION['Baraja'] = array(
    1    => "As de oros",
    2    => "Dos de oros",
    3    => "Tres de oros",
    4    => "Cuatro de oros",
    5    => "Cinco de oros",
    6    => "Seis de oros",
    7    => "Siete de oros",
    8    => "Sota de oros",
    9    => "Caballo de oros",
    10   => "Rey de oros",
    11   => "As de bastos",
    12   => "Dos de bastos",
    13   => "Tres de bastos",
    14   => "Cuatro de bastos",
    15   => "Cinco de bastos",
    16   => "Seis de bastos",
    17   => "Siete de bastos",
    18   => "Sota de bastos",
    19   => "Caballo de bastos",
    20   => "Rey de bastos",
    21   => "As de copas",
    22   => "Dos de copas",
    23   => "Tres de copas",
    24   => "Cuatro de copas",
    25   => "Cinco de copas",
    26   => "Seis de copas",
    27   => "Siete de copas",
    28   => "Sota de copas",
    29   => "Caballo de copas",
    30   => "Rey de copas",
    31   => "As de espadas",
    32   => "Dos de espadas",
    33   => "Tres de espadas",
    34   => "Cuatro de espadas",
    35   => "Cinco de espadas",
    36   => "Seis de espadas",
    37   => "Siete de espadas",
    38   => "Sota de espadas",
    39   => "Caballo de espadas",
    40   => "Rey de espadas",
);
}

if( empty( $_SESSION['BarajaValor'] ) ) {   

 $_SESSION['BarajaValor'] = array(
  "As de oros"                => 1,   
  "Dos de oros"              => 2,
  "Tres de oros"             => 3,
  "Cuatro de oros"            => 4,
  "Cinco de oros"             => 5,
  "Seis de oros"              => 6, 
  "Siete de oros"             => 7,  
  "Sota de oros"              => 0.5, 
  "Caballo de oros"           => 0.5,  
  "Rey de oros"              => 0.5,
  "As de bastos"              => 1,    
  "Dos de bastos"            => 2,
  "Tres de bastos"            => 3,
  "Cuatro de bastos"         => 4,
  "Cinco de bastos"           => 5,
  "Seis de bastos"            => 6, 
  "Siete de bastos"           => 7,  
  "Sota de bastos"           => 0.5, 
  "Caballo de bastos"         => 0.5,  
  "Rey de bastos"             => 0.5,
  "As de copas"               => 1,
  "Dos de copas"              => 2,
  "Tres de copas"             => 3,
  "Cuatro de copas"           => 4,
  "Cinco de copas"            => 5,
  "Seis de copas"             => 6,
  "Siete de copas"            => 7,
  "Sota de copas"             => 0.5,
  "Caballo de copas"          => 0.5,
  "Rey de copas"              => 0.5,
  "As de espadas"             => 1,
  "Dos de espadas"            => 2,
  "Tres de espadas"           => 3,
  "Cuatro de espadas"         => 4,
  "Cinco de espadas"          => 5, 
  "Seis de espadas"           => 6,
  "Siete de espadas"          => 7,
  "Sota de espadas"           => 0.5,
  "Caballo de espadas"        => 0.5,
  "Rey de espadas"            => 0.5,
);
}
?>