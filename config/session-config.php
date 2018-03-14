<?php

session_start();

//registered user
if ( empty($_POST['e']) && !empty($_POST['u'])){
    unset($_SESSION['ID']);
    unset($_SESSION['USER']);
    unset($_SESSION['ADMIN']);
    session_destroy();
    //Define el id de la sesion   
    $_SESSION['ID'] = $id;  
    //Define el nombre de la sesion   
    $_SESSION['USER'] = $username;
    //Define los permisos de la sesion   
    $_SESSION['ADMIN'] = $pri;
}

//new user
if ( !empty($_POST['e']) && !empty($_POST['u'])){
    unset($_SESSION['ID']);
    unset($_SESSION['USER']);
    unset($_SESSION['ADMIN']);
    session_destroy();
    //Define el id de la sesion   
    $_SESSION['ID'] = ID;  
    //Define el nombre de la sesion   
    $_SESSION['USER'] = USERNAME;
    //Define los permisos de la sesion   
    $_SESSION['ADMIN'] = false;
}

//Anonimo
if ( empty($_POST['e']) && empty($_POST['u'])){
    unset($_SESSION['ID']);
    unset($_SESSION['USER']);
    unset($_SESSION['ADMIN']);
    session_destroy();
    if( empty( $_SESSION['ID'] ) ) {
        $_SESSION['ID'] = 1;  
        if( empty( $_SESSION['USER'] ) ) {
            $_SESSION['USER'] = "Unregistered";  
        }
        if( empty( $_SESSION['ADMIN'] ) ) {
            $_SESSION['ADMIN'] = false;  
        }
    }
}
?>