<?php

//registered user
if ( !empty($_POST['e']) && !empty($_POST['p']) && empty($_POST['u'])){
    //Define el id de la sesion   
    $_SESSION['ID'] = ID;  
    //Define el nombre de la sesion   
    $_SESSION['USER'] = USERNAME;
    //Define los permisos de la sesion   
    $_SESSION['ADMIN'] = ADMIN;
}

//new user
if ( !empty($_POST['e']) && !empty($_POST['u']) && !empty($_POST['p'])){
    //Define el id de la sesion   
    $_SESSION['ID'] = ID;  
    //Define el nombre de la sesion   
    $_SESSION['USER'] = USERNAME;
    //Define los permisos de la sesion   
    $_SESSION['ADMIN'] = 0;
}

//salir
if ( empty($_POST['e']) && empty($_POST['u']) && empty($_POST['p'])){
    unset($_SESSION['ID']);
    unset($_SESSION['USER']);
    unset($_SESSION['ADMIN']);
    session_destroy();
	header("Location: /inmobiliaria");
}
?>