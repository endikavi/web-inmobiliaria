<?php

if (! defined("ROOT")) {require 'C:\xampp\htdocs\inmobiliaria/config.php';}

$tipo=($_POST['t']);
$situacion=($_POST['si']);
$metros=($_POST['m']);
$precio=($_POST['pr']);
$categoria=($_POST['cat']);
$pertenencia=($_POST['pe']);
$provincia=($_POST['p']);
$ciudad=($_POST['ci']);
$calle=($_POST['ca']);
$puerta=($_POST['po']);
$conserje=($_POST['co']);
$seguridad=($_POST['se']);
$jardin=($_POST['ja']);
$terraza=($_POST['te']);
$balcon=($_POST['ba']);
$patio=($_POST['pa']);
$piscina=($_POST['pi']);
$garaje=($_POST['ga']);
$ascensor=($_POST['as']);
$zona=($_POST['zo']);
$baños=($_POST['ba']);
$habitaciones=($_POST['ha']);
$acceso=($_POST['ac']);
$plantas=($_POST['pl']);
$descripcion=($_POST['de']);
$imagenes=(json_encode(imageArray()));

$dir_subida = 'C:\xampp\htdocs\inmobiliaria\public\images\ ';

function imageArray(){
    $imagenes= array();
    foreach ($_FILES["file"]["error"] as $clave => $error) {
        
        if ($error == UPLOAD_ERR_OK) {
            
            $imagenes[] = $_FILES["file"]["name"][$clave];
            
        }
        
    }
    return $imagenes;
}

foreach ($_FILES["file"]["error"] as $clave => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $nombre_tmp = $_FILES["file"]["tmp_name"][$clave];
        $nombre = basename($_FILES["file"]["name"][$clave]);
        move_uploaded_file($nombre_tmp, $dir_subida.$nombre);
    }
}

require (ROOT . '/models/connection.php');

$id = strlen($descripcion) * strlen($metros) - strlen($pertenencia) + rand(1,50) * rand (10,2000) . strlen($provincia);

$sql="INSERT INTO inmuebles (id_inmueble,tipo,localizacion,situacion,descripcion,metroscuadrados,valor,categoria,pertenencia) VALUES ($id,'$tipo','$provincia,$ciudad,$calle,$puerta','$situacion','$descripcion',$metros,$precio,$categoria,'$pertenencia')";


$result=$pdo->exec($sql);


if($result==false){
    echo "ERROR:No fue posible ejecutar $sql  ".print_r($pdo->errorInfo());
}else{
    require ROOT . '/controller/mainctrl.php';
}

unset($pdo);

?>