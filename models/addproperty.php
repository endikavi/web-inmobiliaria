<?php

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
$banos=($_POST['ba']);
$habitaciones=($_POST['ha']);
$acceso=($_POST['ac']);
$plantas=($_POST['pl']);
$descripcion=($_POST['de']);
$fecha=(date('YmdHis'));
$salon=($_POST['Sal']);
$desvan=($_POST['Desv']);
$sotano=($_POST['sota']);
$cocina=($_POST['coci']);
$id = strlen($descripcion) * strlen($metros) - strlen($pertenencia) + rand(1,50) * rand (10,2000) . strlen($provincia);

$imagenes=(imageArray($id));
$imagenpri = "/inmobiliaria/public/images/" . $id . $key . "0-" . $_FILES["file"]["name"][0];

function imageArray($id){
	$dir_subida = 'F:/xampp/htdocs/inmobiliaria/public/images/';
	$imagenes = " Imagenes ";
	
	foreach ($_FILES["file"]["error"] as $key => $error){	
        
       	$imagenes = $id . $key . "-" . $_FILES["file"]["name"][$key] . " , " . $imagenes;
		
        $nombre_tmp = $_FILES["file"]["tmp_name"][$key];
		
        $nombre = basename($_FILES["file"]["name"][$key]);
		
        move_uploaded_file($nombre_tmp, $dir_subida . $id . $key . "-" . $nombre);
		
    }
	
	print $imagenes;
    return $imagenes;
	
}

require ('connection.php');

$sql="INSERT INTO inmuebles (id_inmueble,tipo,localizacion,provincia,ciudad,calle,situacion,descripcion,metroscuadrados,valor,categoria,pertenencia,imagenes,fecha,imagenpri) VALUES ($id,'$tipo','$provincia,$ciudad,$calle,$puerta','$provincia','$ciudad','$calle,$puerta','$situacion','$descripcion',$metros,$precio,$categoria,'$pertenencia','$imagenes',$fecha,'$imagenpri'); INSERT INTO zonas (id_inmueble,banos,habitaciones,jardin,terraza,balcon,patio,piscina,garaje,ascensor,pisos,cocina,sotano,desvan,salon) VALUES ($id,$banos,$habitaciones,$jardin,$terraza,$balcon,$patio,$piscina,$garaje,$ascensor,$plantas,$cocina,$sotano,$desvan,$salon); INSERT INTO servicios (id_inmueble,conserje,seguridad,accesominusvalidos,zonacomunitaria) VALUES ($id,$conserje,$seguridad,$acceso,$zona); INSERT INTO votos (visitas,id_inmueble) VALUES (1,$id)";

$result=$pdo->exec($sql);
print_r ($result);

if($result==false){
    echo "ERROR:No fue posible ejecutar $sql  ".print_r($pdo->errorInfo());
}else{header("Location: /inmobiliaria");}



unset($pdo);

?>