<?php

define("HOST","localhost");
define("DBNAME","lindavista");
define("USER","root");
define("PASS","");
	
	try{
		$pdo=new PDO('mysql:host=localhost;dbname=inmobiliaria','root','');
		}
	catch(PDOException $e){
		die("ERROR:No fue posible conectarse ".$e->		getMessage());
	}
	
//intenta ejecutar consulta
//itera sobre la colección de resultados
//muestra cada registro y sus campos
/*
$sql="SELECT Name,Continent FROM country LIMIT 0,10";
if($result=$pdo->query($sql)){
	while($row=$result->fetch()){
		echo $row["Name"]."-->".$row["Continent"]."<br>\n";
	}
}
else{
	echo "ERROR:No fue posible ejecutar $sql.".print_r($pdo->errorInfo());
}
//cierra conexión
unset($pdo);*/
?>