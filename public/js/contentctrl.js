

$('#GalleryPro').click(ViewGalleryPro)

function ViewGalleryPro(){
	
	localStorage.setItem ("Page",1);  
	
	$('#contenido').empty();
	
	$('<br><br><div class="row"> <div class="col-lg-8"> <h1 class="page-header">Galeria <small>Inmuebles</small> </h1> </div><div class="col-lg-4"><button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseBusqueda" aria-expanded="false" > <h3>Busqueda avanzada</h3> </button></div></div><div class="row"> <div class="col-lg-12"><div class="collapse" id="collapseBusqueda"> <br><div class="card card-body"> <div class="row"><div class="col-md-2"><button class="btn btn-info" type="button" id="EmpezarBusqueda" aria-expanded="false" > <h3>Buscar</h3> </button></div><div class="col-md-2"><p>Tipo:</p><label for="tipo" class="sr-only">Tipo:</label> <select name="tipo" id="tipo" class="form-control medio" ><option value="local">Local</option><option value="tierras">Tierras</option><option value="apartamento">Apartamento</option><option value="chalet">Chalet</option><option value="Nave industrial">Nave industrial</option><option value="parcela">Parcela</option></select><p>Situacion:</p><label for="situacion" class="sr-only">Situación:</label> <select type="text" name="situacion" id="situacion" class="form-control medio" placeholder="Situacion..." ><option value="venta">Venta</option><option value="alquiler">Alquiler</option></select></div><div class="col-md-2"><p>Provincia:</p><label for="provincia" class="sr-only">Provincia:</label> <select name="provincia" id="provincia" class="form-control medio" placeholder="Provincia" busqueda="1"><option value="alava">Álava</option><option value="albacete">Albacete</option><option value="alicante">Alicante/Alacant</option><option value="almeria">Almería</option><option value="asturias">Asturias</option><option value="avila">Ávila</option><option value="badajoz">Badajoz</option><option value="barcelona">Barcelona</option><option value="burgos">Burgos</option><option value="caceres">Cáceres</option><option value="cadiz">Cádiz</option><option value="cantabria">Cantabria</option><option value="castellon">Castellón/Castelló</option><option value="ceuta">Ceuta</option><option value="ciudadreal">Ciudad Real</option><option value="cordoba">Córdoba</option><option value="cuenca">Cuenca</option><option value="girona">Girona</option><option value="laspalmas">Las Palmas</option><option value="granada">Granada</option><option value="guadalajara">Guadalajara</option><option value="guipuzcoa">Guipúzcoa</option><option value="huelva">Huelva</option><option value="huesca">Huesca</option><option value="illesbalears">Illes Balears</option><option value="jaen">Jaén</option><option value="acoruña">A Coruña</option><option value="larioja">La Rioja</option><option value="leon">León</option><option value="lleida">Lleida</option><option value="lugo">Lugo</option><option value="madrid">Madrid</option><option value="malaga">Málaga</option><option value="melilla">Melilla</option><option value="murcia">Murcia</option><option value="navarra">Navarra</option><option value="ourense">Ourense</option><option value="palencia">Palencia</option><option value="pontevedra">Pontevedra</option><option value="salamanca">Salamanca</option><option value="segovia">Segovia</option><option value="sevilla">Sevilla</option><option value="soria">Soria</option><option value="tarragona">Tarragona</option><option value="santacruztenerife">Santa Cruz de Tenerife</option><option value="teruel">Teruel</option><option value="toledo">Toledo</option><option value="valencia">Valencia/Valéncia</option><option value="valladolid">Valladolid</option><option value="vizcaya">Vizcaya</option><option value="zamora">Zamora</option><option value="zaragoza">Zaragoza</option></select><p>Ciudad:</p><label for="ciudad" class="sr-only">Ciudad:</label> <input default="0" type="text" name="ciudad" id="ciudad" class="form-control medio" placeholder="Ciudad..." busqueda="1" > </div><div class="col-md-2"><p>Baños:</p><label for="baños" class="sr-only">baños:</label> <input type="number" name="baños" id="baños" class="form-control peque" placeholder="0" min="0" busqueda="1"> <p>Habitaciones:</p><label for="habitaciones" class="sr-only">habitaciones:</label> <input type="number" default="0" name="habitaciones" id="habitaciones" class="form-control peque" placeholder="0" min="0" busqueda="1" > </div><div class="col-md-2"><p>Salon:</p><label for="baños" class="sr-only">Salon:</label> <input type="number" name="salon" id="salon" class="form-control peque" placeholder="0" min="0" busqueda="1"> <p>cocina:</p><label for="habitaciones" class="sr-only">cocina:</label> <input type="number" default="0" name="cocina" id="cocina" class="form-control peque" placeholder="0" min="0" busqueda="1" > </div></div></div></div></div></div><hr><div id="galleryContent" > </div>').appendTo('#contenido');
	
	$('#EmpezarBusqueda').click(function() {
		
		localStorage.setItem ("Page",1);  
		
		var filtredInmuebles = inmuebles.slice();
		
		filtredInmuebles = checkCity($("#ciudad").val(),filtredInmuebles);
		
		filtredInmuebles = checkPro($("#provincia").val(),filtredInmuebles);
		
		filtredInmuebles = checkType($("#tipo").val(),filtredInmuebles);
		
		filtredInmuebles = checkSit($("#situacion").val(),filtredInmuebles);
		
		filtredInmuebles = checkBaVal($("#baños").val(),filtredInmuebles);
		
		filtredInmuebles = checkSaVal($("#salon").val(),filtredInmuebles);
		
		filtredInmuebles = checkCoVal($("#cocina").val(),filtredInmuebles);
		
		filtredInmuebles = checkHaVal($("#habitaciones").val(),filtredInmuebles);
		
		filtredInmuebles.sort(function(a, b) {
  			return a.fecha - b.fecha;
		});
		
		fillGalleryPro(filtredInmuebles);
	
	});
	
	fillGalleryPro(inmuebles);
	
}

