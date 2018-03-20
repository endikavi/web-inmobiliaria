<?php

if ( !empty($_POST['e']) && !empty($_POST['u']) && !empty($_POST['p'])){
    if (verificar_email($_POST['e']) && verificar_username($_POST['u']) && verificar_password($_POST['p'])){
        
            $email = $_POST['e'];
            $username = $_POST['u'];   
            $password = $_POST['p'];
            $id = strlen($email) * strlen($username) - strlen($password) + rand(1,50) * rand (10,2000) . strlen($email);
            require (ROOT . '/models/connection.php');
            
            $coste = 11;

            $salida = password_hash($password, PASSWORD_BCRYPT, ["cost" => $coste]);
            
            $sql="INSERT INTO usuarios (id_usuario,admin,favoritos,nombre,email,contrasena,votos) VALUES ($id,false,' ','$username','$email','$salida',' ')";
            $result=$pdo->exec($sql);
            if($result==false){
	           echo "ERROR:No fue posible ejecutar $sql  ".print_r($pdo->errorInfo());
            }
            else{    
               
                define("USERNAME",$username);
                define("ID",$id);
                require ROOT . '/config/session-config.php';
                viewIndex();
                
            }
            
            unset($pdo);
 
            
    }
}

?>