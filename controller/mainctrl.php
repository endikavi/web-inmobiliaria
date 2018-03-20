<?PHP

if (! defined("ROOT")) {
    define("ROOT",'C:/xampp/htdocs/inmobiliaria');
}

if( !empty( $_POST['key'] ) ) {
     
    $metodo = $_POST['key'];
    $metodo();
    
}else{viewIndex();}

function viewIndex(){
    
    require ROOT . '/public/navbar.php';
    require ROOT . '/public/slider.php';
    require ROOT . '/public/main-content.php';
    
}

function viewPropertyGallery(){
    
    require ROOT . '/public/navbar.php';
    require ROOT . '/views/property-gallery.php';
    
}

function viewNoticeGallery(){
    
    require ROOT . '/public/navbar.php';
    require ROOT . '/views/notice-gallery.php';
    
}

function viewUserGallery(){
    
    require ROOT . '/public/navbar.php';
    require ROOT . '/views/notice-gallery.php';
    
}

function userLog(){

	if ( !empty($_POST['e'])){
    
        require ROOT . '/models/checkdata.php';
    	require ROOT . '/models/adduser.php';
    
	}

	if ( empty($_POST['e'])){
        
        require ROOT . '/models/checkdata.php';
    	require ROOT . '/models/password-compare.php';

	}
}



?>