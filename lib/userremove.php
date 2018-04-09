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
	

	$pdo->beginTransaction();

    $query = $pdo->prepare('DELETE FROM usuarios WHERE id_usuario = ?');
    $query->execute(array($_GET['ID']));

    $pdo->commit();    	

			if($query==false){
                
	           echo "ERROR:No fue posible ejecutar $sql  ".print_r($pdo->errorInfo());
                
            }
            else{
               
			  header('Content-Type: application/text');
              echo "Eliminado " . $_GET['ID'];
                
            }
            
            unset($pdo);
    
?>