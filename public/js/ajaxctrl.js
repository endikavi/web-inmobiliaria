var inmuebles;
var noticias;
var usuarios;

function llamada(data, type, url, dataType, inf) {
    $.ajax({
		data: data, 
		type: type, 
		dataType: dataType, 
		url: url,
	})
        .done(function (data, textStatus, jqXHR) {
				
        	obj = JSON.parse(JSON.stringify(data));
			console.log(obj);
			if (inf == "inm"){inmuebles = obj}
			if (inf == "not"){noticias = obj}
			if (inf == "use"){usuarios = obj}

        })
        .fail(function (jqXHR, textStatus, errorThrown) {
        console.log("La solicitud a fallado: " + textStatus);
         if (type == "GET") {console.log("No se pudo recibir datos del servidor.");}
        
         if (jqXHR.status == 404){alert('Error,objeto no encontrado.')}
        else if (jqXHR.status == 400){alert('Informacion de envio no valida.!')}
        else if (jqXHR.status == 500){alert('Error en el servidor.')}
        else if (jqXHR.status == 503){alert('Servicio no disponible vuelva a intentarlo mas tarde.')}
        else{alert('Error en la conexion')}
        console.log("ERROR:");
        console.log(jqXHR.status);
        console.log(data);
        })
        .always(function (jqXHR, data) {
		
			if ($('#reciente').length == 1 && $('#popular').length == 1 && inmuebles !== undefined && noticias !== undefined){
	
				console.log('contenidos cargados');
				fillHomeContent();
		
			}
		
        });
};

llamada('', "GET", "/inmobiliaria/lib/propertydata.php", "JSON", "inm");
llamada('', "GET", "/inmobiliaria/lib/noticedata.php", "JSON", "not");
if(UserData[1] == 1){
	llamada('', "GET", "/inmobiliaria/lib/userdata.php", "JSON", "use");
}

function PropertyRemove(id){
	
	var rurl = "/inmobiliaria/lib/propertyremove.php?ID=" + id;
	
	if(UserData[1] == 1){
	
	llamada('', "GET", rurl , "TEXT", "");
		
	}else{console.log("No eres administrador")}

}

function UserRemove(id){
	
	var rurl = "/inmobiliaria/lib/userremove.php?ID=" + id;
	
	if(UserData[1] == 1){
	
	llamada('', "GET", rurl , "TEXT", "");
		
	}else{console.log("No eres administrador")}

}