$('#GalleryNot').click(ViewGalleryNot)

function ViewGalleryNot(){
	
	$('#contenido').empty();
	
	$('<br><br><div class="row"> <div class="col-lg-12"> <h1 class="page-header">Galeria <small>Noticias</small> </h1> </div></div><hr>').appendTo('#contenido');
	
	fillGalleryNot();
	
}

$('#GalleryUser').click(ViewGalleryUser)

function ViewGalleryUser(){
	
	$('#contenido').empty();
	
	$('<br><br><div class="row"> <div class="col-lg-12"> <h1 class="page-header">Galeria <small>Usuarios</small> </h1> </div></div><hr><div class="row" id="galleryContent" > </div>').appendTo('#contenido');
	
	fillGalleryUser(usuarios);
	
}

function fillGalleryPro (data){ 
	
	$('#galleryContent').empty();
    
    $('.easyPaginateNav').empty();
	
	data.map((element , index) => {
	
		var GalleryElement = '<span><div class="row"> <div class="col-md-3"> <a href="#"> <img class="col-md-12" src="' + element.imagenpri + '" alt=""> </a> </div><div class="col-md-6"> <h3>' + element.tipo + ' en ' + element.ciudad + '<small> ' + element.metroscuadrados + 'm² / ' + element.valor + '&#8364;</small></h3> <h4>' + element.calle + '</h4> <br><button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseDescripcion' + index + '" aria-expanded="false" aria-controls="collapseExample"> <h4>Descripcion</h4> </button> <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseHabitaciones' + index + '" aria-expanded="false" aria-controls="collapseExample"> <h4>Detalles</h4> </button> <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExtra' + index + '" aria-expanded="false" aria-controls="collapseExample"> <h4>Extras</h4> </button> </div><div class="col-md-3" id="opciones' + element.id_inmueble + '"> </div><div class="col-md-12"> <div class="collapse" id="collapseDescripcion' + index + '"> <br><div class="card card-body"> <p>' + element.descripcion + '</p></div></div><div class="collapse" id="collapseHabitaciones' + index + '"> <br><div class="card card-body"> <div class="row"> <div class="col-md-3"><ul> <li>Dormitorio: ' + checkinf(element.habitaciones) + '</li><li>Baño: ' + checkinf(element.bano) + '</li><li>Jardin: ' + checkinf(element.jardin) + '</li><li>Terraza: ' + checkinf(element.terraza) + '</li></div><div class="col-md-3"><li>Balcon: ' + checkinf(element.balcon) + '</li><li>Patio: ' + checkinf(element.patio) + '</li><li>Piscina: ' + checkinf(element.piscina) + '</li><li>Garaje: ' + checkinf(element.garaje) + '</li></div><div class="col-md-3"><li>Ascensor: ' + checkinf(element.ascensor) + '</li><li>Pisos: ' + checkinf(element.pisos) + '</li><li>Cocina: ' + checkinf(element.cocina) + '</li><li>Sotano: ' + checkinf(element.sotano) + '</li></div><div class="col-md-3"><li>Desvan: ' + checkinf(element.desvan) + '</li><li>Salon: ' + checkinf(element.salon) + '</li></ul></div></div> </div></div><div class="collapse" id="collapseExtra' + index + '"> <br><div class="card card-body"> <ul> <li>Acceso minusvalidos: ' + checkinf(element.accesominusvalidos) + '</li><li>Conserje: ' + checkinf(element.conserje) + '</li><li>Zona comunitaria: ' + checkinf(element.zonacomunitaria) + '</li><li>Seguridad: ' + checkinf(element.seguridad) + '</li></ul> </div></div></div></div><hr></span>';
		
		var GalleryElementDeleteBtn = '<button class="btn btn-danger" type="button" id="DeletePro" pro="' + element.id_inmueble + '" > <h3>Eliminar</h3> </button><hr>';
		
		var GalleryElementFavoriteBtn = '<button class="btn btn-warning" type="button" id="FavoritePro" pro="' + element.id_inmueble + '" > <h1>&#9829;</h1> </button>';
		
		$(GalleryElement).appendTo('#galleryContent');
		
		if(UserData[1] == 1){
			
			$(GalleryElementDeleteBtn).appendTo('#opciones' + element.id_inmueble);
			
		}
		
		$(GalleryElementFavoriteBtn).appendTo('#opciones' + element.id_inmueble);
		
	});
	
	paginador();
    
    $("#navbar").click(function() {
    
    $("button").click(function() {
		
		if($(this).attr("id") == "DeletePro"){
			
			console.log($(this).attr("pro"));
			PropertyRemove($(this).attr("pro"));
			var index = inmuebles.findIndex(i => i.id_inmueble === ($(this).attr("pro")));
			inmuebles.splice(index, 1);
			fillGalleryPro (inmuebles);
		}
		
		if($(this).attr("id") == "FavoritePro"){
			
			console.log($(this).attr("pro"));
			
		}
	
	});
    
    });
        
    $("button").click(function() {
		
		if($(this).attr("id") == "DeletePro"){
			
			console.log($(this).attr("pro"));
			PropertyRemove($(this).attr("pro"));
			var index = inmuebles.findIndex(i => i.id_inmueble === ($(this).attr("pro")));
			inmuebles.splice(index, 1);
			fillGalleryPro (inmuebles);
		}
		
		if($(this).attr("id") == "FavoritePro"){
			
			console.log($(this).attr("pro"));
			
		}
	
	});
	
}

