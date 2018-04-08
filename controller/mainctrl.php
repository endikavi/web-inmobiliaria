<?PHP

session_start();

if( !empty( $_POST['key'] ) ) {
     
    $metodo = $_POST['key'];
    $metodo();
    
}else{viewIndex();}

function viewIndex(){
	
    printUserData();
	require ROOT . '/public/head.php';
    require ROOT . '/public/navbar.php';
    require ROOT . '/public/home-content.php';
    require ROOT . '/public/fotter.php';
	
}

function userLog(){
	
	if ( empty($_SESSION['ID'])){

		if ( !empty($_POST['u'])){
    
        	require ROOT . '/models/checkdata.php';
    		require ROOT . '/models/adduser.php';
    
		}

		if ( empty($_POST['u'])){
        
        	require ROOT . '/models/checkdata.php';
    		require ROOT . '/models/checkuser.php';

		}
		
	}
	
	viewIndex();
	
}

function PropertyLog(){

	if ( !empty($_POST['newProperty'])){
    
    	require ROOT . '/models/addproperty.php';
    
	}

	if ( !empty($_POST['propertyID'])){
        
        require ROOT . '/models/removeproperty.php';

	}
}

function NoticeLog(){

	if ( !empty($_POST['newNotice'])){
    
    	require ROOT . '/models/addnotice.php';
    
	}

	if ( !empty($_POST['noticeID'])){
        
        require ROOT . '/models/removenotice.php';

	}
}

function printUserData(){

	if ( !empty($_SESSION['ID'])){
	
		print ("<span id='Username' Style='display:none;'>'" . $_SESSION['USER'] . "'</span>");
		print ("<span id='Userpri' Style='display:none;'>" . $_SESSION['ADMIN'] . "</span>");
	
	}
	
}

function userExit(){
	
	unset($_SESSION['ID']);
    unset($_SESSION['USER']);
    unset($_SESSION['ADMIN']);
    session_destroy();
	header("Location: /inmobiliaria");
		
}

?>