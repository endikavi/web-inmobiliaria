<?PHP
//root
if (! defined("ROOT")) { define("ROOT",'C:/xampp/htdocs/inmobiliaria');}

if ( !empty($_POST['e'])){
    
    require ROOT . '/models/adduser.php';
    
}

if ( empty($_POST['e'])){

    require ROOT . '/views/checkuser.php';

}
?>