function fillGalleryNot (){
	
	noticias.map(element => {
	
		var GalleryElement = '';
		
		$(GalleryElement).appendTo('#contenido');
		
	});
	
}

function fillGalleryUser (data){
    
    $('#galleryContent').empty();
	
	data.map(element => {
	
		var GalleryElement = '<div class="col-md-3"><p> Usuario: ' + element.nombre + '</p><p> ID: ' + element.id_usuario + '</p><p> Administrador: ' + element.admin + '</p><p> Email: ' + element.email + '</p><div id="del' + element.id_usuario + '"></div></div><hr>';
        
        var GalleryElementDeleteBtn = '<button class="btn btn-danger" type="button" id="DeleteUser" pro="' + element.id_usuario + '" > <h3>Eliminar</h3> </button><hr>';
		
		$(GalleryElement).appendTo('#galleryContent');
        $(GalleryElementDeleteBtn).appendTo('#del' + element.id_usuario);
		
	});
    
    $("button").click(function() {
		
		if($(this).attr("id") == "DeleteUser"){
			
			console.log($(this).attr("pro"));
			UserRemove($(this).attr("pro"));
			var index = usuarios.findIndex(i => i.id_usuario === ($(this).attr("pro")));
			usuarios.splice(index, 1);
			fillGalleryUser (usuarios);
		}
    })
}

