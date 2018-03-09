<?PHP
if (! defined("ROOT")) {require 'C:\xampp\htdocs\inmobiliaria/config.php';}

if ( !empty($_POST['a'])){
    
    require ROOT . '/models/adduser.php';
    
}

if ( !empty($_POST['l'])){

    require ROOT . '/views/login.php';

}

if ( empty($_POST['a']) && empty($_POST['l']) && empty($_POST['r']) && empty($_POST['c'])){
    
    require ROOT . '/views/login.php';
    
}
?>