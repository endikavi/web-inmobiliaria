<?PHP

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

    $sql='SELECT * FROM servicios , inmuebles , zonas';
            $result=$pdo->exec($sql);
            if($result==false){
                
	           echo "ERROR:No fue posible ejecutar $sql  ".print_r($pdo->errorInfo());
                
            }
            else{    
               
              echo json_encode($result);
                
            }
            
            unset($pdo);
    
?>