function checkinf(info){
	
	if(info == 0 || info === undefined){return "No"}
	if(info == 1){return "Si"}
	if(info > 1){return info}
	
}

$('#NewProForm').click(ViewNewProForm)

function ViewNewProForm(){
	
	$('#contenido').empty();
	
	$('<br><br><div class="row"> <div class="col-lg-12"> <h1 class="page-header">Añadir <small>Inmueble</small> </h1> </div></div><hr>').appendTo('#contenido');
	
	$('<br><form enctype="multipart/form-data" method="post" action="/inmobiliaria/models/addproperty.php"><div class="row"><div class="col-md-12"><button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapsePrincipales" aria-expanded="false" aria-controls="collapseExample"><h2>Datos principales</h2></button><div class="collapse" id="collapsePrincipales"><br><div class="card card-body"><div class="row"><div class="col-md-4"><p>Tipo:</p><label for="tipo" class="sr-only">Tipo:</label> <select name="t" class="form-control medio" required ><option value="local">Local</option><option value="tierras">Tierras</option><option value="apartamento">Apartamento</option><option value="Nave industrial">Nave industrial</option><option value="chalet">Chalet</option><option value="parcela">Parcela</option></select><p>Situacion:</p><label for="situacion" class="sr-only">Situación:</label> <select type="text" name="si" id="situacion" class="form-control medio" placeholder="Situacion..." required ><option value="venta">Venta</option><option value="alquiler">Alquiler</option></select></div><div class="col-md-4"><p>Metros cuadrados:</p><label for="metros" class="sr-only">metros cuadrados:</label> <input type="number" name="m" id="metros" class="form-control peque" placeholder="0" min="0" value="0" max="99999" required > <p>Valoración:</p><label for="precio" class="sr-only">precio:</label> <input type="number" value="0" name="pr" id="precio" class="form-control peque" placeholder="0" min="0" required > </div><div class="col-md-4"><p>Categoria:</p><label for="categoria" value="0" class="sr-only">categoria:</label> <input type="number" name="cat" id="categoria" class="form-control peque" placeholder="0" min="0" max="6" required > <p>Dueño:</p><label for="pertenencia" value="0" class="sr-only">pertenencia:</label> <input type="text" name="pe" id="pertenencia" class="form-control medio" placeholder="Dueño..." required > </div></div></div></div></div></div><div class="row"><div class="col-md-12"><hr><button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseLocalizacion" aria-expanded="false" aria-controls="collapseExample"><h2>Localización</h2></button><div class="collapse" id="collapseLocalizacion"><br><div class="card card-body"><div class="row"><div class="col-md-6"><p>Provincia:</p><label for="provincia" class="sr-only">Provincia:</label> <select name="p" id="provincia" class="form-control medio" placeholder="Provincia" required ><option value="alava">Álava</option><option value="albacete">Albacete</option><option value="alicante">Alicante/Alacant</option><option value="almeria">Almería</option><option value="asturias">Asturias</option><option value="avila">Ávila</option><option value="badajoz">Badajoz</option><option value="barcelona">Barcelona</option><option value="burgos">Burgos</option><option value="caceres">Cáceres</option><option value="cadiz">Cádiz</option><option value="cantabria">Cantabria</option><option value="castellon">Castellón/Castelló</option><option value="ceuta">Ceuta</option><option value="ciudadreal">Ciudad Real</option><option value="cordoba">Córdoba</option><option value="cuenca">Cuenca</option><option value="girona">Girona</option><option value="laspalmas">Las Palmas</option><option value="granada">Granada</option><option value="guadalajara">Guadalajara</option><option value="guipuzcoa">Guipúzcoa</option><option value="huelva">Huelva</option><option value="huesca">Huesca</option><option value="illesbalears">Illes Balears</option><option value="jaen">Jaén</option><option value="acoruña">A Coruña</option><option value="larioja">La Rioja</option><option value="leon">León</option><option value="lleida">Lleida</option><option value="lugo">Lugo</option><option value="madrid">Madrid</option><option value="malaga">Málaga</option><option value="melilla">Melilla</option><option value="murcia">Murcia</option><option value="navarra">Navarra</option><option value="ourense">Ourense</option><option value="palencia">Palencia</option><option value="pontevedra">Pontevedra</option><option value="salamanca">Salamanca</option><option value="segovia">Segovia</option><option value="sevilla">Sevilla</option><option value="soria">Soria</option><option value="tarragona">Tarragona</option><option value="santacruztenerife">Santa Cruz de Tenerife</option><option value="teruel">Teruel</option><option value="toledo">Toledo</option><option value="valencia">Valencia/Valéncia</option><option value="valladolid">Valladolid</option><option value="vizcaya">Vizcaya</option><option value="zamora">Zamora</option><option value="zaragoza">Zaragoza</option></select><p>Ciudad:</p><label for="ciudad" class="sr-only">Ciudad:</label> <input value="" type="text" name="ci" id="ciudad" class="form-control medio" placeholder="Ciudad..." required > </div><div class="col-md-6"><p>Calle:</p><label for="calle" class="sr-only">Calle:</label> <input value="" type="text" name="ca" id="calle" class="form-control medio" placeholder="Calle..." required > <p>Portal y Piso:</p><label for="portal" class="sr-only">Portal:</label> <input value="" type="text" name="po" id="portal" class="form-control medio" placeholder="portal y piso..." required > </div></div></div></div></div></div><div class="row"><div class="col-md-12"><hr><button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseAñadidos" aria-expanded="false" aria-controls="collapseExample"><h2>Añadidos</h2></button><div class="collapse" id="collapseAñadidos"><br><div class="card card-body"><div class="row"><div class="col-md-2"><p>Conserje:</p><label for="conserje" class="sr-only">conserje:</label> <input type="number" name="co" value="0" id="conserje" class="form-control peque" placeholder="0" ><p>Seguridad:</p><label for="seguridad" class="sr-only">seguridad:</label> <input type="number" name="se" value="0" id="seguridad" class="form-control peque" placeholder="0" ><p>Jardin:</p><label for="jardin" class="sr-only">jardin:</label> <input type="number" name="ja" value="0" id="jardin" class="form-control peque" placeholder="0" ><p>Terraza:</p><label for="tipo" class="sr-only">terraza:</label> <input type="number" name="te" value="0" class="form-control peque" placeholder="0" ></div><div class="col-md-2"><p>Balcon:</p><label for="tipo" class="sr-only">balcon:</label> <input type="number" name="ba" value="0" class="form-control peque" placeholder="0" ><p>Patio:</p><label for="tipo" class="sr-only">patio:</label> <input type="number" name="pa" value="0" class="form-control peque" placeholder="0" ><p>Piscina:</p><label for="tipo" class="sr-only">piscina:</label> <input type="number" name="pi" value="0" class="form-control peque" placeholder="0" ><p>Garaje:</p><label for="tipo" class="sr-only">garaje:</label> <input type="number" name="ga" value="0" class="form-control peque" placeholder="0" ></div><div class="col-md-2"><p>Ascensor:</p><label for="tipo" class="sr-only">ascensor:</label> <input type="number" name="as" value="0" class="form-control peque" placeholder="0" ><p>Zona comun:</p><label for="zona" class="sr-only">zona comunitaria:</label> <input type="number" name="zo" value="0"id="zona" class="form-control peque" placeholder="0" ><p>Baños:</p><label for="baños" class="sr-only">baños:</label> <input type="number" name="ba" id="baños" class="form-control peque" placeholder="0" value="0" min="0" > <p>Habitaciones:</p><label for="habitaciones" class="sr-only">habitaciones:</label> <input type="number" value="0" name="ha" id="habitaciones" class="form-control peque" placeholder="0" min="0" > </div><div class="col-md-3"><p>Plantas:</p><label for="plantas" class="sr-only">plantas:</label> <input type="number" name="pl" value="0" id="plantas" class="form-control peque" placeholder="0" > <p>Cocina:</p><label for="coci" class="sr-only">plantas:</label> <input type="number" name="coci" value="0" id="coci" class="form-control peque" placeholder="0" > <p>Sotano:</p><label for="sota" class="sr-only">Sotano:</label> <input type="number" name="sota" value="0" id="sota" class="form-control peque" placeholder="0" > <p>Desvan:</p><label for="Desv" class="sr-only">Desvan:</label> <input type="number" name="Desv" value="0" id="Desv" class="form-control peque" placeholder="0" > </div><div class="col-md-3"><p>Acceso a minusvalidos:</p><label for="acceso" class="sr-only">acceso minusvalidos:</label> <input type="number" name="ac" id="acceso" value="0" class="form-control peque" placeholder="0" ><p>Salon:</p><label for="Sal" class="sr-only">Salon:</label> <input type="number" value="0" name="Sal" id="Sal" class="form-control peque" placeholder="0" ></div></div></div></div></div></div><div class="row"><div class="col-md-12"><hr><button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseDescripcion" aria-expanded="false" aria-controls="collapseExample"><h2>Descripción</h2></button><div class="collapse" id="collapseDescripcion"><br><div class="card card-body"> <label for="desc" class="sr-only">Descripción:</label> <input type="text" name="de" id="desc" class="form-control grande" placeholder="Descripción..." > </div></div></div></div><div class="row"><div class="col-md-12"><hr><button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseImagenes" aria-expanded="false" aria-controls="collapseExample"><h2>Imagenes</h2></button><div class="collapse" id="collapseImagenes"><br><div class="card card-body"><div class="row"><div class="col-md-12"><input type="file" name="file[]" id="file" class="inputfile" multiple/> <label for="file">Subir fotos</label> </div></div></div></div><hr></div></div><div class="row"><div class="col-md-5"></div><div class="col-md-2"><button class="btn btn-success" type="submit"><h2>Añadir</h2></button></div><div class="col-md-5"></div></div></form>').appendTo('#contenido');
	
}

