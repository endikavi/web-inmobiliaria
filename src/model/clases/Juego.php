<?PHP
abstract class Juego {

abstract public function EmpezarJuego(); //Método con el que se empieza el juego
abstract public function FinalizarJuego();//Método que da por finalizado el juego  
abstract public function QuitarVida(); //Quita una vida y manda false cuando no te queden.      
abstract public function ReiniciarPartida(); //Pone las vidas restantes a vidas iniciales.
abstract public function ActualizarRecord(); //Actualiza el record si se supera e informa.
abstract public function AumentarRecord(); //Aumentar el record si se gana e informa.    
abstract public function ActualizarVidasRestantes(); //actualiza vidas restantes 

}
?>