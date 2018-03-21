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

    $sqlSer='select * from servicios';
    $sqlZo='select * from zonas';
    $sqlIn='select * from inmuebles';
    $sqlVo='select * from votos';

            $querySer=$pdo->prepare($sqlSer);
            $querySer->execute();
            $Ser = $querySer->fetchall();
                
            $queryZo=$pdo->prepare($sqlZo);
            $queryZo->execute();
            $Zo = $queryZo->fetchall();
                
            $queryIn=$pdo->prepare($sqlIn);
            $queryIn->execute();
            $In = ($queryIn->fetchall());

            $queryVo=$pdo->prepare($sqlVo);
            $queryVo->execute();
            $Vo = ($queryVo->fetchall());

            $result = $Vo+$Zo+$In+$Ser;

            print_r ($result);
            print "<br><br>";
            print_r (array_values($result));
            print "<br><br>";

            var_dump (array_values($result));
            print "<br><br>";
                
            if($result==false){
                
	           echo "ERROR:No fue posible ejecutar $sql  ".print_r($pdo->errorInfo());
                
            }
            else{
                
              print "<br><br>";
              var_dump (json_encode($result));
                
            }
            
            unset($pdo);
    
?>