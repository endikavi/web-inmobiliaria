<?PHP

function verificar_email($email) {
    
    if(preg_match('/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9À-ž]{1,3}\.[0-9À-ž]{1,3}\.[0-9À-ž]{1,3}\.[0-9À-ž]{1,3}])|(([a-zA-ZÀ-ž\-0-9]+\.)+[a-zA-ZÀ-ž]{2,3}))$/',$email)){
        
        return true;
        
    }
    
    return false;
    
}

function verificar_username($username) {
    
    if(preg_match("/(?=^[A-z0-9À-ž]+$).{3,15}$/",$username)) {
      
        return true;
    
    }
    
    return false;

}

function verificar_password($password) {
    
    if(preg_match("/(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{8,40}$/",$password)) {
      
        return true;
    
    }
    
  return false;

}

?>