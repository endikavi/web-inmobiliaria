<?PHP

define("HOST","localhost");
define("DBNAME","inmobiliaria");
define("USER","root");
define("PASS","");
	
	try{
		$pdo=new PDO('mysql:host=localhost;dbname=inmobiliaria','root','');
		}
	catch(PDOException $e){
		die("ERROR:No fue posible conectarse ".$e->		getMessage());
	}

    $sqlSer='select * from noticias';

            $querySer=$pdo->prepare($sqlSer);
            $querySer->execute();
                
            if($querySer==false){
                
	           echo "ERROR:No fue posible ejecutar $sqlSer  ".print_r($pdo->errorInfo());
                
            }
            else{
                
            $result = array ();   
                
            while ($row = $querySer->fetch(PDO::FETCH_ASSOC)){
                
                $result[] = $row;
                
            }
               
			  header('Content-Type: application/json');
              echo json_encode($result);
                
            }
            
            unset($pdo);
    
?>