function fillHomeContent(){
	
	var content = noticias.concat(inmuebles);
	
	content.sort(function(a, b) {
  		return a.fecha - b.fecha;
	});
	
	content.sort(function(a, b) {
  		return a.vistas - b.vistas;
	});
	
}

function checkBaVal(inputVal,arrayVal) {
	
	  	return arrayVal.filter(function(el){
		
			return inputVal <= el.banos;
			
		})
		
}

function checkSaVal(inputVal,arrayVal) {
	
	  	return arrayVal.filter(function(el){
		
			return inputVal <= el.salon;
			
		})
		
}

function checkCoVal(inputVal,arrayVal) {
	
	  	return arrayVal.filter(function(el){
		
			return inputVal <= el.cocina;
			
		})
		
}

function checkHaVal(inputVal,arrayVal) {
	
	  	return arrayVal.filter(function(el){
		
			return inputVal <= el.habitaciones;
			
		})
		
}

function checkCity(inputVal,arrayVal) {
			
  	return arrayVal.filter(function(el){
		
		return el.ciudad.toLowerCase().indexOf(inputVal.toLowerCase()) > -1;
		
	})
		
}

function checkPro(inputVal,arrayVal) {
			
  	return arrayVal.filter(function(el){
		
		return el.provincia.toLowerCase().indexOf(inputVal.toLowerCase()) > -1;
		
	})
		
}

function checkType(inputVal,arrayVal) {
			
  	return arrayVal.filter(function(el){
		
		return el.tipo.toLowerCase().indexOf(inputVal.toLowerCase()) > -1;
		
	})
		
}

function checkSit(inputVal,arrayVal) {
			
  	return arrayVal.filter(function(el){
		
		return el.situacion.toLowerCase().indexOf(inputVal.toLowerCase()) > -1;
		
	})
		
}

function paginador() {
    $('#galleryContent').easyPaginate({
        paginateElement: 'span',
        elementsPerPage: 3,
    });
};
