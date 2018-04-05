<?php

if (!empty($_POST['e']) && !empty($_POST['p'])){
    if (verificar_email($_POST['e']) && verificar_password($_POST['p'])){
        
            $email = $_POST['e'];  
            $password = $_POST['p'];
		
            require (ROOT . '/models/connection.php');
            
            $sql="SELECT * FROM usuarios";
            $query=$pdo->prepare($sql);
            $query->execute();
		
            if($query==false){
	           echo "ERROR:No fue posible ejecutar $sql  ".print_r($pdo->errorInfo());
            }
            else{       
                
            	while ($row = $query->fetch(PDO::FETCH_ASSOC)){
                
                	if ($row['email'] == $email ){
						
						if ( password_verify($password,$row['contrasena']) == true){
							
							define("USERNAME",$row['nombre']);
                			define("ID",$row['id_usuario']);
							define("ADMIN",$row['admin']);
                			require ROOT . '/config/session-config.php';
							
						}else{print 'Contraseña incorrecta';}
						
					}
                
            	}
                
            }
            
            unset($pdo);
 
            
    }
}

?>