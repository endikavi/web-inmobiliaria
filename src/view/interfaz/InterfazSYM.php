<?PHP
   

interface interfazSYM {
    
    
public function EmpezarVista(); //Método con el que se empieza a mostrar el juego
public function FinalizarVista(); //Método que da por finalizado la visualizacion del juego
public function MuestraTitulo(); //Método que muestra el Titulo del juego
public function MuestraInfo(); //Método que muestra la informacíon del juego    
public function MuestraVida(); //Método que muestra la vida del jugador
public function MuestraPuntos(); //Método que muestra los puntos del jugador
public function MuestraNombre(); //Método que muestra el nombre del jugador
public function MuestraCartasJugador(); //Método que muestra las cartas del jugador    
public function MuestraCartasMaquina(); //Método que muestra las cartas del jugador    
public function MuestraValorJugador(); //Método que muestra las cartas del jugador
public function MuestraValorMaquina(); //Método que muestra las cartas del jugador    
public function MuestraRecordsGuardados(); //Método que muestra las cartas del jugador      
}

?>