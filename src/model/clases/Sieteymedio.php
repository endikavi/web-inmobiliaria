<?PHP

class JuegoSieteMedio extends Juego implements InterfazSYM{
    
//Atributos y constructor
public $jugador = "predeterminado";    
public static $vidasIniciales = 5;
public $vidasRestantes = 5;
public $recordActual = 0;
public static $recordInicial = 0;
public static $informacion = "En este juego de cartas,debes conseguir acercarte lo maximo posible al 7,5 sin pasarte y sacando mayor puntuaccion que tu contrincante.Empiezas con 5 vidas y se te restara una cada vez que pierdas";
public static $titulo = "Siete y medio";   
    
public function __construct($jugador,$vidasRestantes,$recordActual)
  {
    $this->jugador = $jugador;
    $vidasRestantes = self::$vidasIniciales; 
    $this->vidaR = $vidasRestantes;
    $recordActual =  self::$recordInicial;  
    $this->recordA = $recordActual;
   
    
    return true;

  } 
    
//metodos heredados de la clase juego
    
public function EmpezarJuego(){return "jugando";} //Método con el que se juega
public function FinalizarJuego(){return "juego finalizado";} //Método que da por finalizado el juego      
public function QuitarVida(){return true;}//Quita una vida al juego devuelve false si mueres.
public function ReiniciarPartida(){return true;}//Pone las vidas restantes a vidas iniciales.
public function ActualizarRecord(){return true;}//Actualiza el record si se supera e informa.
public function AumentarRecord(){return true;}//Aumentar el record si se gana e informar.    
public function ActualizarVidasRestantes(){return true;}//vidas_rest
  
    
//metodos de la interfaz    
    
public function EmpezarVista(){return "jugando";} //Método con el que se juega
public function FinalizarVista(){return "juego finalizado";} //Método que da por finalizado el juego
public function MuestraTitulo(){return self::$titulo;} //Método que almacena el nombre del juego
public function MuestraInfo(){return self::$informacion;} //Método que almacena el nombre del juego    
public function MuestraVida(){   
return $this->vidaR;   
}
public function MuestraPuntos(){   
return $this->recordA;   
}
public function MuestraNombre(){   
return $this->jugador;   
}   
public function MuestraCartasJugador(){   
return true;  
}      
public function MuestraCartasMaquina(){   
return true;  
}
public function MuestraValorJugador(){   
return true;  
}      
public function MuestraValorMaquina(){   
return true;  
} 
public function MuestraRecordsGuardados(){   
return true;  
}      
//metodos propios de la clase siete y medio    
    
public function DesordenarBaraja($my_array = array()) {
  $copy = array();
  while (count($my_array)) {
    // takes a rand array elements by its key
    $element = array_rand($my_array);
    // assign the array and its value to an another array
    $copy[$element] = $my_array[$element];
    //delete the element from source array
    unset($my_array[$element]);
  }

  return $copy;
}

public function SacarCartaJugador(){
    
 return true;   
    
}   
public function SacarCartaMaquina(){return true;}   
public function CompararValor(){return true;}   public function PasarTurno(){return true;} 
    
    
}



  $personaje1 = new JuegoSieteMedio($_SESSION['Jugador'],0,0);  

?> 

