<?PHP
//root
if (! defined("ROOT")) { define("ROOT",'C:/xampp/htdocs/inmobiliaria');}
//ejecuta la funcion que se le indique
if( !empty( $_GET['metodo'] ) ) {
     
    $metodo = $_GET['metodo'];
    $metodo();
}else{viewIndex();}

if( empty( $_SESSION['ID'] ) ) {
inciarSesion(); 
}

function viewIndex(){
    
    require ROOT . '/config/session-config.php';
    require ROOT . '/public/navbar.php';
    require ROOT . '/public/slider.php';
    require ROOT . '/public/main-content.php';
    
}

function iniciarSesion(){
    
    require ROOT . '/session-config.php';
    
}

function viewGallery(){
    
    
    
}

function viewManager(){
    
    
    
}

?>