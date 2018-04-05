document.getElementById("Register").addEventListener("click",ViewRegisterForm);  
     
function ViewRegisterForm(){

    document.getElementById('Reset').style.display = 'block';
    document.getElementById('Email').style.display = 'block';
    document.getElementById('Password').style.display = 'block';
    document.getElementById('Username').style.display = 'block';
    document.getElementById('Register').style.display = 'none';
    document.getElementById('Login').style.display = 'none';
    document.getElementById('Submit').style.display = 'block';
       
}
     
document.getElementById("Login").addEventListener("click",ViewLoginForm);

function ViewLoginForm(){
    
    document.getElementById('Reset').style.display = 'block';
    document.getElementById('Password').style.display = 'block';
    document.getElementById('Username').style.display = 'none';
    document.getElementById('Email').style.display = 'block';
    document.getElementById('Register').style.display = 'none';
    document.getElementById('Login').style.display = 'none';
    document.getElementById('Submit').style.display = 'block';
    
}
     
document.getElementById("Reset").addEventListener("click",ViewReset);

function ViewReset(){

    document.getElementById('Reset').style.display = 'none';
    document.getElementById('Email').style.display = 'none';
    document.getElementById('Password').style.display = 'none';
    document.getElementById('Username').style.display = 'none';
    document.getElementById('Email').value = '';
    document.getElementById('Password').value = '';
    document.getElementById('Username').value = '';
    document.getElementById('Register').style.display = 'block';
    document.getElementById('Login').style.display = 'block';
    document.getElementById('Submit').style.display = 'none';
    
}

function ViewUser(){

    document.getElementById('Reset').style.display = 'none';
    document.getElementById('Email').style.display = 'none';
    document.getElementById('Password').style.display = 'none';
    document.getElementById('Username').style.display = 'none';
    document.getElementById('Email').value = '';
    document.getElementById('Password').value = '';
    document.getElementById('Username').value = '';
    document.getElementById('Register').style.display = 'none';
    document.getElementById('Login').style.display = 'none';
    document.getElementById('Submit').style.display = 'none';
	document.getElementById('Exit').style.display = 'block';
	document.getElementById('Admin').style.display = 'none';
    
}

function ViewAdmin(){

    document.getElementById('Reset').style.display = 'none';
    document.getElementById('Email').style.display = 'none';
    document.getElementById('Password').style.display = 'none';
    document.getElementById('Username').style.display = 'none';
    document.getElementById('Email').value = '';
    document.getElementById('Password').value = '';
    document.getElementById('Username').value = '';
    document.getElementById('Register').style.display = 'none';
    document.getElementById('Login').style.display = 'none';
    document.getElementById('Submit').style.display = 'none';
	document.getElementById('Exit').style.display = 'block';
	document.getElementById('Admin').style.display = 'block';
    
}

var UserData = [];

if ($('#Username').length == 1 && $('#Userpri').length == 1 ) {
	
	var admin = $('#Userpri').html();
	var username = $('#Username').html();
	UserData.push(username);
	UserData.push(admin);
	console.log(UserData);
	if(UserData[1] == 0){
		ViewUser();
	}else{
		ViewAdmin();
	}
	$('#UserData').remove();
	
  
}