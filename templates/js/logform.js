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