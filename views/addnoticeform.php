<!DOCTYPE html>
<html>
    <head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="formulario.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>                  
    </head>
    <body>
    
        <div id="addPropertyForm">
        
        <form enctype="multipart/form-data" method="post" action="/inmobiliaria/controller/addproperty.php">
        
        <div style="width:800px;margin:auto;text-align:center;" >
        <h1>Añadir inmueble al catalogo</h1>
        
        <div class="box principal">
            <h2>Datos principales</h2>
            <div class="sub">
            <p>Tipo:</p>
        <label for="tipo" class="sr-only">Tipo:</label>
        <select name="t" id="tipo" class="form-control medio" required >
        
        <option value="local">Local</option>
        
        <option value="tierras">Tierras</option>

        <option value="apartamento">Apartamento</option>

        <option value="chalet">Chalet</option>
        
        <option value="parcela">Parcela</option>

        </select>
        
        <p>Situacion:</p>
        <label for="situacion" class="sr-only">Situación:</label>
        <select type="text" name="si" id="situacion" class="form-control medio" placeholder="Situacion..." required >
        
        <option value="venta">Venta</option>
        
        <option value="alquiler">Alquiler</option>
        
        </select>
            </div>
        <div class="sub">
        <p>Metros cuadrados:</p>
        <label for="metros" class="sr-only">metros cuadrados:</label>
        <input type="number" name="m" id="metros" class="form-control peque" placeholder="0" min="0" max="99999" required >
        
        <p>Valoración:</p>
        <label for="precio" class="sr-only">precio:</label>
        <input type="number" name="pr" id="precio" class="form-control peque" placeholder="0" min="0" required >
        </div>
        <div class="sub">
        <p>Categoria:</p>
        <label for="categoria" class="sr-only">categoria:</label>
        <input type="number" name="cat" id="categoria" class="form-control peque" placeholder="0" min="0" max="6" required >
        
        <p>Dueño:</p>    
        <label for="pertenencia" class="sr-only">pertenencia:</label>
        <input type="text" name="pe" id="pertenencia" class="form-control medio" placeholder="Dueño..." required >
        </div>  
            </div>
        
        <div class="box localizacion">
        <h2>localización</h2>
        
        <div class="sub">
        <p>Provincia:</p>
        <label for="provincia" class="sr-only">Provincia:</label>
    <select name="p" id="provincia" class="form-control medio" placeholder="Provincia" required >
 <option value='alava'>Álava</option>
 <option value='albacete'>Albacete</option>
 <option value='alicante'>Alicante/Alacant</option>
 <option value='almeria'>Almería</option>
 <option value='asturias'>Asturias</option>
 <option value='avila'>Ávila</option>
 <option value='badajoz'>Badajoz</option>
 <option value='barcelona'>Barcelona</option>
 <option value='burgos'>Burgos</option>
 <option value='caceres'>Cáceres</option>
 <option value='cadiz'>Cádiz</option>
 <option value='cantabria'>Cantabria</option>
 <option value='castellon'>Castellón/Castelló</option>
 <option value='ceuta'>Ceuta</option>
 <option value='ciudadreal'>Ciudad Real</option>
 <option value='cordoba'>Córdoba</option>
 <option value='cuenca'>Cuenca</option>
 <option value='girona'>Girona</option>
 <option value='laspalmas'>Las Palmas</option>
 <option value='granada'>Granada</option>
 <option value='guadalajara'>Guadalajara</option>
 <option value='guipuzcoa'>Guipúzcoa</option>
 <option value='huelva'>Huelva</option>
 <option value='huesca'>Huesca</option>
 <option value='illesbalears'>Illes Balears</option>
 <option value='jaen'>Jaén</option>
 <option value='acoruña'>A Coruña</option>
 <option value='larioja'>La Rioja</option>
 <option value='leon'>León</option>
 <option value='lleida'>Lleida</option>
 <option value='lugo'>Lugo</option>
 <option value='madrid'>Madrid</option>
 <option value='malaga'>Málaga</option>
 <option value='melilla'>Melilla</option>
 <option value='murcia'>Murcia</option>
 <option value='navarra'>Navarra</option>
 <option value='ourense'>Ourense</option>
 <option value='palencia'>Palencia</option>
 <option value='pontevedra'>Pontevedra</option>
 <option value='salamanca'>Salamanca</option>
 <option value='segovia'>Segovia</option>
 <option value='sevilla'>Sevilla</option>
 <option value='soria'>Soria</option>
 <option value='tarragona'>Tarragona</option>
 <option value='santacruztenerife'>Santa Cruz de Tenerife</option>
 <option value='teruel'>Teruel</option>
 <option value='toledo'>Toledo</option>
 <option value='valencia'>Valencia/Valéncia</option>
 <option value='valladolid'>Valladolid</option>
 <option value='vizcaya'>Vizcaya</option>
 <option value='zamora'>Zamora</option>
 <option value='zaragoza'>Zaragoza</option>

    </select>
        
        <p>Ciudad:</p>
        <label for="ciudad" class="sr-only">Ciudad:</label>
        <input type="text" name="ci" id="ciudad" class="form-control medio" placeholder="Ciudad..." required >
            </div>
            
        <div class="sub">
        <p>Calle:</p>
        <label for="calle" class="sr-only">Calle:</label>
        <input type="text" name="ca" id="calle" class="form-control medio" placeholder="Calle..." required >
        
        <p>Portal y Piso:</p>
        <label for="portal" class="sr-only">Portal:</label>
        <input type="text" name="po" id="portal" class="form-control medio" placeholder="portal y piso..." required >
        
            </div>
            </div>
           
           <div class="box Añadidos">
           
        <h2>Añadidos</h2>
        
        <div class="sub">
        <p>Conserje:</p>
        <label for="conserje" class="sr-only">conserje:</label>
        <select name="co" id="conserje" class="form-control peque" placeholder="conserje" >
        <option value="false">No</option>
        <option value="true">Si</option>
        </select>
        
        <p>Seguridad:</p>
        <label for="seguridad" class="sr-only">seguridad:</label>
        <select name="se" id="seguridad" class="form-control peque" placeholder="seguridad" >
        <option value="false">No</option>
        <option value="true">Si</option>
        </select>
        </div>
    
        <div class="sub">
        <p>Jardin:</p>
        <label for="jardin" class="sr-only">jardin:</label>
        <select  name="ja" id="jardin" class="form-control peque" placeholder="jardin" >
        <option value="false">No</option>
        <option value="true">Si</option>
        </select>
        
        <p>Terraza:</p>
        <label for="tipo" class="sr-only">terraza:</label>
        <select type="text" name="te" id="tipo" class="form-control peque" placeholder="tipo" >
        <option value="false">No</option>
        <option value="true">Si</option>
        </select>
        
        </div>
        <div class="sub">
        <p>Balcon:</p>
        <label for="tipo" class="sr-only">balcon:</label>
        <select type="text" name="ba" id="tipo" class="form-control peque" placeholder="tipo" >
        <option value="false">No</option>
        <option value="true">Si</option>
        </select>
        
        <p>Patio:</p>
        <label for="tipo" class="sr-only">patio:</label>
        <select type="text" name="pa" id="tipo" class="form-control peque" placeholder="tipo" >
        <option value="false">No</option>
        <option value="true">Si</option>
        </select>
        
        </div>
        <div class="sub">
        <p>Piscina:</p>
        <label for="tipo" class="sr-only">piscina:</label>
        <select type="text" name="pi" id="tipo" class="form-control peque" placeholder="tipo" >
        <option value="false">No</option>
        <option value="true">Si</option>
        </select>
        
        <p>Garaje:</p>
        <label for="tipo" class="sr-only">garaje:</label>
        <select type="text" name="ga" id="tipo" class="form-control peque" placeholder="tipo" >
        <option value="false">No</option>
        <option value="true">Si</option>
        </select>
        
        </div>
        
        <div class="sub">
        
        <p>Ascensor:</p>
        <label for="tipo" class="sr-only">ascensor:</label>
        <select type="text" name="as" id="tipo" class="form-control peque" placeholder="tipo" >
        <option value="false">No</option>
        <option value="true">Si</option>
        </select>
        
        <p>Zona comun:</p>
        <label for="zona" class="sr-only">zona comunitaria:</label>
        <select name="zo" id="zona" class="form-control peque" placeholder="zona" >
        <option value="false">No</option>
        <option value="true">Si</option>
        </select>
        
        </div>
        
                <div class="sub">
        <p>Baños:</p>
        <label for="baños" class="sr-only">baños:</label>
        <input type="number" name="ba" id="baños" class="form-control peque" placeholder="0" min="0"  >
        
        <p>Habitaciones:</p>
        <label for="habitaciones" class="sr-only">habitaciones:</label>
        <input type="number" name="ha" id="habitaciones" class="form-control peque" placeholder="0" min="0"  >
        
        </div>
        
        <div class="sub">
        
                <p>Acceso a minusvalidos:</p>
        <label for="acceso" class="sr-only">acceso minusvalidos:</label>
        <select name="ac" id="acceso" class="form-control peque" placeholder="acceso" >
        <option value="false">No</option>
        <option value="true">Si</option>
        </select>
        
        <p>Plantas:</p>
        <label for="plantas" class="sr-only">plantas:</label>
        <input type="number" name="pl" id="plantas" class="form-control peque" placeholder="0" >
            </div>
                <p>Descripción:</p>
        <label for="desc" class="sr-only">Descripción:</label>
        <input type="text" name="de" id="desc" class="form-control grande" placeholder="Descripción..." >
               
        </div>
           <div class="box fotos"> 
               
            <div class="sub">
            <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
            <input type="file" name="file[]" id="file" class="inputfile"  multiple />
            <label for="file">Subir fotos</label>   
            </div>
            
                
            </div>
            
        </div>
            <button id="enviar" class="btn btn-lg btn-primary btn-block button-enviar" type="submit">Añadir</button>
        </form>
        </div>
        <div id="deletePropertyForm">
        </div>
    
    </body>  
</html>