<?PHP
//ejecuta la funcion que se le indique
if( !empty( $_GET['metodo'] ) ) {
     
    $metodo = $_GET['metodo'];
    $metodo();
}
//iniciar la sesion si no esta abierta
if( empty( $_SESSION['Jugador'] ) ) {
IniciarSesion();  
}else if( empty( $_GET['metodo'] ) ){Menu();}
//carga el inicio de sesion
function IniciarSesion(){
require_once ("./view/IniciarSesion.php");    
};
//carga el menu
function Menu(){    
require_once ("./model/Config.php");
require_once ("./view/menu.php");   
};
//carga el Siete y medio
function SYM(){
require_once ("../model/Config.php");    
require_once ("../model/clases/Juego.php");
require_once ("../view/interfaz/InterfazSYM.php");
require_once ("../model/clases/Sieteymedio.php");   
require_once ("../model/Model.php");
require_once ("../view/VistaSYM.php");     
}
//llama a empezar el juego
function JugarMaquina(){
SYM();
JugarContraIA();      
}
function Baraja(){
SYM();
 Carta();   
}
function VerCartas(){
 SYM();
 VerBaraja();      
}
function SacarCarta(){
SYM();
 Sacar();           
}
function PasarTurno(){
SYM();
 PasarJugador();           
}
function CerrarSesion(){
  session_start();
   session_reset(); 
}
?>