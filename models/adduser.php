<?php

function verificar_email($email) 
{
  if(preg_match('/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9À-ž]{1,3}\.[0-9À-ž]{1,3}\.[0-9À-ž]{1,3}\.[0-9À-ž]{1,3}])|(([a-zA-ZÀ-ž\-0-9]+\.)+[a-zA-ZÀ-ž]{2,3}))$/',$email))
  {
    return true;
  } 
  return false;
}
function verificar_username($username) 
{
  if(preg_match("/(?=^[A-z0-9À-ž]+$).{3,15}$/",$username))
  {
    return true;
  }
  return false;
}
function verificar_password($password) 
{
  if(preg_match("/(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{8,40}$/",$password))
  {
    return true;
  }
  return false;
}

if ( !empty($_POST['e']) && !empty($_POST['u']) && !empty($_POST['p']) && !empty($_POST['a']) ){
    if (verificar_email($_POST['e']) && verificar_username($_POST['u']) && verificar_password($_POST['p']) && $_POST['a'] === "true"){
        
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
	           require ROOT . '/controller/mainctrl.php';
            }
            //cierra conexión
            unset($pdo);
 
            // password_verify($password ,$salida );
    }else{echo 'datos incorrectos';}
}else{echo 'faltan datos';}

?>