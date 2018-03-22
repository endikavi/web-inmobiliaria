function llamada(data, type, url, dataType) {
    $.ajax({
            data: data,
            type: type,
            dataType: dataType,
            url: url,
        })
        .done(function (data, textStatus, jqXHR) {
            console.log("La solicitud se ha completado correctamente.");
        
            if (type == "GET") {
                obj = data;
                console.log(obj);
            }
            console.log(data);
          return true;
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
        return false;
        })
        .always(function (jqXHR, data) {
          console.log(data);
          console.log("Fin de la llamada");
        });
};
llamada('', "GET", "/inmobiliaria/lib/data.php", "text");